import {BrowserRouter as Router, Route} from 'react-router-dom'

function App() {
  return (
    <Router>
      <input type="checkbox" id="theme"/>
      <div className="App">
        <div className="main">
          <h1>Hello Buldet</h1>
        </div>
      </div>
    </Router>
  );
}

export default App;
