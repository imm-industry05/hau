import React from "react";

import PhotoEntry from "./PhotoEntry";

class MemeAlbum extends React.Component{
    render(){
        return(
        <div className="flex-container">
            <PhotoEntry src="Horse.jpg" title="Reverse Centaur" caption="They're real! Even playing an Instrument!"/>
            <PhotoEntry src="diet.jpg" title="Reverse Centaur" caption="They're real! Even playing an Instrument!"/>
            <PhotoEntry src="badass.jpg" title="Reverse Centaur" caption="They're real! Even playing an Instrument!"/>
            <PhotoEntry src="run.jpg" title="Reverse Centaur" caption="They're real! Even playing an Instrument!"/>
            <PhotoEntry src="barbiepie.jpg" title="Reverse Centaur" caption="They're real! Even playing an Instrument!"/>
        </div>
        )
    }
}
export default MemeAlbum;