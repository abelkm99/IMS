<template>
  
           <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
                      <legend>
                          <h3>
                              Make Order
                        </h3>
                    </legend>
                    <table>
                        <tr>
                            <td>
                            </td>
                            <td><button class="btn-submit" @click="addItem">Add Item</button> <button @click="printOrder" class="btn-submit">Done</button> <button class="btn-submit error" @click="reload">Cancel</button></td>

                        </tr>
                        <tr>
                            <td> <input type="number" class="txt-input"  value="" placeholder="GRN NO" disabled></td> 
                            <td>
                                <select v-model="PurchaseType" name="PurchaseType" id="" class="txt-input">
                                    <option value="Cash">cash</option>
                                    <option value="Credit">Credit</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                         <td>
                            <label for="OrderDate"> <h3> Order Date </h3></label>
                            <input v-model="OrderDate" type="date" class="txt-input" name="OrderDate" placeholder="GRN NO"  ></td>
                         <td>  <label for="PurchaseDate"> <h3> Delivery Date </h3></label>
                            <input type="date" class="txt-input" name="deliveryDate"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="supplier"> <h3>Supplier</h3></label>
                                <select v-model="Supplier" name="supplier"  class="txt-input">
                                    <option value="Girma">Girma</option>
                                    <option value="Girma">Girma</option>
                                    <option value="">Girma</option>
                                    <option value="">Girma</option>
            
                                </select></td>
                            <td>
                                <label for="Driver"> <h3>Driver</h3></label>
                                <select v-model="Driver" name="Driver"  class="txt-input">
                                    <option value="Girma">Girma</option>
                                    <option value="Girma">Girma</option>
                                    <option value="Girna">Girma</option>
                                    <option value="Girna">Girma</option>
                                </select></td>
                          
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                      
                            <td> 
                                <label for="quantity"> <h3>Item quantity</h3></label>
                                <input v-model="ItemQuantity" type="number" class="txt-input"  value="" placeholder="Item quantity" min="1"></td> 
                                <td> 
                                    <label for="quantity"> <h3>Item Code</h3></label>
                                    <input  v-model="ItemCode" type="text" class="txt-input"  name="ItemCode" value="" placeholder="Item code">
                                </td> 
                                    
                        </tr>
                    <tr>

                        <td>
                            <label for="itemType"> <h3>Item Type</h3></label>
                            <select v-model="ItemType" name="itemType" id="" class="txt-input">
                                <option value="RHS">RHS</option>
                                <option value="CHS">CHS</option>
                               
        
                            </select>
                        </td>
                        <td>
                            <label for="pricePerPiece"> <h3>Price Per quantity</h3></label>
                            <input v-model="PricePerQuantity" type="number" name="pricePerPiece" class="txt-input"  value="" placeholder="Price per Peice" min="1">
                        </td>
                    </tr>
                    </table>
                     
                     
           
                  </fieldset>
                <fieldset class="view-items-container" id="print">
                 

                  
                    <legend> <h3> Items Added </h3></legend>
                    <table class="view-items" >
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
    name:"MakeOrder",
    components:{
        SubHeaderControl,
    },
    methods:{
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
        printOrder(){
            const options = {
  name: '_blank',
  specs: [
    'fullscreen=yes',
    'titlebar=yes',
    'scrollbars=yes'
  ],
  styles: [

    'public/print.css'
  ]
}
         if(this.items.length == 0){
             alert("Order can not be empty")
         }else{
            this.$htmlToPaper("print",options);
         }   
        }
    },

    data(){
        return {
            "OrderDate":'',
            "DeliveryDate":'',
            "Supplier":'',
            "Deriver":'',
            "ItemQuantity":'',
            "ItemCode":'',
            "ItemType":'',
            "PricePerQuantity":'',

            links:[
               {
                    id:1,
                    address:"addOrder",
                    displayText:"Add Order"
                },{
                       id:2,
                       address:"viewOrder",
                       displayText:"Orders"
                   }
               
            ],
            IndexForDelete:0,
            items:[]
        }
    }
}
</script>
<style lang="">
    
</style>