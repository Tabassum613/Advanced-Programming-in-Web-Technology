import Header from './Header'
import {withRouter} from 'react-router-dom'
import {useState,useEffect} from 'react'


function Update(props){
    const [data,setData]=useState([])

    console.warn("props",props.match.params.id)

    useEffect(()=>{
        async function fetchMyAPI(){
            let result=await fetch("http://127.0.0.1:8000/api/updateVendor/"+props.match.params.id);
            result= await result.json();
            setData(result)

        }
        fetchMyAPI()
    },[])

    
    return(
        <div>
            <Header/>
            <h1>Update page</h1>
            <input type="text" defaultValue={data.name}/> <br/> <br/>
            <input type="text" defaultValue={data.number}/> <br/> <br/>
            <input type="text" defaultValue={data.address}/> <br/> <br/>
            <input type="text" defaultValue={data.password}/> <br/> <br/>
            <button>Update</button>
        </div>
    )

}
export default withRouter(Update)