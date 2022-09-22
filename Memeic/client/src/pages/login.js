import React, { useState } from 'react'
import { Link } from 'react-router-dom'
import { login } from '../redux/actions/authAction'
import {useDispatch} from 'react-redux'

const Login = () => {
    const initialState = {email: '', password: ''}
    const [userData, setUserData] = useState(initialState)
    const {email, password} = userData

    const dispatch = useDispatch()

    const handleChangeInput = e =>{
        const {name, value} = e.target
        setUserData({...userData, [name]:value})
    }

    const handleSubmit = e =>{
        e.preventDefault()
        dispatch(login(userData))
    }
    return(
        <div className="auth_page">
            <form onSubmit={handleSubmit}>
                <div className='Header text-center mb-4'>
                    <img src ="./Asset 3.svg" width={50}/>
                    <h3 className="text-uppercase" >Memeic</h3>
                </div>
                <div className="form-group">
                    <label htmlFor="exampleInputEmail1" className="form-label">Email address</label>
                    <input type="email" className="form-control" id="exampleInputEmail1" name="email"
                        aria-describedby="emailHelp" onChange={handleChangeInput} value={email}/>
                    
                    <small id="emailHelp" className="form-text">
                        Eka migaganaca san, eke pamie ing email mu.
                    </small>
                </div>
                <div className="form-group">
                    <label htmlFor="exampleInputPassword1" className="form-label">Password</label>
                    <input type="password" className="form-control" id="exampleInputPassword1" 
                        onChange={handleChangeInput} value={password} name="password" />
                </div>

                <button type="submit" className="btn btn-dark w-100"
                    disabled={email && password? false:true}>
                        Pasok
                </button>
                <p className="mb-2">
                    Ala kang Account? <Link to="/register" style={{color: "#9b5356"}}>Register ka pa</Link>
                </p>
            </form>
        </div>
    )
}
export default Login