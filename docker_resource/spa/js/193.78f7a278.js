"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[193],{193:(e,t,a)=>{a.r(t),a.d(t,{default:()=>v});var o=a(3673);const s={class:"q-pa-xl"},r=(0,o._)("br",null,null,-1);function c(e,t,a,c,l,n){const g=(0,o.up)("ItemsInventoryTable"),u=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(u,{padding:""},{default:(0,o.w5)((()=>[(0,o._)("div",s,[r,(0,o.Wm)(g,{Employee:!0,ref:"table"},null,512)])])),_:1})}var l=a(4122),n=a(2530),g=a(8554),u=a(9066),m=a(8956),h=a(5525),p=a(1115);const S={name:"ItemsInventory",components:{ItemsInventoryTable:p.Z},methods:{getResourcesLocalStorage(){(0,n.OL)().then((e=>{LocalStorage.set("Customers",e.data)})).catch((e=>{LocalStorage.set("Customers",[])})),(0,u.fN)().then((e=>{LocalStorage.set("Employees",e.data)})).catch((e=>{LocalStorage.set("Employees",[])})),(0,g.jT)().then((e=>{LocalStorage.set("Drivers",e.data)})).catch((e=>{LocalStorage.set("Drivers",[])})),(0,m.rH)().then((e=>{LocalStorage.set("Suppliers",e.data)})).catch((e=>{LocalStorage.set("Suppliers",[])})),(0,l.GR)().then((e=>{LocalStorage.set("Items",e.data)})).catch((e=>{LocalStorage.set("Items",[])})),(0,h.go)().then((e=>{LocalStorage.set("Categories",e.data)})).catch((e=>{LocalStorage.set("Categories",[])}))},mounted(){setTimeout((()=>{this.getResourcesLocalStorage()}),500)}}};var d=a(4379),L=a(7518),i=a.n(L);S.render=c;const v=S;i()(S,"components",{QPage:d.Z})}}]);