<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>  
        <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Employees
                    </h3>
                </legend>
       
              <input v-model="employeeName" type="text" class="txt-input" placeholder="Employee Name">
            
                 <input type="password" class="txt-input" placeholder="****">
              
                 <input name="employePhone" type="text" class="txt-input" placeholder="employee Phone Number">
            
              <input type="text" class="txt-input" placeholder="Employee Address">
              <button class="btn-submit">Add</button>
            </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
export default {
    name:"AddEmployees",
    components:{
        SubHeaderControl
    },
    data(){
        return{
           links:
               [
                   {    
                       id:0,
                       address:"employees",
                       displayText:"Add Employees"
                   },
                   {
                    id:1,
                    address:"viewEmployees",
                    displayText:"viewEmployees"
                   }
               ]
           
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