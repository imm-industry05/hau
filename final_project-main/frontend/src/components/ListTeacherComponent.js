import React, { useState, useEffect } from 'react'
import { Link } from 'react-router-dom'
import TeacherService from '../services/TeacherService'


const ListTeacherComponents = () => {

    const [teachers, setTeachers] = useState([])

    useEffect(() => {
        getAllTeachers();
    }, [])

    const getAllTeachers = () => {
        TeacherService.getAllTeachers().then((response) => {
            setTeachers(response.data)
            console.log(response.data)
        }).catch(error => {
            console.log(error);
        })
    }

    const deleteTeacher = (teacherId) => {
        TeacherService.deleteTeacher(teacherId).then((respone) => {
            getAllTeachers();

        }).catch(error => {
            console.log(error)
        })
    }

    return (
            <div className="container text-center">
            <h2> List of Teachers </h2>
            <Link to="/add-teacher" className="btn btn-primary mb-2">Add Teacher</Link>
            <table className="table table-hover table-bordered">
                <thead className="bg-dark text-white">
                    <th> ID </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Address </th>
                    <th> Phone </th>
                    <th> Email </th>
                    <th> Action </th>
                </thead>
                <tbody>
                    {
                        teachers.map(
                            teacher =>
                            <tr className="text-center" key={teacher.id}>
                                <td> {teacher.id} </td>
                                <td> {teacher.firstName} </td>
                                <td> {teacher.lastName} </td>
                                <td> {teacher.address} </td>
                                <td> {teacher.phone} </td>
                                <td> {teacher.emailId} </td>
                                <td>
                                    <Link className="btn btn-info" to={`/edit-teacher/${teacher.id}`} >Update</Link>
                                    <button className="btn btn-danger" onClick={() => deleteTeacher(teacher.id)}
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

export default ListTeacherComponents
