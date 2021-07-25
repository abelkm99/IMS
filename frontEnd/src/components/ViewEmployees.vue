<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
 
                <fieldset class="view-items-container">
                    <legend> <h3> Employees </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Name  
                            </th>
                            <th>
                                 Password
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Address
                            </th>
                        

                          
                        </tr>
                      <tr  :name="x.CategoryID" v-bind:key="index" v-for="(x,index) in items">  
                          <td> {{x.EmployeeName}}</td>
                          <td>{{x.EmployeePassword}}</td>
                          <td>{{x.EmployeePhoneNumber}}</td>
                          <td>{{x.EmployeeAddress}}</td>
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
import Employees from "@/api_calls/Employees.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
       "items":[],
       links:
               [
                   {    
                       id:0,
                       address:"employees",
                       displayText:"Add Employee"
                   },
                   {
                    id:1,
                    address:"viewEmployee",
                    displayText:"Employees"
                   }
               ]
   }
    },
    methods:{
    
      
    
        },
        created(){
            console.log("here")
            
            Employees.getEmployees().then(item=>{
                this.items = item["data"];
                
                
            });
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