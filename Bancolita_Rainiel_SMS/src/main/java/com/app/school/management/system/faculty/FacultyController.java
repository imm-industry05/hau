package com.app.school.management.system.faculty;


import com.app.school.management.system.record.Activity;
import com.app.school.management.system.registerLogin.RegisterLoginService;
import com.app.school.management.system.student.Student;
import com.app.school.management.system.subject.Subject;
import com.app.school.management.system.subject.SubjectRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

import javax.transaction.Transactional;
import javax.validation.Valid;
import java.util.List;
import java.util.Optional;

@Controller
@RequestMapping(path = "/faculty")
public class FacultyController {

    private final RegisterLoginService registerLoginService;
    private final FacultyService facultyService;
    private final SubjectRepository subjectRepo;

    @Autowired
    public FacultyController(RegisterLoginService registerLoginService,
                             FacultyService facultyService,
                             SubjectRepository subjectRepo) {
        this.registerLoginService = registerLoginService;
        this.facultyService=facultyService;
        this.subjectRepo = subjectRepo;
    }

    @GetMapping(path = " ")
    public String showFacultyDashboard(){
        if(!registerLoginService.isAuthenticatedFaculty()){return "redirect:/faculty/login";}
        return "facultyDashboard";
    }
    @GetMapping(path = "/profile")
    public String showFacultyProfile(Model model){
        if(!registerLoginService.isAuthenticatedFaculty()){return "redirect:/faculty/login";}
        Optional<Faculty> faculty = facultyService.getFacultyInfo(facultyService.getAuthenticatedFacultyEmail());
        model.addAttribute("facultyProfile",faculty.get());
        return "facultyProfile";
    }

    @GetMapping(path = "/schedule")
    public String showSchedule(Model model){
        if(!registerLoginService.isAuthenticatedFaculty()){return "redirect:/faculty/login";}
         List<Subject> schedule = facultyService.getSubjectsHandled();
        model.addAttribute("facultySchedule",schedule);
        return "facultySchedule";
    }

    @GetMapping(path = "/records")
    public String showRecords(Model model){
        if(!registerLoginService.isAuthenticatedFaculty()){return "redirect:/faculty/login";}
        List<Subject> subjects = facultyService.getSubjectsHandled();
        model.addAttribute("hide",true);
        model.addAttribute("subjects",subjects);
        return "facultyRecords";
    }

    @GetMapping(path = "/records/{subjCode}")
    public String showStudents(@PathVariable("subjCode") Integer subjCode, Model model){
        if(!registerLoginService.isAuthenticatedFaculty()){return "redirect:/faculty/login";}
        List<Student> students = facultyService.getStudentsFromSubject(subjCode);
        List<Subject> subjects = facultyService.getSubjectsHandled();
        List<Activity>  prelimActivities = facultyService.getActivitiesBySubjectAndPeriod(subjCode,"PRELIMS");
        List<String> prelimsActivityName = facultyService.getActivityNamesBySubjectAndPeriod(subjCode,"PRELIMS");
        List<Activity>  midtermActivities = facultyService.getActivitiesBySubjectAndPeriod(subjCode,"MIDTERMS");
        List<String> midtermsActivityName = facultyService.getActivityNamesBySubjectAndPeriod(subjCode,"MIDTERMS");
        List<Activity>  finalActivities = facultyService.getActivitiesBySubjectAndPeriod(subjCode,"FINALS");
        List<String> finalsActivityName = facultyService.getActivityNamesBySubjectAndPeriod(subjCode,"FINALS");
        model.addAttribute("subjects",subjects);
        model.addAttribute("students",students);
        model.addAttribute("newActivity", new Activity());
        model.addAttribute("currentSubj", subjCode);
        model.addAttribute("prelimsActivityNames", prelimsActivityName);
        model.addAttribute("prelimActivities",prelimActivities);
        model.addAttribute("midtermsActivityNames", midtermsActivityName);
        model.addAttribute("midtermActivities",midtermActivities);
        model.addAttribute("finalsActivityNames", finalsActivityName);
        model.addAttribute("finalActivities",finalActivities);
        return "facultyRecords";
    }

    @PostMapping(path = "/records/{subjCode}/{studentId}")
    public String addActivity(@Valid @ModelAttribute Activity activity,
                            @PathVariable("subjCode") Integer subjCode,
                            @PathVariable("studentId") Long studentId){
         facultyService.addActivity(activity,studentId,subjCode);

         return "redirect:/faculty/records/"+subjCode.toString();
    }

    @Transactional
    @PutMapping(path = "/records/{subjCode}/{period}/{studentId}/{activityName}")
    public String editActivity(@PathVariable("subjCode") Integer subjCode,
                             @PathVariable("studentId") Long studentId,
                             @PathVariable("activityName") String activityName,
                             @PathVariable("period") String period,
                             @RequestParam("newActivityName") String newActivity,
                             @RequestParam(required = false) Integer score,
                             @RequestParam(required = false) Integer totalItems,
                             @RequestParam(required = false) String newPeriod){

        facultyService.updateActivity(studentId,subjCode,activityName,newActivity,score,totalItems,period, newPeriod);

        return "redirect:/faculty/records/"+subjCode.toString();

    }

}
