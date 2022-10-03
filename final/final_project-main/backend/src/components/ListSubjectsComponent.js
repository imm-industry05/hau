import React, { useState, useEffect } from 'react'
import { Link } from 'react-router-dom'
import SubjectService from '../services/SubjectService'


const ListSubjectsComponents = () => {

    const [subjects, setSubjects] = useState([])

    useEffect(() => {
        getAllSubjects();
    }, [])

    const getAllSubjects = () => {
        SubjectService.getAllSubjects().then((response) => {
            setSubjects(response.data)
            console.log(response.data)
        }).catch(error => {
            console.log(error);
        })
    }

    const deleteSubject = (subjectId) => {
        SubjectService.deleteSubject(subjectId).then((respone) => {
            getAllSubjects();

        }).catch(error => {
            console.log(error)
        })
    }

    return (
            <div className="container text-center">
            <h2> List of Subjects </h2>
            <Link to="/add-subject" className="btn btn-primary mb-2">Add Subject</Link>
            <table className="table table-hover table-bordered">
                <thead className="bg-dark text-white">
                    <th> ID </th>
                    <th> Subject </th>
                    <th> Units </th>
                    <th> Action </th>
                </thead>
                <tbody>
                    {
                        subjects.map(
                            subject =>
                            <tr className="text-center" key={subject.id}>
                                <td> {subject.id} </td>
                                <td> {subject.subjectName} </td>
                                <td> {subject.units} </td>

                                <td>
                                    <Link className="btn btn-info" to={`/edit-subject/${subject.id}`} >Update</Link>
                                    <button className="btn btn-danger" onClick={() => deleteSubject(subject.id)}
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

export default ListSubjectsComponents
