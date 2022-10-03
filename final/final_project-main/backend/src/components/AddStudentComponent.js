import React, { useState, useEffect } from 'react'
import { useNavigate, Link, useParams } from 'react-router-dom'
import StudentService from '../services/StudentService'


const AddStudentComponent = () => {

    const [firstName, setfirstName] = useState('')
    const [lastName, setLastName] = useState('')
    const [address, setAddress] = useState('')
    const [phone, setPhone] = useState('')
    const [emailId, setEmailId] = useState('')
    const [course, setCourse] = useState('')
    const [department, setDepartment] = useState('')

    const navigate = useNavigate();

    const {id} = useParams();

    const saveOrUpdateStudent = (e) => {
        e.preventDefault();

        const student = {firstName, lastName, address, phone, emailId, department, course}

        if(id) {
            StudentService.updateStudent(id, student).then((response) => {
                console.log(response.data)
    
                navigate('/students')
            }).catch(error => {
                console.log(error);
            })
        }else {
            StudentService.createStudent(student).then((response => {
                console.log(response.data)
    
                navigate('/students')
            })).catch(error => {
                console.log(error)
            })
        }
    }

    useEffect(() => {
        StudentService.getStudentById(id).then((response) => {
            setfirstName(response.data.firstName)
            setLastName(response.data.lastName)
            setAddress(response.data.address)
            setPhone(response.data.phone)
            setEmailId(response.data.emailId)
            setCourse(response.data.course)
            setDepartment(response.data.course)
        }).catch(error => {
            console.log(error)
        })
    }, [id])

    const title = () => {

        if(id) {
            return <h2 className="text-center">Update Student</h2>
        }else {
            return <h2 className="text-center">Add Student</h2>
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
                                <lable className="form-label"> First Name: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter First Name"
                                    name = "firstName"
                                    className = "form-control"
                                    value = {firstName}
                                    onChange = {(e) => setfirstName(e.target.value)}
                                >
                                </input>
                            </div>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Last Name: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Last Name"
                                    name = "lastName"
                                    className = "form-control"
                                    value = {lastName}
                                    onChange = {(e) => setLastName(e.target.value)}
                                >
                                </input>
                            </div>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Department: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Department"
                                    name = "department"
                                    className = "form-control"
                                    value = {department}
                                    onChange = {(e) => setDepartment(e.target.value)}
                                >
                                </input>
                            </div>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Course: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Course"
                                    name = "course"
                                    className = "form-control"
                                    value = {course}
                                    onChange = {(e) => setCourse(e.target.value)}
                                >
                                </input>
                            </div>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Address: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Address"
                                    name = "address"
                                    className = "form-control"
                                    value = {address}
                                    onChange = {(e) => setAddress(e.target.value)}
                                >
                                </input>
                            </div>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Phone: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Phone Number"
                                    name = "phone"
                                    className = "form-control"
                                    value = {phone}
                                    onChange = {(e) => setPhone(e.target.value)}
                                >
                                </input>
                            </div>

                            <div className="form-group mb-2">
                                <lable className="form-label"> Email: </lable>
                                <input
                                    type = "text"
                                    placeholder = "Enter Email"
                                    name = "emailId"
                                    className = "form-control"
                                    value = {emailId}
                                    onChange = {(e) => setEmailId(e.target.value)}
                                >
                                </input>

                            </div>

                            <button className="btn btn-success" onClick={(e) => saveOrUpdateStudent(e)}>Submit</button>
                             <Link to="/students" className="btn btn-danger">Cancel</Link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    )
}

export default AddStudentComponent
