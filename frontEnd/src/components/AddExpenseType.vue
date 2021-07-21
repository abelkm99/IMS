<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
         <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Expense type
                    </h3>
                </legend>
               
              <input v-model="typeName" type="text" class="txt-input" placeholder="Expense Type Name">
    
             
              <button class="btn-submit">Add</button>
            </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";

export default {
name:"AddDeriver",
components:{
    SubHeaderControl
} ,
data(){
    return{  
        
        expenseType:'',
        links:[
        {
            id:0,
            address:"expenses",
            displayText:"Add Expenses"
        },{
            id:1,
            address:"viewExpenses",
            displayText:"Expenses"
        },{
            id:2,
            address:"addType",
            displayText:"Add Type"
        }
    ]
}}
}
</script>
<style >

</style>