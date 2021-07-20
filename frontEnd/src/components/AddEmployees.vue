<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>  
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
                       address:"addEmployees",
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
<style lang="">
    
</style>