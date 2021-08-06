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

const updateSupplierBank = (data)=>{

  var config = {
    method: 'put',
    url: '/api/supplier/update_supplier_bankaccount',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
 return  axios(config)
}
const updateSupplier = (data)=>{
  
  var config = {
    method: 'put',
    url: '/api/supplier/updateSupplier',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
 return  axios(config)

}
const removeSupplier = (id)=>{
  var config = {
    method: 'delete',
    url: '/api/supplier/deleteSupplier',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : id
  };
  
  return axios(config)

}
const removeSupplierBank = (id)=>{
  var config = {
    method: 'delete',
    url: `/api/supplier/delete_supplier_bankaccount/${id}`,
    headers: { }
  };
  
return   axios(config);

}
export default {

    addSupplier,
    getSuppliers,
    addBankAccount,
    updateSupplierBank,
    updateSupplier,
    removeSupplier,
    removeSupplierBank,

}