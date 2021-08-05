import axios from "axios";
const getAllExpenseList =  ()=>{
    var config = {
        method: 'get',
        url: '/api/expence/BL/get_BL',
        headers: { }
      };
      
    return  axios(config)
}
const getAllBillTypes = ()=>{

    var config = {
        method: 'get',
        url: '/api/expence/BT/get_BT',
        headers: { }
      };
      
     return  axios(config)
}
const addBillType = (data)=>{
    var config = {
        method: 'post',
        url: '/api/expence/BT/add_BT',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
      return axios(config)
}
const addBillExpense = (data)=>{
    var config = {
        method: 'post',
        url: '/api/expence/BL/add_BL',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
      return axios(config)
}
const removeBillExpense = (id)=>{
    var config = {
        method: 'delete',
        url: `/api/expence/BL/delete_BL/${id}`,
        headers: { }
      };      
    return  axios(config);
}
const removeBillType = (id)=>{
    var config = {
        method: 'delete',
        url: `/api/expence/BT/delete_BT/${id}`,
        headers: { }
      };
      
    return  axios(config)
}

export default {
    addBillType,
    addBillExpense,
    getAllExpenseList,
    getAllBillTypes,
    removeBillExpense,
    removeBillType
}