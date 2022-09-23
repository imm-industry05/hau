import React from 'react'

const Loading = () => {
    return (
        <div className = "position-fixed w-100 h-100 text-center loading" 
        style={{background: "#0008", color: "white", top: 0, left: 0, zIndex: 50}}>
            <svg xmlns="http://www.w3.org/2000/svg" width="205" height = "250" viewBox="0 0 1491.18 570.56" >        
                        <polygon className="cls-1" fill="#fff" points="385.27 570.56 83.59 570.56 0 386.55 250.08 272.95 385.27 570.56"/>
                        <polygon className="cls-2" fill="#fff" points="753.91 570.56 452.23 570.56 305.59 247.74 555.66 134.14 753.91 570.56"/>
                        <polygon className="cls-3" fill="#fff" points="1122.54 570.56 820.87 570.56 613.29 113.6 863.36 0 1122.54 570.56"/>
                        <polygon className="cls-4" fill="#fff" points="1491.18 570.56 1189.5 570.56 1105.91 386.55 1355.99 272.95 1491.18 570.56"/>
   
                <text fill = "#fff" x = "400" y = "1000">Loading</text>
            </svg>
            {/* <svg width="205" height = "250" viewBox="0 0 40 50">
                <polygon stroke = "#fff" strokeWidth="1" fill="none" points = "20,1 40,40 1,40"/>
                <text fill = "#fff" x = "5" y = "47">Loading</text>

            </svg> */}
           
        </div>
        
    )
}

export default Loading