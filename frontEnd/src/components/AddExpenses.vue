<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
               <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Expenses
                    </h3>
                </legend>
                <label for="expenseType">
                    <h3>
                  Expense type
                    </h3>
                    </label>
              <select v-model="expensesType" type="text" class="txt-input" placeholder="Employee Name">
              <option value="1">Type 1</option>
              <option value="2">Type 2</option>
              <option value="1">Type 3</option>

              </select>
              <label for="dueDate">
                    <h3>
                     Due Date
                    </h3>
                    </label>
                 <input v-model="DueDate" type="date" class="txt-input" placeholder="****">
              
                   <label for="dueDate">
                    <h3>
                     Cost
                    </h3>
                    </label>
            
              <input type="number" class="txt-input">
              <button class="btn-submit">Add</button>
            </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";

export default {
name:"AddExpenses",
components:{
    SubHeaderControl
} ,
data(){
    return{    links:[
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