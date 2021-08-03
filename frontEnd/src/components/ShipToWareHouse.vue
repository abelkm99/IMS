<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
                      <legend>
                          <h3>
                             Ship To WareHouse
                        </h3>
                    </legend>
                    <form @submit.prevent="addItem">
                    <table>
                
                    
                        <tr>
                         <td>
                            <label for="PurchaseDate"> <h3> Ship Date </h3></label>
                            <input v-model="shipDate" type="date" class="txt-input" name="PurchaseDate" placeholder="GRN NO"  ></td>
                          <td><button class="btn-submit" type="submit" >Add Item</button> <button @click="shipWareHouse" type="button" class="btn-submit">Finish</button> <button class="btn-submit error" @click="reload" type="button">Cancel</button></td>
                        </tr>
                        <tr>
                              <td>
                            <label for="itemType"> <h3>Item Type</h3></label>
                            <select v-model="ItemType" name="itemType" id="" class="txt-input" required>
                                <option  :key="x.ItemID"  v-for="x in ItemTypeList" :value="x.ItemID">{{x.ItemCode}}</option>
                         

                            </select>
                        </td>
                            <td>
                                <label for="Driver"> <h3>Driver</h3></label>
                                <select v-model="Driver" name="Driver"  class="txt-input"  >
                                    <option  :key="x.DriverID" :value="x.DriverID" v-for="x in DriversList">{{x.DriverName}}</option>
                    
                                </select></td>
                          
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                      
                            <td> 
                                <label for="quantity"> <h3>cost</h3></label>
                                <input v-model="Cost" type="number" class="txt-input"  value="" placeholder="Item quantity" min="1" required></td> 
                              <td>
                            <label for="pricePerPiece"> <h3>Quantity</h3></label>
                            <input v-model="Quantity" type="number" name="pricePerPiece" class="txt-input"  value="" placeholder="Price per Peice" min="1">
                        </td>
                                    
                        </tr>
                    <tr>

                      
                        
                    </tr>
                    </table>
                     
                     </form>
           
                  </fieldset>
                <fieldset class="view-items-container">
                    <legend> <h3> Items Added </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Item ID
                            </th>
                            <th>
                                Item Quantity
                            </th>
                            <th>
                                X
                            </th>
                          
                        </tr>
                      <tr  :name="x" v-bind:key="index" v-for="(x,index) in keys">  
                          <td>{{getItemCode(x)}}</td>
                          <td>{{ShipJson[x]}}</td>
                        
                          <td> <button class="btn-del" @click="removeItem($event)">X</button></td>
                   
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
import Items from  "@/api_calls/Items.js";
import Shipmnet from "@/api_calls/Shipment.js"; 
import Supplier from "@/api_calls/Supplier.js";
import Driver from "@/api_calls/Driver.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
       shipDate:'',
       "items":[],
       keys:[],
       data:[],
       ItemTypeList:[],
       supplierList:[],
       DriversList:[],
       Quantity:'',
       ShipJson:{},
       Cost:'',
       "Supplier":'',
       "ItemCode":'',
       "ItemType":'',
       "ItemQuantity":'',
       "PricePerQuantity":'',
       "PurchaseType":'',
       "Driver":'',
       "PurchaseDate":'',
       "DeliveryDate":'',
       "IndexForDelete":0,
        OrderString:'',
        links:
               [
                   {    
                       id:0,
                       address:"shipment",
                       displayText:"Ship Purchases"
                   },
                   {
                    id:1,
                    address:"shipToWareHouse",
                    displayText:"Ship WareHouse"
                   }
               ]
   }
    },
    methods:{
       getSupplier(){

           Supplier.getSuppliers().then(
               res=>{
                   this.supplierList =  res["data"];
               }
           )
       
       },
       getSupplierName(id){
           for(const x in this.supplierList){
               if(this.supplierList[x].SupplierID == id){

                    return this.supplierList[x].SupplierName;
                 
               }
           }
           this.supplierList.forEach((ele)=>{
              if(ele.SupplierID == id){
                  return ele.SupplierName;
              } 
           })
       },
        addItem(){
        // check if the json file is empty       
        if((Object.keys(this.ShipJson).length)){
    
            for(const k in this.ShipJson){
             if(k == this.ItemType){
                   alert("double entry not allowed");
             }else{
            
            this.ShipJson[this.ItemType] = this.Quantity; 
            if(!(this.keys.includes(this.ItemType))){
                this.keys.push(this.ItemType);
            }
         
          
             }
            }
          
        }else{
            //if not empty set a value 
          
            this.ShipJson[this.ItemType] = this.Quantity
            this.keys.push(this.ItemType);
          

        }

  
 
        },
        removeItem(e){
        //remove from the order string 
        const target =   e.target.parentNode.parentNode;
        const index = target.getAttribute("name");
        delete this.ShipJson[index];
        this.keys =  this.keys.filter(key=>{return key != index})
 
        },
        reload(){
            window.location.reload();
        },
            shipWareHouse(){
               this.data = {
            "Cost": this.Cost,
            "DriverId": this.Driver,
            "json":this.ShipJson,
            "Date": this.shipDate
            }
           Shipmnet.shipWareHouse(this.data).then(res=>console.log(res)).catch(err=>{alert(err.response.data.message)});
            console.log(this.data);
        },
        getItemType(){
            Items.getItems().then(res=>{this.ItemTypeList=res["data"]
                console.log(res["data"]);
            });
          
        },
        getDrivers(){
            Driver.getDrivers().then(res=>{
                this.DriversList = res["data"]
            }).catch(err=>{console.log(err)})
        },
        getItemCode(id){
                for(const x in this.ItemTypeList){
                    if(this.ItemTypeList[x].ItemID== id){   
                            return this.ItemTypeList[x].ItemCode;
                    }
                }
        }
        },created(){
            this.getItemType();
            this.getSupplier();
            this.getDrivers();
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