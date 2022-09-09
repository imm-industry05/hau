package com.finals.SMS.service;

import java.util.List;
import java.util.Optional;

import com.finals.SMS.entity.Student;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.finals.SMS.repository.StudentRepository;

@Service
@Transactional
public class StudentService {
    @Autowired
    StudentRepository studentRepository;

    public List<Student> findAll() {
        return studentRepository.findAllOrderById();
    }

    public void insert(Student student) {
        studentRepository.save(student);
    }

    public void update(Student student) {
        studentRepository.save(student);
    }

    public void delete(Integer id) {
        studentRepository.deleteById(id);
    }

    public Optional<Student> selectById(Integer id) {
        return studentRepository.findById(id);
    }
}