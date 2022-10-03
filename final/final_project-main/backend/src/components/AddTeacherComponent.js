import React, { useState, useEffect } from 'react'
import { useNavigate, Link, useParams } from 'react-router-dom'
import TeacherService from '../services/TeacherService'


const AddTeacherComponent = () => {

    const [firstName, setfirstName] = useState('')
    const [lastName, setLastName] = useState('')
    const [address, setAddress] = useState('')
    const [phone, setPhone] = useState('')
    const [emailId, setEmailId] = useState('')

    const navigate = useNavigate();

    const {id} = useParams();

    const saveOrUpdateTeacher = (e) => {
        e.preventDefault();

        const teacher = {firstName, lastName, address, phone, emailId}

        if(id) {
            TeacherService.updateTeacher(id, teacher).then((response) => {
                console.log(response.data)
    
                navigate('/teachers')
            }).catch(error => {
                console.log(error);
            })
        }else {
            TeacherService.createTeacher(teacher).then((response => {
                console.log(response.data)
    
                navigate('/teachers')
            })).catch(error => {
                console.log(error)
            })
        }
    }

    useEffect(() => {
        TeacherService.getTeacherById(id).then((response) => {
            setfirstName(response.data.firstName)
            setLastName(response.data.lastName)
            setAddress(response.data.address)
            setPhone(response.data.phone)
            setEmailId(response.data.emailId)
        }).catch(error => {
            console.log(error)
        })
    }, [id])

    const title = () => {

        if(id) {
            return <h2 className="text-center">Update Teacher</h2>
        }else {
            return <h2 className="text-center">Add Teacher</h2>
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

                            <button className="btn btn-success" onClick={(e) => saveOrUpdateTeacher(e)}>Submit</button>
                             <Link to="/teachers" className="btn btn-danger">Cancel</Link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    )
}

export default AddTeacherComponent
