package com.example.demo;

import static org.assertj.core.api.Assertions.assertThat;

import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.jdbc.AutoConfigureTestDatabase;
import org.springframework.boot.test.autoconfigure.jdbc.AutoConfigureTestDatabase.Replace;
import org.springframework.boot.test.autoconfigure.orm.jpa.DataJpaTest;
import org.springframework.boot.test.autoconfigure.orm.jpa.TestEntityManager;
import org.springframework.test.annotation.Rollback;

@DataJpaTest
@AutoConfigureTestDatabase(replace = Replace.NONE)
@Rollback(true)
public class SubjectRepositoryTests {
    
    @Autowired
    private SubjectRepository repo;

    @Autowired
    private TestEntityManager subjectManager;

    @Test
    public void testCreateSubject() {
        Subject subject = new Subject();
        subject.setSubject("Calculus");
        subject.setSubjectCode("2020");

        Subject savedSubj = repo.save(subject);
        
        Subject existSubj = subjectManager.find(Subject.class, savedSubj.getId());

        assertThat(existSubj.getSubject()).isEqualTo(subject.getSubject());
    }
    
}
