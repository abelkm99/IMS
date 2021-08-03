import axios from "axios";
const getSales = ()=>{
    var config = {
        method: 'get',
        url: '/api/get_refs',
        headers: { }
      };
      
     return  axios(config)

}
const addSales = (data)=>{
   
    var config = {
        method: 'post',
        url: '/api/purchase/make_sales',
        headers: { 
          'Content-Type': 'application/json'
        },
        data :data
      };
      
    return  axios(config)
}

const removeSales = (id)=>{
    const dt = {
        "REFNO":id
    }
    var config = {
        method: 'delete',
        url: '/api/purchase/delte_ref',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : dt
      };
      
     return axios(config)
}
export default {
    getSales,
    addSales,
    removeSales,
}