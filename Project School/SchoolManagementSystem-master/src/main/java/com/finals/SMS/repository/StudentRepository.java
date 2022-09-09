package com.finals.SMS.repository;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import com.finals.SMS.entity.Student;

public interface StudentRepository extends JpaRepository<Student, Integer>{

    @Query("SELECT s FROM Student s ORDER BY s.id")
    List<Student> findAllOrderById();
}
