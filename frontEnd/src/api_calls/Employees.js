import axios from "axios";

// get Employees
const getEmployees = ()=>{
    var config = {
        method: 'get',
        url: '/api/employee/list_employees',
        headers: { }
      };
      
      return axios(config)
}

// add Employee 
const addEmployee = (data)=>{
    var config = {
        method: 'post',
        url: '/api/employee/add_employee',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
      return axios(config)
}
export default {
    getEmployees,
    addEmployee
}