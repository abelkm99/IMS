<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
             <vue-window-modal  :active="visibleFormCrud"  title="Bank Details"  v-on:clickClose="visibleFormCrudUpdate(false)" style="width:auto;">  
            <table class="view-items">
                    <tr class="view-items-header">
                        <th>Bank Name</th>
                        <th>Bank Account Number</th>
                    </tr>
                    <tr :key="x.BankAccountID" v-for="x in bankDetails" v-show=" bankDetails.length > 0">
                           <td>
                            {{x.BankName}}
                            </td>
                            <td>
                            {{x.BankAccount}}
                            </td> 
                    </tr>

            </table>
             </vue-window-modal>
                <fieldset class="view-items-container">
                    <legend> <h3> Suppliers </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Name  
                            </th>
                            <th>
                                 Address
                            </th>
                            <th>
                                Phone
                            </th>
                           <th>
                               Tin Number
                           </th>
                       
                            <th>
                                Bank Info
                            </th>
                          
                        </tr>
                      <tr  :name="x.CustomerID" v-bind:key="index" v-for="(x,index) in items">  
                          <td> {{x.CustomerName}}</td>
                          <td>{{x.CustomerAddress}}</td>
                          <td>{{x.CustomerPhoneNumber}}</td>
                          <td>{{x.CustomerTinNumber}}</td>

                          <td><button class="btn-submit" @click="showDetail($event)">BankInfo</button></td>
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
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
       visibleFormCrud:false,
       "items":[],
       "bankDetails":[],
       links:
               [
                   {    
                       id:0,
                       address:"customer",
                       displayText:"Add Customer"
                   },
                   {
                       id:1,
                       address:"viewCustomer",
                       displayText:"View Customer"
                   }
               ]
   }
    },
    methods:{
    
      visibleFormCrudUpdate(state){
          this.visibleFormCrud = state;
                        
      },
      showDetail(e){
          const id = e.target.parentNode.parentNode.getAttribute("name");
          const sb = (this.items.filter(item=>item.CustomerID == id))
        this.bankDetails = sb[0].CustomerBankAccounts;
        this.visibleFormCrud = true;
      } 
    
        },
        created(){
       
            
            Customer.getCustomers().then(item=>{
                this.items = item["data"];            
            });
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