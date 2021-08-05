import axios from "axios";
const getAllPersonnalAccounts = ()=>{
    

    var config = {
        method: 'get',
        url: '/api/personalBankAccount/Accounts',
        headers: { }
      };
      
      return axios(config)
}
const addPersonlaAccount = (data)=>{
    var config = {
        method: 'post',
        url: '/api/personalBankAccount/add_bank_account',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
     return  axios(config)
}
const addTransaction = (data)=>{
    var config = {
        method: 'post',
        url: '/api/personalBankAccount/add_transaction',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
      return axios(config)

}
 const getTransaction= (id)=>{
    var config = {
        method: 'get',
        url: ` /api/personalBankAccount/getBankAccount_transactions/${id}`,
        headers: { }
      };
      
     return  axios(config)
 }
 const removeBankAccount = (data)=>{
  var config = {
    method: 'delete',
    url: '/api/personalBankAccount/delete_bank_account',
    headers: { 
      'Content-Type': 'application/json'
    },
    data : data
  };
  
  return axios(config)
 }
 export default {
    getAllPersonnalAccounts,
    addPersonlaAccount,
    addTransaction,
    getTransaction,
    removeBankAccount

 }