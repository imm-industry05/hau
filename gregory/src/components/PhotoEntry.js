import React from 'react';
import './master.css';

class PhotoEntry extends React.Component {

  render() {

    console.log("this.props.caption = " + this.props.caption);
    console.log("this.props.title = " + this.props.title);
    console.log("this.props.src = " + this.props.src);
    console.log("-------------------------------");
    
    const image_path = "../images/" + this.prop.src;

    return <div className="photo-entry-block" >
              <a href={image_path}>
                 <img className="photo-img" src={image_path} alt={image_path} />
              </a>
              <h5>{this.props.title}</h5>
              <h6>{this.props.catpion}</h6>
           </div>
  }

}

export default PhotoEntry;
