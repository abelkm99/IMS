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
                                <select v-model="SupplierID" name="supplier" id="" class="txt-input">
                                    <option :key="x.SupplierID" :value="x.SupplierID" v-for="x in SuppliersList">{{x.SupplierName}}</option>
                                 
                                 
            
                                </select></td> 
                            <td>
                                <label for="purchaseType"> <h3>Purchase type</h3></label>
                                <select name="purchaseType" id="" class="txt-input">
                                    <option value="Cash">cash</option>
                                    <option value="Credit">Credit</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                         <td>
                            <label for="purchaseDate"> <h3> Purchase Date </h3></label>
                            <input type="date" class="txt-input" name="purchaseDate" placeholder="GRN NO"  ></td>
                         <td>  <label for="purchaseDate"> <h3> Delivery Date </h3></label>
                            <input type="date" class="txt-input" name="deliveryDate"></td>
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
                             REFNO 
                            </th>
                            <th>
                              Date
                            </th>
                            <th>
                              Type
                            </th>
                            <th>
                               Customer
                            </th>
                            <th>
                              Number of Orders
                            </th>
                            <th>
                                X
                            </th>
                        </tr>
                     <tr  :key="x.REFNO" :name="x.REFNO" v-for="x in items" >
                        <td>{{x.REFNO}}</td>
                          <td>{{x.Date}}</td>
                          <td> {{x.TransactionID==1?'Cash':'Credit'}}</td>
                          <td>{{getCustomerName(x.CutomerID)}}</td>
                          <td>{{x.Sales.length}}</td>
                          <td> <button class="btn-del" @click="removeSales($event)">X</button></td>
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
import Supplier from "@/api_calls/Supplier.js";
import Sales from "@/api_calls/Sales.js";
import Customers from "@/api_calls/Customer.js";
export default {
    name:"ViewSales",
    components:{
        SubHeaderControl
    },data(){
        return {
            items:[],
            SuppliersList:[],
            CustomersList:[],
            SupplierID:'',
            links:[
                {
                    id:0,
                    address:"addSales",
                    displayText:"Add Sales",

                },{
                    id:1,
                    address:"viewSales",
                    displayText:"Sales"
                }
            ]
        }
    },methods:{
        getSuppliers(){
            Supplier.getSuppliers().then(res=>{
                this.SuppliersList =  res["data"]
            })
        },
        getSales(){
            Sales.getSales().then(res=>{
                this.items =  res["data"];
            })
        },
        getCustomerName(id){
            for(const x in this.CustomersList){
              if(this.CustomersList[x].CustomerID==id){
                  return this.CustomersList[x].CustomerName;
              }
            }
        },
        removeSales(e){
            const id = e.target.parentNode.parentNode.getAttribute("name");
            console.log(id);
            Sales.removeSales(id).then(res=>{
                console.log(res);
                this.items = this.items.filter(item=>{return item.REFNO != id});
            }).catch(err=>{
                console.log(err);
            })
        }
    },created(){
        this.getSuppliers();
        this.getSales();
        Customers.getCustomers().then(res=>{
            this.CustomersList = res["data"];
        }).catch(err=>console.log(err))
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