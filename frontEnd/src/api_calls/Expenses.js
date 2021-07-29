import axios from "axios";
//@ loading Expense 

// addLoadingExpense
const addLoadingExpense = (data)=>{
    var config = {
        method: 'post',
        url: '/api/expence/loadingExpence/add_loading_expence',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
      return axios(config)
}

// get Loading Expense
const getLoadingExpense = ()=>{
    var config = {
        method: 'get',
        url: '/api/expence/loadingExpence/get_loading_expence',
        headers: { }
      };
      
      return axios(config)

}

// removeLoadingExpense

const removeLoadingExpense = (data)=>{
  console.log(data);
  var config = {
    method: 'delete',
    url: `/api/expence/loadingExpence/delete_loading_expence/${data}`,
    headers: { }
  };
  
  return axios(config)
}

// @unloading Expenses

const getUnloadingExpense = ()=>{

  var config = {
    method: 'get',
    url: '/api/expence/unloadingExpence/get_unloading_expence',
    headers: { }
  };
  
  return axios(config)
}
// add unloading expense
const addUnloadingExpense = (data)=>{
  var config = {
    method: 'post',
    url: '/api/expence/unloadingExpence/add_unloading_expence',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return axios(config)
}
// remove unloading expense
const removeUnloadingExpense = (id)=>{

  var config = {
    method: 'delete',
    url: `/api/expence/unloadingExpence/delete_unloading_expence/${id}`,
    headers: { }
  };
  
 return  axios(config)
}
// @ salary expense

// getSalaryExpense

const getSalaryExpense = ()=>{
  var config = {
    method: 'get',
    url: '/api/expence/salary/get_salary_expense',
    headers: { }
  };
  
 return  axios(config)
}

// addSalaryExpense

const addSalaryExpense = (data)=>{
  var config = {
    method: 'post',
    url: '/api/expence/salary/add_salary_expence',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
 return  axios(config)

}

// removeSalaryExpense

const removeSalaryExpense  = (id)=>{
  var config = {
    method: 'delete',
    url: `/api/expence/salary/delete_salary_expence/${id}`,
    headers: { }
  };
  
return axios(config)

}
// @ masatefiya Expenses

//  getMasatefiyaExpense
const getMasatefiyaExpense = ()=>{
  var config = {
    method: 'get',
    url: '/api/expence/masatefiya/get_masatefiya_expense',
    headers: { }
  };
  
  return axios(config)
}
//  addMasatefiyaExpense
const  addMasatefiyaExpense = (data)=>{
  var config = {
    method: 'post',
    url: '/api/expence/masatefiya/add_masatefiya_expence',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
 return  axios(config)
}
// removeMasatefiyaExpense
const removeMasatefiyaExpense = (id)=>{
  var config = {
    method: 'delete',
    url: `/api/expence/masatefiya/delete_masatefiya_expence/${id}`,
    headers: { }
  };
  
  return axios(config)

}
//@ other Expensetypes

//  getOtherExpenseType
const getOtherExpenseType = ()=>{
  var config = {
    method: 'get',
    url: '/api/expence/OET/get_OET',
    headers: { }
  };
  
  return axios(config)
}

// addotherExpenseType
const addOtherExpenseType = (data)=>{
  var config = {
    method: 'post',
    url: '/api/expence/OET/add_OET',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return axios(config)
}
// removeOtherExpenseType
const removeOtherExpenseType = (id)=>{
  
  var config = {
    method: 'delete',
    url: `/api/expence/OET/delete_OET/${id}`,
    headers: { }
  };
  
  return axios(config)

}
// @ other expenses


// getOtherExpenses
const getOtherExpense = () =>{

  var config = {
    method: 'get',
    url: '/api/expence/OEL/get_OEL',
    headers: { }
  };
  
  return axios(config)
}
// addOtherExpense
const addOtherExpense = (data)=>{
  var config = {
    method: 'post',
    url: '/api/expence/OEL/add_OEL',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return axios(config)
}
// removeOtherExpense 
const removeOtherExpense = (id)=>{
   var data = '';
  var config = {
    method: 'delete',
    url: `/api/expence/OEL/delete_OEL/${id}`,
    headers: { },
    data : data
  };
  
return  axios(config)
}
export default {
    addLoadingExpense,
    getLoadingExpense,
    removeLoadingExpense,
    getUnloadingExpense,
    addUnloadingExpense,
    removeUnloadingExpense,
    getSalaryExpense,
    addSalaryExpense,
    removeSalaryExpense,
    getMasatefiyaExpense,
    addMasatefiyaExpense,
    removeMasatefiyaExpense,
    getOtherExpense,
    addOtherExpense,
    removeOtherExpense,
    getOtherExpenseType,
    addOtherExpenseType,
    removeOtherExpenseType



}