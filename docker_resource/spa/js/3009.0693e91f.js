"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[3009],{3009:(e,t,l)=>{l.r(t),l.d(t,{default:()=>ce});var a=l(3673),o=l(2323),s=l(8880);const r={class:"q-pa-xl"},i={class:"q-pa-md"},n={class:"row q-gutter-md q-pa-md"},d={class:"q-pl-sm"},u={class:"col-2 q-table__title"},m={key:0,class:"col"},p={class:"row q-gutter-md"},c={key:0},h={class:"row justify-center text-secondary"},y=(0,a.Uk)("Make Purchase"),_={class:"row"},w={class:"col q-pa-md justify-evenly"},f={class:"col q-gutter-md q-pt-md"},v={style:{"max-width":"300px"}},D={class:"row items-center justify-end"},b={class:"row items-center justify-end"},P={class:"row q-gutter-md q-pt-md"},V={key:1},g={class:"row justify-center text-secondary"},W=(0,a.Uk)("Make Sales"),T={class:"row"},x={class:"col q-pa-md justify-evenly"},k={class:"col q-gutter-md q-pt-md"},C={style:{"max-width":"300px"}},I={class:"row items-center justify-end"},q={class:"row items-center justify-end"},N={class:"row q-gutter-md q-pt-md"};function U(e,t,l,U,O,S){const Q=(0,a.up)("OrdersHeader"),R=(0,a.up)("DeleteDialogBox"),j=(0,a.up)("q-item"),Z=(0,a.up)("q-space"),Y=(0,a.up)("q-toggle"),E=(0,a.up)("q-select"),H=(0,a.up)("q-btn"),M=(0,a.up)("q-td"),$=(0,a.up)("q-input"),F=(0,a.up)("q-popup-edit"),z=(0,a.up)("q-tr"),K=(0,a.up)("H5"),B=(0,a.up)("q-date"),A=(0,a.up)("q-popup-proxy"),J=(0,a.up)("q-icon"),L=(0,a.up)("q-time"),G=(0,a.up)("q-form"),X=(0,a.up)("q-card"),ee=(0,a.up)("q-dialog"),te=(0,a.up)("q-table"),le=(0,a.Q2)("close-popup");return(0,a.wg)(),(0,a.iD)(a.HY,null,[(0,a._)("div",r,[(0,a.Wm)(Q)]),(0,a._)("div",i,[(0,a.Wm)(R,{onResponse:S.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,a._)("div",n,[((0,a.wg)(!0),(0,a.iD)(a.HY,null,(0,a.Ko)(O.Order,((e,t)=>((0,a.wg)(),(0,a.j4)(j,{key:t},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(t)+": ",1),(0,a._)("span",d,[(0,a._)("b",null,(0,o.zw)(e),1)])])),_:2},1024)))),128))]),(0,a.Wm)(te,{title:O.title,rows:O.rows,columns:O.columns,"row-key":"name","visible-columns":O.visibleColumns,loading:O.loading,color:"secondary","no-data-label":"There is No Purchase Under this Reference","rows-per-page-options":[]},{top:(0,a.w5)((l=>[(0,a._)("div",u,(0,o.zw)(O.title),1),(0,a.Wm)(Z),e.$q.screen.gt.xs?((0,a.wg)(),(0,a.iD)("div",m,[((0,a.wg)(!0),(0,a.iD)(a.HY,null,(0,a.Ko)(S.toogle_columns,(e=>((0,a.wg)(),(0,a.j4)(j,{style:{display:"inline"},key:e},{default:(0,a.w5)((()=>[(0,a.Wm)(Y,{modelValue:O.visibleColumns,"onUpdate:modelValue":t[0]||(t[0]=e=>O.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,a.wg)(),(0,a.j4)(E,{key:1,color:"secondary",modelValue:O.visibleColumns,"onUpdate:modelValue":t[1]||(t[1]=e=>O.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:O.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,a.Wm)(H,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:S.exportTable},null,8,["onClick"]),(0,a.Wm)(H,{flat:"",round:"",dense:"",icon:l.inFullscreen?"fullscreen_exit":"fullscreen",onClick:l.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,a.w5)((e=>[(0,a.Wm)(z,{props:e},{default:(0,a.w5)((()=>[(0,a.Wm)(M,{key:"OrderditemID",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.OrderditemID),1)])),_:2},1032,["props"]),(0,a.Wm)(M,{key:"ItemType",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.ItemType),1)])),_:2},1032,["props"]),(0,a.Wm)(M,{key:"PPP",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.PPP)+" ",1),(0,a.Wm)(F,{modelValue:e.row.PPP,"onUpdate:modelValue":t=>e.row.PPP=t,title:"Update Price",buttons:"",persistent:"",validate:t=>S.update_Ordet_item({key:"PPP",value:t},O.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,a.w5)((e=>[(0,a.Wm)($,{color:"secondary",type:"number",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t,modelModifiers:{number:!0},dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,a.Wm)(M,{key:"Quantity",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Quantity)+" ",1),(0,a.Wm)(F,{modelValue:e.row.Quantity,"onUpdate:modelValue":t=>e.row.Quantity=t,title:"Update Quantity",buttons:"",persistent:"",validate:t=>S.update_Ordet_item({key:"Quantity",value:t},O.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,a.w5)((e=>[(0,a.Wm)($,{color:"secondary",type:"number",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t,modelModifiers:{number:!0},dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,a.Wm)(M,{key:"Total",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Total),1)])),_:2},1032,["props"]),(0,a.Wm)(M,{key:"action",props:e},{default:(0,a.w5)((()=>[(0,a.Wm)(H,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:t=>S.show_dialog_box(O.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),bottom:(0,a.w5)((()=>[(0,a._)("div",p,[O.Order.SupplierID?((0,a.wg)(),(0,a.iD)("div",c,[(0,a.Wm)(H,{color:"secondary",icon:"shopping_cart",label:"Add To Purchase",onClick:t[2]||(t[2]=e=>O.PurhcaseCard=!0)}),(0,a.Wm)(ee,{modelValue:O.PurhcaseCard,"onUpdate:modelValue":t[10]||(t[10]=e=>O.PurhcaseCard=e)},{default:(0,a.w5)((()=>[(0,a.Wm)(X,{class:"my-card"},{default:(0,a.w5)((()=>[(0,a._)("span",h,[(0,a.Wm)(K,null,{default:(0,a.w5)((()=>[y])),_:1})]),(0,a.Wm)(G,{onSubmit:S.onSubmit,onReset:S.onReset,class:"q-gutter-md"},{default:(0,a.w5)((()=>[(0,a._)("div",_,[(0,a._)("div",w,[(0,a._)("div",f,[(0,a._)("div",v,[(0,a.Wm)($,{color:"secondary",filled:"",modelValue:O.Purchase_Date,"onUpdate:modelValue":t[5]||(t[5]=e=>O.Purchase_Date=e)},{prepend:(0,a.w5)((()=>[(0,a.Wm)(J,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(A,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(B,{color:"secondary",modelValue:O.Purchase_Date,"onUpdate:modelValue":t[3]||(t[3]=e=>O.Purchase_Date=e),mask:"YYYY-MM-DD HH:mm"},{default:(0,a.w5)((()=>[(0,a._)("div",D,[(0,a.wy)((0,a.Wm)(H,{label:"Close",color:"secondary",flat:""},null,512),[[le]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),append:(0,a.w5)((()=>[(0,a.Wm)(J,{name:"access_time",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(A,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(L,{modelValue:O.Purchase_Date,"onUpdate:modelValue":t[4]||(t[4]=e=>O.Purchase_Date=e),mask:"YYYY-MM-DD HH:mm",format12h:""},{default:(0,a.w5)((()=>[(0,a._)("div",b,[(0,a.wy)((0,a.Wm)(H,{label:"Close",color:"primary",flat:""},null,512),[[le]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"])]),(0,a.Wm)(E,{color:"secondary",filled:"",modelValue:O.Transaction_Type,"onUpdate:modelValue":t[6]||(t[6]=e=>O.Transaction_Type=e),label:"transaction-type",options:O.transaction_option.map((e=>e.TransactionType)),style:{width:"250px"},behavior:"menu",rules:[S.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(E,{color:"secondary",filled:"",modelValue:O.SupplierName,"onUpdate:modelValue":t[7]||(t[7]=e=>O.SupplierName=e),label:"Supplier",options:O.supplier_option.map((e=>e.SupplierName)),style:{width:"250px"},behavior:"menu",rules:[S.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(E,{color:"secondary",filled:"",modelValue:O.DriverName,"onUpdate:modelValue":t[8]||(t[8]=e=>O.DriverName=e),label:"Driver",options:O.driver_option.map((e=>e.DriverName)),style:{width:"250px"},behavior:"menu"},null,8,["modelValue","options"]),(0,a.Wm)($,{color:"secondary",filled:"",type:"text",modelValue:O.Description,"onUpdate:modelValue":t[9]||(t[9]=e=>O.Description=e),label:"Description",style:{width:"250px"},behavior:"menu"},null,8,["modelValue"])]),(0,a._)("div",P,[(0,a.Wm)(H,{icon:"shopping_cart",label:"Purchase",type:"submit",color:"secondary"}),(0,a.Wm)(H,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])])])),_:1},8,["onSubmit","onReset"])])),_:1})])),_:1},8,["modelValue"])])):(0,a.kq)("",!0),O.Order.CustomerID?((0,a.wg)(),(0,a.iD)("div",V,[(0,a.Wm)(H,{color:"secondary",icon:"shopping_cart",label:"Add To Sales",onClick:t[11]||(t[11]=e=>O.SalesCard=!0)}),(0,a.Wm)(ee,{modelValue:O.SalesCard,"onUpdate:modelValue":t[20]||(t[20]=e=>O.SalesCard=e)},{default:(0,a.w5)((()=>[(0,a.Wm)(X,{class:"my-card"},{default:(0,a.w5)((()=>[(0,a._)("span",g,[(0,a.Wm)(K,null,{default:(0,a.w5)((()=>[W])),_:1})]),(0,a.Wm)(G,{onSubmit:S.MakeSalesSubmit,onReset:S.onReset,class:"q-gutter-md"},{default:(0,a.w5)((()=>[(0,a._)("div",T,[(0,a._)("div",x,[(0,a._)("div",k,[(0,a._)("div",C,[(0,a.Wm)($,{color:"secondary",filled:"",modelValue:O.Purchase_Date,"onUpdate:modelValue":t[14]||(t[14]=e=>O.Purchase_Date=e)},{prepend:(0,a.w5)((()=>[(0,a.Wm)(J,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(A,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(B,{color:"secondary",modelValue:O.Purchase_Date,"onUpdate:modelValue":t[12]||(t[12]=e=>O.Purchase_Date=e),mask:"YYYY-MM-DD HH:mm"},{default:(0,a.w5)((()=>[(0,a._)("div",I,[(0,a.wy)((0,a.Wm)(H,{label:"Close",color:"secondary",flat:""},null,512),[[le]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),append:(0,a.w5)((()=>[(0,a.Wm)(J,{name:"access_time",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(A,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(L,{modelValue:O.Purchase_Date,"onUpdate:modelValue":t[13]||(t[13]=e=>O.Purchase_Date=e),mask:"YYYY-MM-DD HH:mm",format12h:""},{default:(0,a.w5)((()=>[(0,a._)("div",q,[(0,a.wy)((0,a.Wm)(H,{label:"Close",color:"primary",flat:""},null,512),[[le]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"])]),(0,a.Wm)(E,{color:"secondary",filled:"",modelValue:O.Transaction_Type,"onUpdate:modelValue":t[15]||(t[15]=e=>O.Transaction_Type=e),label:"transaction-type",options:O.transaction_option.map((e=>e.TransactionType)),style:{width:"250px"},behavior:"menu",rules:[S.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(E,{color:"secondary",filled:"",modelValue:O.CustomerName,"onUpdate:modelValue":t[16]||(t[16]=e=>O.CustomerName=e),label:"Customer",options:O.customer_option.map((e=>e.CustomerName)),style:{width:"250px"},behavior:"menu",rules:[S.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(E,{color:"secondary",filled:"",modelValue:O.EmployeeName,"onUpdate:modelValue":t[17]||(t[17]=e=>O.EmployeeName=e),label:"Employee",options:O.employee_option.map((e=>e.EmployeeName)),style:{width:"250px"},behavior:"menu",rules:[S.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(E,{color:"secondary",filled:"",modelValue:O.DriverName,"onUpdate:modelValue":t[18]||(t[18]=e=>O.DriverName=e),label:"Driver",options:O.driver_option.map((e=>e.DriverName)),style:{width:"250px"},behavior:"menu"},null,8,["modelValue","options"]),(0,a.Wm)($,{color:"secondary",filled:"",type:"text",modelValue:O.Description,"onUpdate:modelValue":t[19]||(t[19]=e=>O.Description=e),label:"Description",style:{width:"250px"},behavior:"menu"},null,8,["modelValue"])]),(0,a._)("div",N,[(0,a.Wm)(H,{icon:"shopping_cart",label:"Sale",type:"submit",color:"secondary"}),(0,a.Wm)(H,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])])])),_:1},8,["onSubmit","onReset"])])),_:1})])),_:1},8,["modelValue"])])):(0,a.kq)("",!0),(0,a._)("div",null,[(0,a.Wm)(H,{to:{name:"print",params:{user:S.printable_data}},color:"secondary",icon:"print",label:"Print"},null,8,["to"])])])])),_:1},8,["title","rows","columns","visible-columns","loading"])])],64)}var O=l(2841),S=l(6966),Q=l(3592),R=l(3962),j=l(5547),Z=l(755),Y=l(8956),E=l(8554),H=l(9066),M=l(2530),$=l(2986),F=l(7428);const z={name:"OrderDetail",components:{DeleteDialogBox:S.Z,OrdersHeader:Q.Z},data(){return{PurhcaseCard:!1,SalesCard:!1,loading:!1,title:"Purchased Items",transaction_option:[],supplier_option:[],driver_option:[],customer_option:[],employee_option:[],Transaction_Type:null,SupplierName:null,CustomerName:null,EmployeeName:null,DriverName:null,Description:null,visibleColumns:["ItemType","PPP","Quantity","Total","Remainder","Extra"],columns:[{name:"OrderditemID",label:"OID",field:"OrderditemID",align:"left",sortable:!0,required:!0},{name:"ItemType",label:"Item Type",field:"ItemType",sortable:!0},{name:"PPP",label:"Price",field:"PPP",sortable:!0},{name:"Quantity",label:"Quantity",field:"Quantity",sortable:!0},{name:"Total",label:"Total",field:"Total",sortable:!0},{name:"action",label:"Action",field:"action",required:!0}],rows:[],selected_index:null,categories:[],Order:{},Purchase_Date:null}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))},printable_data(){var e={title:"Order",table_tittle:"Ordered Items",header_data:this.Order,columns:this.columns.filter((e=>!["action"].includes(e.name))),rows:this.rows};return JSON.stringify(e)}},methods:{onReset(){this.Transaction_Type=null,this.Purchase_Date=null,this.DriverName=null,this.SupplierName=null,this.EmployeeName=null,this.CustomerName=null,this.Description=null},MakeSalesSubmit(){if(null==this.Purchase_Date)(0,F.j)("Please Fill The Purchased Date");else{const e={Date:this.Purchase_Date,CustomerID:this.customer_option.find((e=>e.CustomerName===this.CustomerName)).CustomerID,TransactionID:this.transaction_option.find((e=>e.TransactionType===this.Transaction_Type)).TransactionID,EmployeeID:this.employee_option.find((e=>e.EmployeeName===this.EmployeeName)).EmployeeID,DriverID:null!=this.DriverName?this.driver_option.find((e=>e.DriverName===this.DriverName)).DriverID:"",SalesInformation:this.getSalesString(),Description:this.Description};(0,$.J3)(e).then((e=>{(0,F.U)(e.data.message,"positive","top"),this.$router.push({name:"sales"})})).catch((e=>{(0,F.j)(e.response.data.message,"negative","top")}))}},getSalesString(){var e="";return this.rows.forEach((t=>{e+=t.ItemID+","+t.PPP+","+t.Quantity+";"})),e.length>0?e:null},onSubmit(){if(null==this.Purchase_Date)(0,F.j)("Please Fill The Purchased Date");else{const e={OrderID:this.Order.OrderID,TransactionID:this.transaction_option.find((e=>e.TransactionType===this.Transaction_Type)).TransactionID,DriverId:null!=this.DriverName?this.driver_option.find((e=>e.DriverName===this.DriverName)).DriverID:"",PurchaseDate:this.Purchase_Date,SupplierID:this.supplier_option.find((e=>e.SupplierName===this.SupplierName)).SupplierID,Description:this.Description};(0,j.ut)(e).then((e=>{(0,F.U)(e.data.message,"positive","top"),this.$router.push({name:"purchases"})})).catch((e=>{(0,F.j)(e.response.data.message,"negative","top")}))}},myRule(e){if(null===e)return"Empty Feild!!"},validate_REF(){(0,R.Ne)(this.$route.params.OrderID).then((e=>{this.Order=e.data,this.Purchase_Date=this.Order.OrderDate,"CustomerName"in this.Order&&(this.CustomerName=this.Order.CustomerName),"SupplierName"in this.Order&&(this.SupplierName=this.Order.SupplierName),this.fetchRows()})).catch((e=>{this.$router.push({name:"purchases-order"})}))},fetchRows(){(0,R.sV)(this.$route.params.OrderID).then((e=>{this.rows=e.data,this.loading=!1})).catch((e=>{this.loading=!1}))},getResponse(e){if(e){const e={OrderID:this.rows[this.selected_index].OrderID,OrderditemID:this.rows[this.selected_index].OrderditemID};(0,R.Wk)(e).then((e=>{(0,F.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1,this.validate_REF()})).catch((e=>{(0,F.j)(e.response.data.message,"negative","top")}))}},update_Ordet_item(e,t){var l=this.rows[t],a=e;l[a.key]=a.value;const o={PPP:l.PPP,Quantity:l.Quantity,OrderditemID:l.OrderditemID};o.PPP<1?((0,F.j)("Price cant be less than 1"),this.rows=[],this.fetchRows()):o.Quantity<1?((0,F.j)("Quantity cant be less than 1"),this.rows=[],this.fetchRows()):(0,R.P8)(o).then((e=>((0,F.U)(e.data.message,"positive","top"),this.rows=[],this.fetchRows(),!0))).catch((e=>((0,F.j)(e.response.data.message,"negative","top"),this.rows=[],this.fetchRows(),!1)))},show_dialog_box(e){this.$refs.confirmbox.message=`OrderditemID ${this.rows[e].OrderditemID} `,this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,t){let l=void 0!==t?t(e):e;return l=void 0===l||null===l?"":String(l),l=l.split('"').join('""'),`"${l}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((t=>this.wrapCsvValue("function"===typeof t.field?t.field(e):e[void 0===t.field?t.name:t.field],t.format))).join(",")))).join("\r\n"),t=(0,O.Z)("table-export.csv",e,"text/csv");!0!==t&&(0,F.j)("Browser denied file download...")}},mounted(){this.validate_REF(),(0,Z.i)().then((e=>{this.transaction_option=e.data})).catch((e=>{})),(0,Y.rH)().then((e=>{this.supplier_option=e.data})).catch((e=>{})),(0,E.jT)().then((e=>{this.driver_option=e.data})).catch((e=>{})),(0,H.fN)().then((e=>{this.employee_option=e.data})).catch((e=>{})),(0,M.OL)().then((e=>{this.customer_option=e.data})).catch((e=>{}))}};var K=l(3414),B=l(3243),A=l(2025),J=l(8886),L=l(8516),G=l(2165),X=l(8186),ee=l(3884),te=l(1289),le=l(4842),ae=l(6778),oe=l(151),se=l(5269),re=l(4554),ie=l(3944),ne=l(2651),de=l(5990),ue=l(677),me=l(7518),pe=l.n(me);z.render=U;const ce=z;pe()(z,"components",{QItem:K.Z,QTable:B.Z,QSpace:A.Z,QToggle:J.Z,QSelect:L.Z,QBtn:G.Z,QTr:X.Z,QTd:ee.Z,QPopupEdit:te.Z,QInput:le.Z,QDialog:ae.Z,QCard:oe.Z,QForm:se.Z,QIcon:re.Z,QPopupProxy:ie.Z,QDate:ne.Z,QTime:de.Z}),pe()(z,"directives",{ClosePopup:ue.Z})}}]);