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


                <!-- edit pop up -->

<vue-window-modal :active="editVisible" title="Edit Purchase" v-on:clickClose="closeEditPurchase(false)" style="width:auto;height:auto;">
          <form @submit.prevent="updateGRN()">
        <table class="view-items">
             
                        <tr class="view-items-header">
                          
                            <th>
                              Purchase Date
                            </th>
                            <th >
                                Delivered Date
                            </th>
                            <th>
                                Supplier
                            </th>
                            <th>
                                Driver
                            </th>
                        </tr>
                
                        <tr :key="y.GRNNO" v-for="y in editablePurchase">
                            
                           <td>
                                <input v-model="editPurchaseDate" type="date" >
                           </td>
                           <td>
                                <input v-model="editDeliveredDate" type="date">
                           </td>
                           <td>
                               <select v-model="editSupplierName"  id="">
                                    <option :key="x.SupplerID" :value="x.SupplierID" v-for="x in supplierList">{{x.SupplierName}}</option>
                               </select>
                                
                           </td>

                           <td>
                          <select v-model="editDriver" name="" id="">
                        <option  :key="x.DriverID" :value="x.DriverID" v-for="x in driverList">{{x.DriverName}}</option>
                        </select>  
                          </td> 
                        
                        </tr>
                        <tr>
                            <button class="btn-submit" type="submit">
                                Confirm
                            </button>
                        </tr>
                    
        </table></form>
</vue-window-modal>

                <!-- /edit pop up -->
            


<!-- edit Item pop up -->

<vue-window-modal :active="editItemVisible"  title="Update Purchase Item" v-on:clickClose="closeEditItem(false)" style="width:auto;height:auto;">
  <form @submit.prevent="updatePurchase">
  <table class="view-items">
                        <tr class="view-items-header">
                         
                            <th>
                              PPP
                            </th>
                            <th >
                                Quantity
                            </th>
                            <th>
                                Extra
                            </th>
                            <th>
                                Remainding
                            </th>
                         
                        </tr>
                        <tr>    
                        <td>
                            <input  v-model="editPPP" type="number" placeholder="PPP" required/>
                        </td>
                        <td>
                            <input  v-model="editQuantity" type="number" placeholder="Quantity" required/>

                        </td>
                        <td>
                            <input  v-model="editExtra" type="number" placeholder="Extra" value="0" required/>

                        </td>

                        <td>
                            <input v-model="editRemainder"  type="number" placeholder="Remaining" value="0" required/>

                        </td>
                      
                        </tr>
                        <tr>
                            <td>
                                <button class="btn-submit">
                                    Confirm
                                </button>
                            </td>
                        </tr>
</table>
</form>
</vue-window-modal>

<!--/ edit Item pop UP  -->
                  <!-- list pop up -->
                   <vue-window-modal  :active="listVisible"  title="List Purchase items"  v-on:clickClose="closeList(false)" style="width:auto;height:auto;">  
                <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                             GRNNO
                            </th>
                            <th>
                              PPP
                            </th>
                            <th >
                                Quantity
                            </th>
                            <th>
                                Extra
                            </th>
                            <th>
                                Remainder
                            </th>
                            <th>
                                Total
                            </th>
                            <th>
                                Actions
                            </th>
                          
                        </tr>
                <tr :key="x.ItemID" v-for="x in purchaseItemsList">

                        <td>
                            {{x.GRNNO}}
                        </td>
                         <td>
                            {{x.PPP}}
                        </td>   
                        <td>
                            {{x.Quantity}}

                        </td>
                        <td>
                            {{x.Extra}}
                        </td>
                        <td>
                            {{x.Remainder}}
                        </td>
                        <td>
                            {{x.Total}}
                        </td>
                        
                        <td> <button class="btn-submit-mini" @click="editItemView(x.PurchaseID,x.GRNNO)"><i class="fas fa-edit"></i></button>  <button class="btn-err" @click="removeItem(x.PurchaseID,x.GRNNO)"><i class="fas fa-trash-alt"></i></button></td>


                </tr>
                </table>
                    </vue-window-modal>
<!-- /list pop up -->
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
                                CHANGE
                            </th>
                          
                        </tr>
           
                      <tr  :name="x.GRNNO" v-bind:key="index" v-for="(x,index) in items" @dblclick="editForm($true)" >  
                          <td>{{x.GRNNO}}</td>
                          <td>{{x.PurchsedDate}}</td>
                          <td :class="x.Delivered==true?'':'missing-delivery'"> {{x.DeliverdDate}}</td>
                          <td>{{getSupplierName(x.SupplierID)}}</td>
                          <td><button class="btn-submit" @click="viewPurchaseItems(x.GRNNO)">List ({{x.Purchase.length}})</button></td>
                          <td> <button class="btn-submit-mini" @click="editPurchaseView(x.GRNNO)"><i class="fas fa-edit"></i></button>  <button class="btn-err" @click="removePurchase(x.GRNNO)"><i class="fas fa-trash-alt"></i></button></td>
                   
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
import Driver from  "@/api_calls/Driver.js"
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
        return {
            driverList:[],
            editableItem:[],
            editQuantity:'',
            editRemainder: '',
            editPPP: '' ,
            editExtra: '',
            editDriver:'',
            editRemaining:'',
            editItemVisible:false,
            listVisible:false,
            supplierFilter:'',
            transactionFilter:"",
            supplierList:[],
            purchaseItemsList:[],
            purchaseDateFilter:"",
            deliveredDateFilter:"",
            editPurchaseDate:'',
            editDeliveredDate:'',
            editSupplierName:'',
            editVisible:false,
            editablePurchase:[],
            editDriverID:'',
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
         removePurchase(id){
             Purchase.removePurchase(id).then(res=>{
                 this.items=  this.items.filter(ele =>{return  ele.GRNNO !=id} );
                 console.log(res)
             }).catch(err=>{
                alert(err.response.data.message)
                 })
         }, viewPurchaseItems(id){
             this.listVisible = true;
            this.purchaseItemsList =  this.items.filter(item=>{return item.GRNNO == id})[0].Purchase;
            console.log(this.purchaseItemsList);     
         },closeList(state){
             this.listVisible = state;
         },editPurchaseView(id){
             this.editVisible = true;
             this.editablePurchase =  this.items.filter(item=>{
                 return item.GRNNO == id
             })
             console.log("check this", this.editablePurchase);
             this.editPurchaseDate = this.editablePurchase[0].PurchsedDate;
             this.editDeliveredDate = this.editablePurchase[0].DeliverdDate;
             this.editSupplierName = this.editablePurchase[0].SupplierID;
             this.editDriver = this.editablePurchase[0].DriverID;
             
         },closeEditPurchase(state){
             this.editVisible = state;
             },
             updateGRN(){
                 const data = {
                 "PurchsedDate":this.editPurchaseDate,
                 "DeliverdDate":this.editDeliveredDate,
                 "SupplierID":this.editSupplierName,
                 "DriverID":this.editDriver || '',
                  "GRNNO":this.editablePurchase[0].GRNNO
                 }
                 console.log(data);
                 Purchase.updateGRN(data).then(res=>(console.log(res))).catch(err=>{
                     alert(err.response.data.message);
                 })},
                editItemView(id,grn){
                 this.editItemVisible = true;
                 this.editableItem = this.items.filter(item=>{return item.GRNNO==grn})[0].Purchase.filter(itm=>{return itm.PurchaseID == id })[0];
                 this.editQuantity = this.editableItem.Quantity;
                 this.editRemainder = this.editableItem.Remainder;
                 this.editExtra = this.editableItem.Extra;
                 this.editPPP = this.editableItem.PPP;
                 this.closeList(false);
                 console.log("Editable Item",this.editableItem);
             },
             closeEditItem(state){
                 this.editItemVisible = state;
                 },
                 updatePurchase(){
                     const data = {
                           "PPP":this.editPPP,
                           "Quantity":this.editQuantity,
                           "Remainder":this.editRemainder,
                           "Extra":this.editExtra,
                           "PurchaseID":this.editableItem.PurchaseID,
                           "GRNNO":this.editableItem.GRNNO
                     }
                     Purchase.updatePurchase(data).then(res=>{console.log(res["data"])}).catch(err=>{
                         console.log(err);
                     })
                 }, removeItem(id,grn){
                       const data = {
                           "PurchaseID":id,
                            "GRNNO":grn
                       }
                       Purchase.removeItem(data).then(res=>{console.log(res["data"])}).catch(err=>{
                           alert(err.response.data.message);
                       })
                 }, getDriverList(){
                     Driver.getDrivers().then(res=>{
                           this.driverList = res["data"];
                         }).catch(err=>{alert(err.response.data.message)})
                 }
    },
      created(){
          this.getPurchase();
          this.getSuppliers();
          this.getDriverList();
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