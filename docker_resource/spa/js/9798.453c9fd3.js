"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[9798],{9798:(e,a,o)=>{o.r(a),o.d(a,{default:()=>K});var l=o(3673),t=o(2323),s=o(8880);const r={class:"q-pa-lg q-ma-lg col q-gutter-md"},n={class:"row q-gutter-md"},i={class:"row items-center justify-end"},d={class:"row items-center justify-end"},p={class:"row justify-center"},u={class:"q-pa-lg q-mt-lg"},c={class:"col-2 q-table__title"},m={key:0,class:"col"},w=(0,l.Uk)(" List Tranfered in Details ");function f(e,a,o,f,D,h){const v=(0,l.up)("TransferHeader"),_=(0,l.up)("q-btn"),g=(0,l.up)("q-date"),b=(0,l.up)("q-popup-proxy"),y=(0,l.up)("q-icon"),V=(0,l.up)("q-input"),T=(0,l.up)("q-select"),W=(0,l.up)("DeleteDialogBox"),k=(0,l.up)("q-space"),C=(0,l.up)("q-toggle"),U=(0,l.up)("q-item"),q=(0,l.up)("q-td"),x=(0,l.up)("q-popup-edit"),I=(0,l.up)("q-tooltip"),N=(0,l.up)("q-tr"),Z=(0,l.up)("q-table"),E=(0,l.up)("q-page"),Q=(0,l.Q2)("close-popup");return(0,l.wg)(),(0,l.j4)(E,{padding:""},{default:(0,l.w5)((()=>[(0,l._)("div",null,[(0,l.Wm)(v)]),(0,l._)("div",r,[(0,l._)("div",n,[(0,l.Wm)(V,{color:"secondary",label:"Date-Range 1",filled:"",modelValue:D.search_data.D1,"onUpdate:modelValue":a[1]||(a[1]=e=>D.search_data.D1=e)},{prepend:(0,l.w5)((()=>[(0,l.Wm)(y,{name:"event",class:"cursor-pointer"},{default:(0,l.w5)((()=>[(0,l.Wm)(b,{"transition-show":"scale","transition-hide":"scale"},{default:(0,l.w5)((()=>[(0,l.Wm)(g,{color:"secondary",modelValue:D.search_data.D1,"onUpdate:modelValue":a[0]||(a[0]=e=>D.search_data.D1=e),mask:"YYYY-MM-DD"},{default:(0,l.w5)((()=>[(0,l._)("div",i,[(0,l.wy)((0,l.Wm)(_,{label:"Close",color:"secondary",flat:""},null,512),[[Q]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,l.Wm)(V,{color:"secondary",label:"Date-Range 2",filled:"",modelValue:D.search_data.D2,"onUpdate:modelValue":a[3]||(a[3]=e=>D.search_data.D2=e)},{prepend:(0,l.w5)((()=>[(0,l.Wm)(y,{name:"event",class:"cursor-pointer"},{default:(0,l.w5)((()=>[(0,l.Wm)(b,{"transition-show":"scale","transition-hide":"scale"},{default:(0,l.w5)((()=>[(0,l.Wm)(g,{color:"secondary",modelValue:D.search_data.D2,"onUpdate:modelValue":a[2]||(a[2]=e=>D.search_data.D2=e),mask:"YYYY-MM-DD"},{default:(0,l.w5)((()=>[(0,l._)("div",d,[(0,l.wy)((0,l.Wm)(_,{label:"Close",color:"secondary",flat:""},null,512),[[Q]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,l.Wm)(V,{color:"secondary",modelValue:D.search_data.DriverName,"onUpdate:modelValue":a[4]||(a[4]=e=>D.search_data.DriverName=e),type:"text",label:"DriverName",outlined:"",filled:""},null,8,["modelValue"]),(0,l.Wm)(T,{color:"secondary",style:{width:"200px"},modelValue:D.search_data.order,"onUpdate:modelValue":a[5]||(a[5]=e=>D.search_data.order=e),options:["Ascending ","Descending "],label:"Order Type",filled:""},null,8,["modelValue"])]),(0,l._)("div",p,[(0,l.Wm)(_,{color:"secondary",icon:"search",flat:"",label:"Search",onClick:h.search},null,8,["onClick"]),(0,l.Wm)(_,{color:"negative",icon:"check",flat:"",label:"reset",onClick:h.reset},null,8,["onClick"])])]),(0,l._)("div",u,[(0,l.Wm)(W,{onResponse:h.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,l.Wm)(Z,{title:D.title,rows:D.rows,columns:D.columns,"row-key":"name","visible-columns":D.visibleColumns,loading:D.loading,color:"secondary","no-data-label":"No Transfered Data",pagination:D.pagination,"onUpdate:pagination":a[8]||(a[8]=e=>D.pagination=e),onRequest:h.handleRequest,"rows-per-page-options":[]},{top:(0,l.w5)((o=>[(0,l._)("div",c,(0,t.zw)(D.title),1),(0,l.Wm)(k),e.$q.screen.gt.xs?((0,l.wg)(),(0,l.iD)("div",m,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(h.toogle_columns,(e=>((0,l.wg)(),(0,l.j4)(U,{style:{display:"inline"},key:e},{default:(0,l.w5)((()=>[(0,l.Wm)(C,{modelValue:D.visibleColumns,"onUpdate:modelValue":a[6]||(a[6]=e=>D.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,l.wg)(),(0,l.j4)(T,{key:1,color:"secondary",modelValue:D.visibleColumns,"onUpdate:modelValue":a[7]||(a[7]=e=>D.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:D.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,l.Wm)(_,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:h.exportTable},null,8,["onClick"]),(0,l.Wm)(_,{flat:"",round:"",dense:"",icon:o.inFullscreen?"fullscreen_exit":"fullscreen",onClick:o.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,l.w5)((e=>[(0,l.Wm)(N,{props:e},{default:(0,l.w5)((()=>[(0,l.Wm)(q,{key:"TEID",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.TEID),1)])),_:2},1032,["props"]),(0,l.Wm)(q,{class:"editable",key:"Date",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.Date),1)])),_:2},1032,["props"]),(0,l.Wm)(q,{class:"editable",key:"Cost",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.Cost)+" ",1),(0,l.Wm)(x,{modelValue:e.row.Cost,"onUpdate:modelValue":a=>e.row.Cost=a,modelModifiers:{number:!0},title:"Update Item Price",buttons:"",persistent:"",validate:a=>h.update_te({key:"Cost",value:a},D.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,l.w5)((e=>[(0,l.Wm)(V,{color:"secondary",type:"number",modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,modelModifiers:{number:!0},hint:"Enter a number greater than 0",dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,l.Wm)(q,{class:"editable",key:"DriverName",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.DriverName)+" ",1),(0,l.Wm)(x,{modelValue:e.row.DriverName,"onUpdate:modelValue":a=>e.row.DriverName=a,title:"Update Driver Name",buttons:"",persistent:"",validate:a=>h.update_te({key:"DriverName",value:a},D.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,l.w5)((e=>[(0,l.Wm)(T,{color:"secondary",modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,hint:"select Driver",options:h.drivers_None_option,label:"Driver",dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","options","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,l.Wm)(q,{key:"Description",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,t.zw)(e.row.Description)+" ",1),(0,l.Wm)(x,{modelValue:e.row.Description,"onUpdate:modelValue":a=>e.row.Description=a,modelModifiers:{number:!0},title:"Update Purchase Description",buttons:"",persistent:"",validate:a=>h.update_te({key:"Description",value:a},D.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,l.w5)((e=>[(0,l.Wm)(V,{color:"secondary",type:"text",modelValue:e.value,"onUpdate:modelValue":a=>e.value=a,dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,l.Wm)(q,{key:"Transfered-Items",props:e},{default:(0,l.w5)((()=>[(0,l.Wm)(_,{color:"blue","icon-right":"open_in_new","no-caps":"",flat:"",dense:"",to:{name:"transfer-detail",params:{TEID:e.row.TEID}}},{default:(0,l.w5)((()=>[(0,l.Wm)(I,null,{default:(0,l.w5)((()=>[w])),_:1})])),_:2},1032,["to"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","visible-columns","loading","pagination","onRequest"])])])),_:1})}var D=o(5100),h=o(6966),v=o(2841),_=o(5616),g=o(8554),b=o(7428),y=o(1121);const V={name:"TransferExpense",components:{DeleteDialogBox:h.Z,TransferHeader:D.Z},data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},search_data:{page:1,D1:"",D2:"",DriverName:"",order:"Descending"},TransactionType:[{ID:1,Type:"Cash"},{ID:2,Type:"Credit"}],loading:!0,title:"Transfer Expenses",rows:[],visibleColumns:["Date","Cost","DriverName"],columns:[{name:"TEID",label:"TEID",field:"TEID",align:"left",sortable:!0,required:!0},{name:"Date",label:"Date",field:"Date",align:"center",sortable:!0},{name:"Cost",label:"Cost",field:"Cost",align:"center",sortable:!0},{name:"DriverName",label:"DriverName",field:"DriverName",sortable:!0,align:"center"},{name:"Description",label:"Description",field:"Description",align:"center"},{name:"Transfered-Items",label:"Transfered Items",field:"Transfered-Items",align:"center",required:!0}],drivers_options:[]}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))},drivers_None_option(){var e=this.drivers_options.map((e=>e.DriverName));return e.push("--None--"),e}},methods:{handleRequest(e){this.fetch_rows(e.pagination.page)},reset(){this.search_data={page:1,D1:"",D2:"",DriverName:"",order:"Descending"},this.fetch_rows(1)},search(){this.fetch_rows(1)},request_data_builder(e){var a=this.search_data;return a.page=e,a},fetch_rows(e){(0,y.Do)(this.request_data_builder(e)).then((e=>{const a=e.data.meta_data;this.pagination.page=a.current_page,this.pagination.rowsPerPage=a.per_page,this.pagination.rowsNumber=a.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},date_fromat(e){return _.ZP.formatDate(e,"YYYY-MM-DD HH:mm")},getResponse(e){if(e){const e={TEID:this.rows[this.selected_index].TEID};(0,y.zd)(e).then((e=>{(0,b.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1})).catch((e=>{(0,b.j)(e.response.data.message,"negative","top")}))}},update_te(e,a){var o=this.rows[a],l=e;o[l.key]=l.value;var t=this.drivers_options.find((e=>e.DriverName===o.DriverName));const s={TEID:o.TEID,Date:o.Date,Cost:o.Cost,DriverID:t?t.DriverID:"",Description:o.Description};(0,y.ij)(s).then((e=>((0,b.U)(e.data.message,"positive","top"),!0))).catch((e=>((0,b.j)(e.response.data.message,"negative","top"),this.rows=[],this.fetch_rows(props.pagination.page),!1)))},show_dialog_box(e){this.$refs.confirmbox.message=`Transfer Expence  ${this.rows[e].TEID} `,this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,a){let o=void 0!==a?a(e):e;return o=void 0===o||null===o?"":String(o),o=o.split('"').join('""'),`"${o}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((a=>this.wrapCsvValue("function"===typeof a.field?a.field(e):e[void 0===a.field?a.name:a.field],a.format))).join(",")))).join("\r\n"),a=(0,v.Z)("table-export.csv",e,"text/csv");!0!==a&&(0,b.j)("Browser denied file download...")}},mounted(){this.fetch_rows(1),(0,g.jT)().then((e=>{this.drivers_options=e.data})).catch((e=>{}))}};var T=o(4379),W=o(4842),k=o(4554),C=o(3944),U=o(2651),q=o(2165),x=o(8516),I=o(3243),N=o(2025),Z=o(3414),E=o(8886),Q=o(8186),j=o(3884),Y=o(1289),P=o(8870),R=o(677),M=o(7518),z=o.n(M);V.render=f,V.__scopeId="data-v-368d6cdc";const K=V;z()(V,"components",{QPage:T.Z,QInput:W.Z,QIcon:k.Z,QPopupProxy:C.Z,QDate:U.Z,QBtn:q.Z,QSelect:x.Z,QTable:I.Z,QSpace:N.Z,QItem:Z.Z,QToggle:E.Z,QTr:Q.Z,QTd:j.Z,QPopupEdit:Y.Z,QTooltip:P.Z}),z()(V,"directives",{ClosePopup:R.Z})}}]);