"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[2876],{2876:(e,a,o)=>{o.r(a),o.d(a,{default:()=>K});var l=o(3673),t=o(2323),s=o(8880);const r={class:"q-pa-lg q-ma-lg col q-gutter-md"},d={class:"row q-gutter-md"},n={class:"row items-center justify-end"},i={class:"row items-center justify-end"},u={class:"row justify-center"},m={class:"q-pa-lg q-mt-lg"},p={class:"col-2 q-table__title"},c={key:0,class:"col"},w={class:"q-pa-md",style:{"max-width":"300px"}},h={class:"row items-center justify-end"},_={class:"row items-center justify-end"},f=(0,l.Uk)(" List Orders ");function g(e,a,o,g,v,D){const b=(0,l.up)("OrdersHeader"),y=(0,l.up)("q-btn"),C=(0,l.up)("q-date"),V=(0,l.up)("q-popup-proxy"),W=(0,l.up)("q-icon"),q=(0,l.up)("q-input"),O=(0,l.up)("q-select"),k=(0,l.up)("DeleteDialogBox"),U=(0,l.up)("q-space"),x=(0,l.up)("q-toggle"),I=(0,l.up)("q-item"),Y=(0,l.up)("q-td"),Z=(0,l.up)("q-time"),N=(0,l.up)("q-popup-edit"),T=(0,l.up)("q-tooltip"),Q=(0,l.up)("q-tr"),j=(0,l.up)("q-table"),P=(0,l.up)("q-page"),M=(0,l.Q2)("close-popup");return(0,l.wg)(),(0,l.j4)(P,{padding:""},{default:(0,l.w5)((()=>[(0,l.Wm)(b,{Employee:!0}),(0,l._)("div",r,[(0,l._)("div",d,[(0,l.Wm)(q,{color:"secondary",label:"Date-Range 1",filled:"",modelValue:v.search_data.D1,"onUpdate:modelValue":a[1]||(a[1]=e=>v.search_data.D1=e)},{prepend:(0,l.w5)((()=>[(0,l.Wm)(W,{name:"event",class:"cursor-pointer"},{default:(0,l.w5)((()=>[(0,l.Wm)(V,{"transition-show":"scale","transition-hide":"scale"},{default:(0,l.w5)((()=>[(0,l.Wm)(C,{color:"secondary",modelValue:v.search_data.D1,"onUpdate:modelValue":a[0]||(a[0]=e=>v.search_data.D1=e),mask:"YYYY-MM-DD"},{default:(0,l.w5)((()=>[(0,l._)("div",n,[(0,l.wy)((0,l.Wm)(y,{label:"Close",color:"secondary",flat:""},null,512),[[M]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,l.Wm)(q,{color:"secondary",label:"Date-Range 2",filled:"",modelValue:v.search_data.D2,"onUpdate:modelValue":a[3]||(a[3]=e=>v.search_data.D2=e)},{prepend:(0,l.w5)((()=>[(0,l.Wm)(W,{name:"event",class:"cursor-pointer"},{default:(0,l.w5)((()=>[(0,l.Wm)(V,{"transition-show":"scale","transition-hide":"scale"},{default:(0,l.w5)((()=>[(0,l.Wm)(C,{color:"secondary",modelValue:v.search_data.D2,"onUpdate:modelValue":a[2]||(a[2]=e=>v.search_data.D2=e),mask:"YYYY-MM-DD"},{default:(0,l.w5)((()=>[(0,l._)("div",i,[(0,l.wy)((0,l.Wm)(y,{label:"Close",color:"secondary",flat:""},null,512),[[M]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,l.Wm)(q,{color:"secondary",modelValue:v.search_data.CustomerName,"onUpdate:modelValue":a[4]||(a[4]=e=>v.search_data.CustomerName=e),type:"text",label:"Customer Name",outlined:"",filled:""},null,8,["modelValue"]),(0,l.Wm)(O,{color:"secondary",style:{width:"200px"},modelValue:v.search_data.order,"onUpdate:modelValue":a[5]||(a[5]=e=>v.search_data.order=e),options:["Ascending ","Descending "],label:"Order Type",filled:""},null,8,["modelValue"])]),(0,l._)("div",u,[(0,l.Wm)(y,{color:"secondary",icon:"search",flat:"",label:"Search",onClick:D.search},null,8,["onClick"]),(0,l.Wm)(y,{color:"negative",icon:"check",flat:"",label:"reset",onClick:D.reset},null,8,["onClick"])])]),(0,l._)("div",m,[(0,l.Wm)(k,{onResponse:D.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,l.Wm)(j,{title:v.title,rows:v.rows,columns:v.columns,"row-key":"name","visible-columns":v.visibleColumns,loading:v.loading,color:"secondary","no-data-label":"No Sales Order",pagination:v.pagination,"onUpdate:pagination":a[8]||(a[8]=e=>v.pagination=e),onRequest:D.handleRequest,"rows-per-page-options":[]},{top:(0,l.w5)((o=>[(0,l._)("div",p,(0,t.zw)(v.title),1),(0,l.Wm)(U),e.$q.screen.gt.xs?((0,l.wg)(),(0,l.iD)("div",c,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(D.toogle_columns,(e=>((0,l.wg)(),(0,l.j4)(I,{style:{display:"inline"},key:e},{default:(0,l.w5)((()=>[(0,l.Wm)(x,{modelValue:v.visibleColumns,"onUpdate:modelValue":a[6]||(a[6]=e=>v.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,l.wg)(),(0,l.j4)(O,{key:1,color:"secondary",modelValue:v.visibleColumns,"onUpdate:modelValue":a[7]||(a[7]=e=>v.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:v.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,l.Wm)(y,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:D.exportTable},null,8,["onClick"]),(0,l.Wm)(y,{flat:"",round:"",dense:"",icon:o.inFullscreen?"fullscreen_exit":"fullscreen",onClick:o.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,l.w5)((e=>[(0,l.Wm)(Q,{props:e},{default:(0,l.w5)((()=>[(0,l.Wm)(Y,{key:"OrderID",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.OrderID),1)])),_:2},1032,["props"]),(0,l.Wm)(Y,{class:"editable",key:"OrderDate",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.OrderDate)+" ",1),(0,l.Wm)(N,{modelValue:e.row.OrderDate,"onUpdate:modelValue":a=>e.row.OrderDate=a,title:"Update Purchsed Date",buttons:"",persistent:"",validate:a=>D.update_order({key:"OrderDate",value:a},v.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,l.w5)((e=>[(0,l._)("div",w,[(0,l.Wm)(q,{color:"secondary",filled:"",modelValue:e.value,"onUpdate:modelValue":a=>e.value=a},{prepend:(0,l.w5)((()=>[(0,l.Wm)(W,{name:"event",class:"cursor-pointer"},{default:(0,l.w5)((()=>[(0,l.Wm)(V,{"transition-show":"scale","transition-hide":"scale"},{default:(0,l.w5)((()=>[(0,l.Wm)(C,{modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,mask:"YYYY-MM-DD HH:mm"},{default:(0,l.w5)((()=>[(0,l._)("div",h,[(0,l.wy)((0,l.Wm)(y,{label:"Close",color:"primary",flat:""},null,512),[[M]])])])),_:2},1032,["modelValue","onUpdate:modelValue"])])),_:2},1024)])),_:2},1024)])),append:(0,l.w5)((()=>[(0,l.Wm)(W,{name:"access_time",class:"cursor-pointer"},{default:(0,l.w5)((()=>[(0,l.Wm)(V,{"transition-show":"scale","transition-hide":"scale"},{default:(0,l.w5)((()=>[(0,l.Wm)(Z,{modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,mask:"YYYY-MM-DD HH:mm"},{default:(0,l.w5)((()=>[(0,l._)("div",_,[(0,l.wy)((0,l.Wm)(y,{label:"Close",color:"primary",flat:""},null,512),[[M]])])])),_:2},1032,["modelValue","onUpdate:modelValue"])])),_:2},1024)])),_:2},1024)])),_:2},1032,["modelValue","onUpdate:modelValue"])])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,l.Wm)(Y,{class:"editable",key:"CustomerName",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.CustomerName)+" ",1),(0,l.Wm)(N,{modelValue:e.row.CustomerName,"onUpdate:modelValue":a=>e.row.CustomerName=a,title:"Update Customer Name",buttons:"",persistent:"",validate:a=>D.update_order({key:"CustomerName",value:a},v.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,l.w5)((e=>[(0,l.Wm)(O,{color:"secondary",modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,hint:"select Customer",options:v.Customers_options.map((e=>e.CustomerName)),label:"Customer",dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","options","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,l.Wm)(Y,{key:"Total",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.Total),1)])),_:2},1032,["props"]),(0,l.Wm)(Y,{key:"OrderedItems",props:e},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{color:"positive","icon-right":"open_in_new","no-caps":"",flat:"",dense:"",to:{name:"Eorder-detail",params:{OrderID:e.row.OrderID}}},{default:(0,l.w5)((()=>[(0,l.Wm)(T,null,{default:(0,l.w5)((()=>[f])),_:1})])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,l.Wm)(Y,{key:"Delete",props:e},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:a=>D.show_dialog_box(v.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","visible-columns","loading","pagination","onRequest"])])])),_:1})}var v=o(3592),D=o(6966),b=o(2841),y=o(5616),C=o(3962),V=o(2530),W=o(8554),q=o(7428);const O={name:"SalesOrders",components:{OrdersHeader:v.Z,DeleteDialogBox:D.Z},data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},TransactionType:[{ID:1,Type:"Cash"},{ID:2,Type:"Credit"}],loading:!0,title:"Sales Orders",rows:[],visibleColumns:["OrderDate","CustomerName"],columns:[{name:"OrderID",label:"Order ID",field:"OrderID",align:"left",sortable:!0,required:!0},{name:"OrderDate",label:"Order Date",field:"OrderDate",align:"center",sortable:!0},{name:"CustomerName",label:"Customer Name",field:"CustomerName",sortable:!0,align:"center"},{name:"Total",label:"Total Amount ",field:"Total",required:!0,align:"center"},{name:"OrderedItems",label:"Ordered Items",field:"OrderedItems",align:"center",required:!0},{name:"Delete",label:"Delete",field:"Delete",required:!0,align:"center"}],Customers_options:[],drivers_options:[],search_data:{page:1,D1:"",D2:"",CustomerName:"",order:"Descending"}}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))}},methods:{handleRequest(e){this.fetch_rows(e.pagination.page)},reset(){this.search_data={page:1,D1:"",D2:"",CustomerName:"",order:"Descending"},this.fetch_rows(1)},search(){this.fetch_rows(1)},request_data_builder(e){var a=this.search_data;return a.page=e,a},fetch_rows(e){(0,C.k7)(this.request_data_builder(e)).then((e=>{const a=e.data.meta_data;this.pagination.page=a.current_page,this.pagination.rowsPerPage=a.per_page,this.pagination.rowsNumber=a.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},date_fromat(e){return y.ZP.formatDate(e,"YYYY-MM-DD HH:mm")},getResponse(e){if(e){const e={OrderID:this.rows[this.selected_index].OrderID};(0,C.QS)(e).then((e=>{(0,q.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1})).catch((e=>{(0,q.j)(e.response.data.message,"negative","top")}))}},update_order(e,a){var o=this.rows[a],l=e;o[l.key]=l.value;const t={SupplierId:"",CustomerId:this.Customers_options.find((e=>e.CustomerName===o.CustomerName)).CustomerID,OrderDate:o.OrderDate,OrderID:o.OrderID};(0,C.qJ)(t).then((e=>((0,q.U)(e.data.message,"positive","top"),!0))).catch((e=>((0,q.j)(e.response.data.message,"negative","top"),this.rows=[],this.fetch_rows(props.pagination.page),!1)))},show_dialog_box(e){this.$refs.confirmbox.message=`OrderID ${this.rows[e].OrderID} `,this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,a){let o=void 0!==a?a(e):e;return o=void 0===o||null===o?"":String(o),o=o.split('"').join('""'),`"${o}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((a=>this.wrapCsvValue("function"===typeof a.field?a.field(e):e[void 0===a.field?a.name:a.field],a.format))).join(",")))).join("\r\n"),a=(0,b.Z)("table-export.csv",e,"text/csv");!0!==a&&(0,q.j)("Browser denied file download...")}},mounted(){this.fetch_rows(1),(0,V.OL)().then((e=>{this.Customers_options=e.data})).catch((e=>{this.Customers_options=[]})),(0,W.jT)().then((e=>{this.drivers_options=e.data})).catch((e=>{}))}};var k=o(4379),U=o(4842),x=o(4554),I=o(3944),Y=o(2651),Z=o(2165),N=o(8516),T=o(3243),Q=o(2025),j=o(3414),P=o(8886),M=o(8186),R=o(3884),H=o(1289),S=o(5990),$=o(8870),z=o(677),B=o(7518),E=o.n(B);O.render=g,O.__scopeId="data-v-247db4d8";const K=O;E()(O,"components",{QPage:k.Z,QInput:U.Z,QIcon:x.Z,QPopupProxy:I.Z,QDate:Y.Z,QBtn:Z.Z,QSelect:N.Z,QTable:T.Z,QSpace:Q.Z,QItem:j.Z,QToggle:P.Z,QTr:M.Z,QTd:R.Z,QPopupEdit:H.Z,QTime:S.Z,QTooltip:$.Z}),E()(O,"directives",{ClosePopup:z.Z})}}]);