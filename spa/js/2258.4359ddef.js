"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[2258],{2258:(e,a,l)=>{l.r(a),l.d(a,{default:()=>F});var o=l(3673),t=l(2323),r=l(8880);const s={class:"q-pa-lg q-ma-lg col q-gutter-md"},i={class:"row q-gutter-md"},n={class:"row items-center justify-end"},d={class:"row items-center justify-end"},p={class:"row justify-center"},u={class:"q-pa-lg q-mt-lg"},c={class:"col-2 q-table__title"},m={key:0,class:"col"},h={key:0},w={key:1},g={class:"row"},_=(0,o.Uk)(" Settle Credit "),v=(0,o.Uk)(" List Purchases ");function f(e,a,l,f,D,y){const N=(0,o.up)("PurchaseHeader"),b=(0,o.up)("q-input"),V=(0,o.up)("q-btn"),k=(0,o.up)("q-date"),T=(0,o.up)("q-popup-proxy"),W=(0,o.up)("q-icon"),q=(0,o.up)("q-select"),C=(0,o.up)("DeleteDialogBox"),x=(0,o.up)("q-space"),U=(0,o.up)("q-toggle"),R=(0,o.up)("q-item"),S=(0,o.up)("q-td"),P=(0,o.up)("q-popup-edit"),O=(0,o.up)("q-badge"),G=(0,o.up)("q-tooltip"),Z=(0,o.up)("q-tr"),Q=(0,o.up)("q-table"),j=(0,o.up)("q-page"),I=(0,o.Q2)("close-popup");return(0,o.wg)(),(0,o.j4)(j,{padding:""},{default:(0,o.w5)((()=>[(0,o.Wm)(N),(0,o._)("div",s,[(0,o._)("div",i,[(0,o.Wm)(b,{color:"secondary",modelValue:D.search_data.GRNNO,"onUpdate:modelValue":a[0]||(a[0]=e=>D.search_data.GRNNO=e),type:"text",label:"GRNNO",outlined:"",filled:""},null,8,["modelValue"]),(0,o.Wm)(b,{color:"secondary",label:"Date-Range 1",filled:"",modelValue:D.search_data.D1,"onUpdate:modelValue":a[2]||(a[2]=e=>D.search_data.D1=e)},{prepend:(0,o.w5)((()=>[(0,o.Wm)(W,{name:"event",class:"cursor-pointer"},{default:(0,o.w5)((()=>[(0,o.Wm)(T,{"transition-show":"scale","transition-hide":"scale"},{default:(0,o.w5)((()=>[(0,o.Wm)(k,{color:"secondary",modelValue:D.search_data.D1,"onUpdate:modelValue":a[1]||(a[1]=e=>D.search_data.D1=e),mask:"YYYY-MM-DD"},{default:(0,o.w5)((()=>[(0,o._)("div",n,[(0,o.wy)((0,o.Wm)(V,{label:"Close",color:"secondary",flat:""},null,512),[[I]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,o.Wm)(b,{color:"secondary",label:"Date-Range 2",filled:"",modelValue:D.search_data.D2,"onUpdate:modelValue":a[4]||(a[4]=e=>D.search_data.D2=e)},{prepend:(0,o.w5)((()=>[(0,o.Wm)(W,{name:"event",class:"cursor-pointer"},{default:(0,o.w5)((()=>[(0,o.Wm)(T,{"transition-show":"scale","transition-hide":"scale"},{default:(0,o.w5)((()=>[(0,o.Wm)(k,{color:"secondary",modelValue:D.search_data.D2,"onUpdate:modelValue":a[3]||(a[3]=e=>D.search_data.D2=e),mask:"YYYY-MM-DD"},{default:(0,o.w5)((()=>[(0,o._)("div",d,[(0,o.wy)((0,o.Wm)(V,{label:"Close",color:"secondary",flat:""},null,512),[[I]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,o.Wm)(b,{color:"secondary",modelValue:D.search_data.SupplierName,"onUpdate:modelValue":a[5]||(a[5]=e=>D.search_data.SupplierName=e),type:"text",label:"SupplierName",outlined:"",filled:""},null,8,["modelValue"]),(0,o.Wm)(q,{color:"secondary",style:{width:"200px"},modelValue:D.search_data.TransactionType,"onUpdate:modelValue":a[6]||(a[6]=e=>D.search_data.TransactionType=e),options:["Credit","Cash"],label:"Transaction Type",filled:""},null,8,["modelValue"]),(0,o.Wm)(b,{color:"secondary",modelValue:D.search_data.DriverName,"onUpdate:modelValue":a[7]||(a[7]=e=>D.search_data.DriverName=e),type:"text",label:"DriverName",outlined:"",filled:""},null,8,["modelValue"]),(0,o.Wm)(q,{color:"secondary",style:{width:"200px"},modelValue:D.search_data.order,"onUpdate:modelValue":a[8]||(a[8]=e=>D.search_data.order=e),options:["Ascending ","Descending "],label:"Order Type",filled:""},null,8,["modelValue"])]),(0,o._)("div",p,[(0,o.Wm)(V,{color:"secondary",icon:"search",flat:"",label:"Search",onClick:y.search},null,8,["onClick"]),(0,o.Wm)(V,{color:"negative",icon:"check",flat:"",label:"reset",onClick:y.reset},null,8,["onClick"])])]),(0,o._)("div",u,[(0,o.Wm)(C,{onResponse:y.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,o.Wm)(Q,{title:D.title,rows:D.rows,columns:D.columns,"row-key":"name","visible-columns":D.visibleColumns,loading:D.loading,color:"secondary","no-data-label":"No Purchased Data",pagination:D.pagination,"onUpdate:pagination":a[11]||(a[11]=e=>D.pagination=e),onRequest:y.handleRequest,"rows-per-page-options":[]},{top:(0,o.w5)((l=>[(0,o._)("div",c,(0,t.zw)(D.title),1),(0,o.Wm)(x),e.$q.screen.gt.xs?((0,o.wg)(),(0,o.iD)("div",m,[((0,o.wg)(!0),(0,o.iD)(o.HY,null,(0,o.Ko)(y.toogle_columns,(e=>((0,o.wg)(),(0,o.j4)(R,{style:{display:"inline"},key:e},{default:(0,o.w5)((()=>[(0,o.Wm)(U,{modelValue:D.visibleColumns,"onUpdate:modelValue":a[9]||(a[9]=e=>D.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,o.wg)(),(0,o.j4)(q,{key:1,color:"secondary",modelValue:D.visibleColumns,"onUpdate:modelValue":a[10]||(a[10]=e=>D.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:D.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,o.Wm)(V,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:y.exportTable},null,8,["onClick"]),(0,o.Wm)(V,{flat:"",round:"",dense:"",icon:l.inFullscreen?"fullscreen_exit":"fullscreen",onClick:l.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,o.w5)((e=>[(0,o.Wm)(Z,{props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(S,{key:"GRNNO",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,t.zw)(e.row.GRNNO),1)])),_:2},1032,["props"]),(0,o.Wm)(S,{class:"editable",key:"PurchsedDate",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,t.zw)(e.row.PurchsedDate),1)])),_:2},1032,["props"]),(0,o.Wm)(S,{class:"editable",key:"DeliverdDate",props:e},{default:(0,o.w5)((()=>[e.row.DeliverdDate?((0,o.wg)(),(0,o.iD)("div",h,(0,t.zw)(e.row.DeliverdDate),1)):((0,o.wg)(),(0,o.iD)("div",w,[(0,o._)("div",g,[(0,o.Wm)(V,{to:{name:"ship-grn",params:{GRNNO:e.row.GRNNO}},flat:"",color:"negative",icon:"local_shipping",label:""},null,8,["to"])])]))])),_:2},1032,["props"]),(0,o.Wm)(S,{class:"editable",key:"SupplierName",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,t.zw)(e.row.SupplierName)+" ",1),(0,o.Wm)(P,{modelValue:e.row.SupplierName,"onUpdate:modelValue":a=>e.row.SupplierName=a,title:"Update Supplier Name",buttons:"",persistent:"",validate:a=>y.update_grn({key:"SupplierName",value:a},D.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,o.w5)((e=>[(0,o.Wm)(q,{color:"secondary",modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,hint:"select Supplier",options:D.suppliers_options.map((e=>e.SupplierName)),label:"Supplier",dense:"",autofocus:"",onKeyup:(0,r.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","options","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,o.Wm)(S,{key:"TransactionType",props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(O,{color:"Cash"===e.row.TransactionType?"orange":"blue","text-color":"{2:black}",label:e.row.TransactionType},null,8,["color","label"])])),_:2},1032,["props"]),(0,o.Wm)(S,{class:"editable",key:"DriverName",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,t.zw)(e.row.DriverName)+" ",1),(0,o.Wm)(P,{modelValue:e.row.DriverName,"onUpdate:modelValue":a=>e.row.DriverName=a,title:"Update Driver Name",buttons:"",persistent:"",validate:a=>y.update_grn({key:"DriverName",value:a},D.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,o.w5)((e=>[(0,o.Wm)(q,{color:"secondary",modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,hint:"select Driver",options:D.drivers_options.map((e=>e.DriverName)),label:"Driver",dense:"",autofocus:"",onKeyup:(0,r.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","options","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,o.Wm)(S,{key:"Total",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,t.zw)(e.row.Total),1)])),_:2},1032,["props"]),(0,o.Wm)(S,{key:"CreditSettlement",props:e},{default:(0,o.w5)((()=>["Credit"==e.row.TransactionType?((0,o.wg)(),(0,o.j4)(V,{key:0,color:"blue","icon-right":"payments","no-caps":"",flat:"",dense:"",to:{name:"grn-credit-detail",params:{GRNNO:e.row.GRNNO}}},{default:(0,o.w5)((()=>[(0,o.Wm)(G,null,{default:(0,o.w5)((()=>[_])),_:1})])),_:2},1032,["to"])):(0,o.kq)("",!0)])),_:2},1032,["props"]),(0,o.Wm)(S,{key:"Delete",props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(V,{color:"positive","icon-right":"open_in_new","no-caps":"",flat:"",dense:"",to:{name:"grn-detail",params:{GRNNO:e.row.GRNNO}}},{default:(0,o.w5)((()=>[(0,o.Wm)(G,null,{default:(0,o.w5)((()=>[v])),_:1})])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,o.Wm)(S,{key:"Delete",props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(V,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:a=>y.show_dialog_box(D.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","visible-columns","loading","pagination","onRequest"])])])),_:1})}var D=l(4107),y=l(6966),N=l(2841),b=l(5616),V=l(5547),k=l(8956),T=l(8554),W=l(7428);const q={name:"Purchases",components:{PurchaseHeader:D.Z,DeleteDialogBox:y.Z},data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},TransactionType:[{ID:1,Type:"Cash"},{ID:2,Type:"Credit"}],loading:!0,title:"Purchases",rows:[],visibleColumns:["PurchsedDate","DeliverdDate","SupplierName","TransactionType","DriverName"],columns:[{name:"GRNNO",label:"GRNNO",field:"GRNNO",align:"left",required:!0},{name:"PurchsedDate",label:"Purchsed Date",field:"PurchsedDate",align:"center"},{name:"DeliverdDate",label:"Deliverd Date",field:"DeliverdDate",align:"center"},{name:"SupplierName",label:"Supplier Name",field:"SupplierName",align:"center"},{name:"TransactionType",label:"Transaction Type",field:"TransactionType",align:"center"},{name:"DriverName",label:"Driver Name",field:"DriverName",align:"center"},{name:"Total",label:"Total Amount ",field:"Total",required:!0,align:"center"},{name:"CreditSettlement",label:"Credit Settlement",field:"CreditSettlement",required:!0,align:"center"},{name:"PurchaseItems",label:"Puchased Items",field:"PurchaseItems",align:"center",required:!0},{name:"Delete",label:"Delete",field:"Delete",required:!0,align:"center"}],suppliers_options:[],drivers_options:[],search_data:{page:1,GRNNO:"",D1:"",D2:"",SupplierName:"",TransactionType:"",DriverName:"",order:"Descending"}}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))}},methods:{handleRequest(e){this.fetch_rows(e.pagination.page)},reset(){this.search_data={page:1,GRNNO:"",D1:"",D2:"",SupplierName:"",TransactionType:"",DriverName:"",order:"Descending"},this.fetch_rows(1)},search(){this.fetch_rows(1)},request_data_builder(e){var a=this.search_data;return a.page=e,a},fetch_rows(e){(0,V.FC)(this.request_data_builder(e)).then((e=>{const a=e.data.meta_data;this.pagination.page=a.current_page,this.pagination.rowsPerPage=a.per_page,this.pagination.rowsNumber=a.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},date_fromat(e){return b.ZP.formatDate(e,"YYYY-MM-DD HH:mm")},getResponse(e){if(e){const e={GRNNO:this.rows[this.selected_index].GRNNO};(0,V.Ep)(e).then((e=>{(0,W.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1})).catch((e=>{(0,W.j)(e.response.data.message,"negative","top")}))}},update_grn(e,a){var l=this.rows[a],o=e;l[o.key]=o.value;var t=this.drivers_options.find((e=>e.DriverName===l.DriverName));const r={PurchsedDate:l.PurchsedDate,DeliverdDate:l.DeliverdDate,SupplierID:this.suppliers_options.find((e=>e.SupplierName===l.SupplierName)).SupplierID,DriverID:t?t.DriverID:"",GRNNO:l.GRNNO};(0,V.wj)(r).then((e=>((0,W.U)(e.data.message,"positive","top"),!0))).catch((e=>((0,W.j)(e.response.data.message,"negative","top"),this.rows=[],this.fetch_rows(this.pagination.current_page),!1)))},show_dialog_box(e){this.$refs.confirmbox.message=`GRNNO ${this.rows[e].GRNNO} `,this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,a){let l=void 0!==a?a(e):e;return l=void 0===l||null===l?"":String(l),l=l.split('"').join('""'),`"${l}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((a=>this.wrapCsvValue("function"===typeof a.field?a.field(e):e[void 0===a.field?a.name:a.field],a.format))).join(",")))).join("\r\n"),a=(0,N.Z)("table-export.csv",e,"text/csv");!0!==a&&(0,W.j)("Browser denied file download...")}},mounted(){this.fetch_rows(1),(0,k.rH)().then((e=>{this.suppliers_options=e.data})).catch((e=>{this.suppliers_options=[]})),(0,T.jT)().then((e=>{this.drivers_options=e.data})).catch((e=>{}))}};var C=l(4379),x=l(4842),U=l(4554),R=l(3944),S=l(2651),P=l(2165),O=l(8516),G=l(3243),Z=l(2025),Q=l(3414),j=l(8886),I=l(8186),Y=l(3884),z=l(1289),$=l(5990),H=l(9721),M=l(8870),B=l(677),K=l(7518),E=l.n(K);q.render=f,q.__scopeId="data-v-6fbcdc80";const F=q;E()(q,"components",{QPage:C.Z,QInput:x.Z,QIcon:U.Z,QPopupProxy:R.Z,QDate:S.Z,QBtn:P.Z,QSelect:O.Z,QTable:G.Z,QSpace:Z.Z,QItem:Q.Z,QToggle:j.Z,QTr:I.Z,QTd:Y.Z,QPopupEdit:z.Z,QTime:$.Z,QBadge:H.Z,QTooltip:M.Z}),E()(q,"directives",{ClosePopup:B.Z})}}]);