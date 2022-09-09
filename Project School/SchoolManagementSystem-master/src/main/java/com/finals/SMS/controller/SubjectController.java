package com.finals.SMS.controller;


import java.util.List;
import java.util.Optional;


import com.finals.SMS.entity.Subject;
import com.finals.SMS.form.SubjectForm;
import org.springframework.beans.BeanUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.validation.annotation.Validated;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import com.finals.SMS.service.SubjectService;
import org.springframework.web.bind.annotation.RequestParam;


@Controller
public class SubjectController {
    @Autowired
    SubjectService subjectService;

    @GetMapping("subjectList")
    String list(Model model) {
        List<Subject> subjects = subjectService.findAll();
        model.addAttribute("subjects", subjects);
        return "subjectList";
    }


    @GetMapping("subjectCreate")

    String create(@ModelAttribute SubjectForm subjectForm) {
        return "subjectCreate";
    }

    @PostMapping("subjectCreate")

    String regist(@ModelAttribute @Validated SubjectForm subjectForm, BindingResult result, Model model) {
        if (result.hasErrors()) {
            return create(subjectForm);
        }

        Subject subject = new Subject();
        BeanUtils.copyProperties(subjectForm, subject);

        subjectService.insert(subject);

        return "userInfoPage";
    }
    @PostMapping(path = "subjectEdit", params = "edit")

    String edit(@RequestParam Integer classcode, @ModelAttribute SubjectForm subjectForm) {

        Optional<Subject> subjectOpt = subjectService.selectById(classcode);

        Subject subject = subjectOpt.get();

        BeanUtils.copyProperties(subject, subjectForm);
        return "subjectEdit";
    }
    @PostMapping(path = "subjectEdit", params = "regist")

    String regist(@RequestParam Integer classcode, @Validated @ModelAttribute SubjectForm subjectForm, BindingResult result) {
        if (result.hasErrors()) {
            return edit(classcode, subjectForm);
        }

        Subject subject = new Subject();
        BeanUtils.copyProperties(subjectForm, subject);


        subjectService.update(subject);
        return "userInfoPage";
    }

    @PostMapping(path = "subjectEdit", params = "back")
    String back() {
        return "userInfoPage";
    }

    @PostMapping(path = "subjectCreate", params = "back")
    String createback() {
        return "userInfoPage";
    }

    @PostMapping(path = "subjectEdit", params = "delete")
    String delete(@RequestParam Integer classcode) {
        subjectService.delete(classcode);
        return "userInfoPage";
    }

}