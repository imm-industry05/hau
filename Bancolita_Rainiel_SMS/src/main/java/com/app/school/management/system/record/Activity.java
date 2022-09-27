package com.app.school.management.system.record;


import com.app.school.management.system.student.Student;
import com.app.school.management.system.subject.Subject;

import javax.persistence.*;
import javax.validation.constraints.NotNull;

@Entity
public class Activity {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer activityRef;

    @NotNull
    private String activityName;
    @NotNull
    private Integer score;
    @NotNull
    private Integer totalItems;
    @NotNull
    private String period;



    @ManyToOne
    @NotNull
    @JoinColumn(name = "student_id",referencedColumnName = "studentId")
    private Student student;

    @ManyToOne
    @NotNull
    @JoinColumn(name = "subj_code", referencedColumnName = "subjCode")
    private Subject subject;




    public Activity() {
    }

    public Activity(Integer activityRef, String activityName, Integer score, Integer totalItems, String period, Student student, Subject subject) {
        this.activityRef = activityRef;
        this.activityName = activityName;
        this.score = score;
        this.totalItems = totalItems;
        this.period = period;
        this.student = student;
        this.subject = subject;
    }

    public Activity(String activityName, Integer score, Integer totalItems, String period, Student student, Subject subject) {
        this.activityName = activityName;
        this.score = score;
        this.totalItems = totalItems;
        this.period = period;
        this.student = student;
        this.subject = subject;
    }

    public Integer getActivityRef() {
        return activityRef;
    }

    public void setActivityRef(Integer activityRef) {
        this.activityRef = activityRef;
    }

    public String getActivityName() {
        return activityName;
    }

    public void setActivityName(String activityName) {
        this.activityName = activityName;
    }

    public Integer getScore() {
        return score;
    }

    public void setScore(Integer score) {
        this.score = score;
    }

    public Integer getTotalItems() {
        return totalItems;
    }

    public void setTotalItems(Integer totalItems) {
        this.totalItems = totalItems;
    }

    public String getPeriod() {
        return period;
    }

    public void setPeriod(String period) {
        this.period = period;
    }

    public Student getStudent() {
        return student;
    }

    public void setStudent(Student student) {
        this.student = student;
    }

    public Subject getSubject() {
        return subject;
    }

    public void setSubject(Subject subject) {
        this.subject = subject;
    }

    @Override
    public String toString() {
        return "Activity{" +
                "activityRef=" + activityRef +
                ", activityName='" + activityName + '\'' +
                ", score=" + score +
                ", totalItems=" + totalItems +
                ", period='" + period + '\'' +
                ", student=" + student +
                ", subject=" + subject +
                '}';
    }
}
