import axios from "axios";

const addSupplier = (data)=>{
    var config = {
        method: 'post',
        url: '/api/supplier/addSupplier',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
       return axios(config)
};
const getSuppliers = ()=>{
  var config = {
    method: 'get',
    url: '/api/supplier/listSuppliers',
    headers: { }
  };
  
  return axios(config)
}

const addBankAccount =  (data)=>{
  var config = {
    method: 'post',
    url: '/api/supplier/add_supplier_bankaccount',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return axios(config)
}


export default {

    addSupplier,
    getSuppliers,
    addBankAccount,

}