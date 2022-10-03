package com.example.final_project.controller;

import com.example.final_project.exception.ResourceNotFoundException;
import com.example.final_project.model.Student;
import com.example.final_project.model.Subject;
import com.example.final_project.repository.StudentRepository;
import com.example.final_project.repository.SubjectRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@CrossOrigin(origins = {"http://localhost:3000/"})
@RestController
@RequestMapping("/api/v1/subjects")
public class SubjectController {

    @Autowired
    private SubjectRepository subjectRepository;

    @GetMapping
    public List<Subject> getAllSubjects() {
        return subjectRepository.findAll();
    }

    @PostMapping
    public Subject createSubject(@RequestBody Subject subject) {
        return subjectRepository.save(subject);
    }

    @GetMapping("{id}")
    public ResponseEntity<Subject> getSubjectById(@PathVariable long id) {
        Subject subject = subjectRepository.findById(id)
                .orElseThrow(() -> new ResourceNotFoundException("Subject not exist with id"));
        return ResponseEntity.ok(subject);
    }

    @PutMapping("{id}")
    public ResponseEntity<Subject> updateSubject(@PathVariable long id, @RequestBody Subject subjectDetails) {
        Subject updateSubject = subjectRepository.findById(id)
                .orElseThrow(() -> new ResourceNotFoundException("Subject not exist with id: " +id));

        updateSubject.setSubjectName(subjectDetails.getSubjectName());

        subjectRepository.save(updateSubject);

        return ResponseEntity.ok(updateSubject);
    }

    @DeleteMapping("{id}")
    public ResponseEntity<HttpStatus> deleteSubject(@PathVariable long id) {
        Subject subject = subjectRepository.findById(id)
                .orElseThrow(() -> new ResourceNotFoundException("Subject not exist with id: " + id));

        subjectRepository.delete(subject);

        return new ResponseEntity<>(HttpStatus.NO_CONTENT);
    }
}
