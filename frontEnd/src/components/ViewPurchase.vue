<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
                      <legend>
                          <h3>
                              Search Purchase
                        </h3>
                    </legend>
                    <table>
                
                        <tr>
                            <td>  <label for="supplier"> <h3>Supplier</h3></label>
                                <select  v-model="supplierFilter" name="supplier" id="" class="txt-input" @change="filterBySupplier">
                                    <option value="">---select Supplier---</option>
                                    <option   :key="x.SupplierID" v-for="x in supplierList" :value="x.SupplierID">{{x.SupplierName}}</option>
                    
                                </select></td> 
                            <td>
                                <label for="purchaseType"> <h3>Purchase type</h3></label>
                                <select  v-model="transactionFilter"  name="purchaseType" id="" class="txt-input" @change="filterByPurhcaseType" >
                                    <option value="1">cash</option>
                                    <option value="2">Credit</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                         <td>
                            <label for="purchaseDate"> <h3> Purchase Date </h3></label>
                            <input  v-model="purchaseDateFilter" type="date" class="txt-input" name="purchaseDate" placeholder="GRN NO"  @input="filterByPurchaseDate"></td>
                         <td>  <label for="purchaseDate"> <h3> Delivery Date </h3></label>
                            <input v-model="deliveredDateFilter" type="date" class="txt-input" name="deliveryDate" @input="filterByDeliveredDate"></td>
                        </tr>
                
                        <tr>

                        </tr>
                 
              
                    </table>
                     
                     
           
                  </fieldset>
                <fieldset class="view-items-container">
                    <legend> <h3> Items List </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                             GRNNO
                            </th>
                            <th>
                              Purchase Date
                            </th>
                            <th >
                                Delivered Date
                            </th>
                            <th>
                                Supplier Name
                            </th>
                            <th>
                                Item Type Count
                            </th>
                            <th>
                                X
                            </th>
                          
                        </tr>
            <vue-window-modal  :active="editVisible"  title="Update Purchase"  v-on:clickClose="closeEdit(false)">  
                
            </vue-window-modal>
                      <tr  :name="x.GRNNO" v-bind:key="index" v-for="(x,index) in items" @dblclick="editForm($true)" >  
                          <td>{{x.GRNNO}}</td>
                          <td>{{x.PurchsedDate}}</td>
                          <td :class="x.Delivered==true?'':'missing-delivery'"> {{x.DeliverdDate}}</td>
                          <td>{{getSupplierName(x.SupplierID)}}</td>
                          <td>{{x.Purchase.length}}</td>
                          <td> <button class="btn-del" @click="removePurchase($event)">X</button></td>
                   
                      </tr>
                    </table>
                </fieldset>
                </div>
            </div>
            
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import Purchase from "@/api_calls/Purchase.js";
import Suppliers from "@/api_calls/Supplier.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
        return {
            supplierFilter:'',
            transactionFilter:"",
            supplierList:[],
            purchaseDateFilter:"",
            deliveredDateFilter:"",
            editVisible:"",
            items:[],
            tempItems:[],
            purchaseEdit:[],
            links:[
                {
                    id:0,
                    address:"purchase",
                    displayText:"Add Purchase"
                },{
                    id:1,
                    address:"viewPurchase",
                    displayText:"Purchases"
                }
            ]

        }
    },methods:{
        getPurchase(){
                Purchase.getGRN().then(res=>{
                    this.items=res["data"];
                    this.tempItems = res["data"];
                })
        },getSuppliers(){
            Suppliers.getSuppliers().then(res=>{
                this.supplierList = res["data"];
            })
        },getSupplierName(id){
            for(const x in this.supplierList){
                if(this.supplierList[x].SupplierID == id){
                    console.log("check value here");
                    console.log(this.supplierList[x].SupplierID);
                    return this.supplierList[x].SupplierName;
                }
            }
        },filterBySupplier(){
             this.items = this.tempItems;
             if(this.supplierFilter != ''){
                  this.items = this.items.filter(item=>{
                  return  item.SupplierID == this.supplierFilter;          
            });
               }else{
                    this.items = this.tempItems;
               }
        },filterByPurhcaseType(){
            this.items = this.tempItems;
            if(this.transactionFilter  != ""){
                  this.items = this.items.filter(item=>{
                  return  item.TransactionID == this.transactionFilter;          
            });
            }else{
                     this.items = this.tempItems;
            }
        },filterByPurchaseDate(){
  this.items = this.tempItems;
            if(this.purchaseDateFilter  != ""){
                  this.items = this.items.filter(item=>{
                  return  item.PurhcaseDate == this.purchaseDateFilter;          
            });
            }else{
                     this.items = this.tempItems;
            }
        },filterByDeliveredDate(){
  this.items = this.tempItems;
            if(this.deliveredDateFilter  != ""){
                  this.items = this.items.filter(item=>{
                  return  item.DeliveredDate == this.deliveredDateFilter;          
            });
            }else{
                     this.items = this.tempItems;
            }
        },
         removePurchase(e){
             const  id  = e.target.parentNode.parentNode.getAttribute("name");
             Purchase.removePurchase(id).then(res=>{
                 this.items=  this.items.filter(ele =>{return  ele.GRNNO !=id} );
                 console.log(res)
             }).catch(err=>{
                alert(err.response.data.message)
                 })
         }
    },
      created(){
          this.getPurchase();
          this.getSuppliers();
      }
}
</script>
<style>
    .router-view-container{
    padding:20px;
    background: #eee;
    width:100%;
    height:auto;
}
.router-view-nav a{
color:black;
text-decoration:none;
font-size:20px;
}
.router-view-nav{
    /* display: grid;
    place-items:center; */
}
.min-input{
    width:100%;
    border:none;
    padding:10px;
}
.router-view-nav li{
    list-style: none;
    display: inline;
    background: rgb(11, 170, 96);
    color:white;
    padding:15px;
    text-align:center;
    border-radius:5px;
}
.add-purchase{
    margin-top:18px;
}
.add-purchase h3{
margin-left: 15px;
}
.txt-input{
    padding:15px;
    width:350px;
    border:none;
    display: block;
    margin:10px;
    cursor: pointer;
    border-bottom:2px solid rgb(11, 170, 96);
    background:white;
}
.btn-submit{
    margin:10px;
    width:120px;
    padding:15px;
    border:none;
    border-radius:15px;
    cursor:pointer;
    color:white;
    background: rgb(11, 170, 96);
    font-size:20px;
}
.form-contain{
    display: grid;
    place-items:center;
}
.view-items th{
padding:15px;
}
.view-items td{
    background:white;
    cursor:pointer;
}
.view-items-header{
    background: rgb(11, 170, 96);
    color:white;
}
.view-items-container{
display: grid;
place-items: center;
}
.error{
    background:red ;
}
.missing-delivery{
    border-bottom:2px solid rgb(255, 13, 4) !important;
    color:white;
    text-align:center;
}
</style>