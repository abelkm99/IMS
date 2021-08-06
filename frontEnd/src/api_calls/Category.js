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
  
  return axios(config)
}
const updateCategory = (data)=>{
  var config = {
    method: 'put',
    url: '/api/category/update_category',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return axios(config)
}
const removeCategory = (data)=>{
  var config = {
    method: 'delete',
    url: '/api/category/delete_category',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return axios(config)

}
export default {
  getCategories,
  addCategory,
  updateCategory,
  removeCategory
  
}
