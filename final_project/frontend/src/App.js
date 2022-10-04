import './App.css';
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom';
// import FooterComponent from './components/FooterComponent';
import HeaderComponent from './components/HeaderComponent';
import ListStudentsComponent from './components/ListStudentsComponent';
import AddStudentComponent from './components/AddStudentComponent';
import Home from './components/Home';
import ListSubjectsComponents from './components/ListSubjectsComponent';
import AddSubjectComponent from './components/AddSubjectComponent';
import ListTeacherComponents from './components/ListTeacherComponent';
import AddTeacherComponent from './components/AddTeacherComponent';

function App() {
  return (
    <div>
      <Router>
        <HeaderComponent />
          <div className="container">
            <Routes>
              localhost:3000/students
              <Route exact path="/" element={<Home/>}></Route>
              <Route path="/students" element={<ListStudentsComponent/>}></Route>
              <Route path="/add-student" element={<AddStudentComponent/>}></Route>
              <Route path="/edit-student/:id" element={<AddStudentComponent/>}></Route>

              <Route path="/subjects" element={<ListSubjectsComponents/>}></Route>
              <Route path="/add-subject" element={<AddSubjectComponent/>}></Route>
              <Route path="/edit-subject/:id" element={<AddSubjectComponent/>}></Route>

              <Route path="/teachers" element={<ListTeacherComponents/>}></Route>
              <Route path="/add-teacher" element={<AddTeacherComponent/>}></Route>
              <Route path="/edit-teacher/:id" element={<AddTeacherComponent/>}></Route>



            </Routes>
          </div>

        {/* <FooterComponent /> */}
      </Router>
    </div>
  );
}

export default App;
