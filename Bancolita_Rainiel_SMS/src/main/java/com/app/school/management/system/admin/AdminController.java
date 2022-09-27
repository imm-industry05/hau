package com.app.school.management.system.admin;



import com.app.school.management.system.course.Course;
import com.app.school.management.system.department.Department;
import com.app.school.management.system.faculty.Faculty;
import com.app.school.management.system.registerLogin.RegisterLoginService;
import com.app.school.management.system.student.Student;
import com.app.school.management.system.subject.Subject;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;

import org.springframework.web.bind.annotation.*;



import javax.transaction.Transactional;
import javax.validation.Valid;
import java.util.List;



@Controller
@RequestMapping(path = "/admin")
public class AdminController {

    private final AdminService adminService;
    private final RegisterLoginService registerLoginService;

    @Autowired
    public AdminController(AdminService adminService, RegisterLoginService registerLoginService) {
        this.adminService = adminService;
        this.registerLoginService = registerLoginService;
    }



    @GetMapping(path = " ")
    public String showAdminDashboard(){
        if(!registerLoginService.isAuthenticatedAdmin())return "redirect:/admin/login";
        return "adminDashboard";
    }



    @GetMapping(path = "/students")
    public String getStudents(Model model){
        if(!registerLoginService.isAuthenticatedAdmin())return "redirect:/admin/login";
        List<Course> courses = adminService.getAllCourses();
        List<Student> students= adminService.getAllStudents();
        model.addAttribute("students",students);
        model.addAttribute("courses",courses);
        model.addAttribute("newStudent", new Student());

        return "adminStudent";
    }

    @GetMapping(path = "/faculty")
    public String getFaculty(Model model) {
        if(!registerLoginService.isAuthenticatedAdmin())return "redirect:/admin/login";
        List<Faculty> faculty = adminService.getAllFaculty();
        List<Department> departments= adminService.getAllDepartments();
        model.addAttribute("faculty",faculty);
        model.addAttribute("departments",departments);
        model.addAttribute("newTeacher", new Faculty());


        return "adminFaculty";

    }

    @GetMapping(path = "/courses")
    public String getAllCourses(Model model){
        if(!registerLoginService.isAuthenticatedAdmin())return "redirect:/admin/login";
        List<Course> courses =  adminService.getAllCourses();
        model.addAttribute("courses", courses);
        model.addAttribute("newCourse", new Course());
        return  "adminCourse";
    }

    @GetMapping(path = "/departments")
    public  String getAllDepartments(Model model){
        if(!registerLoginService.isAuthenticatedAdmin())return "redirect:/admin/login";
        List<Department> departments = adminService.getAllDepartments();
        model.addAttribute("departments",departments);
        model.addAttribute("newDepartment",new Department());
        return "adminDepartment";

    }

    @GetMapping(path = "/students/{courseId}")
    @ResponseBody
    public List<Student> getAllStudentsByCourse(@PathVariable("courseId") String courseId){

        return adminService.getAllStudentsByCourse(courseId);
    }
    @GetMapping(path = "/faculty/{departmentId}")
    @ResponseBody
    public List<Faculty> getAllFacultyByDepartment(@PathVariable("departmentId") String departmentId){
        return adminService.getAllFacultyByDepartment(departmentId);
    }
    @GetMapping(path = "/subjects")
    public String getAllSubjects(Model model){
        if(!registerLoginService.isAuthenticatedAdmin())return "redirect:/admin/login";
        List<Subject> subjects = adminService.getAllSubjects();
        List<Faculty> faculty = adminService.getAllFaculty();
        model.addAttribute("subjects",subjects);
        model.addAttribute("newSubject", new Subject());
        model.addAttribute("faculty",faculty);
        return "adminSubject";
    }




    @PostMapping(path = "/courses")
    public String addCourse(@Valid @ModelAttribute Course course, BindingResult bindingResult){
        if (bindingResult.hasErrors()) {
            throw new IllegalStateException((Throwable) bindingResult.getAllErrors());

        } else {
            adminService.addCourse(course);
        }
       return "redirect:/admin/courses";

    }



    @PostMapping(path ="/students")
    public String addStudent(@Valid  @ModelAttribute("newStudent") Student student) {

        adminService.addStudent(student);
        return "redirect:/admin/students";
    }


    @PostMapping(path = "/faculty")
    public  String addFaculty(@Valid  @ModelAttribute("newTeacher")  Faculty faculty){

            adminService.addFaculty(faculty);
            return "redirect:/admin/faculty";
    }

    @PostMapping(path = "/subjects")
    public String  addSubject(@Valid @ModelAttribute Subject subject, BindingResult bindingResult){
        if(bindingResult.hasErrors()){
            throw new IllegalStateException((Throwable) bindingResult.getAllErrors());

        }else{
            adminService.addSubject(subject);
        }
        return "redirect:/admin/subjects";
    }

    @PostMapping(path = "/departments")
    public String  addDepartment( @Valid @ModelAttribute Department department, BindingResult bindingResult){
        if(bindingResult.hasErrors()){
            throw new IllegalStateException((Throwable) bindingResult.getAllErrors());

        }else{

            adminService.addDepartment(department);;
        }
        return "redirect:/admin/departments";
    }


    @Transactional
    @PutMapping(path ="/students/{studentId}" )
    public String updateStudent(@PathVariable("studentId") Long studentId,
                               @RequestParam(required = false) String birthDate,
                               @RequestParam(required = false) String address,
                               @RequestParam(required = false) String contactNumber,
                               @RequestParam(required = false) String email,
                               @RequestParam(required = false) String password,
                               @RequestParam(required = false) String courseId){

            adminService.updateStudent(studentId, birthDate, address, contactNumber, email, password, courseId);
            return "redirect:/admin/students" ;

        }


    @Transactional
    @PutMapping(path = "/faculty/{facultyId}")
    public String updateFaculty(@PathVariable("facultyId") Long facultyId,
                              @RequestParam(required = false) String birthDate,
                              @RequestParam(required = false) String address,
                              @RequestParam(required = false) String contactNumber,
                              @RequestParam(required = false) String email,
                              @RequestParam(required = false) String password,
                              @RequestParam(required = false) String departmentId){
        adminService.updateFaculty(facultyId,birthDate,address,contactNumber,email,password,departmentId);
        return "redirect:/admin/faculty" ;
    }

    @Transactional
    @PutMapping(path = "/courses/{courseId}")
    public String updateCourse(@PathVariable("courseId") String courseId,
                             @RequestParam(required = false) String courseName
                            ){
        adminService.updateCourse(courseId,courseName);
        return "redirect:/admin/courses";
    }



    @Transactional
    @PutMapping(path = "/departments/{departmentId}")
    public String updateDepartment(@PathVariable("departmentId") String departmentId,
                                 @RequestParam(required = false) String departmentName){
        adminService.updateDepartment(departmentId,departmentName);
        return "redirect:/admin/departments";
    }


    @Transactional
    @PutMapping(path = "/subjects/{subjCode}")
    public String updateSubject(@PathVariable("subjCode") Integer subjCode,
                              @RequestParam(required = false) String subjTitle,
                              @RequestParam(required = false) String days,
                              @RequestParam(required = false) String room,
                              @RequestParam(required = false) String section,
                              @RequestParam(required = false) String time,
                              @RequestParam(required = false) Long facultyId
                              ){
        adminService.updateSubject(subjCode,subjTitle,days,room,section,time,facultyId);
        return "redirect:/admin/subjects";
    }

    @DeleteMapping(path = "/students/{studentId}")
    public  String deleteStudent(@PathVariable("studentId") Long studentId){
        adminService.deleteStudent(studentId);
        return  "redirect:/admin/students";
    }


    @DeleteMapping(path = "/courses/{courseId}")
    public String deleteCourse(@PathVariable("courseId") String courseId){
        adminService.deleteCourse(courseId);
        return "redirect:/admin/courses";
    }




    @DeleteMapping(path = "/faculty/{facultyId}")
    public String deleteFaculty(@PathVariable("facultyId") Long facultyId){

        adminService.deleteFaculty(facultyId);
        return  "redirect:/admin/faculty";
    }


    @DeleteMapping(path = "/departments/{departmentId}")
    public String deleteDepartment(@PathVariable("departmentId") String departmentId){
        adminService.deleteDepartment(departmentId);
        return "redirect:/admin/departments";
    }



    @DeleteMapping(path ="/subjects/{subjCode}")
    public String deleteSubject(@PathVariable("subjCode") Integer subjCode){
        adminService.deleteSubject(subjCode);
        return "redirect:/admin/subjects";
    }



}
