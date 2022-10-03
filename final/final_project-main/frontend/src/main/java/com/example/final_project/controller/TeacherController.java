package com.example.final_project.controller;

import com.example.final_project.exception.ResourceNotFoundException;
import com.example.final_project.model.Student;
import com.example.final_project.model.Teacher;
import com.example.final_project.repository.TeacherRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@CrossOrigin(origins = {"http://localhost:3000/"})
@RestController
@RequestMapping("/api/v1/teachers")
public class TeacherController {

    @Autowired
    private TeacherRepository teacherRepository;

    @GetMapping
    public List<Teacher> getAllTeacher() {
        return teacherRepository.findAll();
    }

    @PostMapping
    public Teacher createTeacher(@RequestBody Teacher teacher) {
        return teacherRepository.save(teacher);
    }

    @GetMapping("{id}")
    public ResponseEntity<Teacher> getTeacherById(@PathVariable long id) {
        Teacher teacher = teacherRepository.findById(id)
                .orElseThrow(()-> new ResourceNotFoundException("Teacher not exist with id"));
        return ResponseEntity.ok(teacher);
    }

    @PutMapping("{id}")
    public ResponseEntity<Teacher> updateTeacher(@PathVariable long id, @RequestBody Teacher teacherDetails) {
        Teacher updateTeacher = teacherRepository.findById(id)
                .orElseThrow(() -> new ResourceNotFoundException("Teacher not exist with id: " +id));

        updateTeacher.setFirstName(teacherDetails.getFirstName());
        updateTeacher.setLastName(teacherDetails.getLastName());
        updateTeacher.setAddress(teacherDetails.getAddress());
        updateTeacher.setPhone(teacherDetails.getPhone());
        updateTeacher.setEmailId(teacherDetails.getEmailId());

        teacherRepository.save(updateTeacher);

        return ResponseEntity.ok(updateTeacher);
    }

    @DeleteMapping("{id}")
    public ResponseEntity<HttpStatus> deleteTeacher(@PathVariable long id) {
        Teacher teacher = teacherRepository.findById(id)
                .orElseThrow(() -> new ResourceNotFoundException("Student not exist with id: " + id));

        teacherRepository.delete(teacher);

        return new ResponseEntity<>(HttpStatus.NO_CONTENT);
    }
}
