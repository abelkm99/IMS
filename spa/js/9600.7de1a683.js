"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[9600],{9600:(e,s,t)=>{t.r(s),t.d(s,{default:()=>U});var a=t(3673),n=t(8880),l=t(5993),o=t.n(l);const i={class:"q-gutter-sm"},r={style:{width:"100%",height:"500%"},class:"row"},d={class:"col bg-primary"},m=(0,a._)("div",{class:"row justify-center"},[(0,a._)("h3",{style:{"font-family":"Monospace"},class:"text-white"},"Welcome")],-1),u={class:"col bg-secondary-1"},c=(0,a._)("div",{class:"row justify-center"},[(0,a._)("span",{style:{"font-family":"Monospace"},class:"text-secondary text-h3"},"Login")],-1),p={class:"q-gutter-md"},h={class:"row justify-center q-gutter-lg"},y={class:"row justify-center"};function w(e,s,t,l,w,g){const f=(0,a.up)("q-img"),b=(0,a.up)("q-input"),_=(0,a.up)("q-spinner-facebook"),v=(0,a.up)("q-btn"),Z=(0,a.up)("q-form"),k=(0,a.up)("q-page");return(0,a.wg)(),(0,a.j4)(k,{class:"flex flex-center"},{default:(0,a.w5)((()=>[(0,a._)("div",i,[(0,a._)("div",r,[(0,a._)("div",d,[m,(0,a.Wm)(f,{src:o(),ratio:16/9,"spinner-color":"primary","spinner-size":"82px"})]),(0,a._)("div",u,[c,(0,a.Wm)(Z,{onSubmit:(0,n.iM)(g.submit,["prevent"]),class:"q-gutter-md"},{default:(0,a.w5)((()=>[(0,a._)("div",p,[(0,a._)("div",h,[(0,a.Wm)(b,{color:"secondary",style:{width:"250px"},outlined:"",filled:"",modelValue:w.username,"onUpdate:modelValue":s[0]||(s[0]=e=>w.username=e),label:"username"},null,8,["modelValue"]),(0,a.Wm)(b,{color:"secondary",style:{width:"250px"},type:"password",modelValue:w.password,"onUpdate:modelValue":s[1]||(s[1]=e=>w.password=e),filled:"",label:"password",outlined:""},null,8,["modelValue"])]),(0,a._)("div",y,[(0,a.Wm)(v,{"text-color":"secondary",type:"submit",color:"white",icon:"login",size:"md",label:"Login"},{loading:(0,a.w5)((()=>[(0,a.Wm)(_)])),_:1})])])])),_:1},8,["onSubmit"])])])])])),_:1})}var g=t(589),f=(t(7153),t(3917));const b=e=>{var s={method:"post",url:"/login",headers:{},data:e};return(0,f.hi)(s)};var _=t(7428);const v={name:"Index",data(){return{username:null,password:null,submitting:!1,res:null}},methods:{myRule(e){if(null===e)return"Empty Feild!!"},submit(){if(null==this.username||""==this.username)(0,_.j)("Username Field is Empty");else if(null==this.password||""==this.password)(0,_.j)("password Field is Empty");else{this.submitting=!0;const e={username:this.username,password:this.password};b(e).then((e=>{this.submitting=!1,this.res=e.data.AdminUsername,"Admin"==e.data.Role&&(g.Z.set("AdminID",e.data.AdminID),g.Z.set("AdminUsername",e.data.AdminUsername),g.Z.set("Role",e.data.Role),g.Z.set("access_token",e.data.access_token),this.$router.push({name:"Dashboard"})),"Employee"==e.data.Role&&(g.Z.set("EmployeeID",e.data.EmployeeID),g.Z.set("EmployeeName",e.data.EmployeeName),g.Z.set("Role",e.data.Role),g.Z.set("access_token",e.data.access_token),this.$router.push({name:"Eitems-inventory"})),(0,_.U)(e.data.message)})).catch((e=>{this.submitting=!1,(0,_.j)(e.response.data.message)}))}}}};var Z=t(4379),k=t(4027),q=t(5269),x=t(4842),E=t(2165),j=t(8719),I=t(7518),R=t.n(I);v.render=w;const U=v;R()(v,"components",{QPage:Z.Z,QImg:k.Z,QForm:q.Z,QInput:x.Z,QBtn:E.Z,QSpinnerFacebook:j.Z})}}]);