import React from 'react';
import {
  BrowserRouter as Router,
  Switch,
  Route
} from "react-router-dom";
import Register from './Components/Register';
import StudentList from './Components/StudentList';
import Login from './Components/Login';
import Home from './Components/Home';
// import Update from './Components/Update';

const App = () => {
  return (
    <div>
      <Router>
        <Switch>

          <Route path="/register">
            <Register />
          </Route>

          <Route path="/signIn">
          <Login/>
          </Route>

          <Route path="/vendorList">
            <StudentList />
          </Route>

          <Route path="/">
            <Home />
          </Route>

          {/* <Route path="/update">
            <Update />
          </Route> */}

        </Switch>
      </Router>
    </div>
  );
};

export default App;