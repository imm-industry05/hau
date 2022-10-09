import { combineReducers } from "redux";

import auth from './authReducer'
import notify from './notifyReducer'

export default combineReducers({

    auth,
    notify
    
})