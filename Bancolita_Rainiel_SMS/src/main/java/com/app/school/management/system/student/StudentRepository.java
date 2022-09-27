package com.app.school.management.system.student;

import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.time.LocalDate;
import java.util.List;
import java.util.Optional;


@Repository
public interface StudentRepository extends CrudRepository<Student, Long> {

    @Query(value = "SELECT * from student", nativeQuery = true)
    List<Student> findAllStudents();
    @Query(value = "SELECT * FROM student s WHERE s.student_id = :studentId",nativeQuery = true)
    Optional<Student> findStudentById(@Param("studentId") Long id);
    @Query(value = "SELECT * FROM student s WHERE s.email =:email", nativeQuery = true)
    Optional<Student> findStudentByEmail(@Param("email") String email);
    @Query(value = "SELECT * FROM student s WHERE s.course_id=:courseId", nativeQuery = true)
    List<Student> findStudentsByCourseId(@Param("courseId") String courseId);
    @Query(value = "SELECT * FROM student st INNER JOIN student_subject ss ON st.student_id=ss.student_id " +
            "WHERE ss.subj_code=:subjCode", nativeQuery = true)
    List<Student> findStudentsBySubject(@Param("subjCode") Integer subjCode);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE student s SET s.birth_date =:birthDate WHERE s.student_id=:studentId", nativeQuery = true)
    void  updateStudentBirthDate(@Param("studentId") Long studentId , @Param("birthDate") LocalDate birtDate);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE student s SET s.address =:address WHERE s.student_id=:studentId", nativeQuery = true)
    void  updateStudentAddress(@Param("studentId") Long studentId , @Param("address") String address );
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE student s SET s.contact_number =:contactNumber WHERE s.student_id=:studentId", nativeQuery = true)
    void  updateStudentContactNumber(@Param("studentId") Long studentId , @Param("contactNumber") String contactNumber);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE student s SET s.email=:email WHERE s.student_id=:studentId", nativeQuery = true)
    void  updateStudentEmail(@Param("studentId") Long studentId , @Param("email") String email);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE student s SET s.password=:password WHERE s.student_id=:studentId", nativeQuery = true)
    void  updateStudentPassword(@Param("studentId") Long studentId , @Param("password") String password);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE student s SET s.course_id=:courseId WHERE s.student_id=:studentId", nativeQuery = true)
    void  updateStudentCourseId(@Param("studentId") Long studentId , @Param("courseId") String courseId);


}
