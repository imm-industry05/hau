package com.app.school.management.system.student;



import com.app.school.management.system.record.Activity;
import com.app.school.management.system.record.ActivityRepository;
import com.app.school.management.system.subject.Subject;
import com.app.school.management.system.subject.SubjectRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class StudentService {
    private final StudentRepository studentRepo;
    private final SubjectRepository subjectRepo;
    private final ActivityRepository activityRepo;



    @Autowired
    public StudentService(StudentRepository studentRepo, SubjectRepository subjectRepo,ActivityRepository activityRepo
                        ) {
        this.studentRepo = studentRepo;
        this.subjectRepo = subjectRepo;
        this.activityRepo = activityRepo;


    }


    public Optional<Student> getStudentInfo(String email){
        Optional<Student> student = studentRepo.findStudentByEmail(email);
        if(student.isPresent()){
            return student;
        }
        return null;

    }

   public String getAuthenticatedStudentEmail(){
       Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
       return authentication.getPrincipal().toString();
   }

   public List<Subject> getAllSubjects(){
        List<Subject> subjects = subjectRepo.findAllSubjects();
        return subjects;
   }




   public void enrollToSubject(Integer subjCode, Long studentId){
        Optional<Student> student=studentRepo.findStudentById(studentId);
        Subject subject = subjectRepo.findSubjectByCode(subjCode);
        student.get().getSubjects().add(subject);
        studentRepo.save(student.get());
   }


   public List<Activity> getAllActivitiesPerSubject(Long studentId, Integer subjCode, String period){
        List<Activity> activities= activityRepo.findActivitiesByStudent(subjCode,period,studentId);
        return activities;

   }



    public double computeGrade(Long studentId, Integer subjCode){
        List<Activity> prelimActivities = this.getAllActivitiesPerSubject(studentId,subjCode,"PRELIMS");
        List<Activity> midtermActivities = this.getAllActivitiesPerSubject(studentId,subjCode,"MIDTERMS");
        List<Activity> finalActivities = this.getAllActivitiesPerSubject(studentId,subjCode,"FINALS");
       ;
        double grade =0;
        double prelimScores = prelimActivities.stream().mapToInt(a->a.getScore()).sum();
        double midtermScores = midtermActivities.stream().mapToInt(a->a.getScore()).sum();
        double finalScores = finalActivities.stream().mapToInt(a->a.getScore()).sum();
        double totalPrelims = prelimActivities.stream().mapToInt(a->a.getTotalItems()).sum();
        double totalMidterms = midtermActivities.stream().mapToInt(a->a.getTotalItems()).sum();
        double totalFinals = finalActivities.stream().mapToInt(a->a.getTotalItems()).sum();

        if(totalFinals!=0||totalPrelims!=0||totalMidterms!=0){
            grade = (prelimScores+midtermScores+finalScores)/(totalPrelims+totalMidterms+totalFinals)*100;

        }
        return grade;
    }






   public double getEquivalent(double grade){
        double eqv =4;
        if(grade<=100&&grade>=99){eqv = 1.0;}
        if(grade<=98&&grade>=96){eqv = 1.25;}
        if(grade<=95&&grade>=93){eqv = 1.50;}
       if(grade<=92&&grade>=90){eqv = 1.75;}
       if(grade<=89&&grade>=87){eqv = 2.00;}
       if(grade<=86&&grade>=84){eqv = 2.25;}
       if(grade<=83&&grade>=81){eqv = 2.50;}
       if(grade<=80&&grade>=78){eqv = 2.75;}
       if(grade<=77&&grade>=75){eqv = 3.00;}
        return eqv;
   }


}
