import React, { useState, useEffect } from 'react'
import { Link } from 'react-router-dom'
import StudentService from '../services/StudentService'


const ListStudentComponents = () => {

    const [students, setStudents] = useState([])

    useEffect(() => {
        getAllStudents();
    }, [])

    const getAllStudents = () => {
        StudentService.getAllStudents().then((response) => {
            setStudents(response.data)
            console.log(response.data)
        }).catch(error => {
            console.log(error);
        })
    }

    const deleteStudent = (studentId) => {
        StudentService.deleteStudent(studentId).then((respone) => {
            getAllStudents();

        }).catch(error => {
            console.log(error)
        })
    }

    return (
            <div className="container text-center">
            <h2> List of Students </h2>
            <Link to="/add-student" className="btn btn-primary mb-2">Add Student</Link>
            <table className="table table-hover table-bordered">
                <thead className="bg-dark text-white">
                    <th> ID </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Department </th>
                    <th> Course </th>
                    <th> Address </th>
                    <th> Phone </th>
                    <th> Email </th>
                    <th> Action </th>
                </thead>
                <tbody>
                    {
                        students.map(
                            student =>
                            <tr className="text-center" key={student.id}>
                                <td> {student.id} </td>
                                <td> {student.firstName} </td>
                                <td> {student.lastName} </td>
                                <td> {student.department} </td>
                                <td> {student.course} </td>
                                <td> {student.address} </td>
                                <td> {student.phone} </td>
                                <td> {student.emailId} </td>
                                <td>
                                    <Link className="btn btn-info" to={`/edit-student/${student.id}`} >Update</Link>
                                    <button className="btn btn-danger" onClick={() => deleteStudent(student.id)}
                                     style = {{marginLeft:"10px"}}>Delete</button>
                                </td>
                            </tr>
                        )
                    }
                </tbody>
            </table>
        </div>
    )
}

export default ListStudentComponents
