<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">

<!-- edit supplier Details pop up -->

<vue-window-modal   :active="editSupplierVisible" title="Edit Supplier Details" v-on:clickClose="closeEditSupplier(false)" style="width:auto;height:auto;">
<form @submit.prevent="updateSupplier">
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
    </tr>
    <tr>
        <td>
                <input   v-model="editName"  type="text" placeholder="Name" required/>
        </td>
        <td>
                <input    v-model="editAddress"  type="text" placeholder="Address" required/>
        </td>
        <td>
                    <input   v-model="editPhone" type="text"   placeholder="Phone" required/>
        </td>
        <td>
                    <input  v-model="editTin"  type="text" placeholder="Tin  Number" required/>
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

<!-- /edit supplier Details  pop up-->


<!-- edit Supplier Bank pop up -->

<vue-window-modal  :active="editSupplierBankVisible" title="Edit Supplier Bank Info" v-on:clickClose="EditBankVisible(false)" style="width:auto;height:auto;">
<form @submit.prevent="updateSupplierBank">
<table class="view-items">
    <tr class="view-items-header">
        <th>
            Bank Name
        </th>
        <th>
            Bank Number
        </th>
    </tr>
    <tr>
        <td> <input  v-model="editBankName"  type="text"  placeholder="Bank Name"> </td>
        <td>  <input   v-model="editBankNumber"  type="text" placeholder="Bank Number"> </td>
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

<!-- /edit Supplier Bank pop up -->
<!-- add Supplier Bank pop up -->
<vue-window-modal   :active="addBankVisible"  title="ADD Bank Account" v-on:clickClose="visibleBankUPdate(false)"  style="width:auto;height:auto;">  
<form  @submit.prevent="addBank">
<table class="view-items">
<tr class="view-items-header">
<th>Bank Name</th>
<th>  Bank Account</th>
</tr>
<tr>
   <td> <input  v-model="bankNameAdd" type="text" placeholder="Bank Name"> </td>
   <td> <input  v-model="bankAccoutAdd"  type="text"  placeholder="Bank Account"> </td>

</tr>
<tr>
    <td>
        <button class="btn-submit" type="submit">
            ADD
        </button>
    </td>
</tr>
</table>
</form>

</vue-window-modal>

<!-- / add supplier bank pop up -->

<!-- bank details view -->

             <vue-window-modal  :active="visibleFormCrud"  title="Bank Details"  v-on:clickClose="visibleFormCrudUpdate(false)" style="width:auto;height:auto;overflow-y:scroll;">  
            <table class="view-items">
                    <tr class="view-items-header">
                        <th>Bank Name</th>
                        <th>Bank Account Number</th>
                        <th>
                            Change
                        </th>
                    </tr>
                    <tr :key="x.BankAccountID" v-for="x in bankDetails" v-show=" bankDetails.length > 0">
                           <td>
                            {{x.BankName}}
                            </td>
                            <td>
                            {{x.BankAccountNumber}}
                            </td> 
                         
                          <td> <button class="btn-submit-mini" @click="editSupplierBankView(x.BankAccountID,x.SupplierID)"><i class="fas fa-edit"></i></button>  <button class="btn-err" @click="removeSupplierBank(x.BankAccountID)"><i class="fas fa-trash-alt"></i></button></td>

                        
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

                            <th>
                                Change
                            </th>
                          
                        </tr>
                      <tr  :name="x.SupplierID" v-bind:key="index" v-for="(x,index) in items">  
                          <td> {{x.SupplierName}}</td>
                          <td>{{x.SupplierAddress}}</td>
                          <td>{{x.SupplierPhoneNumber}}</td>
                          <td>{{x.SupplierTinNumber}}</td>
                          <td> <button class="btn-submit-mini" @click="showDetail(x.SupplierID)"><i class="fas fa-eye"></i></button>  <button class="btn-submit-mini" @click="addBankVisibleCall(x.SupplierID)"><i class="fas fa-plus"></i></button></td>
                          <td> <button class="btn-submit-mini" @click="editSupplierDetailsView(x.SupplierID)"><i class="fas fa-edit"></i></button>  <button class="btn-err" @click="removeSupplier(x.SupplierID)"><i class="fas fa-trash-alt"></i></button></td>
                      
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
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
       editSupplierVisible:false,
       visibleFormCrud:false,
       addBankVisible:false,
       editableSupplier:[],
       editBankName:'',
       editBankNumber:'',
       supplierAddBank:'',
       bankSupplierID:'',
       editName:'',
       editAddress:'',
       editPhone:'',
       editTin:'',
       editSupplierBankVisible:false,
       "items":[],
       "bankDetails":[],
       bankNameAdd:'',
       bankAccoutAdd:'',
       links:
               [
                   {    
                       id:0,
                       address:"supplier",
                       displayText:"Add Supplier"
                   },
                   {
                       id:1,
                       address:"viewSupplier",
                       displayText:"View Supplier"
                   }
               ]
   }
    },
    methods:{
    
      visibleFormCrudUpdate(state){
          this.visibleFormCrud = state;
                        
      },
      showDetail(id){
         
          const sb = (this.items.filter(item=>item.SupplierID == id))
        this.bankDetails = sb[0].sb;
        this.visibleFormCrud = true;
      },
       addBankVisibleCall(id){
           this.addBankVisible =  true;
           this.supplierAddBank = id;
       },
       addBank(){
            const data = {
                  "SupplierID":this.supplierAddBank,
                  "BankAccount":this.bankAccoutAdd,
                  "BankName":this.bankNameAdd
           }
           Supplier.addBankAccount(data).then(res=>{
               console.log(res["data"])
                    this.supplierAddBank='';
                  this.bankAccoutAdd='';
                  this.bankNameAdd ='';
                  this.addBankVisible = false;
              Supplier.getSuppliers().then(item=>{
                this.items = item["data"];            
            });
                    this.supplierAddBank = "";
                    this.bankAccoutAdd = "";
                    this.bankNameAdd = "";
               }).catch(err=>{
               alert(err.response.data.message);
           })
       },
       visibleBankUPdate(state){
           this.addBankVisible = state;
       }, editSupplierBankView(id ,spID ){   
           this.editSupplierBankVisible = true;
           this.visibleFormCrud = false;
           this.bankEditId = id;
           this.bankSupplierID = spID;
           const bnk = this.items.filter(item=>{return item.SupplierID == spID})[0].sb;
           this.editBankName = bnk.filter(bn=>{return bn.BankAccountID==id})[0].BankName;
           this.editBankNumber = bnk.filter(bn=>{return bn.BankAccountID==id})[0].BankAccountNumber;
        
       },
       EditBankVisible(state){
           this.editSupplierBankVisible  = state;
       },
       updateSupplierBank(){
           const data = {
             "BankAccountID": this.bankEditId,
             "BankAccountNumber": this.editBankNumber,
             "BankName": this.editBankName
           }
           Supplier.updateSupplierBank(data).then(res=>console.log(res)).catch(err=>alert(err.response.data.message));
            this.bankEditId="";
            this.editBankNumber="";
            this.editBankName="";
            this.editSupplierBankVisible=false;
       
       
       },editSupplierDetailsView(id){
           this.editSupplierVisible =true;
           this.editableSupplier = id;
           const editable = this.items.filter(item=>{return item.SupplierID == id})[0]
           this.editName =  editable.SupplierName;
           this.editAddress = editable.SupplierAddress;
           this.editTin = editable.SupplierTinNumber ;
           this.edtiPhone = editable.SupplierPhoneNumber;
        
       },
       closeEditSupplier(state){
        
        this.editSupplierVisible =state;

       }, updateSupplier(){
           const data = {
 "SupplierName":this.editName,
    "SupplierAddress":this.editAddress,
    "SupplierTinNumber":this.editTin,
    "SupplierPhoneNumber":this.editPhone,
    "SupplierID":this.editableSupplier
           }

        Supplier.updateSupplier(data).then(res=>{
           console.log(res["data"])
           this.editSupplierVisible = false;
           this.editableSupplier = "";
           this.editName =  "";
           this.editAddress = "";
           this.editTin = "";
           this.editPhone = "";
           Supplier.getSuppliers().then(item=>{
                this.items = item["data"];            
            });
        }).catch(err=>{
            alert(err.response.data.message)
        })
       
}        , removeSupplier(id){
             const data = {
                 "SupplierID":id
             }
            Supplier.removeSupplier(data).then(res=>console.log(res)).catch(err=>alert(err.response.data.message));
                this.items =  this.items.filter(itm=>{return itm.SupplierID != id});
                } ,
                removeSupplierBank(id){
                    Supplier.removeSupplierBank(id).then(res=>{
                        console.log(res["data"]);
                        this.bankDetails = this.bankDetails.filter(bnk=>{return bnk.BankAccountID != id});
                    }).catch(err=>alert(err.response.data.message))
                }
    
        },
        created(){
       
            
            Supplier.getSuppliers().then(item=>{
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