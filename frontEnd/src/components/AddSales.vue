<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
                      <legend>
                          <h3>
                            Add Sales
                        </h3>
                    </legend>
                    <table>
                        <tr>
                            <td>
                            </td>
                            <td><button class="btn-submit" @click="addItem">Add Item</button> <button class="btn-submit">Finish</button> <button class="btn-submit error">Cancel</button></td>

                        </tr>
                        <tr>
                            <td> <input type="number" class="txt-input"  value="" placeholder="GRN NO" disabled></td> 
                            <td>
                                <select name="purchaseType" id="" class="txt-input">
                                    <option value="Cash">cash</option>
                                    <option value="Credit">Credit</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                         <td>
                            <label for="purchaseDate"> <h3> Sales Date </h3></label>
                            <input v-model="PurchaseDate" type="date" class="txt-input" name="purchaseDate" placeholder="GRN NO"  ></td>
                         <td>  <label for="purchaseDate"> <h3> Delivery Date </h3></label>
                            <input type="date" class="txt-input" name="deliveryDate"></td>
                        </tr>
                        <tr>
                            <td>
                                <label  for="Customer"> <h3>Customer</h3></label>
                                <select v-model="Customer" name="Customer" id="" class="txt-input">
                                    <option value="Girma">Girma</option>
                                    <option value="Girma">Girma</option>
                                    <option value="">Girma</option>
                                    <option value="">Girma</option>
            
                                </select></td>
                            <td>
                                <label for="Driver"> <h3>Driver</h3></label>
                                <select v-model="Driver" name="Driver" id="" class="txt-input">
                                    <option value="Girma">Girma</option>
                                    <option value="Girma">Girma</option>
                                    <option value="">Girma</option>
                                    <option value="">Girma</option>
            
                                </select></td>
                          
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                      
                            <td> 
                                <label for="quantity"> <h3>Item quantity</h3></label>
                                <input  v-model="ItemQuantity" type="number" class="txt-input"  value="" placeholder="Item quantity" min="1"></td> 
                                <td> 
                                    <label for="quantity"> <h3>Item Code</h3></label>
                                    <input type="text" class="txt-input"  name="itemCode" value="" placeholder="Item code">
                                </td> 
                                    
                        </tr>
                    <tr>

                        <td>
                            <label for="itemType"> <h3>Item Type</h3></label>
                            <select v-model="ItemType" name="itemType" id="" class="txt-input">
                                <option value="Girma">RHS</option>
                                <option value="Girma">CHS</option>
                               
        
                            </select>
                        </td>
                        <td>
                            <label for="pricePerPiece"> <h3>Price Per quantity</h3></label>
                            <input type="number"  v-model="PricePerQuantity" name="pricePerPiece" class="txt-input"  value="" placeholder="Price per Peice" min="1">
                        </td>
                    </tr>
                    </table>
                     
                     
           
                  </fieldset>
                <fieldset class="view-items-container">
                    <legend> <h3> Items Added </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                           <th>
                                Supplier
                            </th>
                            <th>
                                Item Code
                            </th>
                            <th>
                                Item Type
                            </th>
                            <th>
                                Item Quantity
                            </th>
                            <th>
                                Price Per Quantity
                            </th>
                            <th>
                                Purchase Type
                            </th>
                              <th>
                                Driver
                            </th>
                            <th>
                                X
                            </th>
                        </tr>
                     <tr  :name="x.Index" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{x.Supplier}}</td>
                          <td>{{x.ItemCode}}</td>
                          <td>{{x.ItemType}}</td>
                          <td>{{x.ItemQuantity}}</td>
                          <td>{{x.PricePerQuantity}}</td>
                          <td>{{x.PurchaseType}}</td>
                          <td>{{x.Driver}}</td>
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
export default {
    name:"AddSales",
    components:{
        SubHeaderControl
    },methods:{
          addItem(){
   
            this.items.push(
                {
                    "Supplier":this.Supplier,
                    "ItemCode":this.ItemCode,
                    "ItemType":this.ItemType,
                    "ItemQuantity":this.ItemQuantity,
                    "PricePerQuantity":this.PricePerQuantity,
                    "PurchaseType":this.PurchaseType,
                    "Driver":this.Driver,
                    "Index":this.IndexForDelete
                }
            )
            this.IndexForDelete++;
            console.log(this.items);
 
        },
        removeItem(e){
        const target =   e.target.parentNode.parentNode;
        const index = target.getAttribute("name");
        this.items =  this.items.filter(item=>{
             return item.Index !=  index ; 
        });
         console.log(this.items);
         if(this.items.length == 0){
             this.IndexForDelete=0;
         }
        
    
 
        },
        reload(){
            window.location.reload();
        },
    },
    data(){
        return{
                "Customer":'',
                    "ItemCode":'',
                    "ItemType":'',
                    "ItemQuantity":'',
                    "PricePerQuantity":'',
                    "PurchaseType":'',
                    "PurchaseDate":'',
                    "Driver":'',
                    "Index":'',
            links:[
                {   id:0,
                    address:"addSales",
                    displayText:"Add Sales"
                },{
                    id:1,
                    address:"viewSales",
                    displayText:"Sales"
                }
            ],
            IndexForDelete:0,
            items:[]
        }
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
</style>