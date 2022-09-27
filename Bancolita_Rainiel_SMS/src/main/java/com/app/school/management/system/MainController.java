package com.app.school.management.system;


import com.app.school.management.system.registerLogin.RegisterLoginService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller

public class MainController {

    private final RegisterLoginService registerLoginService;

    @Autowired
    public MainController(RegisterLoginService registerLoginService) {
        this.registerLoginService = registerLoginService;
    }

    @GetMapping(path = " ")
    public String showMainPage(){
        if(registerLoginService.isAuthenticatedAdmin())return "redirect:/admin";
        if(registerLoginService.isAuthenticatedStudent())return "redirect:/student";
        if(registerLoginService.isAuthenticatedFaculty())return "redirect:/faculty";
        return "mainPage";
    }



}
