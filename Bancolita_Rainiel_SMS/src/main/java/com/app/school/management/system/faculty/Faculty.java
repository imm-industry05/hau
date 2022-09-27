package com.app.school.management.system.faculty;


import com.app.school.management.system.department.Department;
import com.app.school.management.system.subject.Subject;
import org.springframework.format.annotation.DateTimeFormat;

import javax.persistence.*;
import javax.validation.constraints.NotNull;
import java.time.LocalDate;

@Entity
@SequenceGenerator(name = "faculty_sequence", sequenceName = "faculty_sequence", allocationSize = 1, initialValue = 32021100)
public class Faculty {
    @Id
    @GeneratedValue(generator = "faculty_sequence",strategy = GenerationType.SEQUENCE)
    private Long facultyId;

    @NotNull(message = "First name should not be empty")
    private String firstName;
    @NotNull(message = "Middle name should not be empty")
    private String middleName;
    @NotNull(message = "Last name should not be empty")
    private String lastName;
    @DateTimeFormat(pattern = "yyyy-MM-dd")
    @NotNull(message = "Birth date should not be empty")
    private LocalDate birthDate;
    @NotNull(message = "Address should not be empty")
    private String address;
    @NotNull(message = "Contact should not be empty")
    private String contactNumber;
    @NotNull(message = "Email should not be empty")
    private String email;
    @NotNull(message = "Password should not be empty")
    private String password;


    @ManyToOne
    @JoinColumn(name = "department_id", referencedColumnName = "departmentId")
    @NotNull
    private Department department;




    public Faculty() {
    }

    public Faculty(String firstName, String middleName, String lastName, LocalDate birthDate, String address, String contactNumber, String email, String password, Department department) {
        this.firstName = firstName;
        this.middleName = middleName;
        this.lastName = lastName;
        this.birthDate = birthDate;
        this.address = address;
        this.contactNumber = contactNumber;
        this.email = email;
        this.password = password;
        this.department = department;
    }

    public Long getFacultyId() {
        return facultyId;
    }

    public void setFacultyId(Long facultyId) {
        this.facultyId = facultyId;
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

    public Department getDepartment() {
        return department;
    }

    public void setDepartment(Department department) {
        this.department = department;
    }

    @Override
    public String toString() {
        return "Faculty{" +
                "facultyId=" + facultyId +
                ", firstName='" + firstName + '\'' +
                ", middleName='" + middleName + '\'' +
                ", lastName='" + lastName + '\'' +
                ", birthDate=" + birthDate +
                ", address='" + address + '\'' +
                ", contactNumber='" + contactNumber + '\'' +
                ", email='" + email + '\'' +
                ", password='" + password + '\'' +
                ", department=" + department +
                '}';
    }
}
