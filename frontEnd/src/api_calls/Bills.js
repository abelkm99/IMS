import axios from "axios";
const getAllExpenseList =  ()=>{
    var config = {
        method: 'get',
        url: '/api/expence/BL/get_BL',
        headers: { }
      };
      
    return  axios(config)
}
const addBillType = (data)=>{

}
const addBillList = (data)=>{

}

export default {
    addBillType,
    addBillList,
    getAllExpenseList
}