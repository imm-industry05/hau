package com.app.school.management.system.faculty;


import com.app.school.management.system.department.Department;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.time.LocalDate;
import java.util.List;
import java.util.Optional;

@Repository
public interface FacultyRepository extends JpaRepository<Faculty, Long> {
    @Query(value = "SELECT * FROM faculty",nativeQuery = true)
    List<Faculty> findAllFaculty();
    @Query(value= "SELECT * FROM faculty f WHERE f.faculty_id=:facultyId", nativeQuery=true)
    Faculty findFacultyById(@Param("facultyId") Long facultyId );
    @Query(value= "SELECT * FROM faculty f WHERE f.email=:email", nativeQuery=true)
    Optional<Faculty> findFacultyByEmail(@Param("email") String email);
    @Query(value = "SELECT * FROM faculty f WHERE f.department_id=:departmentId", nativeQuery = true)
    Optional<Faculty> findFacultyByDepartment(@Param("departmentId") String departmentId);
    @Query(value = "SELECT * FROM faculty f WHERE f.department_id=:departmentId", nativeQuery = true)
    List<Faculty> findAllFacultyByDepartment(@Param("departmentId") String departmentId);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE faculty f SET f.birth_date =:birthDate WHERE f.faculty_id=:facultyId", nativeQuery = true)
    void  updateFacultyBirthDate(@Param("facultyId") Long facultyId , @Param("birthDate") LocalDate birtDate);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE faculty f SET f.address =:address WHERE f.faculty_id=:facultyId", nativeQuery = true)
    void  updateFacultyAddress(@Param("facultyId") Long facultyId , @Param("address") String address );
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE faculty f SET f.contact_number =:contactNumber WHERE f.faculty_id=:facultyId", nativeQuery = true)
    void  updateFacultyContactNumber(@Param("facultyId") Long facultyId , @Param("contactNumber") String contactNumber);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE faculty f SET f.email=:email WHERE f.faculty_id=:facultyId", nativeQuery = true)
    void  updateFacultyEmail(@Param("facultyId") Long facultyId , @Param("email") String email);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE faculty f SET f.password=:password WHERE f.faculty_id=:facultyId", nativeQuery = true)
    void  updateFacultyPassword(@Param("facultyId") Long facultyId , @Param("password") String password);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE faculty f SET f.department_id=:departmentId WHERE f.faculty_id=:facultyId", nativeQuery = true)
    void  updateFacultyDepartmentId(@Param("facultyId") Long facultyId , @Param("departmentId") String departmentId);


}
