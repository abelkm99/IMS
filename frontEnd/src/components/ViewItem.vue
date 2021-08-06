<template>
    <div>
 <!-- edit details  -->
<vue-window-modal :active="editPriceVisible"  title="Edit Details" v-on:clickClose="editViewUpdate(false)" style="width:auto;height:auto;">
    <form  @submit.prevent="updateItemDetails"> 
<table class="view-items">
    <tr class="view-items-header">
        <th>Category</th>
        <th>Item Code</th>
        <th>Item Type</th>
        
    </tr>
    <tr>
    <td> 
            <select v-model="editCategory" id="">
                <option  :key="x.CategoryId" :value="x.CategoryId" v-for="x in categoryList">{{x.CategoryName}}</option>
            </select>
    </td>
    <td>
        <input   v-model="editCode" type="text" placeholder="Item Code" > 
    </td>
    <td>
  <input   v-model="editType" type="text" placeholder="Item Type">
    </td>
    </tr>
    <tr>
        <td>
            <button class="btn-submit" type="submit">
                Confirm
            </button>
        </td>
    </tr>
</table>
</form>

</vue-window-modal>


 <!-- / edit  -->
 
 
 
            <div class="router-view-container">
 
 
 
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
 



                <fieldset class="view-items-container">
                    <legend> <h3> Items Added </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Category  
                            </th>
                            <th>
                                Item Code
                            </th>
                            <th>
                                Item Type
                            </th>
                            <th>
                                Price Per Quantity
                            </th>
                             <th>
                                 View Details
                             </th>
                            <th>
                             Change
                            </th>
                          
                        </tr>
                        <vue-window-modal :active="HistoryInfoVisible"  title="Inventory History" v-on:clickClose="closeHistory(false)" style="width:auto;height:auto;">
  <table class="view-items">
      <tr class="view-items-header">
          <th>
              Date
          </th>
          <th>
              Item ID
          </th>
          <th>
              REFNO
          </th>
          <th>
              GRNNO
          </th>
          <th>
              OUT
          </th>
          <th>
            IN
          </th>
        <th>
              balance
          </th>
      </tr>
      <tr :key="x.ItemId"  v-for="x in historyInfo">
      
     <td>
         {{x.Date}}
     </td>
     <td>
         {{x.ItemId}}
     </td>
     <td>
         {{x.REFNO || "-"}}
     </td>
     <td>
         {{x.GRNNO || "-"}}
     </td>
     <td>
         {{x.OUT || "-"}}
     </td>
     <td>
         {{x.IN || "-"}}
     </td>
     <td>
         {{x.balance}}
     </td>
      </tr>
  </table>
                        </vue-window-modal>
            <vue-window-modal  :active="InventoryInfoVisible"  title="Inventory Details"  v-on:clickClose="closeView(false)" style="width:auto;height:auto;">  
             <form @submit.prevent="updateItemPrice">
                <table class="view-items">
                    <tr class="view-items-header"> 
                        <th>WareHouse</th>
                        <th>Store</th>
                        <th>Total</th>
                         <th> PPP </th>
                        <th>Total Price</th>
                        <th>History</th>

                    </tr>
                    <tr  :key="x.ItemId"  v-for="x in InventoryInfoObj">
               
                            <td>{{x["warehouse-balance"]}}</td>
                            <td>{{x["store-balance"]}}</td>
                            <td>{{x["total-balance"]}}</td>
                            <td><input  v-model="editPPP" type="number"  min="0" required> </td>
                            <td>{{x["Total-price"]}}</td>
                            <td><button class="btn-submit-mini"  @click="viewHistoryInfo(x.ItemId)"><i class="fas fa-clock"></i></button></td>
                        </tr>
                     <tr>
                         <td>
                             <button class="btn-submit" type="submit">
                             Confirm
                             </button></td>
                     </tr>
                </table>
                </form>
            </vue-window-modal>
                      <tr  :name="x.ItemID" v-bind:key="index" v-for="(x,index) in items">  
                          <td> {{x.ItemCategory[0].CategoryName}}</td>
                          <td>{{x.ItemCode}}</td>
                          <td>{{x.ItemType}}</td>
                          <td>{{x.PPP}}</td>
                          <td>  <button class="btn-submit-mini"  @click="viewInfo(x.ItemID,x.PPP)"><i class="fa  fa-eye"></i></button> </td>
                          <td> <button class="btn-submit-mini" @click="editPriceView(x.ItemID,x.ItemCategory[0].CategoryId)">  <i class="fas fa-edit"></i>  </button> <button class="btn-err" @click="removeItem(x.ItemID)"><i class="fas fa-trash-alt"></i></button></td>
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
import Items from "@/api_calls/Items.js";
import Category from "@/api_calls/Category.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
       "items":[],
       editCategory:'',
       editableItem:'',
       editCode:'',
       editType:'',
       editPPP:'',
       editPriceVisible:false,
       InventoryInfoVisible:false,
       InventoryInfoObj:[],
       historyInfo:[],
       HistoryInfoVisible:false,
       categoryList:[],
       links:
               [
                   {    
                       id:0,
                       address:"item",
                       displayText:"Add Item"
                   },
                   {
                    id:1,
                    address:"viewItem",
                    displayText:"Items"
                   }
               ]
   }
    },
    methods:{
         getItems(){
                 Items.getItems().then(item=>{
                this.items = item["data"];
                
                
            });
         },
        removeItem(id){
        
        const data = {
    "ItemID":id
}


        Items.removeItem(data).then(res=>{
            console.log(res["data"])
            this.items =  this.items.filter(item=>{
            return item.ItemID !=  id ; 
        });
       
            }).catch(err=>{
            alert(err.response.data.message);
        })
    
      
        
    
 
        }
    ,
    viewInfo(id,ppp){
        this.InventoryInfoVisible = true;
        this.editPPP = ppp;
         this.editableItem = id;
     Items.getInventoryInfo(id).then(res=>{
         this.InventoryInfoObj  = res["data"];

     }).catch(err=>{alert(err.response.data.message)});   
    },closeView(state){
        this.InventoryInfoVisible = state;
    },viewHistoryInfo(id){
         this.closeView(false);
        this.HistoryInfoVisible = true;
        this.historyInfo = [];
        Items.getInventoryHistoryInfo(id).then(res=>{
        this.historyInfo = res["data"];
            console.log("check this",this.historyInfo);
        }).catch(err=>{
            alert(err.response.data.message);
            })
    },closeHistory(state){
         this.HistoryInfoVisible = state;
    }, editPriceView(id,catId){
        this.editPriceVisible = true;
        this.editableItem = id;
        const dt = this.items.filter(item=>{ return item.ItemID == id})[0];
        console.log("check here",dt);
       this.editCategory  =  catId;
        this.editCode = dt.ItemCode;
        this.editType = dt.ItemType;
        
    },editViewUpdate(state){
        this.editPriceVisible = state;
            }
        ,getCategories(){
            Category.getCategories().then(res=>this.categoryList=res["data"]).catch(err=>{
                     alert(err.response.data.message);
                })
        },
        updateItemDetails(){
    const data = {
    "CategoryID":this.editCategory,
    "ItemCode":this.editCode,
    "ItemType":this.editType,
    "ItemId":this.editableItem
}
    Items.updateItemDetails(data).then(res=>{
        console.log(res["data"]);
        this.getItems();
        this.editPriceVisible = false;
    }).catch(err=>{

        alert(err.response.data.message);

})
        },
        updateItemPrice(){
            const data  = {
                    "PPP":this.editPPP,
                    "ItemId":this.editableItem
            } 
            Items.updateItemPrice(data).then(res=>{
       
                    console.log(res["data"])
                    this.getItems();
                    this.InventoryInfoVisible = false;
                    
                
                }).catch(err=>{alert(err.response.data.message)})
        }
        },
        created(){
            console.log("here")
            this.getCategories();
            this.getItems();
        
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
    padding:15px;
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
    background:red;
}
.btn-del{
    width:30px;
    height:30px;
    font-weight:bolder;
    color:white;
    border:none;
    background:red;
    cursor:pointer;
    border-radius: 50%;

}
</style>