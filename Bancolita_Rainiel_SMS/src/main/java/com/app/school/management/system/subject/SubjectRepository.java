package com.app.school.management.system.subject;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;


import java.util.List;


public interface SubjectRepository extends JpaRepository<Subject, Integer>{
    @Query(value="SELECT * FROM subject" ,nativeQuery=true)
    List<Subject> findAllSubjects();
    @Query(value = "SELECT * FROM subject s WHERE s.subj_code=:subjCode",nativeQuery = true )
    Subject findSubjectByCode(@Param("subjCode") Integer subjCode);
    @Query(value = "SELECT * FROM subject s INNER JOIN faculty f ON s.faculty_id=f.faculty_id " +
            "WHERE s.faculty_id=:facultyId", nativeQuery = true)
    List<Subject> findSubjectByFaculty(@Param("facultyId") Long facultyId);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE subject SET subj_title=:subjTitle WHERE subj_code=:subjCode", nativeQuery = true)
    void updateSubjectTitle(@Param("subjCode") Integer subjCode, @Param("subjTitle") String subjTitle);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE subject SET room=:room WHERE subj_code=:subjCode", nativeQuery = true)
    void updateSubjectRoom(@Param("subjCode") Integer subjCode, @Param("room") String room);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE subject SET days=:days WHERE subj_code=:subjCode", nativeQuery = true)
    void updateSubjectDays(@Param("subjCode") Integer subjCode, @Param("days") String days);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE subject SET time=:time WHERE subj_code=:subjCode", nativeQuery = true)
    void updateSubjectTime(@Param("subjCode") Integer subjCode, @Param("time") String time);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE subject SET section=:section WHERE subj_code=:subjCode", nativeQuery = true)
    void updateSubjectSection(@Param("subjCode") Integer subjCode, @Param("section") String section);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE subject SET faculty_id=:faculty WHERE subj_code=:subjCode", nativeQuery = true)
    void updateSubjectFaculty(@Param("subjCode") Integer subjCode, @Param("faculty") Long facultyId);
}
