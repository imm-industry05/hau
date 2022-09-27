package com.app.school.management.system.subject;


import com.app.school.management.system.faculty.Faculty;
import com.app.school.management.system.student.Student;

import javax.persistence.*;
import javax.validation.constraints.NotNull;
import java.util.HashSet;
import java.util.List;
import java.util.Set;


@Entity
public class Subject {
    @Id
    private Integer subjCode;
    @NotNull
    private String subjTitle;
    @NotNull
    private String time;
    @NotNull
    private String days;
    @NotNull
    private String room;
    @NotNull
    private String section;

    @OneToOne
    @JoinColumn(name="faculty_id", referencedColumnName = "facultyId")
    @NotNull
    private Faculty faculty;


    @ManyToMany(mappedBy = "subjects")
    private List<Student> students;

    public Subject() {
    }

    public Subject(Integer subjCode, String subjTitle, String time, String days, String room, String section, Faculty faculty) {
        this.subjCode = subjCode;
        this.subjTitle = subjTitle;
        this.time = time;
        this.days = days;
        this.room = room;
        this.section = section;
        this.faculty = faculty;
    }

    public String getTime() {
        return time;
    }

    public void setTime(String time) {
        this.time = time;
    }

    public Integer getSubjCode() {
        return subjCode;
    }

    public void setSubjCode(Integer subjCode) {
        this.subjCode = subjCode;
    }

    public String getSubjTitle() {
        return subjTitle;
    }

    public void setSubjTitle(String subjTitle) {
        this.subjTitle = subjTitle;
    }


    public String getDays() {
        return days;
    }

    public void setDays(String days) {
        this.days = days;
    }

    public String getRoom() {
        return room;
    }

    public void setRoom(String room) {
        this.room = room;
    }

    public String getSection() {
        return section;
    }

    public void setSection(String section) {
        this.section = section;
    }

    public Faculty getFaculty() {
        return faculty;
    }

    public void setFaculty(Faculty faculty) {
        this.faculty = faculty;
    }

    public List<Student> getStudents() {
        return students;
    }

    public void setStudents(List<Student> students) {
        this.students = students;
    }

    @Override
    public String toString() {
        return "Subject{" +
                "subjCode=" + subjCode +
                ", subjTitle='" + subjTitle + '\'' +
                ", time=" + time +
                ", days='" + days + '\'' +
                ", room='" + room + '\'' +
                ", section='" + section + '\'' +
                ", faculty=" + faculty +
                '}';
    }
}