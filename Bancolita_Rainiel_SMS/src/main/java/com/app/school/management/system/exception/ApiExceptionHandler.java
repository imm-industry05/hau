package com.app.school.management.system.exception;


import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;

import java.time.ZoneId;
import java.time.ZonedDateTime;



@ControllerAdvice
public class ApiExceptionHandler {
    @ExceptionHandler(value = {ApiRequestException.class})
    public ResponseEntity<Object> handleApiRequestException(ApiRequestException e){
        HttpStatus status;
        if(e.getMessage()=="The email is already taken."||e.getMessage()=="Course already exists."
                ||e.getMessage()=="Department already exists."||e.getMessage()=="Department already exists."||
        e.getMessage()=="Subject already exists." ||e.getMessage()=="Student already exists."){
            status = HttpStatus.CONFLICT;
        }else{
             status= HttpStatus.BAD_REQUEST;
        }

       ApiException apiException= new ApiException(e.getMessage(),status, ZonedDateTime.now(ZoneId.of("Z")));
       return  new ResponseEntity<>(apiException,status);
    }

}
