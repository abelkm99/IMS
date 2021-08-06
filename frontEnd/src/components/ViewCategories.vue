<template>
    <div>
        <div class="router-view-container">
            <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
 <!-- update Catefory pop up -->
<vue-window-modal :active="editCategoryVisible"  title="Update Category Detail" v-on:clickClose="editCatUpdate(false)" style="width:auto;height:auto;"> 
<form @submit.prevent="updateCategory" >
<table class="view-items">
    <tr class="view-items-header">
        <th>
            Category Name
        </th>
    </tr>
    <tr>
        <td>
            <input type="text" v-model="editCategory"  placeholder="Category" required/>
        </td>
    </tr>
    <tr>
        <button class="btn-submit" type="submit">
            Confirm 
        </button>
    </tr>
</table>
</form>
</vue-window-modal>

<!-- /update category pop up -->

                <fieldset class="view-items-container">
                    <legend> <h3> Categories </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                CategoryID  
                            </th>
                            <th>
                                 Category Name
                            </th>
                       
                           <th>
                             Change
                           </th>

                          
                        </tr>
                      <tr  :name="x.CategoryId" v-bind:key="index" v-for="(x,index) in items">  
                          <td> {{x.CategoryId}}</td>
                          <td>{{x.CategoryName}}</td>
                      <td>   <button  @click="updateCategoryView(x.CategoryId)" class="btn-submit-mini"> <i class="fas fa-edit"></i> </button> <button class="btn-err" @click="removeCategory(x.CategoryId)"> <i class="fas fa-trash-alt"></i></button></td>

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
import Categories from "@/api_calls/Category.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
       "items":[],
       editCategoryVisible:false,
       editableCat:'',
       editCategory:'',
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
    },
    methods:{
      getCategories(){
           Categories.getCategories().then(item=>{
                this.items = item["data"];
                
                
            });
      },
      updateCategoryView(id){
          this.editCategoryVisible = true;
          this.editableCat = id;
      
         
      },updateCategory(){
          const data = {
    "CategoryName":this.editCategory,
    "CategoryId":this.editableCat
}
Categories.updateCategory(data).then(res=>{
    console.log(res["data"])
    this.getCategories();
    this.editCategoryVisible = false;
}).catch(err=>{
    alert(err.response.data.message);
})
      },editCatUpdate(state){
          this.editCategoryVisible = state;
      },
      removeCategory(id){
          const data = {
            "CategoryId":id
        }
          Categories.removeCategory(data).then(res=>{
              this.items = this.items.filter(item=>{
                  return item.CategoryId != id
              })
              console.log(res["data"]);
              }).catch(err=>{
              alert(err.response.data.message);
          })
      }
        },
        created(){
            console.log("here")
            this.getCategories();
           
        }
}
</script>
<style>
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
.btn-submit{
    margin:10px;
    width:120px;
    padding:15px;
    border:none;
    border-radius:15px;
    cursor:pointer;
    color:white;
    background: rgb(11, 170, 96);
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
</style>