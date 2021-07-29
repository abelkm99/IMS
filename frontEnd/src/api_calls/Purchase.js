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
const updatePurchase = ()=>{

}

const removePurchase = ()=>{

}
export default{
  getPurchase,
  addPurchase,
  updatePurchase,
  removePurchase,
  getGRN
}