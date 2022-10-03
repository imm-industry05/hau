import axios from 'axios'

const TEACHER_BASE_REST_API_URL = 'http://localhost:8080/api/v1/teachers';

class TeacherService {

    getAllTeachers() {
        return axios.get(TEACHER_BASE_REST_API_URL)
    }

    createTeacher(teacher){
        return axios.post(TEACHER_BASE_REST_API_URL, teacher)
    }

    getTeacherById(teacherId) {
        return axios.get(TEACHER_BASE_REST_API_URL + '/' + teacherId)
    }

    updateTeacher(teacherId, teacher) {
        return axios.put(TEACHER_BASE_REST_API_URL + "/" + teacherId, teacher)
    }

    deleteTeacher(teacherId) {
        return axios.delete(TEACHER_BASE_REST_API_URL + '/' + teacherId)
    }
}

export default new TeacherService();