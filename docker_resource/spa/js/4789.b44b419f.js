"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[4789],{4789:(e,r,t)=>{t.r(r),t.d(r,{default:()=>g});var l=t(3673);const a={class:"flex flex-center q-pa-lg"},i={class:"row q-gutter-md"},s={class:"col q-pt-md q-gutter-md"},o=(0,l._)("span",{class:"q-pl-xl"},"Add Supplier",-1),d={class:"row q-gutter-md"},m={class:"row q-gutter-md"};function n(e,r,t,n,u,v){const p=(0,l.up)("DriverHeader"),c=(0,l.up)("q-input"),D=(0,l.up)("q-btn"),h=(0,l.up)("q-form"),b=(0,l.up)("q-page");return(0,l.wg)(),(0,l.j4)(b,{padding:""},{default:(0,l.w5)((()=>[(0,l._)("div",a,[(0,l.Wm)(p,{Employee:!0}),(0,l._)("div",i,[(0,l._)("div",s,[o,(0,l.Wm)(h,{onSubmit:v.add_driver,onReset:v.reset,class:"q-gutter-md"},{default:(0,l.w5)((()=>[(0,l._)("div",d,[(0,l.Wm)(c,{color:"secondary",modelValue:u.DriverName,"onUpdate:modelValue":r[0]||(r[0]=e=>u.DriverName=e),type:"text",filled:"",label:"Driver Name"},null,8,["modelValue"]),(0,l.Wm)(c,{color:"secondary",modelValue:u.DriverPhoneNumber,"onUpdate:modelValue":r[1]||(r[1]=e=>u.DriverPhoneNumber=e),type:"text",filled:"",label:"Driver PhoneNumber"},null,8,["modelValue"]),(0,l.Wm)(c,{color:"secondary",modelValue:u.DriverPlate,"onUpdate:modelValue":r[2]||(r[2]=e=>u.DriverPlate=e),type:"text",filled:"",label:"Driver Plate"},null,8,["modelValue"])]),(0,l._)("div",m,[(0,l.Wm)(D,{label:"Add Driver",icon:"add",type:"submit",color:"secondary"}),(0,l.Wm)(D,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])),_:1},8,["onSubmit","onReset"])])])])])),_:1})}var u=t(2678),v=t(8554),p=t(7428);const c={name:"AddDriver",components:{DriverHeader:u.Z},data(){return{DriverName:"",DriverPhoneNumber:"",DriverPlate:""}},methods:{reset(){this.DriverName="",this.DriverPhoneNumber="",this.DriverPlate=""},add_driver(){if(this.DriverName.length<1)(0,p.j)("Driver Name is empty!!");else if(this.DriverPhoneNumber.length<1)(0,p.j)("Driver PhoneNumber is empty!!");else{const e={DriverName:this.DriverName,DriverPhoneNumber:this.DriverPhoneNumber,DriverPlate:this.DriverPlate};(0,v.X2)(e).then((e=>{(0,p.U)(e.data.message,"positive","top"),this.reset()})).catch((e=>{(0,p.j)(e.response.data.message,"negative","top")}))}}}};var D=t(4379),h=t(5269),b=t(4842),N=t(2165),P=t(7518),f=t.n(P);c.render=n;const g=c;f()(c,"components",{QPage:D.Z,QForm:h.Z,QInput:b.Z,QBtn:N.Z})}}]);