import axios from "axios";

const getCustomers = ()=>{
    var config = {
        method: 'get',
        url: '/api/customer/list_customers',
        headers: { }
      };
      
      return axios(config);
}
const addCustomer=(data)=>{
    var config = {
        method: 'post',
        url: '/api/customer/add_customer',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
      return axios(config)
}
export default {
    getCustomers,
    addCustomer,
}