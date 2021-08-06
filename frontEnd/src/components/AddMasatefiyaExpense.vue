<template >
    <div class="router-view-container">
        
        <SubHeaderControl :links="links"/>
        <!-- masatefiya edit pop up -->
        <vue-window-modal :active="editVisible" title="update Masatefiya Expense" v-on:clickClose="updateEditVisible(false)" style="width:auto;height:auto;">

<form @submit.prevent="updateExpense">
<table class="view-items">
    <tr class="view-items-header">
        <th>
Date
        </th>
        <th>
Cost
        </th>
    </tr>
<tr>
    <td>
        <input type="date" v-model="editDate">
    </td>
    <td>
        <input type="text" v-model="editCost" placeholder="Cost">
    </td>
</tr>
<tr>
    <td>
        <button class="btn-submit" type="submit">
            Confirm
        </button>
    </td>
</tr>
</table>
</form>
        </vue-window-modal>

        <!-- /masatefiya edit pop up -->
               <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Expenses
                    </h3>
                </legend>
                <form     @submit.prevent="addMasatefiyaExpense">

       <label for="expenseType">
                    <h3>
                      REFNO
                    </h3>
                    </label>
              <input v-model="REFNO"  type="number" class="txt-input" placeholder="REFERENCE NUMBER" required/>
              <label for="Date">
                    <h3>
                     Date
                    </h3>
                    </label>
                    <input v-model="masatefiyaDate" type="date" class="txt-input" required/>
              
                    <label for="Cost">
                    <h3>
                    Cost
                    </h3>
                    </label>
                    <input v-model="Cost" type="number" class="txt-input" placeholder="cost" requried/>
              
                    <button type="submit"  class="btn-submit">Add</button>
                </form>
         
           
            </fieldset>
            <fieldset class="view-items-container">
                    <legend> <h3> Expenses </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Date
                            </th>
                            <th>
                                Cost
                            </th>
                            <th>
                                REFNO
                            </th>
                            <th>
                             Change
                            </th> 
                          
                        </tr>
                      <tr  :name="x.MID" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{x.Date}}</td>
                          <td>{{x.Cost}}</td>
                          <td>{{x.REFNO}}</td>
                          <td> <button  @click="updateExpenseView(x.MID,x.REFNO)" class="btn-submit-mini"><i class="fas fa-edit"></i></button>  <button class="btn-err" @click="removeMasatefiyaExpense($event)"><i class="fas fa-trash-alt"></i></button></td>
                   
                      </tr>
                    </table>
                </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import Expenses from "@/api_calls/Expenses.js";
export default {
name:"addMasatefiyaExpense",
components:{
    SubHeaderControl
} ,
data(){
    return{   
        items:[],
        editableExpense:'',
        editableRef:'',
        editVisible:false,
        editDate:'',
        editCost:'',
        masatefiyaDate:'',
        Cost:'',
        REFNO:'',
        links:[
        {
            id:0,
            address:"expenses",
            displayText:"Loading"
        },{
            id:1,
            address:"unloadingExpense",
            displayText:"Unloading"
        },{
            id:2,
            address:"salaryExpense",
            displayText:"Salary"
        },{
            id:3,
            address:"masatefiyaExpense",
            displayText:"Masatefiya"
        },{
            id:4,
            address:"otherExpenseType",
            displayText:"Type"
        },{
                id:5,
                address:"otherExpense",
                displayText:"Other"
            }
    ]
}},
methods:{
getMasatefiyaExpense(){
    Expenses.getMasatefiyaExpense().then(res=>{
       this.items = res["data"];
    })
},
addMasatefiyaExpense(){
    const data = {
         "Date":this.masatefiyaDate,
         "Cost":this.Cost,
         "REFNO":this.REFNO
    };
    Expenses.addMasatefiyaExpense(data).then(res=>{
     this.items.push(data);
     console.log(res);
  
    }).catch(err=>{
        console.log(err);
        alert(err.response.data.message)});

},
removeMasatefiyaExpense(e){
    const id= e.target.parentNode.parentNode.getAttribute("name");
    Expenses.removeMasatefiyaExpense(id).then(res=>{
        this.items=this.items.filter(item=>{return item.MID != id});
        console.log(res);
    }).catch(err=>console.log(err));
},
updateExpenseView(id,rfno){
 
this.editVisible  = true;
this.editableExpense = id;
this.editableRef = rfno;
const dt = this.items.filter(item=>{return item.MID == id})[0];
this.editDate = dt.Date;
this.editCost = dt.Cost;
},
updateEditVisible(state){
    this.editVisible = state;
},updateExpense(){
    const data = {
 "Date":this.editDate,
    "Cost":this.editCost,
    "REFNO":this.editableRef,
    "MID":this.editableExpense
    }
    Expenses.updateMasatefiyaExpense(data).then(res=>{
        console.log(res["data"])
        this.getMasatefiyaExpense();
        this.editVisible = false;
    }).catch(err=>{
        alert(err.response.data.message)
    })
}
},
created(){
this.getMasatefiyaExpense();
}
}
</script>
<style >

</style>