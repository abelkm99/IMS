"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[1610],{1610:(e,s,t)=>{t.r(s),t.d(s,{default:()=>E});var l=t(3673),o=t(2323);const a={class:"q-pa-xl"},i={class:"q-pa-md"},n={class:"row q-gutter-md q-pa-md"},r={class:"q-pl-sm"},d={class:"col-2 q-table__title"},c={key:0,class:"col"},p={class:"row q-gutter-md"};function u(e,s,t,u,m,h){const w=(0,l.up)("SalesHeader"),f=(0,l.up)("DeleteDialogBox"),b=(0,l.up)("q-item"),g=(0,l.up)("q-space"),v=(0,l.up)("q-toggle"),y=(0,l.up)("q-select"),_=(0,l.up)("q-btn"),P=(0,l.up)("q-td"),R=(0,l.up)("q-tr"),k=(0,l.up)("q-table");return(0,l.wg)(),(0,l.iD)(l.HY,null,[(0,l._)("div",a,[(0,l.Wm)(w,{Employee:!0})]),(0,l._)("div",i,[(0,l.Wm)(f,{onResponse:h.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,l._)("div",n,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(m.REF,((e,s)=>((0,l.wg)(),(0,l.j4)(b,{key:s},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(s)+": ",1),(0,l._)("span",r,[(0,l._)("b",null,(0,o.zw)(e),1)])])),_:2},1024)))),128))]),(0,l.Wm)(k,{title:m.title,rows:m.rows,columns:m.columns,"row-key":"name","visible-columns":m.visibleColumns,loading:m.loading,color:"secondary","no-data-label":"There is No Purchase Under this Reference","rows-per-page-options":[0]},{top:(0,l.w5)((t=>[(0,l._)("div",d,(0,o.zw)(m.title),1),(0,l.Wm)(g),e.$q.screen.gt.xs?((0,l.wg)(),(0,l.iD)("div",c,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(h.toogle_columns,(e=>((0,l.wg)(),(0,l.j4)(b,{style:{display:"inline"},key:e},{default:(0,l.w5)((()=>[(0,l.Wm)(v,{modelValue:m.visibleColumns,"onUpdate:modelValue":s[0]||(s[0]=e=>m.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,l.wg)(),(0,l.j4)(y,{key:1,color:"secondary",modelValue:m.visibleColumns,"onUpdate:modelValue":s[1]||(s[1]=e=>m.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:m.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,l.Wm)(_,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:h.exportTable},null,8,["onClick"]),(0,l.Wm)(_,{flat:"",round:"",dense:"",icon:t.inFullscreen?"fullscreen_exit":"fullscreen",onClick:t.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,l.w5)((e=>[(0,l.Wm)(R,{props:e},{default:(0,l.w5)((()=>[(0,l.Wm)(P,{key:"SalesId",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.row.SalesId),1)])),_:2},1032,["props"]),(0,l.Wm)(P,{key:"ItemType",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.row.ItemType),1)])),_:2},1032,["props"]),(0,l.Wm)(P,{key:"PPP",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.row.PPP),1)])),_:2},1032,["props"]),(0,l.Wm)(P,{key:"Quantity",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.row.Quantity),1)])),_:2},1032,["props"]),(0,l.Wm)(P,{key:"Total",props:e},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.row.Total),1)])),_:2},1032,["props"])])),_:2},1032,["props"])])),bottom:(0,l.w5)((()=>[(0,l._)("div",p,[(0,l._)("div",null,[(0,l.Wm)(_,{to:{name:"print",params:{user:h.printable_data}},color:"secondary",icon:"print",label:"Print"},null,8,["to"])])])])),_:1},8,["title","rows","columns","visible-columns","loading"])])],64)}var m=t(2841),h=t(6966),w=t(7302),f=t(2986),b=t(7428);const g={name:"REFDetail",components:{DeleteDialogBox:h.Z,SalesHeader:w.Z},data(){return{loading:!1,title:"Sold Items",visibleColumns:["ItemType","PPP","Quantity","Total","Remainder","Extra"],columns:[{name:"SalesId",label:"Sales ID",field:"SalesId",align:"left",required:!0},{name:"ItemType",label:"Item Type",field:"ItemType"},{name:"PPP",label:"Price",field:"PPP",sortable:!0},{name:"Quantity",label:"Quantity",field:"Quantity"},{name:"Total",label:"Total",field:"Total"}],rows:[],selected_index:null,categories:[],REF:{}}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))},printable_data(){var e={title:"Sales",table_tittle:"Sold Items",header_data:this.REF,columns:this.columns,rows:this.rows};return JSON.stringify(e)}},methods:{validate_REF(){(0,f.At)(this.$route.params.REFNO).then((e=>{this.REF=e.data,this.fetchRows()})).catch((e=>{this.$router.push({name:"Esales"})}))},fetchRows(){(0,f.Jg)(this.$route.params.REFNO).then((e=>{this.rows=e.data,this.loading=!1})).catch((e=>{this.loading=!1}))},getResponse(e){if(e){const e={SalesID:this.rows[this.selected_index].SalesId,REFNO:this.rows[this.selected_index].REFNO};(0,f.cl)(e).then((e=>{(0,b.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1,this.validate_REF()})).catch((e=>{(0,b.j)(e.response.data.message,"negative","top")}))}},update_purchase(e,s){var t=this.rows[s],l=e;t[l.key]=l.value;const o={PPP:t.PPP,Quantity:t.Quantity,SalesID:t.SalesId,REFNO:t.REFNO};o.PPP<1?((0,b.j)("Price cant be less than 1"),this.rows=[],this.fetchRows()):o.Quantity<1?((0,b.j)("Quantity cant be less than 1"),this.rows=[],this.fetchRows()):(0,f.Ao)(o).then((e=>((0,b.U)(e.data.message,"positive","top"),this.rows=[],this.fetchRows(),!0))).catch((e=>((0,b.j)(e.response.data.message,"negative","top"),this.rows=[],this.fetchRows(),!1)))},show_dialog_box(e){this.$refs.confirmbox.message=`${this.rows[e].ItemType} `,this.$refs.confirmbox.confirm=!0,this.selected_index=e},wrapCsvValue(e,s){let t=void 0!==s?s(e):e;return t=void 0===t||null===t?"":String(t),t=t.split('"').join('""'),`"${t}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((s=>this.wrapCsvValue("function"===typeof s.field?s.field(e):e[void 0===s.field?s.name:s.field],s.format))).join(",")))).join("\r\n"),s=(0,m.Z)("table-export.csv",e,"text/csv");!0!==s&&(0,b.j)("Browser denied file download...")}},mounted(){this.validate_REF()}};var v=t(3414),y=t(3243),_=t(2025),P=t(8886),R=t(8516),k=t(2165),x=t(8186),q=t(3884),T=t(7518),I=t.n(T);g.render=u;const E=g;I()(g,"components",{QItem:v.Z,QTable:y.Z,QSpace:_.Z,QToggle:P.Z,QSelect:R.Z,QBtn:k.Z,QTr:x.Z,QTd:q.Z})}}]);