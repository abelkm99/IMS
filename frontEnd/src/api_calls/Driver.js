import axios from "axios";
const getDrivers = ()=>{
    var config = {
        method: 'get',
        url: '/api/driver/list_drivers',
        headers: { }
      };
      
      return axios(config)
}
const addDriver = (data)=>{
    var config = {
        method: 'post',
        url: '/api/driver/add_driver',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
    return   axios(config)
}

export default {
    getDrivers,
    addDriver,
}