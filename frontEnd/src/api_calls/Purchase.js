import axios from "axios";
const getPurchase = ()=>{

  var config = {
    method: 'get',
    url: '/api/get_purchase_orders',
    headers: {}
  };
  
  return  axios(config)
}
//@ get GRN 
const getGRN  =  ()=>{
  var config = {
    method: 'get',
    url: '/api/get_grns',
    headers: { }
  };
  
  return axios(config)
}
const addPurchase = (data)=>{
    var config = {
        method: 'post',
        url: '/api/purchase/make_purchase',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
      return axios(config);

}
const removePurchase = (id)=>{
  const data = {
    "GRNNO":id
  }
  var config = {
    method: 'delete',
    url: '/api/purchase/delte_grn',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return   axios(config)

}
// @ get not delivered
const getNotDelivered = ()=>{
  var config = {
    method: 'get',
    url: '/api/grn_not_delivered',
    headers: { }
  };
  
  return axios(config)
}

const updateGRN = (data)=>{
  var config = {
    method: 'put',
    url: '/api/purchase/update_grn',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return  axios(config);
}
const updatePurchase = (data)=>{
  
  var config = {
    method: 'put',
    url: '/api/purchase/update_purchase',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  }
  
  return axios(config)
}

const removeItem = (id)=>{
  var config = {
    method: 'delete',
    url: '/api/purchase/delete_purchase',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : id
  };
  
  return axios(config);
}
export default{
  getPurchase,
  addPurchase,
  removePurchase,
  getGRN,
  getNotDelivered,
  updateGRN,
  updatePurchase,
  removeItem,
}