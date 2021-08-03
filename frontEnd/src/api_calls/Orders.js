import axios from "axios";

const getSalesOrders = ()=>{
    var config = {
        method: 'get',
        url: '/api/get_sales_orders',
        headers: { }
      };
      
      return axios(config);
    }
const addSalesOrder = (data)=>{
    var config = {
        method: 'post',
        url: '/api/order/make_order',
        headers: { 
          'Content-Type': 'application/json'
        },
        data : data
      };
      
    return  axios(config)
}
const removeOrder  = (id)=>{
    var config = {
        method: 'delete',
        url: `/api/order/delete_order/${id}`,
        headers: { }
      };
      
    return  axios(config);

}
export default {
    getSalesOrders,
    addSalesOrder,
    removeOrder
}