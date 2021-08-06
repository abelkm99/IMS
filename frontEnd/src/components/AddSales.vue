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
                    <form @submit.prevent="addItem">
       
                    <table>
                  
                        <tr>
                         <td>
                            <label for="purchaseDate"> <h3> Sales Date </h3></label>
                            <input v-model="SalesDate" type="date" class="txt-input" name="purchaseDate" placeholder="GRN NO"  >
                         </td> 
                         <td><button class="btn-submit"  type="submit">Add Item</button> <button class="btn-submit" @click="addSales" type="button">Finish</button> <button class="btn-submit error" type="button">Cancel</button></td>

  
                        </tr>
                        <tr>
                            <td>
                                <label  for="Customer"> <h3>Customer</h3></label>
                                <select v-model="CustomerID" name="Customer" id="" class="txt-input" required>
                                    
                                <option  :key="x.CustomerID" :value="x.CustomerID" v-for="x in CustomerList">{{ x.CustomerID }} ,{{ x.CustomerName}}</option>
                                </select></td>
                            <td>
                                <label for="Driver"> <h3>Driver</h3></label>
                                <select v-model="Driver" name="Driver" id="" class="txt-input">
                                    <option :key="x.DriverID" :value="x.DriverID" v-for="x in DriverList">{{x.DriverName}}</option>
                            
                                 
            
                                </select></td>
                          
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                      
                            <td> 
                                <label for="quantity"> <h3>Item quantity</h3></label>
                                <input  v-model="ItemQuantity" type="number" class="txt-input"  value="" placeholder="Item quantity" min="1" requried></td> 
                                <td> 
                                    <label for="quantity"> <h3>Purchase Type</h3></label>
                                    <select v-model="purchaseType" name="purchaseType" id="" class="txt-input" required>
                                    <option value="1">cash</option>
                                    <option value="2">Credit</option>
                                </select>
                                     
                                </td> 
                                    
                        </tr>
                    <tr>

                        <td>
                            <label for="itemType"> <h3>Item Type</h3></label>
                            <select v-model="ItemType" name="itemType" id="" class="txt-input" required>
                                <option :key="x.ItemID" :value="x.ItemID" v-for="x in ItemsList">{{x.ItemCode}}</option>
                            </select>
                        </td>
                        <td>
                            <label for="pricePerPiece"> <h3>Price Per quantity</h3></label>
                            <input type="number"  v-model="PricePerQuantity" name="pricePerPiece" class="txt-input"  value="" placeholder="Price per Peice" min="1" required>
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
                     <tr  :name="x.ItemType" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{getCustomerName(x.Customer)}}</td>
                          <td>{{getItemCode(x.ItemCode)}}</td>
                          <td>{{x.ItemType}}</td>
                          <td>{{x.ItemQuantity}}</td>
                          <td>{{x.PricePerQuantity}}</td>
                          <td>{{x.PurchaseType==1 ?'Cash':'Credit'}}</td>
                          <td>{{getDriverName(x.Driver)}}</td>
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
import Driver from "@/api_calls/Driver.js";
import Customer from "@/api_calls/Customer.js";
import Sales from "@/api_calls/Sales.js";
 import Items from "@/api_calls/Items.js";

export default {
    name:"AddSales",
    components:{
        SubHeaderControl
    },methods:{
          addItem(){
   
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
                   this.OrderString += this.ItemType +  "," + this.PricePerQuantity +"," + this.ItemQuantity + ";";
                  
            }else{
                 
                console.log(this.OrderString);
            
            }
            }else{
                    this.OrderString += this.ItemType +"," + this.PricePerQuantity +  "," + this.ItemQuantity +  ";";
                    

            }
        if(!repeated){
       this.items.push(
                    {
                    "Customer":this.Customer,
                    "ItemType":this.ItemType,
                    "Driver":this.Driver,
                    "ItemQuantity":this.ItemQuantity,
                    "PricePerQuantity":this.PricePerQuantity,
                    "PurchaseType":this.purchaseType,
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
        
        console.log(this.OrderString);
    
 
        },
        reload(){
            window.location.reload();
        },   getDrivers(){
            Driver.getDrivers().then(res=>{
                this.DriverList = res["data"]
            }).catch(err=>{console.log(err)}) 
        }
        ,getCustomers(){
            Customer.getCustomers().then(res=>{this.CustomerList=res["data"]}).catch(err=>{console.log(err)})
        }
        ,
        addSales(){
            const data = {
                    "Date":this.SalesDate,
                    "CutomerID":this.CustomerID.toString(),
                    "TransactionID":this.purchaseType,
                    "EmployeeId":"9",
                    "DriverId":this.Driver,
                    "SalesInformation":this.OrderString
            }
            Sales.addSales(data).then(res=>{console.log(res)}).catch(err=>{
                alert(err.response.data.message);
            });
            console.log(data);
        },
        getItems(){
            Items.getItems().then(res=>{this.ItemsList = res["data"]}).catch(err=>{console.log(err)});
        },getCustomerName(id){
            for(const x in this.CustomerList){
                if(this.CustomerList.CustomerID==id){
                   return this.CustomerList[x].CustomerName; 
                }
            }
        }, getItemCode(id){
              for(const x in this.ItemsList){
                if(this.ItemsList.ItemID==id){
                   return this.ItemsList[x].ItemCode; 
                }
            }
        }, getDriverName(id){
            console.log(id);
               for(const x in this.DriverList){
                if(this.DriverList[x].DriverID==id){
                    console.log(this.DriverList[x].DriverName);
                   return this.DriverList[x].DriverName; 
                }
            }
        }
    },
    data(){
        return{
                    ItemsList:[],
                    OrderString:'',
                    CustomerList:[],
                    DriverList:[],
                    SalesDate:'',
                    "CustomerID":'',
                    "ItemCode":'',
                    "ItemType":'',
                    "ItemQuantity":'',
                    "PricePerQuantity":'',
                    "purchaseType":'',
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
    },created(){
        this.getDrivers();
        this.getCustomers();
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