package com.example.final_project.repository;

import com.example.final_project.model.Student;
import org.springframework.data.jpa.repository.JpaRepository;


public interface StudentRepository extends JpaRepository<Student, Long> {
    //all crud database method

}