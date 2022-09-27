package com.app.school.management.system.department;


import com.app.school.management.system.course.Course;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface DepartmentRepository extends JpaRepository<Department, String> {
    @Query(value = "SELECT * FROM department", nativeQuery = true)
    List<Department> findAllDepartments();
    @Query(value = "SELECT * FROM department d WHERE d.department_id=:departmentId", nativeQuery = true)
    Department findDepartmentById(@Param("departmentId") String departmentId);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE department d SET d.department_name=:departmentName  WHERE d.department_id=:departmentId", nativeQuery = true)
    void updateDepartmentName(@Param("departmentId") String departmentId,@Param("departmentName") String departmentName);
}
