<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>  
        <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Bank
                    </h3>
                </legend>
                    <form @submit.prevent="addBank">

                    <input v-model="BankName" type="text" class="txt-input" placeholder="Bank Name">
       
                    <input v-model="BankNumber" type="text" class="txt-input" placeholder="Account Number">
               
              
              <button type="submit" class="btn-submit">Add</button>
             </form>
            </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import BankAccounts from  "@/api_calls/BankAccounts.js";
export default {
    name:"AddEmployees",
    components:{
        SubHeaderControl
    },
    data(){
        return{
            BankName:'',
            BankNumber:'',
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
    },methods:{
      
        addBank(){
   const data = {
       "BankName":this.BankName,
       "AccountNumber":this.BankNumber
   }  
   BankAccounts.addPersonlaAccount(data).then(res=>{alert(res.response.data.message)}).catch(err=>{
       alert(err.response.data.message)
   })
        }
    }
    
}
</script>
<style scoped>
    .form-contain{
        text-align:left;
        font-weight:bolder;
    }
</style>