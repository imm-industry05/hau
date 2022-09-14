import axios from 'axios'

const SUBJECT_BASE_REST_API_URL = 'http://localhost:8080/api/v1/subjects';

class SubjectService {

    getAllSubjects() {
        return axios.get(SUBJECT_BASE_REST_API_URL)
    }

    createSubject(subject){
        return axios.post(SUBJECT_BASE_REST_API_URL, subject)
    }

    getSubjectById(subjectId) {
        return axios.get(SUBJECT_BASE_REST_API_URL + '/' + subjectId)
    }

    updateSubject(subjectId, subject) {
        return axios.put(SUBJECT_BASE_REST_API_URL + "/" + subjectId, subject)
    }

    deleteSubject(subjectId) {
        return axios.delete(SUBJECT_BASE_REST_API_URL + '/' + subjectId)
    }
}

export default new SubjectService();