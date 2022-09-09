package com.finals.SMS.repository;


import java.util.List;

import com.finals.SMS.entity.Subject;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

public interface SubjectRepository extends JpaRepository<Subject, Integer>{

    @Query("SELECT s FROM Subject s ORDER BY s.classcode")
    List<Subject> findAllOrderById();
}