package com.app.school.management.system.faculty;


import com.app.school.management.system.record.Activity;
import com.app.school.management.system.record.ActivityRepository;
import com.app.school.management.system.student.Student;
import com.app.school.management.system.student.StudentRepository;
import com.app.school.management.system.subject.Subject;
import com.app.school.management.system.subject.SubjectRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Objects;
import java.util.Optional;

@Service
public class FacultyService {

    private final FacultyRepository facultyRepo;
    private final StudentRepository studentRepo;
    private final SubjectRepository subjectRepo;
    private final ActivityRepository activityRepo;



    @Autowired
    public FacultyService(FacultyRepository facultyRepo,
                          StudentRepository studentRepo,
                          SubjectRepository subjectRepo,
                          ActivityRepository activityRepo) {
        this.facultyRepo = facultyRepo;
        this.studentRepo=studentRepo;
        this.subjectRepo = subjectRepo;
        this.activityRepo = activityRepo;



    }

    public Optional<Faculty> getFacultyInfo(String email){
        Optional<Faculty> faculty = facultyRepo.findFacultyByEmail(email);
        if(faculty.isPresent()){
            return faculty;
        }
        return null;

    }
    public String getAuthenticatedFacultyEmail(){
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        return authentication.getPrincipal().toString();
    }
    public List<Student> getStudentsFromSubject(Integer subjCode){
        List<Student> students = studentRepo.findStudentsBySubject(subjCode);
        return students;
    }



    public List<Subject> getSubjectsHandled(){
        Optional<Faculty>  faculty = this.getFacultyInfo(this.getAuthenticatedFacultyEmail());
        List<Subject> subjects =subjectRepo.findSubjectByFaculty(faculty.get().getFacultyId());
        return subjects;
    }

    public void addActivity(Activity activity,Long studentId, Integer subjCode){
        Optional<Student> student = studentRepo.findStudentById(studentId);
        Subject subject = subjectRepo.findSubjectByCode(subjCode);
        activity.setStudent(student.get());
        activity.setSubject(subject);


        activityRepo.save(activity);
    }
    public List<Activity> getActivitiesBySubjectAndPeriod(Integer subjCode, String period){
        List<Activity> activities = activityRepo.findAllActivitiesByCodeAndPeriod(subjCode,period);
        return activities;
    }
    public List<String> getActivityNamesBySubjectAndPeriod(Integer subjCode, String period){
        List<String> activityNames = activityRepo.findAllActivityNamesByCodeAndPeriod(subjCode,period);
        return activityNames;
    }

    public Activity getOneActivity(Integer subjCode, Long studentId, String period,String activityName){
        Activity activity = activityRepo.findOneActivity(subjCode,period, studentId, activityName);
        return  activity;
    }

    public void updateActivity(Long studentId,
                               Integer subjCode,
                               String activityName,
                               String newActivity,
                               Integer score,
                               Integer totalItems,
                               String period,
                               String newPeriod){
        Activity activity = activityRepo.findOneActivity(subjCode,period,studentId,activityName);


        if(activityName!=null&&newActivity!=activityName){
            activityRepo.updateActivityName(subjCode,period,studentId, activityName, newActivity);

        }
        if(score!=null&&!Objects.equals(score,activity.getScore())){
            activityRepo.updateActivityScore(subjCode,score,period,studentId,activityName);
        }
        if(totalItems!=null&&!Objects.equals(totalItems,activity.getTotalItems())){
            activityRepo.updateActivityTotalItems(subjCode,totalItems,period,studentId,activityName);
        }
        if(period!=null&&period!=newPeriod){

            activityRepo.updateActivityPeriod(subjCode,period,studentId,activityName,newPeriod);
        }

    }


    public List<Activity> getAllActivitiesPerSubject(Long studentId, Integer subjCode, String period){
        List<Activity> activities= activityRepo.findAllActivitiesByCodeAndPeriod(subjCode,period);
        return activities;

    }





}
