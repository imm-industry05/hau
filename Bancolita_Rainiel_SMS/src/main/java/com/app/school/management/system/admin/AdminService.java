package com.app.school.management.system.admin;

import com.app.school.management.system.course.Course;
import com.app.school.management.system.course.CourseRepository;
import com.app.school.management.system.department.Department;
import com.app.school.management.system.department.DepartmentRepository;
import com.app.school.management.system.exception.ApiRequestException;
import com.app.school.management.system.faculty.Faculty;
import com.app.school.management.system.faculty.FacultyRepository;
import com.app.school.management.system.registerLogin.RegisterLoginService;
import com.app.school.management.system.student.Student;
import com.app.school.management.system.student.StudentRepository;
import com.app.school.management.system.subject.Subject;
import com.app.school.management.system.subject.SubjectRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.stereotype.Service;



import java.time.LocalDate;
import java.util.List;
import java.util.Objects;
import java.util.Optional;


@Service
public class AdminService {

 private final StudentRepository studentRepo;
 private final FacultyRepository facultyRepo;
 private final CourseRepository courseRepo;
 private final DepartmentRepository departmentRepo;
 private final SubjectRepository subjectRepo;


 @Autowired
 public AdminService(StudentRepository studentRepo,
                     CourseRepository courseRepo,
                     FacultyRepository facultyRepo,
                     DepartmentRepository departmentRepo,
                     SubjectRepository subjectRepo) {
    this.studentRepo = studentRepo;
    this.facultyRepo = facultyRepo;
    this.courseRepo = courseRepo;
    this.departmentRepo = departmentRepo;
    this.subjectRepo = subjectRepo;


 }



 public List<Student> getAllStudents(){

    return  studentRepo.findAllStudents();

 }
public  List<Course> getAllCourses(){return  courseRepo.findAllCourses();}
public  List<Faculty> getAllFaculty(){ return  facultyRepo.findAllFaculty(); }

public List<Subject> getAllSubjects(){
     return subjectRepo.findAllSubjects();
 }


 public List<Student> getAllStudentsByCourse(String courseId){
    List<Student> list=  studentRepo.findStudentsByCourseId(courseId);
    return list;

 }


public List<Faculty> getAllFacultyByDepartment(String departmentId){
        List<Faculty> list = facultyRepo.findAllFacultyByDepartment(departmentId);

            return list;


    }



public void addSubject(Subject subject){
     Subject foundSubject = subjectRepo.findSubjectByCode(subject.getSubjCode());
     Faculty faculty = facultyRepo.findFacultyById(subject.getFaculty().getFacultyId());
     if(foundSubject!=null){

         throw new ApiRequestException("Subject already exists.");
     }else{
         if(faculty==null){

             throw new ApiRequestException("Faculty does not exist.");
         }
         subject.setFaculty( faculty);
         subjectRepo.save(subject);
     }


}




 public void addStudent(Student student){
        Course course = courseRepo.findCourseById(student.getCourse().getCourseId());
        Optional<Student> studentFound = studentRepo.findStudentByEmail(student.getEmail());
        if(studentFound.isPresent()){
            throw new ApiRequestException("Student already exists.");
        }
         student.setCourse(course);
          student.setPassword(new BCryptPasswordEncoder().encode(student.getPassword()));
         studentRepo.save(student);

}


public void deleteStudent(Long studentId){
       studentRepo.findStudentById(studentId)
               .orElseThrow(()-> {throw new ApiRequestException("The student does not exist.");});
      studentRepo.deleteById(studentId);
}


public void  deleteCourse(String courseId){
    List<Student> enrolledStudents=studentRepo.findStudentsByCourseId(courseId);
    Course course = courseRepo.findCourseById(courseId);


    if(course!=null&& enrolledStudents.isEmpty()){
        courseRepo.deleteById(courseId);

    }
    if(!enrolledStudents.isEmpty()){
             throw new ApiRequestException("Cannot delete. A student is enrolled in the course : "+course.getCourseName()+ ".");

    }
    if(course==null){

        throw new ApiRequestException("The course does not exist.");

    }
}


    public void  deleteDepartment(String departmentId){
        Optional<Faculty> memberFaculty=facultyRepo.findFacultyByDepartment(departmentId);
        Department department = departmentRepo.findDepartmentById(departmentId);
        if(department!=null&& !memberFaculty.isPresent()){
            departmentRepo.deleteById(departmentId);
        }else if(memberFaculty.isPresent()){
            throw new ApiRequestException("Cannot delete. The "+department.getDepartmentName()  + " department has it members.");
        }
        else {
            throw new ApiRequestException("The department does not exist.");

        }
    }

public List<Department> getAllDepartments(){
     return departmentRepo.findAllDepartments();
}


public  void  updateStudent(Long studentId,
                            String birthDate,
                            String address,
                            String contactNumber,
                            String email,
                            String password,
                            String courseId){
    Student student = studentRepo.findStudentById(studentId).orElseThrow(()->{throw new ApiRequestException("The student does not exist.");});



    if(birthDate!=null&&!Objects.equals(student.getBirthDate(),birthDate)){
        LocalDate converted =LocalDate.parse(birthDate);
        studentRepo.updateStudentBirthDate(studentId,converted);
    }
    if(address!=null&&!Objects.equals(student.getAddress(),address)){
        studentRepo.updateStudentAddress(studentId,address);
    }
    if(contactNumber!=null&&!Objects.equals(student.getContactNumber(),contactNumber)){

        studentRepo.updateStudentContactNumber(studentId,contactNumber);
    }
    if(email!=null&&!Objects.equals(student.getEmail(),email)){
        Optional<Student> foundStudent = studentRepo.findStudentByEmail(email);
        if(foundStudent.isPresent()){
            throw new ApiRequestException("The email is already taken.");
        }
        studentRepo.updateStudentEmail(studentId,email);
    }
    if(password!=null&&!Objects.equals(student.getPassword(),password)){
        studentRepo.updateStudentPassword(studentId,password);
    }
    if(courseId!=null&&!Objects.equals(student.getCourse().getCourseId(),courseId)){
        studentRepo.updateStudentCourseId(studentId,courseId);
    }

}




public  void  updateFaculty(Long facultyId,
                                String birthDate,
                                String address,
                                String contactNumber,
                                String email,
                                String password,
                                String departmentId){
        Faculty faculty = facultyRepo.findFacultyById(facultyId);
        if(faculty==null){throw new ApiRequestException("The faculty does not exist.");};
        if(birthDate!=null&&!Objects.equals(faculty.getBirthDate(),birthDate)){
            LocalDate converted =LocalDate.parse(birthDate);
            facultyRepo.updateFacultyBirthDate(facultyId,converted);
        }
        if(address!=null&&!Objects.equals(faculty.getAddress(),address)){
            facultyRepo.updateFacultyAddress(facultyId,address);
        }
        if(contactNumber!=null&&!Objects.equals(faculty.getContactNumber(),contactNumber)){
            facultyRepo.updateFacultyContactNumber(facultyId,contactNumber);
        }
        if(email!=null&&!Objects.equals(faculty.getEmail(),email)){
               Optional<Faculty> foundEmail=  facultyRepo.findFacultyByEmail(email);
               if(foundEmail.isPresent()){
                   throw new ApiRequestException("The email is already taken.");
               }
                  facultyRepo.updateFacultyEmail(facultyId,email);
        }
        if(password!=null&&!Objects.equals(faculty.getPassword(),password)){
            facultyRepo.updateFacultyPassword(facultyId,password);
        }
        if(departmentId!=null&&!Objects.equals(faculty.getDepartment().getDepartmentId(),departmentId)){
            facultyRepo.updateFacultyDepartmentId(facultyId,departmentId);
        }

    }


public void updateCourse(String courseId, String courseName){
    Course course= courseRepo.findCourseById(courseId);
    if(course==null)throw new ApiRequestException("The course does not exist.");

    if(courseName!=null&&!Objects.equals(course.getCourseName(),courseName)){
        courseRepo.updateCourseName(courseId,courseName);
    }


}

public void updateDepartment(String departmentId, String departmentName){
        Department department = departmentRepo.findDepartmentById(departmentId);
        if(department==null)throw new ApiRequestException("The course does not exist.");

        if(departmentName!=null&&!Objects.equals(department.getDepartmentName(),departmentName)){
           departmentRepo.updateDepartmentName(departmentId,departmentName);
        }


}

public void updateSubject(Integer subjCode,
                          String subjTitle,
                          String days,
                          String room,
                          String section,
                          String time,
                          Long facultyId){
     Subject subject = subjectRepo.findSubjectByCode(subjCode);
     if(subject==null){throw new ApiRequestException("The subject does not exist.");}
     if(subjTitle!=null&&!Objects.equals(subjTitle,subject.getSubjTitle())){
         subjectRepo.updateSubjectTitle(subjCode,subjTitle);
     } if(days!=null&&!Objects.equals(days,subject.getDays())){
         subjectRepo.updateSubjectDays(subjCode,days);
     }else if(room!=null&&!Objects.equals(room,subject.getRoom())){
         subjectRepo.updateSubjectRoom(subjCode,room);
     }else if(section!=null&&!Objects.equals(section,subject.getSection())){
         subjectRepo.updateSubjectSection(subjCode,section);
     }else if(time!=null&&!Objects.equals(time,subject.getTime())){
         subjectRepo.updateSubjectTime(subjCode,time);
     }else if(facultyId!=null&&!Objects.equals(facultyId,subject.getFaculty().getFacultyId())){
         Faculty faculty = facultyRepo.findFacultyById(facultyId);
         if(faculty==null)throw new ApiRequestException("The faculty does not exist");
         subjectRepo.updateSubjectFaculty(subjCode,facultyId);

     }


}



 public  void addCourse(Course courseInfo){
    Course course = courseRepo.findCourseById(courseInfo.getCourseId());
    if(course ==null){
        courseRepo.save(courseInfo);
    }else{
        throw new ApiRequestException("Course already exists.");
    }
 }

public  void addDepartment(Department departmentInfo){
        Department department = departmentRepo.findDepartmentById(departmentInfo.getDepartmentId());
        if(department ==null){
            departmentRepo.save(departmentInfo);
        }else{
            throw new ApiRequestException("Department already exists.");
        }
 }


public void addFaculty(Faculty faculty){

     Optional<Faculty> email = facultyRepo.findFacultyByEmail(faculty.getEmail());
     if(!email.isPresent()){
         Department department = departmentRepo.findDepartmentById(faculty.getDepartment().getDepartmentId());
         if(department!=null){
             faculty.setDepartment(department);
             faculty.setPassword(new BCryptPasswordEncoder().encode(faculty.getPassword()));
             facultyRepo.save(faculty);
         }else{
             throw new ApiRequestException("The department does not exist");
         }


     }else{
         throw  new ApiRequestException("Faculty already exists.");
     }
 }


 public void deleteFaculty(Long facultyId){
      Faculty faculty=facultyRepo.findFacultyById(facultyId);
      if(faculty==null){throw new ApiRequestException("The faculty does not exist.");};
     facultyRepo.deleteById(facultyId);

 }

 public void deleteSubject(Integer subjCode){
     Subject subject = subjectRepo.findSubjectByCode(subjCode);
     if(subject!=null){

         subjectRepo.deleteById(subjCode);
     }else{
         throw new ApiRequestException("The subject does not exist.");
     }

 }



}








