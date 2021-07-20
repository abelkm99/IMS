import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Dashboard from "../views/DashboardView.vue"
import AddPurchase from "../components/AddPurchase";
import ViewPurchase from "../components/ViewPurchase";
import Shipment from "../components/Shipment.vue";
import MakeOrder from "../components/MakeOrder.vue";
import AddSales from "../components/AddSales.vue";
import ViewSales from "../components/ViewSales.vue";
import Login from "../views/Login.vue";
import AdminDashboard from "../views/AdminDashboard.vue";
import AddEmployees from "../components/AddEmployees.vue";
import AddOrder from "../components/AddOrder.vue";
import ViewOrder from "../components/ViewOrder.vue";
import ViewOrderId from "../components/ViewOrderId.vue";
Vue.use(VueRouter)
const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path:"/dashboard",
    name:"Dashboard",
    component:Dashboard,
    children:[
   {
      path:"purchase",
        name:"AddPurchase",
        component:AddPurchase,

      },{
        path:'viewpurchase',
        name:"ViewPurchase",
        component:ViewPurchase
      },{
        path:"shipment",
        name:"shipment",
        component:Shipment
      },{
        path:"orders",
        name:"orders",
        component:MakeOrder
      },{
        path:"makeOrder",
        name:"MakeOrder",
        component:MakeOrder
      },{
        path:"addOrder",
        name:"AddOrder",
        component:AddOrder
      },{
        path:"viewOrder",
        name:"View Order",
       component:ViewOrder
      },{
        path:"viewOrder/:id",
        name:"ViewOrderId",
        component:ViewOrderId
      
      },{
        path:"sales",
        name:"sales",
        component:AddSales
      },{
        path:"viewSales",
        name:"ViewSales",
        component:ViewSales
      },{
        path:"addSales",
        name:"addSales",
        component:AddSales
      }
    ]
  },{
    path:"/login",
    name:"login",
    component:Login
  },{
    path:"/adminDashboard",
    name:"AdminDashboard",
    component:AdminDashboard,
    children:[
      {
        path:"addEmployees",
        name:"AddEmployee",
        component:AddEmployees
      }
    ]
  }
 
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
