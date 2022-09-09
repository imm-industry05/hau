package com.finals.SMS.form;

import javax.validation.constraints.NotBlank;
import javax.validation.constraints.Size;

import lombok.Data;

@Data
public class StudentForm {
    private Integer id;

    @NotBlank
    @Size(min = 1, max = 20)
    private String firstname;
    @Size(min = 1, max = 20)
    private String lastname;
    @Size(max = 100)
    private String email;
    @Size(min = 1, max = 20)
    private String phone;
    @Size(min = 1, max = 20)
    private String age;
}