"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[651],{651:(e,a,r)=>{r.r(a),r.d(a,{default:()=>b});var t=r(3673);const s={class:"q-gutter-md row justify-center q-pa-lg"},l={class:"row q-gutter-md"},n={class:"row q-gutter-md"},o={class:"flex flex-center"};function d(e,a,r,d,c,i){const u=(0,t.up)("DriverHeader"),m=(0,t.up)("q-input"),p=(0,t.up)("q-select"),h=(0,t.up)("q-btn"),v=(0,t.up)("q-form"),g=(0,t.up)("DriversTable"),f=(0,t.up)("q-page");return(0,t.wg)(),(0,t.j4)(f,{padding:""},{default:(0,t.w5)((()=>[(0,t.Wm)(u,{Employee:!0}),(0,t._)("div",s,[(0,t.Wm)(v,{onSubmit:i.onSubmit,onReset:i.onReset,class:"row q-gutter-md"},{default:(0,t.w5)((()=>[(0,t._)("div",l,[(0,t.Wm)(m,{color:"secondary",modelValue:c.search_data.DriverName,"onUpdate:modelValue":a[0]||(a[0]=e=>c.search_data.DriverName=e),type:"text",label:"Driver Name",outlined:"",filled:""},null,8,["modelValue"]),(0,t.Wm)(p,{color:"secondary",style:{width:"200px"},modelValue:c.search_data.order,"onUpdate:modelValue":a[1]||(a[1]=e=>c.search_data.order=e),options:["Ascending ","Descending "],label:"Order Type",filled:""},null,8,["modelValue"])]),(0,t._)("div",n,[(0,t.Wm)(h,{label:"Search",icon:"search",type:"submit",color:"secondary"}),(0,t.Wm)(h,{label:"Reset",type:"reset",color:"negative",flat:"",class:"q-ml-sm"})])])),_:1},8,["onSubmit","onReset"])]),(0,t._)("div",o,[(0,t.Wm)(g,{ref:"DT"},null,512)])])),_:1})}var c=r(2678),i=r(4944);const u={name:"Drivers",components:{DriverHeader:c.Z,DriversTable:i.Z},data(){return{search_data:{page:1,DriverName:"",order:"Ascending"}}},methods:{onSubmit(){this.$refs.DT.set_search_data(this.search_data)},onReset(){this.search_data={page:1,DriverName:"",order:"Ascending"}}}};var m=r(4379),p=r(5269),h=r(4842),v=r(8516),g=r(2165),f=r(7518),_=r.n(f);u.render=d;const b=u;_()(u,"components",{QPage:m.Z,QForm:p.Z,QInput:h.Z,QSelect:v.Z,QBtn:g.Z})}}]);