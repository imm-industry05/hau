package com.app.school.management.system.registerLogin;


import com.app.school.management.system.admin.Admin;
import com.app.school.management.system.admin.AdminRepository;
import com.app.school.management.system.faculty.Faculty;
import com.app.school.management.system.faculty.FacultyRepository;
import com.app.school.management.system.student.Student;
import com.app.school.management.system.student.StudentRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Service
public class RegisterLoginService {

    private final AdminRepository adminRepo;
    private final StudentRepository studentRepo;
    private final FacultyRepository facultyRepo;

    @Autowired
    public RegisterLoginService(AdminRepository adminRepo, StudentRepository studentRepo, FacultyRepository facultyRepo) {
        this.adminRepo = adminRepo;
        this.studentRepo = studentRepo;
        this.facultyRepo = facultyRepo;
    }



    public void addAdmin(Admin admin){

        admin.setPassword(new BCryptPasswordEncoder().encode(admin.getPassword()));
        adminRepo.save(admin);
    }

    public String validateLogin(User user,String role){
        List<SimpleGrantedAuthority> authorities = new ArrayList<>();
        if(role.equals("ROLE_ADMIN")){
            Optional<Admin> admin = adminRepo.findAdminByEmail(user.getEmail());
            if(admin.isPresent()&&new BCryptPasswordEncoder().matches(user.getPassword(), admin.get().getPassword())){
                authorities.add(new SimpleGrantedAuthority(role));
                UsernamePasswordAuthenticationToken token = new UsernamePasswordAuthenticationToken(user.getEmail(),user.getPassword(),authorities);
                SecurityContextHolder.getContext().setAuthentication(token);

            }else {
                return "error";

            }
        }else if(role.equals("ROLE_STUDENT")){
            Optional<Student> student = studentRepo.findStudentByEmail(user.getEmail());
            if(student.isPresent()&&new BCryptPasswordEncoder().matches(user.getPassword(), student.get().getPassword())){
                authorities.add(new SimpleGrantedAuthority(role));
                UsernamePasswordAuthenticationToken token = new UsernamePasswordAuthenticationToken(user.getEmail(),user.getPassword(),authorities);
                SecurityContextHolder.getContext().setAuthentication(token);

            }else {
                return "error";

            }
        }else if(role.equals("ROLE_FACULTY")){
            Optional<Faculty> faculty = facultyRepo.findFacultyByEmail(user.getEmail());
            if(faculty.isPresent()&&new BCryptPasswordEncoder().matches(user.getPassword(), faculty.get().getPassword())){
                authorities.add(new SimpleGrantedAuthority(role));
                UsernamePasswordAuthenticationToken token = new UsernamePasswordAuthenticationToken(user.getEmail(),user.getPassword(),authorities);
                SecurityContextHolder.getContext().setAuthentication(token);

            }else {
                return "error";

            }
        }
        return " ";
    }






    public boolean isAuthenticatedAdmin(){
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        boolean hasUserRole = authentication.getAuthorities().stream().anyMatch(r->r.getAuthority().equals("ROLE_ADMIN"));

        if(!hasUserRole||!authentication.isAuthenticated()||authentication==null){
            return false;
        }
        return true;
    }
    public boolean isAuthenticatedStudent(){
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        boolean hasUserRole = authentication.getAuthorities().stream().anyMatch(r->r.getAuthority().equals("ROLE_STUDENT"));

        if(!hasUserRole||!authentication.isAuthenticated()||authentication==null){
            return false;
        }
        return true;
    }
    public boolean isAuthenticatedFaculty(){
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        boolean hasUserRole = authentication.getAuthorities().stream().anyMatch(r->r.getAuthority().equals("ROLE_FACULTY"));

        if(!hasUserRole||!authentication.isAuthenticated()||authentication==null){
            return false;
        }
        return true;
    }



}
