<template>
    <div>
         
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                    <vue-window-modal :active="visibleAdd" title="Add Transaction" v-on:clickClose="visibleAddupdate(false)" style="width:auto;height:auto;">
                        <form @submit.prevent="addTransaction">
                        <label for="date">  <h3> Date </h3>  </label>
                        <input v-model="transactionDate" type="date" class="txt-input" required>
                        <label for="TransactionType"> <h3>  Transaction Type </h3> </label>
                        <select v-model="TransactionType" name="Transaction Type" class="txt-input">
                            <option value="1">  <h3> Deposit </h3>  </option>
                            <option value="2"> WithDraw</option>
                        </select>
                        <label for="amount"> <h3> Amount </h3> </label>
                        <input   v-model="Amount" type="number" class="txt-input" placeholder="Amount">
                        <button class="btn-submit" type="submit">
                            Add
                        </button>
                        </form> 
                    </vue-window-modal>
             <vue-window-modal  :active="visibleFormCrud"  title="Transaction Details"  v-on:clickClose="visibleFormCrudUpdate(false)" style="width:auto;height:auto;">  
            <table class="view-items">
                    <tr class="view-items-header">
                        <th>Date</th>
                        <th>Deposit</th>
                        <th>WithDraw</th>
                    </tr>
                    <tr :key="x.BankAccountID" v-for="x in bankDetails">
                           <td>
                            {{x.Date}}
                            </td>
                    
                            <td>
                                {{x.TransactionIN || "-"}} 
                            </td>
                          
                            <td>
                             {{x.TransactionOUT || "-"}}
                            </td>
                    </tr>

            </table>
             </vue-window-modal>
                <fieldset class="view-items-container">
                    <legend> <h3> Personnal Accounts </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Name  
                            </th>
                            <th>
                                 Bank Account
                            </th>
                            <th>
                                Transaction
                            </th>
                          
                        </tr>
                      <tr  :name="x.PBID" v-bind:key="x.PBID" v-for="(x) in BankAccounts">  
                          <td> {{x.BankName}}</td>
                          <td>{{x.AccountNumber}}</td>
                          <td><button class="btn-submit-mini" @click="showDetail(x.PBID)"> <i class="fa fa-eye" aria-hidden="true"></i></button><button class="btn-submit-mini" @click="addDetail(x.PBID)"> <i class="fa fa-plus" aria-hidden="true"></i></button></td>
                          <td><button class="btn-submit-mini" @click="showDetail(x.PBID)"> <i class="far fa-edit"></i></button><button class="btn-submit-mini err" @click="removeBank(x.PBID)"> <i class="fa fa-window-close" aria-hidden="true"></i></button></td>
                      
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
import BankAccounts from  "@/api_calls/BankAccounts.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
       Amount:'',
       TransactionType:'',
       transactionDate:'',
       visibleAdd:false,
       visibleFormCrud:false,
       tempTransactionID:'',
       BankAccounts:[],
       Transaction:[],
       "items":[],
       "bankDetails":[],
       links:
               [
                   {    
                       id:0,
                       address:"banks",
                       displayText:"My accounts"
                   },
                   {
                       id:1,
                       address:"addBank",
                       displayText:"Add Account"
                   }
               ]
   }
    },
    methods:{
    
      visibleFormCrudUpdate(state){
          this.visibleFormCrud = state;
                        
      },
      showDetail(id){
          
          const sb = (this.BankAccounts.filter(item=>item.PBID == id))
          this.bankDetails = sb[0].BankTransaction;
   console.log(this.bankDetails)
        this.visibleFormCrud = true;
      }, getMyAccounts(){
          BankAccounts.getAllPersonnalAccounts().then(res=>{
              this.BankAccounts = res["data"];
          })
      },
      visibleAddupdate(state){
          this.visibleAdd = state;
      },addDetail(id){ 
        this.tempTransactionID = id;
        this.visibleAdd = true;
      },addTransaction(){
          const data = {
    "PBID":this.tempTransactionID,
    "Amount":this.Amount,
    "TransactionType":this.TransactionType,
    "Date":this.transactionDate
          }
          BankAccounts.addTransaction(data).then(res=>{
              console.log(res)
              this.getMyAccounts();
          }).catch(err=>{
              alert(err.response.data.message);
          });
      },
      removeBank(id){
           const data = {
          "PBID":id
            }
            BankAccounts.removeBankAccount(data).then(res=>{
                
                console.log(res)
                this.BankAccounts = this.BankAccounts.filter(bank=>{return bank.PBID !=id});
                }).catch(err=>{
                alert(err.response.data.message);
            })
      }
        },
        created(){
       
            this.getMyAccounts();
           
        }
}
</script>
<style>
@import "../assets/css/all.css";
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
.btn-submit-mini{
    margin:5px;
    width:50px;
    height:50px;
    padding:5px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    color:white;
    background: rgb(11, 170, 96);
    font-size:20px;
}
.btn-err{
      margin:5px;
    width:50px;
    height:50px;
    padding:5px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    color:white;
    background: rgb(255, 0, 0);
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
.err{
    background:red !important;
}
</style>