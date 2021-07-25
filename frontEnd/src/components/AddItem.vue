<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
                      <legend>
                          <h3>
                              Add Item
                        </h3>
                    </legend>
                  
                     <form  class="form-center" @submit.prevent="addItem($event)" ref="addForm">
                         <select v-model="catId" name="CategoryId" class="txt-input">
                             <option :key="x.CategoryId" v-for="(x) in CategoryNames" :value="x.CategoryId">{{x.CategoryName}}</option>
                         </select>
                         <input v-model="ItemCode" type="text" class="txt-input" name="ItemCode" placeholder="Enter The item code">
                         <input v-model="ItemType" type="text" class="txt-input"  name="ItemType" placeholder="Enter The item type">
                        <input v-model="PPP" type="number" class="txt-input" name="PPP" placeholder="Enter the PPP">
                        <button type="submit" class="btn-submit">Add</button>
                     </form>
                     
    
                  </fieldset>
    
                </div>
            </div>
            
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import  Categories from "@/api_calls/Category.js";
import Items from "@/api_calls/Items.js";

console.log(Categories);
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
                    catId:'',
                    ItemCode:'',
                    ItemType:'',
                    PPP:'' ,
      CategoryNames:[],
       links:
               [
                   {    
                       id:0,
                       address:"item",
                       displayText:"Add Item"
                   },
                   {
                    id:1,
                    address:"viewItem",
                    displayText:"Items",
                 
                   }
               ]
   }
    },

    methods:{
        addItem(){

      const data = {
            "CategoryID":this.catId,
            "ItemCode":this.ItemCode,
            "ItemType":this.ItemType,
            "PPP":this.PPP
      }

      
        Items.addItem(data).then(res=>console.log(res));

      
 
        },getCategoryNames(){
    
         Categories.getCategories().then(item=>{

        this.CategoryNames = item["data"]; 
 
        
         }).catch(err=>console.log(err));
        
        }
    
    
    
 
 
        }
        ,
        created(){
            
            this.getCategoryNames();
      
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