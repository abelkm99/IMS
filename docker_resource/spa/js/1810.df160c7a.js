"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[1810],{1810:(e,t,l)=>{l.r(t),l.d(t,{default:()=>G});var s=l(3673);function i(e,t,l,i,o,a){const n=(0,s.up)("SalesHeader"),r=(0,s.up)("MakeSales"),m=(0,s.up)("q-page");return(0,s.wg)(),(0,s.j4)(m,{padding:""},{default:(0,s.w5)((()=>[(0,s.Wm)(n,{Employee:!0}),(0,s.Wm)(r,{Employee:!0})])),_:1})}var o=l(7302),a=l(8880),n=l(2323);const r={class:"q-pt-xl"},m={class:"q-pt-xl row"},u={class:"q-pa-md col-7"},c={class:"q-gutter-md row"},d={class:"row items-center justify-end"},p={class:"row items-center justify-end"},h={class:"q-gutter-md row"},y={class:"row q-gutter-md q-pt-xl"},f={class:"row q-gutter-md q-pt-xl"},w={class:"q-pa-md col-5"},v={class:"q-pa-md row"},_={class:"row q-pa-md"},S={class:"q-pl-lg"},I=(0,s.Uk)("Total : "),g={class:"text-secondary"},b={class:"q-gutter-md"};function D(e,t,l,i,o,D){const T=(0,s.up)("q-btn"),Q=(0,s.up)("q-date"),W=(0,s.up)("q-popup-proxy"),q=(0,s.up)("q-icon"),P=(0,s.up)("q-time"),Z=(0,s.up)("q-input"),C=(0,s.up)("q-select"),k=(0,s.up)("Select"),V=(0,s.up)("select-optional"),x=(0,s.up)("q-form"),$=(0,s.up)("q-item-section"),N=(0,s.up)("q-item"),E=(0,s.up)("q-list"),j=(0,s.up)("q-btn-dropdown"),U=(0,s.up)("q-td"),M=(0,s.up)("q-table"),O=(0,s.up)("q-scroll-area"),Y=(0,s.Q2)("close-popup");return(0,s.wg)(),(0,s.iD)("div",r,[(0,s._)("div",m,[(0,s._)("div",u,[(0,s.Wm)(x,{onKeydown:(0,a.D2)((0,a.iM)(D.addItem,["prevent"]),["enter"]),onSubmit:(0,a.iM)(D.onSubmit,["prevent"]),onReset:D.onReset,class:"q-gutter-sm"},{default:(0,s.w5)((()=>[(0,s._)("div",c,[(0,s.Wm)(Z,{style:{width:"250px"},color:"secondary",filled:"",modelValue:o.Sales_Date,"onUpdate:modelValue":t[2]||(t[2]=e=>o.Sales_Date=e)},{prepend:(0,s.w5)((()=>[(0,s.Wm)(q,{name:"event",class:"cursor-pointer"},{default:(0,s.w5)((()=>[(0,s.Wm)(W,{"transition-show":"scale","transition-hide":"scale"},{default:(0,s.w5)((()=>[(0,s.Wm)(Q,{color:"secondary",modelValue:o.Sales_Date,"onUpdate:modelValue":t[0]||(t[0]=e=>o.Sales_Date=e),mask:"YYYY-MM-DD HH:mm"},{default:(0,s.w5)((()=>[(0,s._)("div",d,[(0,s.wy)((0,s.Wm)(T,{label:"Close",color:"secondary",flat:""},null,512),[[Y]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),append:(0,s.w5)((()=>[(0,s.Wm)(q,{name:"access_time",class:"cursor-pointer"},{default:(0,s.w5)((()=>[(0,s.Wm)(W,{"transition-show":"scale","transition-hide":"scale"},{default:(0,s.w5)((()=>[(0,s.Wm)(P,{color:"secondary",modelValue:o.Sales_Date,"onUpdate:modelValue":t[1]||(t[1]=e=>o.Sales_Date=e),mask:"YYYY-MM-DD HH:mm",format12h:""},{default:(0,s.w5)((()=>[(0,s._)("div",p,[(0,s.wy)((0,s.Wm)(T,{label:"Close",color:"primary",flat:""},null,512),[[Y]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,s.Wm)(C,{color:"secondary",filled:"",modelValue:o.Transaction_Type,"onUpdate:modelValue":t[3]||(t[3]=e=>o.Transaction_Type=e),label:"transaction-type",options:["Cash","Credit"],style:{width:"250px"},behavior:"menu",rules:[D.myRule]},null,8,["modelValue","rules"]),(0,s.Wm)(k,{filter_key:"CustomerName",ref:"customerSelect",lable:"Customer",rows:o.customer_option,stringOptions:o.customer_option.map((e=>e.CustomerName))},null,8,["rows","stringOptions"])]),(0,s._)("div",h,[(0,s.Wm)(V,{filter_key:"DriverName",ref:"driverSelect",lable:"Driver",rows:o.driver_option,stringOptions:o.driver_option.map((e=>e.DriverName))},null,8,["rows","stringOptions"]),(0,s.Wm)(Z,{color:"secondary",filled:"",type:"text",modelValue:o.Description,"onUpdate:modelValue":t[4]||(t[4]=e=>o.Description=e),label:"Description",style:{width:"250px"},behavior:"menu"},null,8,["modelValue"])]),(0,s._)("div",y,[(0,s.Wm)(V,{filter_key:"ItemType",ref:"itemSelect",lable:"Item Type",rows:o.items_option,stringOptions:o.items_option.map((e=>e.ItemType))},null,8,["rows","stringOptions"]),(0,s.Wm)(Z,{color:"secondary",filled:"",modelValue:o.Quantity,"onUpdate:modelValue":t[5]||(t[5]=e=>o.Quantity=e),type:"number",min:"1",label:"Quantity",hint:"have to be greater than 0",style:{width:"175px"}},null,8,["modelValue"]),(0,s.Wm)(Z,{style:{width:"175px"},color:"secondary",filled:"",modelValue:o.Price,"onUpdate:modelValue":t[6]||(t[6]=e=>o.Price=e),type:"number",min:"1",label:"Price",hint:"have to be greater than 0"},null,8,["modelValue"]),(0,s.Wm)(T,{onKeyup:(0,a.D2)(D.addItem,["enter"]),label:"Add Item",icon:"add",style:{height:"50px"},color:"secondary",onClick:t[7]||(t[7]=e=>D.addItem())},null,8,["onKeyup"])]),(0,s._)("div",f,[(0,s.Wm)(T,{label:"sell",icon:"sell",type:"submit",color:"secondary"}),(0,s.Wm)(T,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])),_:1},8,["onKeydown","onSubmit","onReset"])]),(0,s._)("div",w,[(0,s.Wm)(O,{style:{width:"600px",height:"800px"}},{default:(0,s.w5)((()=>[(0,s._)("div",v,[(0,s.Wm)(M,{title:"Purchase Items",rows:o.rows,columns:o.columns,"row-key":"name",selection:"multiple",selected:o.selected,"onUpdate:selected":t[8]||(t[8]=e=>o.selected=e)},{"top-left":(0,s.w5)((()=>[(0,s._)("div",_,[(0,s._)("span",null,(0,n.zw)(o.title),1),(0,s._)("span",S,[I,(0,s._)("b",g,(0,n.zw)(D.totalPurchase)+" Birr",1)])])])),"top-right":(0,s.w5)((()=>[(0,s._)("div",b,[(0,s.Wm)(j,{flat:"",color:"secondary"},{default:(0,s.w5)((()=>[(0,s.Wm)(E,null,{default:(0,s.w5)((()=>[(0,s.wy)((0,s.Wm)(N,{clickable:""},{default:(0,s.w5)((()=>[(0,s.Wm)($,null,{default:(0,s.w5)((()=>[(0,s.Wm)(T,{label:"save slip",flat:"",icon:"turned_in",color:"secondary",onClick:D.saveSlip},null,8,["onClick"]),(0,s.Wm)(T,{label:"load slip",flat:"",icon:"download",color:"secondary",onClick:D.loadSlip},null,8,["onClick"])])),_:1})])),_:1},512),[[Y]])])),_:1})])),_:1}),(0,s.Wm)(T,{color:"negative","icon-right":"delete_forever","no-caps":"",onClick:D.deleteSelected},null,8,["onClick"])])])),"body-cell-action":(0,s.w5)((e=>[(0,s.Wm)(U,{props:e},{default:(0,s.w5)((()=>[(0,s.Wm)(T,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:t=>D.deleteval(o.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:1},8,["rows","columns","selected"])])])),_:1})])])])}var T=l(589),Q=l(2986),W=l(7428),q=l(807),P=l(6504);const Z={name:"MakeSales",components:{Select:q.Z,SelectOptional:P.Z},props:{Employee:{Type:Boolean,default:!1}},data(){return{selected_item:"",items_option:[],transaction_option:[],customer_option:[],driver_option:[],Quantity:"",Price:"",model:null,Sales_Date:null,Transaction_Type:null,CustomerName:null,DriverName:null,Description:null,SalesString:"",rows:[],columns:[{name:"ItemType",label:"ItemType",field:"ItemType",align:"left"},{name:"Price",label:"Price",field:"Price",sortable:!0},{name:"Quantity",label:"Quantity",field:"Quantity"},{name:"Total",label:"Total",field:"Total",sortable:!0},{name:"action",label:"Action",field:"action"}],title:"Purchase Items",selected:[]}},methods:{focustItemType(){this.$refs.itemSelect.$el.focus()},saveSlip(){this.rows.length>0?T.Z.set("slip1",this.rows):(0,W.j)("No Items are on the table")},loadSlip(){var e=T.Z.getItem("slip1")||[];this.rows=[],this.rows=e},myRule(e){if(null===e)return"Empty Feild!!"},addItem(){if(null==this.$refs.itemSelect.value||""==this.$refs.itemSelect.value)(0,W.j)("Item Type Feild can't be empty!"),this.focustItemType();else if(this.added_before())if(this.Quantity<1||null==this.Quantity)(0,W.j)("Please Enter a valid Number for Quantity");else if(this.Price<1||null==this.Price)(0,W.j)("Please Enter a valid Number for Price");else{var e={ItemType:this.$refs.itemSelect.value,Quantity:this.Quantity,Price:this.Price,Total:this.Quantity*this.Price};this.rows.push(e),this.$refs.itemSelect.value=null,this.Quantity=null,this.Price=null,this.focustItemType()}else this.focustItemType(),(0,W.j)(`item type ${this.$refs.itemSelect.value} is already added to the Sales list`)},added_before(){return void 0==this.rows.find((e=>e.ItemType===this.$refs.itemSelect.value))},onSubmit(){if(null==this.Sales_Date)(0,W.j)("Please Fill The Purchased Date");else if(this.SalesString=this.getSalesString(),null==this.SalesString)(0,W.j)("No Purchase Item is listed");else{const e={Date:this.Sales_Date,CustomerID:this.customer_option.find((e=>e.CustomerName===this.$refs.customerSelect.value)).CustomerID,TransactionID:"Cash"==this.Transaction_Type?1:2,EmployeeID:T.Z.getItem("EmployeeID"),DriverID:null!=this.DriverName?this.driver_option.find((e=>e.DriverName===this.$refs.driverSelect.value)).DriverID:"",SalesInformation:this.getSalesString(),Description:this.Description};(0,Q.J3)(e).then((e=>{(0,W.U)(e.data.message,"positive","top"),this.$router.push({name:"Esales"})})).catch((e=>{(0,W.j)(e.response.data.message,"negative","top")}))}},onReset(){this.$refs.itemSelect.value=null,this.$refs.customerSelect.value=null,this.$refs.driverSelect.value=null,this.$refs.employeeSelect.value=null,this.Transaction_Type=null,this.Sales_Date=null,this.Description=null,this.Quantity=null,this.Price=null,this.rows=[]},getItemID(e){return this.items_option.find((t=>t.ItemType===e)).ItemID},getSalesString(){var e="";return this.rows.forEach((t=>{e+=this.getItemID(t.ItemType)+","+t.Price+","+t.Quantity+";"})),e.length>0?e:null},deleteSelected(){let e=this;this.selected.filter((function(t){return e.rows.splice(e.rows.indexOf(t),1),t})),this.selected=[]},deleteval(e){this.rows.splice(e,1)}},computed:{totalPurchase(){var e=0;return this.rows.forEach((t=>{e+=parseInt(t.Total)})),e}},mounted(){this.items_option=T.Z.getItem("Items"),this.customer_option=T.Z.getItem("Customers"),this.employee_option=T.Z.getItem("Employees"),this.driver_option=T.Z.getItem("Drivers"),this.focustItemType()}};var C=l(5269),k=l(4842),V=l(4554),x=l(3944),$=l(2651),N=l(2165),E=l(5990),j=l(8516),U=l(7704),M=l(3243),O=l(2226),Y=l(1046),R=l(3414),H=l(2035),A=l(3884),B=l(677),F=l(7518),K=l.n(F);Z.render=D;const z=Z;K()(Z,"components",{QForm:C.Z,QInput:k.Z,QIcon:V.Z,QPopupProxy:x.Z,QDate:$.Z,QBtn:N.Z,QTime:E.Z,QSelect:j.Z,QScrollArea:U.Z,QTable:M.Z,QBtnDropdown:O.Z,QList:Y.Z,QItem:R.Z,QItemSection:H.Z,QTd:A.Z}),K()(Z,"directives",{ClosePopup:B.Z});const J={name:"AddSales",components:{SalesHeader:o.Z,MakeSales:z}};var L=l(4379);J.render=i;const G=J;K()(J,"components",{QPage:L.Z})}}]);