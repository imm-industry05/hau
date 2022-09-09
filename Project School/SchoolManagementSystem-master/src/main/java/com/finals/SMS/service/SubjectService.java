package com.finals.SMS.service;

import java.util.List;
import java.util.Optional;

import com.finals.SMS.entity.Subject;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.finals.SMS.repository.SubjectRepository;

@Service
@Transactional
public class SubjectService {
    @Autowired
    SubjectRepository subjectRepository;


    public List<Subject> findAll() {
        return subjectRepository.findAllOrderById();
    }

    public void insert(Subject subject) {
        subjectRepository.save(subject);
    }

    public void update(Subject subject) {
        subjectRepository.save(subject);
    }

    public void delete(Integer id) {
        subjectRepository.deleteById(id);
    }

    public Optional<Subject> selectById(Integer id) {
        return subjectRepository.findById(id);
    }
}