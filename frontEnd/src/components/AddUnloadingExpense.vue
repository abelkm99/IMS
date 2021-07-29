<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
               <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Unloading Expense
                    </h3>
                </legend>
                <form action="" @submit.prevent="addUnloadingExpense">

       <label for="expenseType">
                    <h3>
                 GRNNO
                    </h3>
                    </label>
              <input v-model="GRNNO"  type="number" class="txt-input" placeholder="GRN NUMBER" required/>
              <label for="Date">
                    <h3>
                     Date
                    </h3>
                    </label>
                    <input v-model="unloadingDate" type="date" class="txt-input" required/>
              
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
                                GRNNO
                            </th>
                            <th>
                                X
                            </th> 
                          
                        </tr>
                      <tr  :name="x.UNLoadID" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{x.Date}}</td>
                          <td>{{x.Cost}}</td>
                          <td>{{x.GRNNO}}</td>
                          <td> <button class="btn-del" @click="removeUnloadingExpense($event)">X</button></td>
                   
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
name:"AddLoadingExpense",
components:{
    SubHeaderControl
} ,
data(){
    return{   
        items:[],
        unloadingDate:'',
        Cost:'',
        GRNNO:'',
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
getUnloadingExpense(){
    Expenses.getUnloadingExpense().then(res=>{
       console.log(res);
       this.items = res["data"];
    })
},
addUnloadingExpense(){
    const data = {
        "Date":this.unloadingDate,
    "Cost":this.Cost,
    "GRNNO":this.GRNNO
    };
    Expenses.addUnloadingExpense(data).then(res=>{
     this.items.push(data);   
     console.los(res);
    }).catch(err=>{
        console.log(err.response);
        alert(err.response.data.message)});

},
removeUnloadingExpense(e){
    const id= e.target.parentNode.parentNode.getAttribute("name");
    Expenses.removeUnloadingExpense(id).then(res=>{
        this.items=this.items.filter(item=>{return item.UNLoadID != id});
        console.log(res);
    }).catch(err=>console.log(err));
}
},
created(){
this.getUnloadingExpense();
}
}
</script>
<style >

</style>