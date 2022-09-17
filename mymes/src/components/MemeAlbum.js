import React from "react";
import PhotoEntry from "./PhotoEntry";
import entries from './data/photo-entries';

class MemeAlbum extends React.Component{
    render(){
        console.log(entries);
        return(
        <div className="flex-container">
            {
                entries.itemlist.map((photo)=>{
                    return <PhotoEntry key={photo.src} src={photo.src} title={photo.title} caption={photo.caption}/>
                })
            }
            {/*<PhotoEntry src="Horse.jpg" title="Reverse Centaur" caption="They're real! Even playing an Instrument!"/>*/}
        </div>
        )
    }
}
export default MemeAlbum;