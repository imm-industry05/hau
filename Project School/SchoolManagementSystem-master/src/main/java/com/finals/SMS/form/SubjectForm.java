package com.finals.SMS.form;

import javax.validation.constraints.NotBlank;
import javax.validation.constraints.Size;

import lombok.Data;

@Data
public class SubjectForm {
    private Integer classcode;

    @NotBlank
    @Size(max = 100)
    private String subjectname;
    @Size(max = 20)
    private String days;
    @Size(max = 20)
    private String starttime;
    @Size(max = 20)
    private String endtime;
    @Size(max = 20)
    private String room;
    @Size(max = 20)
    private String block;
}