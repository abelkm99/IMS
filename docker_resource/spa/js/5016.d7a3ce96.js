"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[5016],{5016:(e,a,l)=>{l.r(a),l.d(a,{default:()=>Y});var t=l(3673),o=l(2323);const r={class:"q-pa-lg q-ma-lg col q-gutter-md"},s={class:"row q-gutter-md"},n={class:"row items-center justify-end"},i={class:"row items-center justify-end"},d={class:"row justify-center"},m={class:"q-pa-lg q-mt-lg"},u={class:"col-2 q-table__title"},c={key:0,class:"col"},p=(0,t.Uk)(" Settle Credit "),w=(0,t.Uk)(" List Purchases ");function h(e,a,l,h,g,_){const f=(0,t.up)("CreditSettlementHeader"),b=(0,t.up)("q-input"),v=(0,t.up)("q-btn"),y=(0,t.up)("q-date"),D=(0,t.up)("q-popup-proxy"),C=(0,t.up)("q-icon"),k=(0,t.up)("q-select"),N=(0,t.up)("q-space"),q=(0,t.up)("q-toggle"),W=(0,t.up)("q-item"),V=(0,t.up)("q-td"),R=(0,t.up)("q-tooltip"),P=(0,t.up)("q-tr"),T=(0,t.up)("q-table"),U=(0,t.up)("q-page"),S=(0,t.Q2)("close-popup");return(0,t.wg)(),(0,t.j4)(U,{padding:""},{default:(0,t.w5)((()=>[(0,t.Wm)(f),(0,t._)("div",r,[(0,t._)("div",s,[(0,t.Wm)(b,{color:"secondary",modelValue:g.search_data.REFNO,"onUpdate:modelValue":a[0]||(a[0]=e=>g.search_data.REFNO=e),type:"number",label:"Reference Number",outlined:"",filled:""},null,8,["modelValue"]),(0,t.Wm)(b,{color:"secondary",label:"Date-Range 1",filled:"",modelValue:g.search_data.D1,"onUpdate:modelValue":a[2]||(a[2]=e=>g.search_data.D1=e)},{prepend:(0,t.w5)((()=>[(0,t.Wm)(C,{name:"event",class:"cursor-pointer"},{default:(0,t.w5)((()=>[(0,t.Wm)(D,{"transition-show":"scale","transition-hide":"scale"},{default:(0,t.w5)((()=>[(0,t.Wm)(y,{color:"secondary",modelValue:g.search_data.D1,"onUpdate:modelValue":a[1]||(a[1]=e=>g.search_data.D1=e),mask:"YYYY-MM-DD"},{default:(0,t.w5)((()=>[(0,t._)("div",n,[(0,t.wy)((0,t.Wm)(v,{label:"Close",color:"secondary",flat:""},null,512),[[S]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,t.Wm)(b,{color:"secondary",label:"Date-Range 2",filled:"",modelValue:g.search_data.D2,"onUpdate:modelValue":a[4]||(a[4]=e=>g.search_data.D2=e)},{prepend:(0,t.w5)((()=>[(0,t.Wm)(C,{name:"event",class:"cursor-pointer"},{default:(0,t.w5)((()=>[(0,t.Wm)(D,{"transition-show":"scale","transition-hide":"scale"},{default:(0,t.w5)((()=>[(0,t.Wm)(y,{color:"secondary",modelValue:g.search_data.D2,"onUpdate:modelValue":a[3]||(a[3]=e=>g.search_data.D2=e),mask:"YYYY-MM-DD"},{default:(0,t.w5)((()=>[(0,t._)("div",i,[(0,t.wy)((0,t.Wm)(v,{label:"Close",color:"secondary",flat:""},null,512),[[S]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,t.Wm)(b,{color:"secondary",modelValue:g.search_data.CustomerName,"onUpdate:modelValue":a[5]||(a[5]=e=>g.search_data.CustomerName=e),type:"text",label:"CustomerName",outlined:"",filled:""},null,8,["modelValue"]),(0,t.Wm)(b,{color:"secondary",modelValue:g.search_data.DriverName,"onUpdate:modelValue":a[6]||(a[6]=e=>g.search_data.DriverName=e),type:"text",label:"DriverName",outlined:"",filled:""},null,8,["modelValue"]),(0,t.Wm)(k,{color:"secondary",style:{width:"200px"},modelValue:g.search_data.order,"onUpdate:modelValue":a[7]||(a[7]=e=>g.search_data.order=e),options:["Ascending ","Descending "],label:"Order Type",filled:""},null,8,["modelValue"])]),(0,t._)("div",d,[(0,t.Wm)(v,{color:"secondary",icon:"search",flat:"",label:"Search",onClick:_.search},null,8,["onClick"]),(0,t.Wm)(v,{color:"negative",icon:"check",flat:"",label:"reset",onClick:_.reset},null,8,["onClick"])])]),(0,t._)("div",m,[(0,t.Wm)(T,{title:g.title,rows:g.rows,columns:g.columns,"row-key":"name","visible-columns":g.visibleColumns,loading:g.loading,color:"secondary","no-data-label":"No Purchased Data",pagination:g.pagination,"onUpdate:pagination":a[10]||(a[10]=e=>g.pagination=e),onRequest:_.handleRequest,"rows-per-page-options":[]},{top:(0,t.w5)((l=>[(0,t._)("div",u,(0,o.zw)(g.title),1),(0,t.Wm)(N),e.$q.screen.gt.xs?((0,t.wg)(),(0,t.iD)("div",c,[((0,t.wg)(!0),(0,t.iD)(t.HY,null,(0,t.Ko)(_.toogle_columns,(e=>((0,t.wg)(),(0,t.j4)(W,{style:{display:"inline"},key:e},{default:(0,t.w5)((()=>[(0,t.Wm)(q,{modelValue:g.visibleColumns,"onUpdate:modelValue":a[8]||(a[8]=e=>g.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,t.wg)(),(0,t.j4)(k,{key:1,color:"secondary",modelValue:g.visibleColumns,"onUpdate:modelValue":a[9]||(a[9]=e=>g.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:g.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,t.Wm)(v,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:_.exportTable},null,8,["onClick"]),(0,t.Wm)(v,{flat:"",round:"",dense:"",icon:l.inFullscreen?"fullscreen_exit":"fullscreen",onClick:l.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,t.w5)((e=>[(0,t.Wm)(P,{style:(0,o.j5)(`background: linear-gradient(to right, ${_.getColor(e.row.Paid/e.row.Total)} ${e.row.Paid/e.row.Total*100}%, white 5%);`),props:e},{default:(0,t.w5)((()=>[(0,t.Wm)(V,{key:"REFNO",props:e},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(e.row.REFNO),1)])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"SalesDate",props:e},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(e.row.SalesDate),1)])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"CustomerName",props:e},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(e.row.CustomerName),1)])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"DriverName",props:e},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(e.row.DriverName),1)])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"Remainder",props:e},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(e.row.Remainder),1)])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"Paid",props:e},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(e.row.Paid),1)])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"Total",props:e},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(e.row.Total),1)])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"CreditSettlement",props:e},{default:(0,t.w5)((()=>[(0,t.Wm)(v,{to:{name:"ref-credit-detail",params:{REFNO:e.row.REFNO}},color:"black","icon-right":"payments","no-caps":"",flat:"",dense:""},{default:(0,t.w5)((()=>[(0,t.Wm)(R,null,{default:(0,t.w5)((()=>[p])),_:1})])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,t.Wm)(V,{key:"PurchaseItems",props:e},{default:(0,t.w5)((()=>[(0,t.Wm)(v,{color:"black","icon-right":"open_in_new","no-caps":"",flat:"",dense:"",to:{name:"ref-detail",params:{REFNO:e.row.REFNO}}},{default:(0,t.w5)((()=>[(0,t.Wm)(R,null,{default:(0,t.w5)((()=>[w])),_:1})])),_:2},1032,["to"])])),_:2},1032,["props"])])),_:2},1032,["style","props"])])),_:1},8,["title","rows","columns","visible-columns","loading","pagination","onRequest"])])])),_:1})}var g=l(9826),_=l(2841),f=l(5616),b=l(8194),v=l(8987),y=l(7428);const D={name:"REFCredit",components:{CreditSettlementHeader:g.Z},data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},color:this.getColor(.8),TransactionType:[{ID:1,Type:"Cash"},{ID:2,Type:"Credit"}],loading:!0,title:"Purchases",rows:[],visibleColumns:["SalesDate","SupplierName","CustomerName","DriverName"],columns:[{name:"REFNO",label:"REFNO",field:"REFNO",align:"left",sortable:!0,required:!0},{name:"SalesDate",label:"Sales Date",field:"SalesDate",align:"center",sortable:!0},{name:"CustomerName",label:"Customer Name",field:"CustomerName",sortable:!0,align:"center"},{name:"DriverName",label:"Driver Name",field:"DriverName",sortable:!0,align:"center"},{name:"Remainder",label:"Remainder",field:"Remainder",required:!0,align:"center"},{name:"Paid",label:"Total Paid",field:"Paid",required:!0,align:"center"},{name:"Total",label:"Total Amount ",field:"Total",required:!0,align:"center"},{name:"CreditSettlement",label:"Credit Settlement",field:"CreditSettlement",required:!0,align:"center"},{name:"PurchaseItems",label:"Puchased Items",field:"PurchaseItems",align:"center",required:!0}],suppliers_options:[],drivers_options:[],search_data:{page:1,REFNO:"",D1:"",D2:"",DriverName:"",CustomerName:"",order:"Descending"}}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))}},methods:{handleRequest(e){this.fetch_rows(e.pagination.page)},reset(){this.search_data={page:1,REFNO:"",D1:"",D2:"",DriverName:"",CustomerName:"",order:"Descending"},this.fetch_rows(1)},search(){this.fetch_rows(1)},request_data_builder(e){var a=this.search_data;return a.page=e,a},fetch_rows(e){(0,b.BA)(this.request_data_builder(e)).then((e=>{const a=e.data.meta_data;this.pagination.page=a.current_page,this.pagination.rowsPerPage=a.per_page,this.pagination.rowsNumber=a.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},getColor(e){return(0,v.u)(e)},date_fromat(e){return f.ZP.formatDate(e,"YYYY-MM-DD HH:mm")},wrapCsvValue(e,a){let l=void 0!==a?a(e):e;return l=void 0===l||null===l?"":String(l),l=l.split('"').join('""'),`"${l}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((a=>this.wrapCsvValue("function"===typeof a.field?a.field(e):e[void 0===a.field?a.name:a.field],a.format))).join(",")))).join("\r\n"),a=(0,_.Z)("table-export.csv",e,"text/csv");!0!==a&&(0,y.j)("Browser denied file download...")}},mounted(){this.fetch_rows(1)}};var C=l(4379),k=l(4842),N=l(4554),q=l(3944),W=l(2651),V=l(2165),R=l(8516),P=l(3243),T=l(2025),U=l(3414),S=l(8886),Z=l(8186),F=l(3884),E=l(8870),Q=l(677),O=l(7518),x=l.n(O);D.render=h,D.__scopeId="data-v-d42da07c";const Y=D;x()(D,"components",{QPage:C.Z,QInput:k.Z,QIcon:N.Z,QPopupProxy:q.Z,QDate:W.Z,QBtn:V.Z,QSelect:R.Z,QTable:P.Z,QSpace:T.Z,QItem:U.Z,QToggle:S.Z,QTr:Z.Z,QTd:F.Z,QTooltip:E.Z}),x()(D,"directives",{ClosePopup:Q.Z})}}]);