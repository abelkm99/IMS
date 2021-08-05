import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Dashboard from "../views/DashboardView.vue"
import AddPurchase from "@/components/AddPurchase";
import ViewPurchase from "@/components/ViewPurchase";
import Shipment from "@/components/Shipment.vue";
import AddSales from "@/components/AddSales.vue";
import ViewSales from "@/components/ViewSales.vue";
import Login from "../views/Login.vue";
import AdminDashboard from "../views/AdminDashboard.vue";
import AddEmployees from "@/components/AddEmployees.vue";
import AddOrder from "@/components/AddOrder.vue";
import ViewOrder from "@/components/ViewOrder.vue";
import ViewOrderId from "@/components/ViewOrderId.vue";
import AddLoadingExpense from "@/components/AddLoadingExpense.vue";
import AddSupplier from "@/components/AddSupplier.vue";
import AddDeriver from "@/components/AddDeriver.vue";
import AddExpenseType from "@/components/AddExpenseType.vue";
import AddItem from  "@/components/AddItem.vue";
import ViewItem from "@/components/ViewItem.vue";
import ViewEmployees from "@/components/ViewEmployees.vue";
import AddItemCategory from  "@/components/AddItemCategory.vue";
import viewCategories from "@/components/ViewCategories.vue";
import ViewSupplier from "@/components/ViewSupplier.vue";
import AddUnloadingExpense from "@/components/AddUnloadingExpense.vue";
import AddSalaryExpense from "@/components/AddSalaryExpense.vue";
import AddMasatefiyaExpense from "@/components/AddMasatefiyaExpense.vue";
import AddOtherExpenseType from "@/components/AddOtherExpenseType.vue";
import AddOtherExpense from  "@/components/AddOtherExpense.vue";
import AddCustomer from "@/components/AddCustomer.vue";
import ViewCustomer from "@/components/ViewCustomer.vue";
import ViewDriver from "@/components/ViewDriver.vue";
import  ShipToWareHouse from  "@/components/ShipToWareHouse.vue";
import AddBill from "@/components/AddBill.vue";
import Billtypes from "@/components/BillTypes.vue";
import BankAccounts from '@/components/BankAccounts.vue';
import AddBank from  "@/components/AddBank.vue";
 Vue.use(VueRouter);
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
        path:"driver",
        name:"Driver",
        component:AddDeriver
      },{
        path:"shipment",
        name:"shipment",
        component:Shipment
      },{
        path:"shipToWareHouse",
        name:"SHIPWAREHOUSE",
        component:ShipToWareHouse
      },{
        path:"orders",
        name:"orders",
        component:AddOrder
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
        path:"purchase",
          name:"AddPurchase",
          component:AddPurchase,
  
        },{
          path:'viewpurchase',
          name:"ViewPurchase",
          component:ViewPurchase
        },
      {
        path:"employees",
        name:"AddEmployee",
        component:AddEmployees
      },{
      path:"customer",
        name:"ADD CUSTOMER",
        component:AddCustomer
      },{
       path:"viewCustomer",
       name:"view customer",
       component:ViewCustomer 
      },{
        path:"viewEmployees",
        name:"ViewEmployees",
        component:ViewEmployees
      },{
       path:"itemCategory",
       name:"Add Item Category",
       component:AddItemCategory
      },{
        path:"viewCategory",
        name:"View Category",
        component:viewCategories
      },{
        path:"expenses",
        name:"Expenses",
        component:AddLoadingExpense
      },{
        path:"bill",
        name:"Add Bill",
        component:AddBill
      },{
        path:"billTypes",
        name:"Add Bill",
        component:Billtypes
      },{
        path:"unloadingExpense",
        name:"Unloading Expense",
        component:AddUnloadingExpense
      },{
        path:"salaryExpense",
        name:"Salary Expense",
        component:AddSalaryExpense
      },
      {
        path:"masatefiyaExpense",
        name:"Masatefiya Expense",
        component:AddMasatefiyaExpense
      },{
        path:"otherExpenseType",
        name:"Other Expense Type",
        component:AddOtherExpenseType
      },{
        path:"otherExpense",
        name:"Other Expense",
        component:AddOtherExpense
      }
      ,{
        path:"supplier",
        name:"Supplier",
        component:AddSupplier
      }
      ,{
        path:"viewSupplier",
        name:"view Supplier",
        component:ViewSupplier
      },
      {
        path:"driver",
        name:"Deriver",
        component:AddDeriver
      },{
        path:"viewDriver",
        name:"Deriver",
        component:ViewDriver
      },{
        path:"addType",
        name:"AddType",
        component:AddExpenseType
      },{
        path:"item",
        name:"AddItem",
        component:AddItem,

      },{
        path:"viewItem",
        name:"AddItem",
        component:ViewItem,

      },{
        path:"banks",
        name:"Banks",
        component:BankAccounts
      },{
        path:"addBank",
        name:"addBank",
        component:AddBank

      }
    ]
  }
 
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})
router.beforeEnter
export default router
