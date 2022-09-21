const Users = require('../models/useModel')
const bcrypt = require('bcrypt')
const jwt = require('jsonwebtoken')

const authCtrl = {
    register:async(req, res) => {
        try{
            const {fullname, username, email, password, gender} = req.body
            let newUserName = username.toLowerCase().replace(/ /g, '')
            
            const user_name = await Users.findOne({username: newUserName})
            if(user_name) return res.status(400).json({msg: "This username already exists"})

            const user_email = await Users.findOne({email})
            if(user_name) return res.status(400).json({msg: "This email already exists"})

            if(password.length < 6)
            return res.status(400).json({msg: "Password must be at least 6 characters."})
     

            const passwordHash = await bcrypt.hash(password, 12)
            
            const newUser = new Users({
                fullname, username: newUserName, email, password: passwordHash, gender
            })
            console.log(newUser)

            const access_token = createAccessToken({id: newUser._id})
            const refresh_token = createRefreshToken({id: newUser._id})

            res.cookie('refreshtoken', refresh_token, {
                httpOnly: true,
                path: '/api/refresh_token',
                maxAge: 30*24*60*60*1000
            })

            res.json({msg: 'Register Success',
                access_token,
                user:{
                    ...newUser._doc,
                    password: ''
                }
            })
        }catch (err) {
            return res.status(500).json({msg: err.message})
        }
    },
    login:async(req, res) => {
        try{

        }catch (err) {
            return res.status(500).json({msg: err.message})
        }
    },
    logout:async(req, res) => {
        try{

        }catch (err) {
            return res.status(500).json({msg: err.message})
        }
    },
    generateAccessToken:async(req, res) => {
        try{

        }catch (err) {
            return res.status(500).json({msg: err.message})
        }
    }

}

const createAccessToken = (payload) =>{
        return jwt.sign(payload, process.env.ACCESS_TOKEN_SECRET, {expiresIn: '1d'})
}
const createRefreshToken = (payload) => {
    return jwt.sign(payload, process.env.REFRESH_TOKEN_SECRET, {expiresIn: '30d'})
}

module.exports = authCtrl