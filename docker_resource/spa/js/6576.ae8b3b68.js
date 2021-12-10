"use strict";(self["webpackChunkims"]=self["webpackChunkims"]||[]).push([[6576],{6576:(e,a,t)=>{t.r(a),t.d(a,{default:()=>z});t(246);var o=t(3673),l=t(2323);const n={class:"q-pa-md"},s={class:"q-pa-xl"},r={class:"row q-gutter-md q-pa-md"},i={class:"q-pl-sm"},d={class:"row q-gutter-md"},c={class:"col q-pt-md q-gutter-md"},p=(0,o._)("span",{class:"q-pl-xl"}," Add Bank Transaction",-1),u={class:"row q-gutter-md"},m={class:"column"},h={class:"row q-pa-lg q-gutter-lg"},w={class:"row items-center justify-end"},_={class:"row items-center justify-end"},f={class:"row q-pa-lg q-gutter-lg"},g=(0,o._)("div",{class:"row-12 q-pt-md q-pl-xl"},null,-1),y={class:"q-pa-xl"},D={class:"row q-gutter-md"},T={class:"row items-center justify-end"},b={class:"row items-center justify-end"};function q(e,a,t,q,k,W){const B=(0,o.up)("DeleteDialogBox"),V=(0,o.up)("q-item"),v=(0,o.up)("q-btn"),I=(0,o.up)("q-date"),x=(0,o.up)("q-popup-proxy"),U=(0,o.up)("q-icon"),R=(0,o.up)("q-time"),Y=(0,o.up)("q-input"),P=(0,o.up)("q-select"),Z=(0,o.up)("q-form"),Q=(0,o.up)("q-td"),j=(0,o.up)("q-badge"),A=(0,o.up)("q-tr"),C=(0,o.up)("q-table"),M=(0,o.Q2)("close-popup");return(0,o.wg)(),(0,o.iD)("div",n,[(0,o.Wm)(B,{onResponse:W.getResponse,ref:"confirmbox"},null,8,["onResponse"]),(0,o._)("div",s,[(0,o._)("div",r,[((0,o.wg)(!0),(0,o.iD)(o.HY,null,(0,o.Ko)(k.BankAccount,((e,a)=>((0,o.wg)(),(0,o.j4)(V,{key:a},{default:(0,o.w5)((()=>[(0,o.Uk)((0,l.zw)(a)+": ",1),(0,o._)("span",i,[(0,o._)("b",null,(0,l.zw)(e),1)])])),_:2},1024)))),128))]),(0,o._)("div",d,[(0,o._)("div",c,[p,(0,o.Wm)(Z,{onSubmit:W.add_account_transaction,onReset:W.onReset,class:"q-gutter-md"},{default:(0,o.w5)((()=>[(0,o._)("div",u,[(0,o._)("div",m,[(0,o._)("div",h,[(0,o.Wm)(Y,{color:"secondary",filled:"",modelValue:k.date,"onUpdate:modelValue":a[2]||(a[2]=e=>k.date=e)},{prepend:(0,o.w5)((()=>[(0,o.Wm)(U,{name:"event",class:"cursor-pointer"},{default:(0,o.w5)((()=>[(0,o.Wm)(x,{"transition-show":"scale","transition-hide":"scale"},{default:(0,o.w5)((()=>[(0,o.Wm)(I,{color:"secondary",modelValue:k.date,"onUpdate:modelValue":a[0]||(a[0]=e=>k.date=e),mask:"YYYY-MM-DD HH:mm"},{default:(0,o.w5)((()=>[(0,o._)("div",w,[(0,o.wy)((0,o.Wm)(v,{label:"Close",color:"secondary",flat:""},null,512),[[M]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),append:(0,o.w5)((()=>[(0,o.Wm)(U,{name:"access_time",class:"cursor-pointer"},{default:(0,o.w5)((()=>[(0,o.Wm)(x,{"transition-show":"scale","transition-hide":"scale"},{default:(0,o.w5)((()=>[(0,o.Wm)(R,{color:"secondary",modelValue:k.date,"onUpdate:modelValue":a[1]||(a[1]=e=>k.date=e),mask:"YYYY-MM-DD HH:mm",format12h:""},{default:(0,o.w5)((()=>[(0,o._)("div",_,[(0,o.wy)((0,o.Wm)(v,{label:"Close",color:"primary",flat:""},null,512),[[M]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,o.Wm)(P,{color:"secondary",filled:"",modelValue:k.transaction_type,"onUpdate:modelValue":a[3]||(a[3]=e=>k.transaction_type=e),label:"Select Transaction Type",options:k.transactions.map((e=>e.TransactionType)),style:{width:"250px"},behavior:"menu",rules:[W.myRule]},null,8,["modelValue","options","rules"]),(0,o.Wm)(Y,{color:"secondary",modelValue:k.amount,"onUpdate:modelValue":a[4]||(a[4]=e=>k.amount=e),type:"number",min:"1",filled:"",label:"Amount",rules:[W.myRule]},null,8,["modelValue","rules"]),(0,o.Wm)(Y,{color:"secondary",modelValue:k.description,"onUpdate:modelValue":a[5]||(a[5]=e=>k.description=e),type:"text",min:"1",filled:"",label:"Description"},null,8,["modelValue"])]),(0,o._)("div",f,[(0,o.Wm)(v,{label:"Add Transaction",type:"submit",color:"secondary"}),(0,o.Wm)(v,{label:"Reset",type:"reset",color:"secondary",flat:"",class:"q-ml-sm"})])])])])),_:1},8,["onSubmit","onReset"])])]),g]),(0,o._)("div",y,[(0,o.Wm)(C,{title:k.title,rows:k.rows,columns:k.columns,"row-key":"name",loading:k.loading,color:"secondary","no-data-label":k.nodata,pagination:k.pagination,"onUpdate:pagination":a[14]||(a[14]=e=>k.pagination=e),onRequest:W.handleRequest,"rows-per-page-options":[]},{"top-right":(0,o.w5)((()=>[(0,o._)("div",D,[(0,o.Wm)(Y,{color:"secondary",style:{width:"125px"},label:"Date",filled:"",modelValue:k.search_data.D1,"onUpdate:modelValue":a[7]||(a[7]=e=>k.search_data.D1=e)},{prepend:(0,o.w5)((()=>[(0,o.Wm)(U,{name:"event",class:"cursor-pointer"},{default:(0,o.w5)((()=>[(0,o.Wm)(x,{"transition-show":"scale","transition-hide":"scale"},{default:(0,o.w5)((()=>[(0,o.Wm)(I,{color:"secondary",modelValue:k.search_data.D1,"onUpdate:modelValue":a[6]||(a[6]=e=>k.search_data.D1=e),mask:"YYYY-MM-DD"},{default:(0,o.w5)((()=>[(0,o._)("div",T,[(0,o.wy)((0,o.Wm)(v,{label:"Close",color:"secondary",flat:""},null,512),[[M]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,o.Wm)(Y,{color:"secondary",style:{width:"125px"},label:"Date",filled:"",modelValue:k.search_data.D2,"onUpdate:modelValue":a[9]||(a[9]=e=>k.search_data.D2=e)},{prepend:(0,o.w5)((()=>[(0,o.Wm)(U,{name:"event",class:"cursor-pointer"},{default:(0,o.w5)((()=>[(0,o.Wm)(x,{"transition-show":"scale","transition-hide":"scale"},{default:(0,o.w5)((()=>[(0,o.Wm)(I,{color:"secondary",modelValue:k.search_data.D2,"onUpdate:modelValue":a[8]||(a[8]=e=>k.search_data.D2=e),mask:"YYYY-MM-DD"},{default:(0,o.w5)((()=>[(0,o._)("div",b,[(0,o.wy)((0,o.Wm)(v,{label:"Close",color:"secondary",flat:""},null,512),[[M]])])])),_:1},8,["modelValue"])])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,o.Wm)(P,{color:"secondary",style:{width:"150px"},modelValue:k.search_data.TransactionType,"onUpdate:modelValue":a[10]||(a[10]=e=>k.search_data.TransactionType=e),options:["Deposit","Withdrawal"],label:"Transaction Type",filled:""},null,8,["modelValue"]),(0,o.Wm)(P,{color:"secondary",style:{width:"150px"},modelValue:k.search_data.order,"onUpdate:modelValue":a[11]||(a[11]=e=>k.search_data.order=e),options:["Ascending ","Descending "],label:"Order Type",filled:""},null,8,["modelValue"]),(0,o.Wm)(v,{label:"Search",color:"secondary","icon-right":"search","no-caps":"",flat:"",dense:"",onClick:a[12]||(a[12]=e=>W.search())}),(0,o.Wm)(v,{label:"Reset",color:"negative","no-caps":"",flat:"",dense:"",onClick:a[13]||(a[13]=e=>W.reset())})])])),body:(0,o.w5)((e=>[(0,o.Wm)(A,{props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(Q,{key:"BTID",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,l.zw)(e.row.BTID),1)])),_:2},1032,["props"]),(0,o.Wm)(Q,{key:"Date",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,l.zw)(e.row.Date),1)])),_:2},1032,["props"]),(0,o.Wm)(Q,{key:"TransactionIN",props:e},{default:(0,o.w5)((()=>[e.row.TransactionIN?((0,o.wg)(),(0,o.j4)(j,{key:0,icon:"",color:"positive",label:e.row.TransactionIN},null,8,["label"])):(0,o.kq)("",!0)])),_:2},1032,["props"]),(0,o.Wm)(Q,{key:"TransactionOUT",props:e},{default:(0,o.w5)((()=>[e.row.TransactionOUT?((0,o.wg)(),(0,o.j4)(j,{key:0,icon:"",color:"red",label:e.row.TransactionOUT},null,8,["label"])):(0,o.kq)("",!0)])),_:2},1032,["props"]),(0,o.Wm)(Q,{key:"Balance",props:e},{default:(0,o.w5)((()=>[e.row.Balance?((0,o.wg)(),(0,o.j4)(j,{key:0,icon:"",color:"purple",label:e.row.Balance},null,8,["label"])):(0,o.kq)("",!0)])),_:2},1032,["props"]),(0,o.Wm)(Q,{key:"Balance",props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,l.zw)(e.row.Description),1)])),_:2},1032,["props"]),(0,o.Wm)(Q,{key:"Delete",props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(v,{color:"negative","icon-right":"delete","no-caps":"",flat:"",dense:"",onClick:a=>W.show_dialog_box(k.rows.indexOf(e.row))},null,8,["onClick"])])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","loading","no-data-label","pagination","onRequest"])])])}var k=t(6966),W=t(7428),B=t(5110);const V={name:"BankAccountTransaction",components:{DeleteDialogBox:k.Z},data(){return{pagination:{descending:!1,page:1,rowsPerPage:2},search_data:{PageNumber:1,PBID:this.$route.params.PBID,TransactionType:"",D1:"",D2:"",order:"Descending"},date:null,transaction_type:null,transactions:[{TransactionType:"Deposit",ID:1},{TransactionType:"Withdrawal",ID:2}],amount:null,description:null,nodata:"There is no transaction under this Bank Account",loading:!0,title:"Bank Transactions",BankAccount:null,columns:[{name:"BTID",label:"BTID",field:"BTID",align:"left",required:!0},{name:"Date",label:"Date",field:"Date",align:"center"},{name:"TransactionIN",label:"Deposit",field:"TransactionIN",align:"center"},{name:"TransactionOUT",label:"Withdrawal",field:"TransactionOUT",align:"center"},{name:"Balance",label:"Balance",field:"Balance",align:"center"},{name:"Description",label:"Description",field:"Description",align:"center"},{name:"Delete",label:"Delete",field:"Delete",required:!0}],selected_index:null,rows:[]}},methods:{myRule(e){if(null===e)return"Empty Feild!!"},getBankInfo(){(0,B._e)(this.$route.params.PBID).then((e=>{this.BankAccount=e.data,this.fetch_rows(1)})).catch((e=>{this.$router.push({name:"bank-account"})}))},handleRequest(e){this.fetch_rows(e.pagination.page)},reset(){this.search_data={PageNumber:1,PBID:this.$route.params.PBID,TransactionType:"",D1:"",D2:"",order:"Descending"},this.fetch_rows(1)},search(){this.fetch_rows(1)},request_data_builder(e){var a=this.search_data;return a.page=e,a},fetch_rows(e){(0,B.fo)(this.request_data_builder(e)).then((e=>{const a=e.data.meta_data;this.pagination.page=a.current_page,this.pagination.rowsPerPage=a.per_page,this.pagination.rowsNumber=a.total,this.rows=e.data.data,this.loading=!1})).catch((e=>{this.rows=[],this.rows=e.response.data.data,this.loading=!1}))},getResponse(e){if(e){const e={BTID:this.rows[this.selected_index].BTID};(0,B.qL)(e).then((e=>{(0,W.U)(e.data.message,"positive","top"),this.rows.splice(this.selected_index,1),this.selected_index=null,this.$refs.confirmbox.response=!1})).catch((e=>{(0,W.j)(e.response.data.message,"negative","top")}))}},onReset(){this.date=null,this.amount=null,this.description=null,this.transaction_type=null},show_dialog_box(e){this.$refs.confirmbox.message="This Bank Transaction ",this.$refs.confirmbox.confirm=!0,this.selected_index=e},add_account_transaction(){if(null==this.date)(0,W.j)("Date is not selected!!!");else if(null==this.amount)(0,W.j)("Bank Account Is Empty!!!");else{const e={PBID:this.$route.params.PBID,Amount:this.amount,TransactionType:this.transactions.find((e=>e.TransactionType===this.transaction_type)).ID,Date:this.date,Description:this.description};(0,B.dT)(e).then((e=>{(0,W.U)(e.data.message,"positive","top"),this.rows=[],this.fetch_rows(1)})).catch((e=>{(0,W.j)(e.response.data.message,"negative","top")}))}}},mounted(){this.getBankInfo()}};var v=t(3414),I=t(5269),x=t(4842),U=t(4554),R=t(3944),Y=t(2651),P=t(2165),Z=t(5990),Q=t(8516),j=t(3243),A=t(8186),C=t(3884),M=t(9721),N=t(677),$=t(7518),O=t.n($);V.render=q;const z=V;O()(V,"components",{QItem:v.Z,QForm:I.Z,QInput:x.Z,QIcon:U.Z,QPopupProxy:R.Z,QDate:Y.Z,QBtn:P.Z,QTime:Z.Z,QSelect:Q.Z,QTable:j.Z,QTr:A.Z,QTd:C.Z,QBadge:M.Z}),O()(V,"directives",{ClosePopup:N.Z})}}]);