"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[5997],{5997:(e,t,l)=>{l.r(t),l.d(t,{default:()=>P});var o=l(3673),s=l(2323),a=l(8880);const n={class:"q-gutter-md"},i={class:"flex flex-center q-ma-lg q-pa-lg"},p={class:"q-pa-md"},r={class:"q-pa-xl"},d={class:"row q-gutter-md"},u={class:"col q-pt-md q-gutter-md"},c=(0,o._)("span",{class:"q-pl-xl"}," Add Other expense",-1),m={class:"row q-gutter-md"},h={class:"column"},g={class:"row q-pa-lg q-gutter-lg"},y={class:"row q-pa-lg q-gutter-lg"},w=(0,o._)("div",{class:"row-12 q-pt-md q-pl-xl"},null,-1),f={class:"q-pa-xl"},v={class:"col-2 q-table__title"},x={key:0,class:"col"};function _(e,t,l,_,b,O){const q=(0,o.up)("ShopexpenseHeader"),D=(0,o.up)("DeleteDialogBox"),E=(0,o.up)("q-input"),T=(0,o.up)("q-btn"),V=(0,o.up)("q-btnp"),k=(0,o.up)("q-form"),U=(0,o.up)("q-space"),W=(0,o.up)("q-toggle"),C=(0,o.up)("q-item"),Z=(0,o.up)("q-select"),R=(0,o.up)("q-td"),j=(0,o.up)("q-popup-edit"),I=(0,o.up)("q-tr"),Q=(0,o.up)("q-table"),B=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(B,{padding:""},{default:(0,o.w5)((()=>[(0,o._)("div",n,[(0,o.Wm)(q)]),(0,o._)("div",i,[(0,o._)("div",p,[(0,o.Wm)(D,{onResponse:O.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,o._)("div",r,[(0,o._)("div",d,[(0,o._)("div",u,[c,(0,o.Wm)(k,{onSubmit:O.add_oeType,onReset:O.onReset,class:"q-gutter-md"},{default:(0,o.w5)((()=>[(0,o._)("div",m,[(0,o._)("div",h,[(0,o._)("div",g,[(0,o.Wm)(E,{color:"secondary",modelValue:b.OtherexpenseType,"onUpdate:modelValue":t[0]||(t[0]=e=>b.OtherexpenseType=e),type:"text",min:"1",filled:"",label:"Other expense Type"},null,8,["modelValue"]),(0,o.Wm)(E,{color:"secondary",modelValue:b.OtherexpenseDiscription,"onUpdate:modelValue":t[1]||(t[1]=e=>b.OtherexpenseDiscription=e),type:"text",min:"1",filled:"",label:"expense Description"},null,8,["modelValue"])]),(0,o._)("div",y,[(0,o.Wm)(T,{label:"Add expense Type",type:"submit",color:"secondary"}),(0,o.Wm)(V,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])])])),_:1},8,["onSubmit","onReset"])])]),w]),(0,o._)("div",f,[(0,o.Wm)(Q,{title:b.title,rows:b.rows,columns:b.columns,"row-key":"CustomerTable","visible-columns":b.visibleColumns,loading:b.loading,color:"secondary",pagination:b.pagination,"onUpdate:pagination":t[4]||(t[4]=e=>b.pagination=e),onRequest:O.handleRequest,"rows-per-page-options":[]},{top:(0,o.w5)((l=>[(0,o._)("div",v,(0,s.zw)(b.title),1),(0,o.Wm)(U),e.$q.screen.gt.xs?((0,o.wg)(),(0,o.iD)("div",x,[((0,o.wg)(!0),(0,o.iD)(o.HY,null,(0,o.Ko)(O.toogle_columns,(e=>((0,o.wg)(),(0,o.j4)(C,{style:{display:"inline"},key:e},{default:(0,o.w5)((()=>[(0,o.Wm)(W,{modelValue:b.visibleColumns,"onUpdate:modelValue":t[2]||(t[2]=e=>b.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,o.wg)(),(0,o.j4)(Z,{key:1,color:"secondary",modelValue:b.visibleColumns,"onUpdate:modelValue":t[3]||(t[3]=e=>b.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:b.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,o.Wm)(T,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:O.exportTable},null,8,["onClick"]),(0,o.Wm)(T,{flat:"",round:"",dense:"",icon:l.inFullscreen?"fullscreen_exit":"fullscreen",onClick:l.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,o.w5)((e=>[(0,o.Wm)(I,{props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(R,{key:"OEID",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,s.zw)(e.row.OEID),1)])),_:2},1032,["props"]),(0,o.Wm)(R,{key:"OEType",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,s.zw)(e.row.OEType)+" ",1),(0,o.Wm)(j,{modelValue:e.row.OEType,"onUpdate:modelValue":t=>e.row.OEType=t,modelModifiers:{number:!0},title:"Update Type Name",buttons:"",persistent:"",validate:t=>O.update_oetype({key:"OEType",value:t},b.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,o.w5)((e=>[(0,o.Wm)(E,{color:"secondary",type:"text",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t,dense:"",autofocus:"",onKeyup:(0,a.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,o.Wm)(R,{key:"OEDescription",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,s.zw)(e.row.OEDescription)+" ",1),(0,o.Wm)(j,{modelValue:e.row.OEDescription,"onUpdate:modelValue":t=>e.row.OEDescription=t,modelModifiers:{number:!0},title:"Update Type Name",buttons:"",persistent:"",validate:t=>O.update_oetype({key:"OEDescription",value:t},b.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,o.w5)((e=>[(0,o.Wm)(E,{color:"secondary",type:"text",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t,dense:"",autofocus:"",onKeyup:(0,a.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,o.Wm)(R,{key:"Delete",props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(T,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:t=>O.show_dialog_box(b.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","visible-columns","loading","pagination","onRequest"])])])])])),_:1})}var b=l(6966),O=l(5333),q=l(2841),D=l(7428),E=l(7602);const T={name:"OtherExpenseTypes",components:{ShopexpenseHeader:O.Z,DeleteDialogBox:b.Z},data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},OtherexpenseType:null,OtherexpenseDiscription:null,loading:!0,title:"Other expenses",visibleColumns:["OEType","OEDescription"],columns:[{name:"OEID",label:"Other expense ID",field:"OEID",align:"left",required:!0},{name:"OEType",label:"Other expense Type",field:"OEType",align:"left"},{name:"OEDescription",label:"Description",field:"OEDescription"},{name:"Delete",label:"Delete",field:"Delete",required:!0}],selected_index:null,rows:[],search_data:{page:1}}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))}},methods:{handleRequest(e){this.fetch_rows(e.pagination.page)},request_data_builder(e){var t=this.search_data;return t.page=e,t},fetch_rows(e){(0,E.Bh)(this.request_data_builder(e)).then((e=>{const t=e.data.meta_data;this.pagination.page=t.current_page,this.pagination.rowsPerPage=t.per_page,this.pagination.rowsNumber=t.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},myRule(e){if(null===e)return"Empty Feild!!"},getResponse(e){if(e){const e={OEID:this.rows[this.selected_index].OEID};(0,E.vZ)(e).then((e=>{(0,D.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1})).catch((e=>{(0,D.j)(e.response.data.message,"negative","top")}))}},add_oeType(){if(null==this.OtherexpenseType)(0,D.j)("Error Other Expence Type Is Empty");else{const e={OEType:this.OtherexpenseType,OEDescription:this.OtherexpenseDiscription};(0,E.FK)(e).then((e=>{(0,D.U)(e.data.message,"positive","top"),this.rows=[],this.fetch_rows(1),this.onReset()})).catch((e=>{(0,D.j)(e.response.data.message,"negative","top")}))}},onReset(){this.OtherexpenseType=null,this.OtherexpenseDiscription=null},update_oetype(e,t){var l=this.rows[t],o=e;l[o.key]=o.value;const s={OEType:l.OEType,OEDescription:l.OEDescription,OEID:l.OEID};(0,E.uj)(s).then((e=>((0,D.U)(e.data.message,"positive","top"),this.BankAccount=[],this.fetch_rows(props.pagination.page),!0))).catch((e=>((0,D.j)(e.response.data.message,"negative","top"),this.BankAccount=[],this.fetch_rows(props.pagination.page),!1)))},show_dialog_box(e){this.$refs.confirmbox.message=`${this.rows[e].OEType} expense Type`,this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,t){let l=void 0!==t?t(e):e;return l=void 0===l||null===l?"":String(l),l=l.split('"').join('""'),`"${l}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((t=>this.wrapCsvValue("function"===typeof t.field?t.field(e):e[void 0===t.field?t.name:t.field],t.format))).join(",")))).join("\r\n"),t=(0,q.Z)("table-export.csv",e,"text/csv");!0!==t&&(0,D.j)("Browser denied file download...")}},mounted(){this.fetch_rows(1)}};var V=l(4379),k=l(5269),U=l(4842),W=l(2165),C=l(3243),Z=l(2025),R=l(3414),j=l(8886),I=l(8516),Q=l(8186),B=l(3884),S=l(1289),$=l(7518),K=l.n($);T.render=_;const P=T;K()(T,"components",{QPage:V.Z,QForm:k.Z,QInput:U.Z,QBtn:W.Z,QTable:C.Z,QSpace:Z.Z,QItem:R.Z,QToggle:j.Z,QSelect:I.Z,QTr:Q.Z,QTd:B.Z,QPopupEdit:S.Z})}}]);