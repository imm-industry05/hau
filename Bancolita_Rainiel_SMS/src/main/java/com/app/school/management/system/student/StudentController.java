package com.app.school.management.system.student;



import com.app.school.management.system.record.Activity;
import com.app.school.management.system.registerLogin.RegisterLoginService;
import com.app.school.management.system.subject.Subject;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.List;
import java.util.Optional;

@Controller
@RequestMapping(path = "/student")
public class StudentController {

    private final RegisterLoginService registerLoginService;
    private final StudentService studentService;

    @Autowired
    public StudentController(RegisterLoginService registerLoginService,
                             StudentService studentService) {
        this.registerLoginService = registerLoginService;
        this.studentService = studentService;
    }


    @GetMapping(path = " ")
    public String showStudentDashboard(){
        if(!registerLoginService.isAuthenticatedStudent())return "redirect:/student/login";
        return "studentDashboard";
    }

    @GetMapping(path = "/profile")
    public String showStudentProfile(Model model){
        if(!registerLoginService.isAuthenticatedStudent())return "redirect:/student/login";
         Optional<Student> student = studentService.getStudentInfo(studentService.getAuthenticatedStudentEmail());
         model.addAttribute("studProfile",student.get());
        return "studentProfile";
    }

    @GetMapping(path = "/enrollment")
    public String showEnrollmentPage(Model model){
        if(!registerLoginService.isAuthenticatedStudent())return "redirect:/student/login";
        Optional<Student> student = studentService.getStudentInfo(studentService.getAuthenticatedStudentEmail());
        List<Subject> subjects = studentService.getAllSubjects();
        List<Subject> enrolledSubjects = student.get().getSubjects();
        model.addAttribute("subjects",subjects);
        model.addAttribute("studentId", student.get().getStudentId());
        model.addAttribute("enrolledSubjects", enrolledSubjects);
        return "studentEnrollment";
    }

    @GetMapping(path = "/schedule")
    public String showSchedule(Model model){
        if(!registerLoginService.isAuthenticatedStudent())return "redirect:/student/login";
        Optional<Student> student = studentService.getStudentInfo(studentService.getAuthenticatedStudentEmail());
        List<Subject> enrolledSubjects = student.get().getSubjects();
        model.addAttribute("enrolledSubjects",enrolledSubjects);
        return "studentSchedule";
    }


   @PostMapping(path = "/enrollment/{studentId}/{subjCode}")
    public String enrollStudent(@PathVariable("studentId") Student student,
                                @PathVariable("subjCode") Integer subjectCode){
       studentService.enrollToSubject(subjectCode,student.getStudentId());
       return "redirect:/student/enrollment";
   }

   @GetMapping(path = "/grades")
   public String showGradePage(Model model){
       if(!registerLoginService.isAuthenticatedStudent())return "redirect:/student/login";
       Optional<Student> student= studentService.getStudentInfo(studentService.getAuthenticatedStudentEmail());
       model.addAttribute("student",student.get());
       model.getAttribute("grade");
       model.addAttribute("subjects",student.get().getSubjects());
       return "StudentGrade";
   }

   @GetMapping(path = "/grades/{subjCode}")
    public String showGradesOnPage(@PathVariable("subjCode") Integer subjCode, Model model){
      if(!registerLoginService.isAuthenticatedStudent())return "redirect:/student/login";
       Optional<Student> student= studentService.getStudentInfo(studentService.getAuthenticatedStudentEmail());
       Long studentId = student.get().getStudentId();
       List<Activity> prelimActivities = studentService.getAllActivitiesPerSubject(studentId,subjCode,"PRELIMS");
       List<Activity> midtermActivities = studentService.getAllActivitiesPerSubject(studentId,subjCode,"MIDTERMS");
       List<Activity> finalActivities = studentService.getAllActivitiesPerSubject(studentId,subjCode,"FINALS");
       List<Subject> subjects = student.get().getSubjects();
       double grade = studentService.computeGrade(studentId,subjCode);
       double equivalent = studentService.getEquivalent(grade);
       model.addAttribute("prelimActivities", prelimActivities);
       model.addAttribute("midtermActivities",midtermActivities);
       model.addAttribute("finalActivities", finalActivities);
       model.addAttribute("grade",Double.toString(grade));
       model.addAttribute("student",student.get());
       model.addAttribute("subjects",subjects);
       model.addAttribute("currentSubj", subjCode);
       model.addAttribute("equivalent",Double.toString(equivalent));

       return "studentGrade";

   }



}
