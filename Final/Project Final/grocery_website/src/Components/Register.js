import React,{useState,useEffect} from "react"
import {useHistory} from "react-router-dom";
import Header from './NavBar'

function Register(){

    useEffect(()=>{
        if(localStorage.getItem('user-info')){
                history.push('/add')
        }
    },[])

    const [name,setName]=useState("")
    const [password,setPassword]=useState("")
    const [email,setEmail]=useState("")
    const [number,setPhone]=useState("")
    const [address,setAddress]=useState("")
    const history=useHistory();


    async function signUp(){
            let item={name,email,password,number,address}
            console.warn(item)

            let result = await fetch("http://127.0.0.1:8000/api/registervendor",{
                method: 'POST',
                body:JSON.stringify(item),
                headers:{
                    "Content-Type":'application/json',
                    "Accept":'application/json'
                }
            })

            result=await result.json()
            console.warn("result",result)
            localStorage.setItem("user-info",JSON.stringify(result))
            history.push("/add")
    }

    return(        
       
            <>
            <Header/>
            <div className="col-sm-6 offset-sm-3">
                <h1 align="center">Register Page</h1>
                <input type="text" value={name} onChange={(e)=>setName(e.target.value)} className="form-control" placeholder="Enter your name" />
                <br />
                <br />
                <input type="text" value={email} onChange={(e)=>setEmail(e.target.value)} className="form-control" placeholder="Enter your email" />
                <br />
                <br />
                <input type="password" value={password} onChange={(e)=>setPassword(e.target.value)} className="form-control" placeholder="Enter your password" />
                <br />
                <br />
                <input type="text" value={number} onChange={(e)=>setPhone(e.target.value)} className="form-control" placeholder="Enter your Number" />
                <br />
                <br />
                <input type="text" value={address} onChange={(e)=>setAddress(e.target.value)} className="form-control" placeholder="Enter your Address" />
                <br />
                <br />
                <button onClick={signUp} className="btn btn-primary">Sign Up</button>
            </div>
            </>
       
    )

}
export default Register