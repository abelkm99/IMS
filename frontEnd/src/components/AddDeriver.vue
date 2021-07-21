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
               
              <input v-model="dervierName" type="text" class="txt-input" placeholder="Deriver Name">
    
               <input v-model="deriverPhone" type="text" class="txt-input" placeholder="Deriver Address">
                
               <input v-model="deriverPlateNumber"  type="text" class="txt-input" placeholder="Deriver plate Number">  
 
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
    return{    links:[
        {
            id:0,
            address:"deriver",
            displayText:"Add Deriver"
        },{
            id:1,
            address:"viewDeriver",
            displayText:"Derivers"
        }
    ]
}}
}
</script>
<style >

</style>