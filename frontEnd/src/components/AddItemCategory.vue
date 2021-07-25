<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>  
        <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Category
                    </h3>
                </legend>
                    <form @submit.prevent="addCategory">

                    <input v-model="categoryName" type="text" class="txt-input" placeholder="Category Name">
       
               
              
              <button type="submit" class="btn-submit">Add</button>
             </form>
            </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import Categories from "@/api_calls/Category.js";
export default {
    name:"AddEmployees",
    components:{
        SubHeaderControl
    },
    data(){
        return{
            categoryName:'',
           
           links:
               [
                   {    
                       id:0,
                       address:"itemCategory",
                       displayText:"Add Category"
                   },
                   {
                    id:1,
                    address:"viewCategory",
                    displayText:"Categories"
                   }
               ]
           
        }
    },methods:{
        addCategory(){
             
            const data = {
        
            "CategoryName": this.categoryName.toUpperCase(),
    
            }
           console.log(data);
            Categories.addCategory(data).then(res=>console.log(res)).catch(err=>console.log(err));
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