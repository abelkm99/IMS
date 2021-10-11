"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[5566],{5566:(e,t,l)=>{l.r(t),l.d(t,{default:()=>G});var a=l(3673);function s(e,t,l,s,o,i){const n=(0,a.up)("SalesHeader"),r=(0,a.up)("MakeSales"),m=(0,a.up)("q-page");return(0,a.wg)(),(0,a.j4)(m,{padding:""},{default:(0,a.w5)((()=>[(0,a.Wm)(n,{Employee:!0}),(0,a.Wm)(r,{Employee:!0})])),_:1})}var o=l(7302),i=l(2323);const n={class:"q-pa-md"},r={class:"q-pa-md column flex flex-center"},m={class:"q-pa-md col justify-center"},d={class:"q-gutter-md row"},u={class:"column q-pa-md justify-evenly"},c={class:"row q-gutter-md q-pt-md"},p={style:{"max-width":"300px"}},h={class:"row items-center justify-end"},y={class:"row items-center justify-end"},_={class:"row q-gutter-md q-pt-md"},f={class:"row q-gutter-md q-pt-md"},v={class:"q-pa-md row justify-center"},w={class:"q-pa-md"},b={class:"row q-pa-md"},D={class:"q-pl-lg"},T=(0,a.Uk)("Total : "),S={class:"text-secondary"};function g(e,t,l,s,o,g){const I=(0,a.up)("q-btn"),V=(0,a.up)("q-date"),P=(0,a.up)("q-popup-proxy"),q=(0,a.up)("q-icon"),Q=(0,a.up)("q-time"),W=(0,a.up)("q-input"),C=(0,a.up)("q-select"),N=(0,a.up)("q-form"),k=(0,a.up)("q-td"),x=(0,a.up)("q-table"),j=(0,a.Q2)("close-popup");return(0,a.wg)(),(0,a.iD)("div",n,[(0,a._)("div",r,[(0,a._)("div",m,[(0,a.Wm)(N,{onSubmit:g.onSubmit,onReset:g.onReset,class:"q-gutter-md"},{default:(0,a.w5)((()=>[(0,a._)("div",d,[(0,a._)("div",u,[(0,a._)("div",c,[(0,a._)("div",p,[(0,a.Wm)(W,{color:"secondary",filled:"",modelValue:o.Sales_Date,"onUpdate:modelValue":t[2]||(t[2]=e=>o.Sales_Date=e)},{prepend:(0,a.w5)((()=>[(0,a.Wm)(q,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(P,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(V,{color:"secondary",modelValue:o.Sales_Date,"onUpdate:modelValue":t[0]||(t[0]=e=>o.Sales_Date=e),mask:"YYYY-MM-DD HH:mm"},{default:(0,a.w5)((()=>[(0,a._)("div",h,[(0,a.wy)((0,a.Wm)(I,{label:"Close",color:"secondary",flat:""},null,512),[[j]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),append:(0,a.w5)((()=>[(0,a.Wm)(q,{name:"access_time",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(P,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(Q,{color:"secondary",modelValue:o.Sales_Date,"onUpdate:modelValue":t[1]||(t[1]=e=>o.Sales_Date=e),mask:"YYYY-MM-DD HH:mm",format12h:""},{default:(0,a.w5)((()=>[(0,a._)("div",y,[(0,a.wy)((0,a.Wm)(I,{label:"Close",color:"primary",flat:""},null,512),[[j]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"])]),(0,a.Wm)(C,{color:"secondary",filled:"",modelValue:o.Transaction_Type,"onUpdate:modelValue":t[3]||(t[3]=e=>o.Transaction_Type=e),label:"transaction-type",options:o.transaction_option.map((e=>e.TransactionType)),style:{width:"200px"},behavior:"menu",rules:[g.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(C,{color:"secondary",filled:"",modelValue:o.CustomerName,"onUpdate:modelValue":t[4]||(t[4]=e=>o.CustomerName=e),label:"Customer",options:o.customer_option.map((e=>e.CustomerName)),style:{width:"200px"},behavior:"menu",rules:[g.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(C,{color:"secondary",filled:"",modelValue:o.DriverName,"onUpdate:modelValue":t[5]||(t[5]=e=>o.DriverName=e),label:"Driver",options:o.driver_option.map((e=>e.DriverName)),style:{width:"200px"},behavior:"menu"},null,8,["modelValue","options"])]),(0,a._)("div",_,[(0,a.Wm)(C,{color:"secondary",filled:"",modelValue:o.selected_item,"onUpdate:modelValue":t[6]||(t[6]=e=>o.selected_item=e),label:"Item Type",options:o.items_option.map((e=>e.ItemType)),style:{width:"250px"},behavior:"menu"},null,8,["modelValue","options"]),(0,a.Wm)(W,{color:"secondary",filled:"",modelValue:o.Quantity,"onUpdate:modelValue":t[7]||(t[7]=e=>o.Quantity=e),type:"number",min:"1",label:"Quantity",hint:"have to be greater than 0"},null,8,["modelValue"]),(0,a.Wm)(W,{color:"secondary",filled:"",modelValue:o.Price,"onUpdate:modelValue":t[8]||(t[8]=e=>o.Price=e),type:"number",min:"1",label:"Price",hint:"have to be greater than 0"},null,8,["modelValue"]),(0,a.Wm)(W,{color:"secondary",filled:"",type:"text",modelValue:o.Description,"onUpdate:modelValue":t[9]||(t[9]=e=>o.Description=e),label:"Description",style:{width:"250px"},behavior:"menu"},null,8,["modelValue"])]),(0,a._)("div",f,[(0,a.Wm)(I,{label:"Add Item",color:"secondary",onClick:t[10]||(t[10]=e=>g.addItem())}),(0,a.Wm)(I,{label:"Submit",type:"submit",color:"secondary"}),(0,a.Wm)(I,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])])])),_:1},8,["onSubmit","onReset"])]),(0,a._)("div",v,[(0,a._)("div",w,[(0,a.Wm)(x,{title:"Purchase Items",rows:o.rows,columns:o.columns,"row-key":"name",selection:"multiple",selected:o.selected,"onUpdate:selected":t[11]||(t[11]=e=>o.selected=e)},{"top-left":(0,a.w5)((()=>[(0,a._)("div",b,[(0,a._)("span",null,(0,i.zw)(o.title),1),(0,a._)("span",D,[T,(0,a._)("b",S,(0,i.zw)(g.totalPurchase)+" Birr",1)])])])),"top-right":(0,a.w5)((()=>[(0,a.Wm)(I,{color:"negative","icon-right":"delete_forever","no-caps":"",onClick:g.deleteSelected},null,8,["onClick"])])),"body-cell-action":(0,a.w5)((e=>[(0,a.Wm)(k,{props:e},{default:(0,a.w5)((()=>[(0,a.Wm)(I,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:t=>g.deleteval(o.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:1},8,["rows","columns","selected"])])])])])}var I=l(4122),V=l(755),P=l(2530),q=l(8554),Q=l(2986),W=l(589),C=l(7428);const N={name:"MakeSales",components:{},props:{Employee:{Type:Boolean,default:!1}},data(){return{selected_item:"",items_option:[],transaction_option:[],customer_option:[],driver_option:[],Quantity:"",Price:"",model:null,Sales_Date:null,Transaction_Type:null,CustomerName:null,DriverName:null,Description:null,SalesString:"",rows:[],columns:[{name:"ItemType",label:"ItemType",field:"ItemType",align:"left",sortable:!0},{name:"Price",label:"Price",field:"Price",sortable:!0},{name:"Quantity",label:"Quantity",field:"Quantity",sortable:!0},{name:"Total",label:"Total",field:"Total",sortable:!0},{name:"action",label:"Action",field:"action"}],title:"Purchase Items",selected:[]}},methods:{myRule(e){if(null===e)return"Empty Feild!!"},addItem(){if(null==this.selected_item||""==this.selected_item)(0,C.j)("Item Type Feild can't be empty!");else if(this.added_before())if(this.Quantity<1||null==this.Quantity)(0,C.j)("Please Enter a valid Number for Quantity");else if(this.Price<1||null==this.Price)(0,C.j)("Please Enter a valid Number for Price");else{var e={ItemType:this.selected_item,Quantity:this.Quantity,Price:this.Price,Total:this.Quantity*this.Price};this.rows.push(e),this.selected_item=null,this.Quantity=null,this.Price=null}else(0,C.j)(`item type ${this.selected_item} is already added to the purchase list`)},added_before(){return void 0==this.rows.find((e=>e.ItemType===this.selected_item))},onSubmit(){if(null==this.Sales_Date)(0,C.j)("Please Fill The Purchased Date");else if(this.SalesString=this.getSalesString(),null==this.SalesString)(0,C.j)("No Purchase Item is listed");else{const e={Date:this.Sales_Date,CustomerID:this.customer_option.find((e=>e.CustomerName===this.CustomerName)).CustomerID,TransactionID:this.transaction_option.find((e=>e.TransactionType===this.Transaction_Type)).TransactionID,EmployeeID:W.Z.getItem("EmployeeID"),DriverID:null!=this.DriverName?this.driver_option.find((e=>e.DriverName===this.DriverName)).DriverID:"",SalesInformation:this.getSalesString(),Description:this.Description};(0,Q.J3)(e).then((e=>{(0,C.U)(e.data.message,"positive","top"),this.$router.push({name:"Esales"})})).catch((e=>{(0,C.j)(e.response.data.message,"negative","top")}))}},onReset(){this.selected_item=null,this.Transaction_Type=null,this.Sales_Date=null,this.CustomerName=null,this.DriverName=null,this.DriverName=null,this.Quantity=null,this.Price=null,this.rows=[]},getItemID(e){return this.items_option.find((t=>t.ItemType===e)).ItemID},getSalesString(){var e="";return this.rows.forEach((t=>{e+=this.getItemID(t.ItemType)+","+t.Price+","+t.Quantity+";"})),e.length>0?e:null},deleteSelected(){let e=this;this.selected.filter((function(t){return e.rows.splice(e.rows.indexOf(t),1),t})),this.selected=[]},deleteval(e){this.rows.splice(e,1)}},computed:{totalPurchase(){var e=0;return this.rows.forEach((t=>{e+=parseInt(t.Total)})),e}},mounted(){(0,I.GR)().then((e=>{this.items_option=e.data})).catch((e=>{})),(0,V.i)().then((e=>{this.transaction_option=e.data})).catch((e=>{})),(0,P.OL)().then((e=>{this.customer_option=e.data})).catch((e=>{})),(0,q.jT)().then((e=>{this.driver_option=e.data})).catch((e=>{}))}};var k=l(5269),x=l(4842),j=l(4554),Z=l(3944),U=l(2651),E=l(2165),R=l(5990),Y=l(8516),M=l(3243),H=l(3884),F=l(677),A=l(7518),B=l.n(A);N.render=g;const O=N;B()(N,"components",{QForm:k.Z,QInput:x.Z,QIcon:j.Z,QPopupProxy:Z.Z,QDate:U.Z,QBtn:E.Z,QTime:R.Z,QSelect:Y.Z,QTable:M.Z,QTd:H.Z}),B()(N,"directives",{ClosePopup:F.Z});const z={name:"AddSales",components:{SalesHeader:o.Z,MakeSales:O}};var $=l(4379);z.render=s;const G=z;B()(z,"components",{QPage:$.Z})}}]);