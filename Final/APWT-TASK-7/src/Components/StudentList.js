
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
                        <td><button type="button" className="btn btn-dark">Details</button></td>
                    </tr>

                    <tr>
                        <td>22</td>
                        <td>Nuzhut Tabassum</td>
                        <td>tabassumnuzhat26@gmail.com</td>
                        <td>01714442981</td>
                        <td>Dhaka</td>
                        <td><button type="button" className="btn btn-dark">Details</button></td>
                    </tr>


                    <tr>
                        <td>23</td>
                        <td>Lisa</td>
                        <td>lisa@gmail.com</td>
                        <td>01714442981</td>
                        <td>Dhaka</td>
                        <td><button type="button" className="btn btn-dark">Details</button></td>
                    </tr>

                    <tr>
                        <td>24</td>
                        <td>Nazia Tabassum</td>
                        <td>tabassumnazia27@gmail.com</td>
                        <td>01883485227</td>
                        <td>Rajsahi</td>
                        <td><button type="button" className="btn btn-dark">Details</button></td>
                    </tr>

                    <tr>
                        <td>25</td>
                        <td>Lima</td>
                        <td>lima@gmail.com</td>
                        <td>014442981</td>
                        <td>Dhaka</td>
                        <td><button type="button" className="btn btn-dark">Details</button></td>
                    </tr>

                    <tr>
                        <td>26</td>
                        <td>Esha Tabassum</td>
                        <td>esha@gmail.com</td>
                        <td>018834827</td>
                        <td>Rajsahi</td>
                        <td><button type="button" className="btn btn-dark">Details</button></td>
                    </tr>
              

            </Table>
            </div>

           

        </div>


    );
};

export default StudentList;