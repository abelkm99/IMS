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
               
              <input v-model="supplierName" type="text" class="txt-input" placeholder="Supplier Name">
    
               <input v-model="supplierAddress" type="text" class="txt-input" placeholder="Supplier Address">

               <input v-model="supplierTinNumber"  type="text" class="txt-input" placeholder="Supplier Tin Number">  
                <input v-model="supplierPhoneNumber" type="text" class="txt-input" placeholder="Supplier Phone Number">           
 
              <button class="btn-submit">Add</button>
            </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";

export default {
name:"AddSupplier",
components:{
    SubHeaderControl
} ,
data(){
    return{    links:[
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
}}
}
</script>
<style >

</style>