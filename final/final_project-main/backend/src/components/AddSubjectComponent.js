import React, { useState, useEffect } from 'react'
import { useNavigate, Link, useParams } from 'react-router-dom'
import SubjectService from '../services/SubjectService'


const AddSubjectComponent = () => {

    const [subjectName, setSubjectName] = useState('')
    const [units, setUnits] = useState('')


    const navigate = useNavigate();

    const {id} = useParams();

    const saveOrUpdateSubject = (e) => {
        e.preventDefault();

        const subject = {subjectName, units}

        if(id) {
            SubjectService.updateSubject(id, subject).then((response) => {
                console.log(response.data)
    
                navigate('/subjects')
            }).catch(error => {
                console.log(error);
            })
        }else {
            SubjectService.createSubject(subject).then((response => {
                console.log(response.data)
    
                navigate('/subjects')
            })).catch(error => {
                console.log(error)
            })
        }
    }

    useEffect(() => {
        SubjectService.getSubjectById(id).then((response) => {
            setSubjectName(response.data.subject)
            setUnits(response.data.value)
        }).catch(error => {
            console.log(error)
        })
    }, [id])

    const title = () => {

        if(id) {
            return <h2 className="text-center">Update Subject</h2>
        }else {
            return <h2 className="text-center">Add Subject</h2>
        }
    }

    return (
        <div>
        <br /><br />
        <div className="container">
            <div className="row">
                <div className="card col-md-6 offset-md-3 offset-md-3">
                    {
                        title()
                    }
                    <div className="card-body">
                        <form>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Subject: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Subject"
                                    name = "subjectName"
                                    className = "form-control"
                                    value = {subjectName}
                                    onChange = {(e) => setSubjectName(e.target.value)}
                                >
                                </input>
                            </div>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Units: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Units"
                                    name = "units"
                                    className = "form-control"
                                    value = {units}
                                    onChange = {(e) => setUnits(e.target.value)}
                                >
                                </input>
                            </div>

                            <button className="btn btn-success" onClick={(e) => saveOrUpdateSubject(e)}>Submit</button>
                             <Link to="/subjects" className="btn btn-danger">Cancel</Link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    )
}

export default AddSubjectComponent
