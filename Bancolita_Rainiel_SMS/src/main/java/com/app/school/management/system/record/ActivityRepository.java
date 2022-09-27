package com.app.school.management.system.record;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface ActivityRepository extends JpaRepository<Activity,Integer> {


    @Query(value = "SELECT * FROM activity a  WHERE a.subj_code=:subjCode AND a.period=:subjPeriod", nativeQuery = true)
    List<Activity> findAllActivitiesByCodeAndPeriod(@Param("subjCode") Integer subjCode,@Param("subjPeriod") String period);
    @Query(value = "SELECT activity_name FROM activity a  WHERE a.subj_code=:subjCode AND a.period=:subjPeriod GROUP BY activity_name,period", nativeQuery = true)
    List<String> findAllActivityNamesByCodeAndPeriod(@Param("subjCode") Integer subjCode,@Param("subjPeriod") String period);
    @Query(value = "SELECT * FROM activity a WHERE a.subj_code=:subjCode AND a.period=:subjPeriod AND a.student_id=:studentId",nativeQuery = true)
    List<Activity> findActivitiesByStudent(@Param("subjCode") Integer subjCode, @Param("subjPeriod") String period, @Param("studentId") Long studentId);
    @Query(value = "SELECT * FROM activity a WHERE a.subj_code=:subjCode AND a.period=:subjPeriod AND a.student_id=:studentId AND a.activity_name=:activityName",nativeQuery = true)
    Activity findOneActivity(@Param("subjCode") Integer subjCode, @Param("subjPeriod") String period, @Param("studentId") Long studentId,@Param("activityName") String activityName);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE activity a SET a.activity_name=:newActivityName WHERE a.subj_code=:subjCode AND a.period=:subjPeriod AND a.student_id=:studentId AND a.activity_name=:activityName",nativeQuery = true)
    void  updateActivityName(@Param("subjCode") Integer subjCode, @Param("subjPeriod") String period, @Param("studentId") Long studentId,@Param("activityName") String activityName,@Param("newActivityName") String newActivityName);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE activity a SET a.score=:score WHERE a.subj_code=:subjCode AND a.period=:subjPeriod AND a.student_id=:studentId AND a.activity_name=:activityName",nativeQuery = true)
    void  updateActivityScore(@Param("subjCode") Integer subjCode,@Param("score") Integer score, @Param("subjPeriod") String period, @Param("studentId") Long studentId,@Param("activityName") String activityName);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE activity a SET a.total_items=:totalItems WHERE a.subj_code=:subjCode AND a.period=:subjPeriod AND a.student_id=:studentId AND a.activity_name=:activityName",nativeQuery = true)
    void  updateActivityTotalItems(@Param("subjCode") Integer subjCode,@Param("totalItems") Integer totalItems, @Param("subjPeriod") String period, @Param("studentId") Long studentId,@Param("activityName") String activityName);
    @Modifying(clearAutomatically = true)
    @Query(value = "UPDATE activity a SET a.period=:newPeriod WHERE a.subj_code=:subjCode AND a.period=:subjPeriod AND a.student_id=:studentId AND a.activity_name=:activityName",nativeQuery = true)
    void  updateActivityPeriod(@Param("subjCode") Integer subjCode, @Param("subjPeriod") String period, @Param("studentId") Long studentId,@Param("activityName") String activityName, @Param("newPeriod") String newPeriod);
}
