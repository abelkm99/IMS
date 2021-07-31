<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
 
                <fieldset class="view-items-container">
                    <legend> <h3> Drivers </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Name  
                            </th>
                            <th>
                                 Phone
                            </th>
                            <th>
                                Plate
                            </th>
                            <th>
                                X
                            </th>
                        

                          
                        </tr>
                      <tr  :name="x.DriverID" v-bind:key="index" v-for="(x,index) in items">  
                          <td> {{x.DriverName}}</td>
                          <td>{{x.DriverPhoneNumber}}</td>
                          <td>{{x.DriverPlate}}</td>
                          <td> <button class="btn-del" @click="removeDriver($event)">X</button></td>

                          <!-- <td>{{x.EmployeeAddress}}</td> -->
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
import Driver from "@/api_calls/Driver.js";
export default {
    name:"AddPurchase",
    components:{
        SubHeaderControl
    },
    data(){
   return {
         "DriverName": "",
        "DriverPhoneNumber": "",
        "DriverPlate": "",
       "items":[],
       links:
               [
                   {    
                       id:0,
                       address:"driver",
                       displayText:"Add Driver"
                   },
                   {
                    id:1,
                    address:"viewDriver",
                    displayText:"Drivers"
                   }
               ]
   }
    },
    methods:{
    
      
    
        },
        created(){
            console.log("here")
            
            Driver.getDrivers().then(item=>{
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