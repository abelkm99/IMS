<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
         <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Supplier
                    </h3>
                </legend>
               <form @submit.prevent="addSupplier">
                
               <input v-model="supplierName" type="text" class="txt-input" placeholder="Supplier Name">
    
               <input v-model="supplierAddress" type="text" class="txt-input" placeholder="Supplier Address">

               <input v-model="supplierTinNumber"  type="text" class="txt-input" placeholder="Supplier Tin Number">  
  
                <input v-model="supplierPhoneNumber" type="text" class="txt-input" placeholder="Supplier Phone Number">           
 
                <input v-model="supplierBankName" type="text" class="txt-input" placeholder="Supplier Bank Name">           
 
                <input v-model="supplierBankAccountNumber" type="text" class="txt-input" placeholder="Supplier Bank Account Number">           

              <button type="submit" class="btn-submit">Add</button>
               </form>
           
            </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import Supplier from  "@/api_calls/Supplier.js";

export default {
name:"AddSupplier",
components:{
    SubHeaderControl
} ,
data(){
    return{    
        supplierName:'',
        supplierAddress:'',
        supplierTinNumber:'',
        supplierPhoneNumber:'',
        supplierBankName:'',
        supplierBankAccountNumber:'',

        links:[
        {
            id:0,
            address:"supplier",
            displayText:"Add Supplier"
        },{
            id:1,
            address:"viewSupplier",
            displayText:"Suppliers"
        }
    ]
}},methods:{
   
    addSupplier(){
         const data  = {
    "SupplierName":this.supplierName,
    "SupplierAddress":this.supplierAddress,
    "SupplierTinNumber":this.supplierTinNumber,
    "SupplierPhoneNumber":this.supplierPhoneNumber,
    "BankAccountNumber":this.supplierBankAccountNumber,
    "BankName":this.supplierBankName,
    } 
  
    Supplier.addSupplier(data).then(res=>console.log(res)).catch(err=>console.log(err));

    }

}
}
</script>
<style >

</style>