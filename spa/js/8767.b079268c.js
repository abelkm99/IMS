"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[8767],{8767:(e,a,l)=>{l.r(a),l.d(a,{default:()=>W});var o=l(3673),r=l(2323);const s={class:"q-pa-md"},t={class:"row q-gutter-md q-pa-md"},n={class:"q-pl-sm"},i={class:"row-12"},p={class:"col-2 q-table__title"},c={key:0,class:"col"};function u(e,a,l,u,d,m){const w=(0,o.up)("q-item"),g=(0,o.up)("q-space"),b=(0,o.up)("q-toggle"),h=(0,o.up)("q-select"),f=(0,o.up)("q-btn"),k=(0,o.up)("q-td"),v=(0,o.up)("q-badge"),_=(0,o.up)("q-tr"),P=(0,o.up)("q-table");return(0,o.wg)(),(0,o.iD)("div",s,[(0,o._)("div",t,[((0,o.wg)(!0),(0,o.iD)(o.HY,null,(0,o.Ko)(d.TransferExpense,((e,a)=>((0,o.wg)(),(0,o.j4)(w,{key:a},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(a)+": ",1),(0,o._)("span",n,[(0,o._)("b",null,(0,r.zw)(e),1)])])),_:2},1024)))),128))]),(0,o.Wm)(P,{title:d.title,rows:d.rows,columns:d.columns,"row-key":"name","visible-columns":d.visibleColumns,loading:d.loading,color:"secondary","no-data-label":"There is No Purchase Under this GRN",pagination:d.pagination,"onUpdate:pagination":a[2]||(a[2]=e=>d.pagination=e),onRequest:m.handleRequest,"rows-per-page-options":[]},{top:(0,o.w5)((l=>[(0,o._)("div",i,[(0,o._)("div",p,(0,r.zw)(d.title),1)]),(0,o.Wm)(g),e.$q.screen.gt.xs?((0,o.wg)(),(0,o.iD)("div",c,[((0,o.wg)(!0),(0,o.iD)(o.HY,null,(0,o.Ko)(m.toogle_columns,(e=>((0,o.wg)(),(0,o.j4)(w,{style:{display:"inline"},key:e},{default:(0,o.w5)((()=>[(0,o.Wm)(b,{modelValue:d.visibleColumns,"onUpdate:modelValue":a[0]||(a[0]=e=>d.visibleColumns=e),val:e.name,label:e.label,color:"secondary"},null,8,["modelValue","val","label"])])),_:2},1024)))),128))])):((0,o.wg)(),(0,o.j4)(h,{key:1,color:"secondary",modelValue:d.visibleColumns,"onUpdate:modelValue":a[1]||(a[1]=e=>d.visibleColumns=e),multiple:"",borderless:"",dense:"","options-dense":"","display-value":e.$q.lang.table.columns,"emit-value":"","map-options":"",options:d.columns,"option-value":"name",style:{"min-width":"150px"}},null,8,["modelValue","display-value","options"])),(0,o.Wm)(f,{color:"secondary","icon-right":"archive",label:"Export to csv","no-caps":"",onClick:m.exportTable},null,8,["onClick"]),(0,o.Wm)(f,{flat:"",round:"",dense:"",icon:l.inFullscreen?"fullscreen_exit":"fullscreen",onClick:l.toggleFullscreen,class:"q-ml-md"},null,8,["icon","onClick"])])),body:(0,o.w5)((e=>[(0,o.Wm)(_,{props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(k,{key:"Date",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row.Date),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"GRNNO",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row.GRNNO),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"IN",props:e},{default:(0,o.w5)((()=>[e.row.IN?((0,o.wg)(),(0,o.j4)(v,{key:0,color:"positive","text-color":"{2:black}",label:e.row.IN},null,8,["label"])):(0,o.kq)("",!0)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Purchase-Price",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row["Purchase-Price"]),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Purchase-Total",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row["Purchase-Total"]),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"REFNO",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row.REFNO),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"OUT",props:e},{default:(0,o.w5)((()=>[e.row.OUT?((0,o.wg)(),(0,o.j4)(v,{key:0,color:"negative","text-color":"{2:black}",label:e.row.OUT},null,8,["label"])):(0,o.kq)("",!0)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Sales-Price",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row["Sales-Price"]),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Sales-Total",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row["Sales-Total"]),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Balance",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row.Balance),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"WareHouse",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row.Warehouse),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Shop",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row.Shop),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"FIFO-COGS",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row["FIFO-COGS"]),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Average-COGS",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row["Average-COGS"]),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"Average-Purchase-Price",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row["Average-Purchase-Price"]),1)])),_:2},1032,["props"]),(0,o.Wm)(k,{key:"SoldFrom",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,r.zw)(e.row.SoldFrom),1)])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","visible-columns","loading","pagination","onRequest"])])}var d=l(2841),m=l(4122),w=l(7428);const g={name:"Item Stock History",data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},search_data:{page:1,REFNO:"",GRNNO:"",D1:"",D2:"",ItemType:this.$route.params.ItemType,order:"Descending"},loading:!1,visibleColumns:["Date","Purchase-Price","Sales-Price","WareHouse","Shop"],columns:[{name:"Date",label:"Date",field:"Date",align:"left",sortable:!0,required:!0},{name:"GRNNO",label:"GRNNO",field:"GRNNO",align:"center",sortable:!0,required:!0},{name:"IN",label:"IN",field:"IN",align:"center",required:!0,sortable:!0},{name:"Purchase-Price",label:"Purchase-Price",field:"Purchase-Price",align:"center",sortable:!0},{name:"Purchase-Total",label:"Purchase-Total",field:"Purchase-Total",align:"center",sortable:!0},{name:"REFNO",label:"REFNO",field:"REFNO",align:"center",required:!0,sortable:!0},{name:"OUT",label:"OUT",field:"OUT",align:"center",sortable:!0,required:!0},{name:"Sales-Price",label:"Sales-Price",field:"Sales-Price",align:"center",sortable:!0},{name:"Sales-Total",label:"Sales-Total",field:"Sales-Total",align:"center",sortable:!0},{name:"Balance",label:"Balance",field:"Balance",sortable:!0,required:!0},{name:"WareHouse",label:"WareHouse",field:"WareHouse",align:"center",sortable:!0},{name:"Shop",label:"Shop",field:"Shop",align:"center",sortable:!0},{name:"FIFO-COGS",label:"FIFO-COGS",field:"FIFO-COGS",align:"center",sortable:!0},{name:"Average-COGS",label:"Average-COGS",field:"Average-COGS",align:"center",sortable:!0},{name:"Average-Purchase-Price",label:"Average-Purchase-Price",field:"Average-Purchase-Price",align:"center",sortable:!0},{name:"SoldFrom",label:"Sold From FIFO",field:"SoldFrom",align:"center",sortable:!0}],rows:[],selected_index:null,categories:[],TransferExpense:{},title:""}},computed:{toogle_columns(){return this.columns.filter((e=>!0!==e.required))}},methods:{handleRequest(e){this.fetch_rows(e.pagination.page)},request_data_builder(e){var a=this.search_data;return a.page=e,a},fetch_rows(e){(0,m.z2)(this.request_data_builder(e)).then((e=>{const a=e.data.meta_data;this.pagination.page=a.current_page,this.pagination.rowsPerPage=a.per_page,this.pagination.rowsNumber=a.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},wrapCsvValue(e,a){let l=void 0!==a?a(e):e;return l=void 0===l||null===l?"":String(l),l=l.split('"').join('""'),`"${l}"`},exportTable(){const e=[this.columns.map((e=>this.wrapCsvValue(e.label)))].concat(this.rows.map((e=>this.columns.map((a=>this.wrapCsvValue("function"===typeof a.field?a.field(e):e[void 0===a.field?a.name:a.field],a.format))).join(",")))).join("\r\n"),a=(0,d.Z)("table-export.csv",e,"text/csv");!0!==a&&(0,w.j)("Browser denied file download...")}},mounted(){this.fetch_rows(1)}};var b=l(3414),h=l(3243),f=l(2025),k=l(8886),v=l(8516),_=l(2165),P=l(8186),y=l(3884),S=l(9721),O=l(7518),q=l.n(O);g.render=u;const W=g;q()(g,"components",{QItem:b.Z,QTable:h.Z,QSpace:f.Z,QToggle:k.Z,QSelect:v.Z,QBtn:_.Z,QTr:P.Z,QTd:y.Z,QBadge:S.Z})}}]);