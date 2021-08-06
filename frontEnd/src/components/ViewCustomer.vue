<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">


<!-- update customer information pop up -->
<vue-window-modal  :active="editCustomerVisible"   title="Edit customer Data"  v-on:clickClose="editCustomerUpdate(false)"   style="width:auto;height:auto;"> 
<form @submit.prevent="updateCustomer">
    <table class="view-items">
    <tr class="view-items-header">
      <th> Name  </th>
      <th> Phone </th>
      <th>  Address </th>
      <th> Tin Number</th>
    </tr>
    <tr>
        <td>
                <input type="text"  v-model="editName" placeholder="Name" requried/>
        </td>
        <td>
                <input type="text"  v-model="editPhone" placeholder="Phone" requried/>

        </td>
        <td>
                <input type="text"  v-model="editAddress" placeholder="Address" required/>

        </td>
        <td>
                <input type="text"  v-model="editTin" placeholder="Tin Number">

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

<!-- /update customer information pop up -->
<!-- add bank info -->
<vue-window-modal :active="addBankVisible" title="Add Customer Bank"   v-on:clickClose="addBankVisibleUpdate(false)" style="width:auto;height:auto;">

<form @submit.prevent="addBankAccount">
<table class="view-items">
<tr class="view-items-header">
    <th>
        Bank Name
    </th>
    <th>
        Bank Account  Number
    </th>
</tr>
<tr>

<td>
    <input  v-model="bankName"  type="text" placeholder="Bank Name">
</td>

<td>
    <input  v-model="bankNumber" type="text" placeholder="Bank Account Number">
</td>
</tr>
<tr>
    <td>
        <button class="btn-submit">
            ADD
        </button>
    </td>
</tr>
</table>
</form>
</vue-window-modal>

<!-- /add bank info -->

<!-- edit customer Bank pop up  -->
<vue-window-modal :active="editableBankVisible"  title="Update Customer Bank Details" v-on:clickClose="BankEditView(false)" style="width:auto;height:auto;">
<form @submit.prevent="updateCustomerBank">
<table class="view-items">
    <tr class="view-items-header">
      <th>
          Bank Name
      </th>
        <th>
            Bank Account Number
        </th>
    </tr>
    <tr>
        <td>
            <input  v-model="editBankName" type="text" placeholder="Bank Name" >
        </td>
        <td>
              <input  v-model="editBank" type="text" placeholder="Bank Number">

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
<!-- / edit customer Bank pop up -->
             <vue-window-modal  :active="visibleFormCrud"  title="Bank Details"  v-on:clickClose="visibleFormCrudUpdate(false)" style="width:auto;height:auto;">  
            <table class="view-items">
                    <tr class="view-items-header">
                        <th>Bank Name</th>
                        <th>Bank Account Number</th>
                        <th>
                            Change
                        </th>
                    </tr>
                    <tr :key="x.BankAccountID" v-for="x in bankDetails" v-show="bankDetails[0].BankAccountID">
                           <td>
                            {{x.BankName}}
                            </td>
                            <td>
                            {{x.BankAccount}}
                            </td> 
                            <td><button class="btn-submit-mini" @click="editCustomerBankView(x.CustomerID,x.BankAccountID)"><i class="fas fa-edit"></i></button> <button @click="removeCustomerBank(x.BankAccountID)" class="btn-err"> <i class="fas fa-trash-alt"></i></button></td>

                            
                    </tr>
                    <tr     :key="x.BankAccountID" v-for="x in bankDetails" v-show="! (bankDetails[0].BankAccountID)">
                       No Bank Details for this Customer 
                    </tr>

            </table>
             </vue-window-modal>
                <fieldset class="view-items-container">
                    <legend> <h3> Customers </h3></legend>
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
                            <th>
                                Change
                            </th>
                          
                        </tr>
                      <tr  :name="x.CustomerID" v-bind:key="index" v-for="(x,index) in items">  
                          <td> {{x.CustomerName}}</td>
                          <td>{{x.CustomerAddress}}</td>
                          <td>{{x.CustomerPhoneNumber}}</td>
                          <td>{{x.CustomerTinNumber}}</td>
                          <td><button class="btn-submit-mini" @click="showDetail(x.CustomerID)"><i class="fas fa-eye"></i></button> <button  @click="addBankView(x.CustomerID)" class="btn-submit-mini"> <i class="fas fa-plus"></i> </button></td>
                          <td><button class="btn-submit-mini" @click="updateCustomerView(x.CustomerID)"><i class="fas fa-edit"></i></button> <button   @click="removeCustomer(x.CustomerID)" class="btn-err"> <i class="fas fa-trash-alt"></i> </button></td>

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
       editCustomerVisible:false,
       editBankName:'',
       BankIdEdit:'',
       editBank:'',
       bankName:'',
       bankNumber:'',
       editName:'',
       editAddress:'',
       editPhone:'',
       editTin:'',
       visibleFormCrud:false,
       editableBankVisible:false,
       "items":[],
       "bankDetails":[],
       addBankVisible:false,
       CustomerBankAdd:'',
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
    getCustomerList(){
         Customer.getCustomers().then(item=>{
                this.items = item["data"];            
            });
    },
      visibleFormCrudUpdate(state){
          this.visibleFormCrud = state;
                        
      },
      showDetail(id){
 
          const sb = (this.items.filter(item=>item.CustomerID == id))
        this.bankDetails = sb[0].CustomerBankAccounts;
      console.log("check bank", this.bankDetails);
        this.visibleFormCrud = true;
      },
      editCustomerBankView(id,bnkID){
            this.visibleFormCrud = false;
          this.editableBankVisible = true;
          this.BankIdEdit = bnkID;
          this.customerBankEditable = this.items.filter(item=>{ return item.CustomerID == id})[0].CustomerBankAccounts.filter(bnk=>{ return bnk.BankAccountID == bnkID})[0];
          this.editBankName =this.customerBankEditable.BankName;
          this.editBank = this.customerBankEditable.BankAccount;
        
      },BankEditView(state){
          this.editableBankVisible=state;

      },updateCustomerBank(){
            const data = {
            "BankAccountID": this.BankIdEdit || '',
            "BankAccount": this.editBank,
            "BankName": this.editBankName
            }
            Customer.updateCustomerBank(data).then(res=>{
               
                console.log(res["data"]);
                this.editBankName = "";
                this.editBank = "";
                
                this.getCustomerList();
                
            }).catch(err=>{
                alert(err.response.data.message);
                })
                this.editableBankVisible = false;
                
      }, removeCustomerBank(id){
            Customer.removeCustomerBank(id).then(res=>{
              this.bankDetails =  this.bankDetails.filter(bnk=>{return bnk.BankAccountID != id});
              console.log(res["data"]);
            })
      
      },addBankView(id){
            this.addBankVisible= true;
            this.CustomerBankAdd = id;
      }, addBankAccount(){
        const data = {
        "CustomerID":this.CustomerBankAdd,
        "BankAccount":this.bankNumber,
        "BankName":this.bankName
        }
        Customer.addBankAccount(data).then(res=>{
            this.getCustomerList();
            this.addBankVisible=false;
            console.log(res["data"])}).catch(err=>{alert(err.response.data.message)})
      
      },addBankVisibleUpdate(state){
          this.addBankVisible =  state;
      },
      editCustomerUpdate(state){
          this.editCustomerVisible  = state;
      },
      updateCustomerView(id){
          this.editCustomer = id;
          this.editCustomerVisible = true;
          const edt =  this.items.filter(item=>{return item.CustomerID == id});
          this.editName = edt[0].CustomerName;
          this.editPhone = edt[0].CustomerPhoneNumber;
          this.editAddress= edt[0].CustomerAddress;


      },
      updateCustomer(){
    const data = {
         "CustomerName":this.editName,
          "CustomerAddress":this.editAddress,
            "CustomerTinNumber":this.editTin,
            "CustomerPhoneNumber":this.editPhone || '',
            "CustomerID":this.editCustomer
}  
    Customer.updateCustomer(data).then(res=>{
        this.getCustomerList();
        this.editCustomerVisible = false;
        console.log(res["data"])
        
        }).catch(err=>{
          alert(err.response.data.message);
        })

      }, removeCustomer(id){

          const  data = {
                 "CustomerID":id
          }
          Customer.removeCustomer(data).then(res=>{
              console.log(res["data"])
              this.items =  this.items.filter(item=>{
                 return item.CustomerID != id;
              })
          }).catch(err=>{
                  alert(err.response.data.message);
              })
      }
    
        },
        created(){
         this.getCustomerList();
            
           
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