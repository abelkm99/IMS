"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[9282],{9282:(e,l,t)=>{t.r(l),t.d(l,{default:()=>G});var a=t(3673),o=t(2323),s=t(8880);const n={class:"q-gutter-md"},d={class:"q-pa-md"},i={class:"q-pa-xl"},r={class:"row q-gutter-md"},p={class:"col q-pt-md q-gutter-md"},c=(0,a._)("span",{class:"q-pl-xl"}," Add Other expense",-1),u={class:"row q-gutter-md"},m={class:"column"},h={class:"row q-pa-lg q-gutter-lg"},_={class:"row items-center justify-end"},w={class:"row q-pa-lg q-gutter-lg"},y=(0,a._)("div",{class:"row-12 q-pt-md q-pl-xl"},null,-1),f={class:"q-pa-xl"},g={class:"row q-gutter-md"},D={class:"row items-center justify-end"},v={class:"row items-center justify-end"},x={class:"col-2 q-table__title"},b={key:0,class:"col"},V={class:"q-pa-md",style:{"max-width":"300px"}},q={class:"row items-center justify-end"};function W(e,l,t,W,C,E){const k=(0,a.up)("ShopexpenseHeader"),U=(0,a.up)("DeleteDialogBox"),O=(0,a.up)("q-btn"),T=(0,a.up)("q-date"),S=(0,a.up)("q-popup-proxy"),Z=(0,a.up)("q-icon"),Y=(0,a.up)("q-input"),I=(0,a.up)("q-select"),R=(0,a.up)("q-form"),Q=(0,a.up)("q-space"),j=(0,a.up)("q-toggle"),M=(0,a.up)("q-item"),P=(0,a.up)("q-td"),F=(0,a.up)("q-popup-edit"),$=(0,a.up)("q-tr"),B=(0,a.up)("q-table"),z=(0,a.up)("q-page"),A=(0,a.Q2)("close-popup");return(0,a.wg)(),(0,a.j4)(z,{padding:""},{default:(0,a.w5)((()=>[(0,a._)("div",n,[(0,a.Wm)(k)]),(0,a._)("div",d,[(0,a.Wm)(U,{onResponse:E.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,a._)("div",i,[(0,a._)("div",r,[(0,a._)("div",p,[c,(0,a.Wm)(R,{onSubmit:E.add_other_expense,onReset:E.onReset,class:"q-gutter-md"},{default:(0,a.w5)((()=>[(0,a._)("div",u,[(0,a._)("div",m,[(0,a._)("div",h,[(0,a.Wm)(Y,{color:"secondary",label:"Date",filled:"",modelValue:C.Selected_Date,"onUpdate:modelValue":l[1]||(l[1]=e=>C.Selected_Date=e)},{prepend:(0,a.w5)((()=>[(0,a.Wm)(Z,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(S,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(T,{color:"secondary",modelValue:C.Selected_Date,"onUpdate:modelValue":l[0]||(l[0]=e=>C.Selected_Date=e),mask:"YYYY-MM-DD"},{default:(0,a.w5)((()=>[(0,a._)("div",_,[(0,a.wy)((0,a.Wm)(O,{label:"Close",color:"secondary",flat:""},null,512),[[A]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,a.Wm)(I,{color:"secondary",filled:"",modelValue:C.Selected_Expence_Type,"onUpdate:modelValue":l[2]||(l[2]=e=>C.Selected_Expence_Type=e),label:"Select Expense Type",options:C.other_expenses.map((e=>e.OEType)),style:{width:"250px"},behavior:"menu",rules:[E.myRule]},null,8,["modelValue","options","rules"]),(0,a.Wm)(Y,{color:"secondary",modelValue:C.Filled_Cost,"onUpdate:modelValue":l[3]||(l[3]=e=>C.Filled_Cost=e),type:"number",min:"1",filled:"",label:"Cost",rules:[E.myRule]},null,8,["modelValue","rules"]),(0,a.Wm)(Y,{color:"secondary",modelValue:C.Description,"onUpdate:modelValue":l[4]||(l[4]=e=>C.Description=e),type:"text",min:"1",filled:"",label:"Descriptin"},null,8,["modelValue"])]),(0,a._)("div",w,[(0,a.Wm)(O,{label:"Add expense",type:"submit",color:"secondary"}),(0,a.Wm)(O,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])])])),_:1},8,["onSubmit","onReset"])])]),y]),(0,a._)("div",f,[(0,a.Wm)(B,{title:C.title,rows:C.rows,columns:C.columns,"row-key":"CustomerTable","visible-columns":C.visibleColumns,loading:C.loading,color:"secondary",pagination:C.pagination,"onUpdate:pagination":l[15]||(l[15]=e=>C.pagination=e),onRequest:E.handleRequest,"rows-per-page-options":[]},{"top-right":(0,a.w5)((()=>[(0,a._)("div",g,[(0,a.Wm)(Y,{color:"secondary",style:{width:"125px"},label:"Date",filled:"",modelValue:C.search_data.D1,"onUpdate:modelValue":l[6]||(l[6]=e=>C.search_data.D1=e)},{prepend:(0,a.w5)((()=>[(0,a.Wm)(Z,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(S,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(T,{color:"secondary",modelValue:C.search_data.D1,"onUpdate:modelValue":l[5]||(l[5]=e=>C.search_data.D1=e),mask:"YYYY-MM-DD"},{default:(0,a.w5)((()=>[(0,a._)("div",D,[(0,a.wy)((0,a.Wm)(O,{label:"Close",color:"secondary",flat:""},null,512),[[A]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,a.Wm)(Y,{color:"secondary",style:{width:"125px"},label:"Date",filled:"",modelValue:C.search_data.D2,"onUpdate:modelValue":l[8]||(l[8]=e=>C.search_data.D2=e)},{prepend:(0,a.w5)((()=>[(0,a.Wm)(Z,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(S,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(T,{color:"secondary",modelValue:C.search_data.D2,"onUpdate:modelValue":l[7]||(l[7]=e=>C.search_data.D2=e),mask:"YYYY-MM-DD"},{default:(0,a.w5)((()=>[(0,a._)("div",v,[(0,a.wy)((0,a.Wm)(O,{label:"Close",color:"secondary",flat:""},null,512),[[A]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,a.Wm)(Y,{color:"secondary",style:{width:"100px"},modelValue:C.search_data.OEType,"onUpdate:modelValue":l[9]||(l[9]=e=>C.search_data.OEType=e),outlined:"",filled:"",type:"text",label:"Expence Type"},null,8,["modelValue"]),(0,a.Wm)(I,{color:"secondary",style:{width:"100px"},modelValue:C.search_data.order,"onUpdate:modelValue":l[10]||(l[10]=e=>C.search_data.order=e),options:["Ascending ","Descending "],label:"Order Type",filled:""},null,8,["modelValue"]),(0,a.Wm)(O,{label:"Search",color:"secondary","icon-right":"search","no-caps":"",flat:"",dense:"",onClick:l[11]||(l[11]=e=>E.search())}),(0,a.Wm)(O,{label:"Reset",color:"negative","no-caps":"",flat:"",dense:"",onClick:l[12]||(l[12]=e=>E.reset())})])])),"top-left":(0,a.w5)((t=>[(0,a._)("div",x,(0,o.zw)(C.title),1),(0,a.Wm)(Q),e.$q.screen.gt.xs?((0,a.wg)(),(0,a.iD)("div",b,[((0,a.wg)(!0),(0,a.iD)(a.HY,null,(0,a.Ko)(E.toogle_columns,(e=>((0,a.wg)(),(0,a.j4)(M,{style:{display:"inline"},key:e},{default:(0,a.w5)((()=>[(0,a.Wm)(j,{modelValue:C.visibleColumns,"onUpdate:modelValue":l[13]||(l[13]=e=>C.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,a.wg)(),(0,a.j4)(I,{key:1,color:"secondary",modelValue:C.visibleColumns,"onUpdate:modelValue":l[14]||(l[14]=e=>C.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:C.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,a.Wm)(O,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:E.exportTable},null,8,["onClick"]),(0,a.Wm)(O,{flat:"",round:"",dense:"",icon:t.inFullscreen?"fullscreen_exit":"fullscreen",onClick:t.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,a.w5)((e=>[(0,a.Wm)($,{props:e},{default:(0,a.w5)((()=>[(0,a.Wm)(P,{key:"OExpencesID",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.OExpencesID),1)])),_:2},1032,["props"]),(0,a.Wm)(P,{key:"OEType",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.OEType),1)])),_:2},1032,["props"]),(0,a.Wm)(P,{key:"Date",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Date)+" ",1),(0,a.Wm)(F,{modelValue:e.row.Date,"onUpdate:modelValue":l=>e.row.Date=l,title:"Update Date",buttons:"",persistent:"",validate:l=>E.update_other_expense({key:"Date",value:l},C.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,a.w5)((e=>[(0,a._)("div",V,[(0,a.Wm)(Y,{color:"secondary",filled:"",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l},{prepend:(0,a.w5)((()=>[(0,a.Wm)(Z,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(S,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(T,{color:"secondary",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l,mask:"YYYY-MM-DD"},{default:(0,a.w5)((()=>[(0,a._)("div",q,[(0,a.wy)((0,a.Wm)(O,{label:"Close",color:"secondary",flat:""},null,512),[[A]])])])),_:2},1032,["modelValue","onUpdate:modelValue"])])),_:2},1024)])),_:2},1024)])),_:2},1032,["modelValue","onUpdate:modelValue"])])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,a.Wm)(P,{key:"Cost",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Cost)+" ",1),(0,a.Wm)(F,{modelValue:e.row.Cost,"onUpdate:modelValue":l=>e.row.Cost=l,modelModifiers:{number:!0},title:"Update Item Price",buttons:"",persistent:"",validate:l=>E.update_other_expense({key:"Cost",value:l},C.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,a.w5)((e=>[(0,a.Wm)(Y,{color:"secondary",type:"number",modelValue:e.value,"onUpdate:modelValue":l=>e.value=l,modelModifiers:{number:!0},hint:"Enter a number greater than 0",dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,a.Wm)(P,{key:"Delete",props:e},{default:(0,a.w5)((()=>[(0,a.Wm)(O,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:l=>E.show_dialog_box(C.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","visible-columns","loading","pagination","onRequest"])])])])),_:1})}var C=t(6966),E=t(5333),k=t(2841),U=t(7428),O=t(7602);const T={name:"OtherExpenses",components:{ShopexpenseHeader:E.Z,DeleteDialogBox:C.Z},data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},search_data:{page:1,OEType:"",D1:"",D2:"",order:"Descending"},Selected_Date:null,Filled_Cost:null,Selected_Expence_Type:null,Description:null,loading:!0,title:"Other Expences List",visibleColumns:["OEType","Date","Cost"],columns:[{name:"OExpencesID",label:"ID",field:"OExpencesID",align:"left",sortable:!0,required:!0},{name:"OEType",label:"Expense Type",field:"OEType",align:"left",sortable:!0,required:!0},{name:"Date",label:"Date",field:"Date",sortable:!0},{name:"Cost",label:"Cost",field:"Cost",sortable:!0},{name:"Delete",label:"Delete",field:"Delete",required:!0}],selected_index:null,rows:[],employees:[],other_expenses:[]}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))}},methods:{handleRequest(e){this.fetch_rows(e.pagination.page)},reset(){this.search_data={page:1,OEType:"",D1:"",D2:"",order:"Descending"},this.fetch_rows(1)},search(){this.fetch_rows(1)},request_data_builder(e){var l=this.search_data;return l.page=e,l},fetch_rows(e){(0,O.k3)(this.request_data_builder(e)).then((e=>{const l=e.data.meta_data;this.pagination.page=l.current_page,this.pagination.rowsPerPage=l.per_page,this.pagination.rowsNumber=l.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},myRule(e){if(null===e)return"Empty Feild!!"},getResponse(e){if(e){const e={OExpencesID:this.rows[this.selected_index].OExpencesID};(0,O.oM)(e).then((e=>{(0,U.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1})).catch((e=>{(0,U.j)(e.response.data.message,"negative","top")}))}},add_other_expense(){if(null==this.Selected_Date)(0,U.j)("Please select the Date first");else{const e={Date:this.Selected_Date,Cost:this.Filled_Cost,OEID:this.other_expenses.find((e=>e.OEType===this.Selected_Expence_Type)).OEID,Description:this.Description};(0,O.h7)(e).then((e=>{(0,U.U)(e.data.message,"positive","top"),this.rows=[],this.fetch_rows(1)})).catch((e=>{(0,U.j)(e.response.data.message,"negative","top")}))}},onReset(){this.Selected_Expence_Type=null,this.Selected_Date=null,this.Filled_Cost=null,this.Description=null},update_other_expense(e,l){var t=this.rows[l],a=e;t[a.key]=a.value,t.OEID=this.other_expenses.find((e=>e.OEType===t.OEType)).EmployeeID;const o={Date:t.Date,Cost:t.Cost,OExpencesID:t.OExpencesID,Description:t.Description};(0,O.Y$)(o).then((e=>((0,U.U)(e.data.message,"positive","top"),this.BankAccount=[],this.fetch_rows(props.pagination.page),!0))).catch((e=>((0,U.j)(e.response.data.message,"negative","top"),this.BankAccount=[],this.fetch_rows(props.pagination.page),!1)))},show_dialog_box(e){this.$refs.confirmbox.message=`${this.rows[e].OEType} expense List`,this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,l){let t=void 0!==l?l(e):e;return t=void 0===t||null===t?"":String(t),t=t.split('"').join('""'),`"${t}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((l=>this.wrapCsvValue("function"===typeof l.field?l.field(e):e[void 0===l.field?l.name:l.field],l.format))).join(",")))).join("\r\n"),l=(0,k.Z)("table-export.csv",e,"text/csv");!0!==l&&(0,U.j)("Browser denied file download...")}},mounted(){(0,O.M0)().then((e=>{this.other_expenses=e.data})).catch((e=>{})),this.fetch_rows(1)}};var S=t(4379),Z=t(5269),Y=t(4842),I=t(4554),R=t(3944),Q=t(2651),j=t(2165),M=t(8516),P=t(3243),F=t(2025),$=t(3414),B=t(8886),z=t(8186),A=t(3884),H=t(1289),K=t(677),L=t(7518),N=t.n(L);T.render=W;const G=T;N()(T,"components",{QPage:S.Z,QForm:Z.Z,QInput:Y.Z,QIcon:I.Z,QPopupProxy:R.Z,QDate:Q.Z,QBtn:j.Z,QSelect:M.Z,QTable:P.Z,QSpace:F.Z,QItem:$.Z,QToggle:B.Z,QTr:z.Z,QTd:A.Z,QPopupEdit:H.Z}),N()(T,"directives",{ClosePopup:K.Z})}}]);