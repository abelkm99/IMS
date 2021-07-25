var axios = require('axios');


const getCategories =  ()=>{
  var config = {
    method: 'get',
    url: '/api/category/getcategories',
    headers: { }
  };
 
  return axios(config)
}
const addCategory = (data)=>{
  var config = {
    method: 'post',
    url: '/api/category/addcategory',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  axios(config)
}
export default {
  getCategories,
  addCategory,
}
