"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[7015],{7015:(e,t,l)=>{l.r(t),l.d(t,{default:()=>T});var a=l(3673),o=l(2323),s=l(8880);const n={class:"q-pa-xl"},i={class:"q-pa-md"},d={class:"flex flex-center q-gutter-md q-pa-md"},r={class:"q-pl-sm"},u={class:"row justify-center q-pl-xl"},p={class:"col-2 q-table__title"},c={key:0,class:"col"},m={class:"q-pa-md",style:{"max-width":"300px"}},w={class:"row items-center justify-end"};function h(e,t,l,h,f,v){const y=(0,a.up)("CreditSettlementHeader"),D=(0,a.up)("DeleteDialogBox"),_=(0,a.up)("q-item"),b=(0,a.up)("q-tooltip"),g=(0,a.up)("q-linear-progress"),R=(0,a.up)("q-space"),x=(0,a.up)("q-toggle"),V=(0,a.up)("q-select"),C=(0,a.up)("q-btn"),U=(0,a.up)("q-input"),F=(0,a.up)("q-popup-edit"),E=(0,a.up)("q-td"),k=(0,a.up)("q-date"),q=(0,a.up)("q-popup-proxy"),W=(0,a.up)("q-icon"),P=(0,a.up)("q-tr"),S=(0,a.up)("q-table"),Z=(0,a.Q2)("close-popup");return(0,a.wg)(),(0,a.iD)(a.HY,null,[(0,a._)("div",n,[(0,a.Wm)(y)]),(0,a._)("div",i,[(0,a.Wm)(D,{onResponse:v.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,a._)("div",d,[((0,a.wg)(!0),(0,a.iD)(a.HY,null,(0,a.Ko)(f.REF,((e,t)=>((0,a.wg)(),(0,a.j4)(_,{key:t},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(t)+": ",1),(0,a._)("span",r,[(0,a._)("b",null,(0,o.zw)(e),1)])])),_:2},1024)))),128))]),(0,a._)("div",u,[(0,a.Wm)(S,{title:f.title,rows:f.rows,columns:f.columns,"row-key":"name","visible-columns":f.visibleColumns,loading:f.loading,color:"secondary","no-data-label":"There is No Credit Settlement Under this REF"},{top:(0,a.w5)((l=>[(0,a.Wm)(g,{color:"secondary",value:v.getPercentage,class:"q-mt-md"},{default:(0,a.w5)((()=>[(0,a.Wm)(b,null,{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(100*v.getPercentage)+" % Have Been Paid ",1)])),_:1})])),_:1},8,["value"]),(0,a._)("div",p,(0,o.zw)(f.title),1),(0,a.Wm)(R),e.$q.screen.gt.xs?((0,a.wg)(),(0,a.iD)("div",c,[((0,a.wg)(!0),(0,a.iD)(a.HY,null,(0,a.Ko)(v.toogle_columns,(e=>((0,a.wg)(),(0,a.j4)(_,{style:{display:"inline"},key:e},{default:(0,a.w5)((()=>[(0,a.Wm)(x,{modelValue:f.visibleColumns,"onUpdate:modelValue":t[0]||(t[0]=e=>f.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,a.wg)(),(0,a.j4)(V,{key:1,color:"secondary",modelValue:f.visibleColumns,"onUpdate:modelValue":t[1]||(t[1]=e=>f.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:f.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,a.Wm)(C,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:v.exportTable},null,8,["onClick"]),(0,a.Wm)(C,{flat:"",round:"",dense:"",icon:l.inFullscreen?"fullscreen_exit":"fullscreen",onClick:l.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,a.w5)((e=>[(0,a.Wm)(P,{props:e},{default:(0,a.w5)((()=>[(0,a.Wm)(E,{key:"Payment",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Payment)+" Birr ",1),(0,a.Wm)(F,{modelValue:e.row.Payment,"onUpdate:modelValue":t=>e.row.Payment=t,title:"Update Payment",buttons:"",persistent:"",validate:t=>v.Update_REF_CS({key:"Payment",value:t},f.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,a.w5)((e=>[(0,a.Wm)(U,{color:"secondary",type:"number",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t,modelModifiers:{number:!0},dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,a.Wm)(E,{key:"Date",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Date)+" ",1),(0,a.Wm)(F,{modelValue:e.row.Date,"onUpdate:modelValue":t=>e.row.Date=t,title:"Update Date",buttons:"",persistent:"",validate:t=>v.Update_REF_CS({key:"Date",value:t},f.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,a.w5)((e=>[(0,a._)("div",m,[(0,a.Wm)(U,{color:"secondary",filled:"",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t},{prepend:(0,a.w5)((()=>[(0,a.Wm)(W,{name:"event",class:"cursor-pointer"},{default:(0,a.w5)((()=>[(0,a.Wm)(q,{"transition-show":"scale","transition-hide":"scale"},{default:(0,a.w5)((()=>[(0,a.Wm)(k,{color:"secondary",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t,mask:"YYYY-MM-DD"},{default:(0,a.w5)((()=>[(0,a._)("div",w,[(0,a.wy)((0,a.Wm)(C,{label:"Close",color:"secondary",flat:""},null,512),[[Z]])])])),_:2},1032,["modelValue","onUpdate:modelValue"])])),_:2},1024)])),_:2},1024)])),_:2},1032,["modelValue","onUpdate:modelValue"])])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,a.Wm)(E,{key:"Description",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Description)+" ",1),(0,a.Wm)(F,{modelValue:e.row.Description,"onUpdate:modelValue":t=>e.row.Description=t,title:"Update Description",buttons:"",persistent:"",validate:t=>v.Update_REF_CS({key:"Description",value:t},f.rows.indexOf(e.row)),"label-set":"Update",color:"secondary",class:"text-secondary"},{default:(0,a.w5)((e=>[(0,a.Wm)(U,{color:"secondary",type:"text",modelValue:e.value,"onUpdate:modelValue":t=>e.value=t,dense:"",autofocus:"",onKeyup:(0,s.D2)(e.set,["enter"])},null,8,["modelValue","onUpdate:modelValue","onKeyup"])])),_:2},1032,["modelValue","onUpdate:modelValue","validate"])])),_:2},1032,["props"]),(0,a.Wm)(E,{key:"Quantity",props:e},{default:(0,a.w5)((()=>[(0,a.Uk)((0,o.zw)(e.row.Quantity),1)])),_:2},1032,["props"]),(0,a.Wm)(E,{key:"action",props:e},{default:(0,a.w5)((()=>[(0,a.Wm)(C,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:t=>v.show_dialog_box(f.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","visible-columns","loading"])])])],64)}l(246);var f=l(2841),v=l(6966),y=l(9826),D=l(8194),_=l(7428);const b={name:"REFCreditDetail",components:{DeleteDialogBox:v.Z,CreditSettlementHeader:y.Z},data(){return{date:null,payment:null,description:null,loading:!1,title:"Credit Settlement",visibleColumns:["Description"],columns:[{name:"Payment",label:"Payment",field:"Payment",align:"left",sortable:!0,required:!0},{name:"Date",label:"Date",field:"Date",sortable:!0,required:!0},{name:"Description",label:"Description",field:"Description",sortable:!0},{name:"action",label:"Action",field:"action",required:!0}],rows:[],selected_index:null,categories:[],REF:{}}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))},getPercentage(){return(this.REF.Paid/this.REF.Total).toFixed(2)}},methods:{myRule(e){if(null===e)return"Empty Feild!!"},validate_REF(){(0,D.H5)(this.$route.params.REFNO).then((e=>{this.REF=e.data,this.fetchRows()})).catch((e=>{this.$router.push({name:"ref-credit-settlement"})}))},fetchRows(){(0,D.$k)(this.$route.params.REFNO).then((e=>{this.rows=e.data,this.loading=!1})).catch((e=>{this.loading=!1}))},getResponse(e){if(e){const e={CSID:this.rows[this.selected_index].CSID,REFNO:this.REF.REFNO};(0,D.$2)(e).then((e=>{(0,_.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1,this.validate_REF()})).catch((e=>{(0,_.j)(e.response.data.message,"negative","top")}))}},Add_REF_CS(){if(null===this.date)(0,_.j)("Date is not Selected!!");else if(Date.parse(this.date)<Date.parse(this.REF.SalesDate))(0,_.j)("Date Can't be before the Sales Date");else{const e={REFNO:this.REF.REFNO,Payment:this.payment,Date:this.date,Description:this.description};(0,D.$X)(e).then((e=>{(0,_.U)(e.data.message,"positive","top"),this.rows=[],this.validate_REF()})).catch((e=>{(0,_.j)(e.response.data.message,"negative","top")}))}},reset(){this.date=null,this.description=null,this.payment=null},Update_REF_CS(e,t){var l=this.rows[t],a=e;l[a.key]=a.value;const o={REFNO:this.REF.REFNO,Payment:l.Payment,CSID:l.CSID,Date:l.Date,Description:l.Description};o.Payment<1?((0,_.j)("Payment cant be less than 1"),this.rows=[],this.fetchRows()):Date.parse(o.Date)<Date.parse(this.REF.SalesDate)?((0,_.j)("Date Can't be before the Sales Date"),this.rows=[],this.fetchRows()):(0,D.DF)(o).then((e=>((0,_.U)(e.data.message,"positive","top"),this.rows=[],this.validate_REF(),!0))).catch((e=>((0,_.j)(e.response.data.message,"negative","top"),this.rows=[],this.fetchRows(),!1)))},show_dialog_box(e){this.$refs.confirmbox.message="The Selected Credit Settlement ",this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,t){let l=void 0!==t?t(e):e;return l=void 0===l||null===l?"":String(l),l=l.split('"').join('""'),`"${l}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((t=>this.wrapCsvValue("function"===typeof t.field?t.field(e):e[void 0===t.field?t.name:t.field],t.format))).join(",")))).join("\r\n"),t=(0,f.Z)("table-export.csv",e,"text/csv");!0!==t&&(0,_.j)("Browser denied file download...")}},mounted(){this.validate_REF()}};var g=l(3414),R=l(3243),x=l(1598),V=l(8870),C=l(2025),U=l(8886),F=l(8516),E=l(2165),k=l(8186),q=l(3884),W=l(1289),P=l(4842),S=l(4554),Z=l(3944),Q=l(2651),j=l(677),O=l(7518),$=l.n(O);b.render=h;const T=b;$()(b,"components",{QItem:g.Z,QTable:R.Z,QLinearProgress:x.Z,QTooltip:V.Z,QSpace:C.Z,QToggle:U.Z,QSelect:F.Z,QBtn:E.Z,QTr:k.Z,QTd:q.Z,QPopupEdit:W.Z,QInput:P.Z,QIcon:S.Z,QPopupProxy:Z.Z,QDate:Q.Z}),$()(b,"directives",{ClosePopup:j.Z})}}]);