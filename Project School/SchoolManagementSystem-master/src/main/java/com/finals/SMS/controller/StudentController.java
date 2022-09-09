package com.finals.SMS.controller;

import java.util.List;
import java.util.Optional;

import com.finals.SMS.entity.Student;
import com.finals.SMS.form.StudentForm;
import org.springframework.beans.BeanUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.validation.annotation.Validated;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import com.finals.SMS.service.StudentService;
import org.springframework.web.bind.annotation.RequestParam;


@Controller
public class StudentController {
    @Autowired
    StudentService studentService;

    @GetMapping("list")
    String list(Model model) {
        List<Student> students = studentService.findAll();
        model.addAttribute("students", students);
        return "list";
    }


    @GetMapping("create")

    String create(@ModelAttribute StudentForm studentForm) {
        return "create";
    }

    @PostMapping("create")

    String regist(@ModelAttribute @Validated StudentForm studentForm, BindingResult result, Model model) {
        if (result.hasErrors()) {
            return create(studentForm);
        }

        Student student = new Student();
        BeanUtils.copyProperties(studentForm, student);

        studentService.insert(student);

        return "userInfoPage";
    }
    @PostMapping(path = "edit", params = "edit")

    String edit(@RequestParam Integer id, @ModelAttribute StudentForm studentForm) {

        Optional<Student> studentOpt = studentService.selectById(id);

        Student student = studentOpt.get();

        BeanUtils.copyProperties(student, studentForm);
        return "edit";
    }
    @PostMapping(path = "edit", params = "regist")

    String regist(@RequestParam Integer id, @Validated @ModelAttribute StudentForm studentForm, BindingResult result) {
        if (result.hasErrors()) {
            return edit(id, studentForm);
        }

        Student student = new Student();
        BeanUtils.copyProperties(studentForm, student);


        studentService.update(student);
        return "userInfoPage";
    }

    @PostMapping(path = "edit", params = "back")
    String back() {
        return "userInfoPage";
    }

    @PostMapping(path = "create", params = "back")
    String createback() {
        return "userInfoPage";
    }

    @PostMapping(path = "edit", params = "delete")
    String delete(@RequestParam Integer id) {
        studentService.delete(id);
        return "userInfoPage";
    }

}