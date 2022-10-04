import React from 'react'
import { Link } from 'react-router-dom'
import Logo from '../img/hau.png'
import '../../src/App.css'


const HeaderComponent = () => {
    return (
        <div>
            <header>
                <nav className="navbar navbar-expand-md">
                    <div>
                        <a href="/" className="navbar-brand">
                        <img src={Logo} alt="Logo" />
                        </a>

                        <Link to="/students" className="btn btn-danger" style={{marginRight: "25px"}}>Students</Link>
                        <Link to="/teachers" className="btn btn-secondary" style={{marginRight: "25px"}}>Teachers</Link>
                        <Link to="/subjects" className="btn btn-danger" style={{marginRight: "25px"}}>Subjects</Link>
                    </div>
                </nav>
            </header>
        </div>
    )
}

export default HeaderComponent