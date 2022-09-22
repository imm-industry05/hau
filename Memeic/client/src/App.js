//import {BrowserRouter as Router, Route} from 'react-router-dom'
import {BrowserRouter, Routes, Route} from 'react-router-dom';
import PageRender from './PageRender';
import Home from './pages/home';
// import Register from './pages/register';
import Login from './pages/login';

function App() {
  return (
    <BrowserRouter>
        <input type="checkbox" id="theme"/>
        <div className="App">
          <div className="main">
            <Routes>
              <Route exact path="/" element={<Login/>} />
            </Routes>
            <Routes>
              <Route exact path="/:page/:id" element={<PageRender/>} />
            </Routes>
            <Routes>
              <Route exact path="/:page/:id" element={<PageRender/>} />
            </Routes>
          </div>
        </div>
    </BrowserRouter>
  );
}

export default App;
