import React from 'react';
import BannerImage from './components/BannerImage';
import PhotoEntry from './components/PhotoEntry';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <BannerImage/>
        <div>
          <h1>Welcome to Mymes</h1>
          <h3>Lansangan Angel Gregory</h3>
          <PhotoEntry src="horse.jpg" caption="Caption" title="Title"/>
        </div>
      </header>
    </div>
  );
}

export default App;
