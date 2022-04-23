import React from 'react';
import Header from './NavBar';
import {Table} from 'react-bootstrap'

const StudentList = () => {
    return (
        <div>
            <Header/>
            <h1 align="center">Vendor List</h1>
            <div className="col-sm-6 offset-sm-3">
            <Table>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Number</td>
                    <td>Address</td>
                    <td>Operations</td>
                </tr>

             
                    <tr>
                        <td>21</td>
                        <td>Binti</td>
                        <td>bintit@gmail.com</td>
                        <td>01714442981</td>
                        <td>Dhaka</td>
                        <td><button className="btn btn-primary">Delete</button></td>
                        <td><button className="btn btn-primary">Update</button></td>
                    </tr>

                    <tr>
                        <td>22</td>
                        <td>Nuzhut Tabassum</td>
                        <td>tabassumnuzhat26@gmail.com</td>
                        <td>01714442981</td>
                        <td>Dhaka</td>
                        <td><button className="btn btn-primary">Delete</button></td>
                        <td><button className="btn btn-primary">Update</button></td>
                    </tr>


                    <tr>
                        <td>23</td>
                        <td>Lisa</td>
                        <td>lisa@gmail.com</td>
                        <td>01714442981</td>
                        <td>Dhaka</td>
                        <td><button className="btn btn-primary">Delete</button></td>
                        <td><button className="btn btn-primary">Update</button></td>
                    </tr>

                    <tr>
                        <td>25</td>
                        <td>Nazia Tabassum</td>
                        <td>tabassumnazia27@gmail.com</td>
                        <td>01883485227</td>
                        <td>Rajsahi</td>
                        <td><button className="btn btn-primary">Delete</button></td>
                        <td><button className="btn btn-primary">Update</button></td>
                    </tr>
              

            </Table>
            </div>

           

        </div>


    );
};

export default StudentList;