package com.app.school.management.system.course;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.util.List;



@Repository
public interface CourseRepository extends JpaRepository<Course, String> {

    @Query(value = "SELECT * FROM course", nativeQuery = true)
    List<Course>  findAllCourses();
    @Query(value = "SELECT * FROM course c WHERE c.course_id=:courseId", nativeQuery = true)
    Course findCourseById(@Param("courseId") String courseId);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE course c SET c.course_name=:courseName  WHERE c.course_id=:courseId", nativeQuery = true)
    void updateCourseName(@Param("courseId") String courseId,@Param("courseName") String courseName);

}
