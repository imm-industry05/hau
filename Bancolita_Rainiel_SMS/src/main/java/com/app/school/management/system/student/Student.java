package com.app.school.management.system.student;



import com.app.school.management.system.course.Course;
import com.app.school.management.system.subject.Subject;
import org.springframework.format.annotation.DateTimeFormat;

import javax.persistence.*;
import javax.validation.constraints.NotNull;
import java.time.LocalDate;
import java.util.HashSet;
import java.util.List;
import java.util.Set;


@Entity
@SequenceGenerator(name = "student_sequence", sequenceName = "student_sequence", allocationSize = 1, initialValue = 202100)
public class Student {
    @Id
    @GeneratedValue(generator = "student_sequence",strategy = GenerationType.SEQUENCE)
    private Long studentId;

    @NotNull(message = "First name should not be empty")
    private String firstName;
    @NotNull(message = "Middle name should not be empty")
    private  String middleName;
    @NotNull(message = "Last name should not be empty")
    private String lastName;
    @NotNull(message = "Birth date should not be empty")
    @DateTimeFormat(pattern = "yyyy-MM-dd")
    private LocalDate birthDate;
    @NotNull(message = "Address should not be empty")
    private String address;
    @NotNull(message = "Contact should not be empty")
    private String contactNumber;
    @NotNull(message = "Email should not be empty")
    private String email;
    @NotNull(message = "Password should not be empty")
    private String password;


    @ManyToMany
    @JoinTable(name="student_subject", joinColumns = {@JoinColumn(name = "student_id")},
    inverseJoinColumns = {@JoinColumn(name = "subj_code")})
    private List<Subject> subjects ;




    @ManyToOne
    @JoinColumn(name = "course_id", referencedColumnName = "courseId")
    @NotNull
    private  Course course;

    public Student() {
    }

    public Long getStudentId() {
        return studentId;
    }

    public void setStudentId(Long studentId) {
        this.studentId = studentId;
    }

    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getMiddleName() {
        return middleName;
    }

    public void setMiddleName(String middleName) {
        this.middleName = middleName;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public LocalDate getBirthDate() {
        return birthDate;
    }

    public void setBirthDate(LocalDate birthDate) {
        this.birthDate = birthDate;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getContactNumber() {
        return contactNumber;
    }

    public void setContactNumber(String contactNumber) {
        this.contactNumber = contactNumber;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }


    public Course getCourse() {
        return course;
    }

    public void setCourse(Course course) {
        this.course = course;
    }

    public List<Subject> getSubjects() {
        return subjects;
    }

    public void setSubjects(List<Subject> subjects) {
        this.subjects = subjects;
    }

    @Override
    public String toString() {
        return "Student{" +
                "studentId=" + studentId +
                ", firstName='" + firstName + '\'' +
                ", middleName='" + middleName + '\'' +
                ", lastName='" + lastName + '\'' +
                ", birthDate=" + birthDate +
                ", address='" + address + '\'' +
                ", contactNumber='" + contactNumber + '\'' +
                ", email='" + email + '\'' +
                ", password='" + password + '\'' +
                ", course=" + course +
                '}';
    }
}
