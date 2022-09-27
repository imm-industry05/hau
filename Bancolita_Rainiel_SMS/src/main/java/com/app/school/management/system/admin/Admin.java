package com.app.school.management.system.admin;


import javax.persistence.*;

@Entity
@SequenceGenerator(name = "admin_sequence", sequenceName = "admin_sequence", allocationSize = 1, initialValue = 52021100)
public class Admin {
    @Id
    @GeneratedValue(generator = "admin_sequence",strategy = GenerationType.SEQUENCE)
    private int adminId;

    private String firstName;
    private String lastName;
    private String email;
    private String password;



    public Admin() {
    }

    public Admin(String firstName, String lastName, String email, String password) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.password = password;

    }

    public int getAdminId() {
        return adminId;
    }

    public void setAdminId(int adminId) {
        this.adminId = adminId;
    }

    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
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
}
