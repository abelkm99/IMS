<template>
    <div>
        <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
                      <legend>
                          <h3>
                              Add Order
                        </h3>
                    </legend>
                    <form @submit.prevent="addItem">


                   
                    <table>
                        <tr>
                            <td>
                            </td>

                        </tr>
        
                 
                        <tr>
                         <td>
                            <label for="OrderDate"> <h3> Order Date </h3></label>
                            <input v-model="OrderDate" type="date" class="txt-input" name="OrderDate" required></td>
                            <td><button class="btn-submit" type="submit">Add Item</button> <button class="btn-submit"  @click="addOrder" type="button">Finish</button> <button class="btn-submit error" @click="reload" type="button">Cancel</button></td>
                       
                        </tr>
                        <tr>
                            <td>
                                <label for="Customer"> <h3>Customer</h3></label>
                                <select v-model="Customer" name="Customer"  class="txt-input">
                                    <option  :key="x.CustomerID" :value="x.CustomerID" v-for="x in CustomerList">{{x.CustomerName}}</option>
                                  
                                </select></td>
                                           <td>
                            <label for="itemType"> <h3>Item Type</h3></label>
                            <select v-model="ItemType" name="itemType" id="" class="txt-input">
                                <option :key="x.ItemID" :value="x.ItemID" v-for="x in ItemsList">{{x.ItemCode}}</option>
                            
                            </select>
                        </td>
                          
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                      
                            <td> 
                                <label for="quantity"> <h3>Item quantity</h3></label>
                                <input v-model="ItemQuantity" type="number" class="txt-input"  value="" placeholder="Item quantity" min="1"></td> 
                       
                                     <td>
                            <label for="pricePerPiece"> <h3>Price Per quantity</h3></label>
                            <input v-model="PricePerQuantity" type="number" name="pricePerPiece" class="txt-input"  value="" placeholder="Price per Peice"  required>
                        </td> 
                        </tr>
   
                    </table>
                      </form>
                     
           
                  </fieldset>
                <fieldset class="view-items-container">
                    <legend> <h3> Items Added </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Customer
                            </th>
                            <th>
                                Item Code
                            </th>

                            <th>
                                Item Quantity
                            </th>
                            <th>
                                Price Per Quantity
                            </th>
                           
                            <th>
                                X
                            </th>
                          
                        </tr>
                      <tr  :name="x.ItemType" v-bind:key="x.ItemType" v-for="(x) in items">  
    
                          <td>{{x.Customer}}</td>
                          <td>{{getItemCodeName(x.ItemType)}}</td>
                          <td>{{x.ItemQuantity}}</td>
                          <td>{{x.PricePerQuantity}}</td>
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
 
import Customer from "@/api_calls/Customer.js";
import  Supplier from  "@/api_calls/Supplier.js";
import Driver from "@/api_calls/Driver.js";
import Items  from "@/api_calls/Items.js";
import Orders  from "@/api_calls/Orders.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
        SupplierList:[],
        CustomerList:[],
        DriverList:[],
        ItemsList:[],
        OrderString:'',
        "items":[],
       "Customer":'',
       "ItemCode":'',
       "ItemType":'',
       "ItemQuantity":'',
       "PricePerQuantity":'',
       "PurchaseType":'',
       "Driver":'',
       "OrderDate":'',
       "DeliveryDate":'',
       "IndexForDelete":0,
       links:
               [
              
                   {
                    id:1,
                    address:"addOrder",
                    displayText:"Add Order"
                   },{
                       id:2,
                       address:"viewOrder",
                       displayText:"Orders"
                   }
               ]
   }
    },
    methods:{
        addItem(){
   
        //check item in the string 
           
            if(this.OrderString !==""){
              var OrderList = this.OrderString.split(";")
              var repeated = false;
                    console.log(OrderList)

                for(const x in OrderList){
                    var singleOrder = OrderList[x].split(",");
                    console.log(singleOrder);                    
                   
                 if(singleOrder[0] == this.ItemType){
                     alert("an  entry with the same ItemType  can not be repeated");
                     repeated = true;
                     break;
                } 
             } if(!repeated){
                   this.OrderString += this.ItemType +  "," + this.PricePerQuantity + "," + this.ItemQuantity +";";
                  
            }else{
                 
                console.log(this.OrderString);
            
            }
            }else{
                    this.OrderString += this.ItemType + "," + this.PricePerQuantity + "," + this.ItemQuantity + ";";
                    

            }
        if(!repeated){
       this.items.push(
                    {
                    "Customer":this.Customer,
                    "ItemType":this.ItemType,
                    "ItemQuantity":this.ItemQuantity,
                    "PricePerQuantity":this.PricePerQuantity,
                    "PurchaseType":"2",
                    "Index":this.IndexForDelete
                }
            )
        }
 
            this.IndexForDelete++;
            console.log(this.OrderString);
        },
        removeItem(e){
        //remove from the order string 
        const target =   e.target.parentNode.parentNode;
        const index = target.getAttribute("name");
        console.log("index checker",index);
        var stringAll =  this.OrderString.split(";");
        stringAll.forEach((elem,i,obj)=>{
            if(elem.split(",")[0] == index){
                obj.splice(i,1);
            }
        });
        var modifiedString = "";
        for(let i=0;i<stringAll.length;i++){
         modifiedString += stringAll[i];
        }
        if(modifiedString != ""){

        this.OrderString = modifiedString + ";"; 

        }else{
            this.OrderString = "";
        }
        
        this.items =  this.items.filter(item=>{
             return item.ItemType !=  index ; 
        });
        
         if(this.items.length == 0){
             this.IndexForDelete=0;
         }
        
        console.log("you this some bullshit", this.OrderString);
 
 
        },
        reload(){
            window.location.reload();
        },
        addOrder(){
            const data = {
            "OrderType":"2",
            "SupplierID":"",
            "CutomerID":this.Customer,
           "OrderDate":this.OrderDate,
            "OrderInformation": this.OrderString
            };
            Orders.addSalesOrder(data).then(res=>{
            console.log(res);
            })


        }, 
        getCustomers(){
            Customer.getCustomers().then(res=>{
                this.CustomerList =  res["data"];
            }).catch(err=>{
                console.log(err)})
        },
        getDrivers(){
            Driver.getDrivers().then(res=>{
                this.DriverList =  res["data"];
                }).catch(err=>{
                    console.log(err);
                })
        },
        getSupplier(){
            Supplier.getSuppliers().then(res=>{
                this.SupplierList  =  res["data"];
            })
        },
        getItems(){
          Items.getItems().then(res=>{
              this.ItemsList = res["data"]
          }).catch(err=>console.log(err));
        },
        getItemCodeName(id){
          
            for(const x in this.ItemsList){
                if(this.ItemsList[x].ItemID == id){
                    return this.ItemsList[x].ItemCode;
                }
            }
        }
       
       },
       created(){
           this.getItems();
           this.getCustomers();
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