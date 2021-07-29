<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
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
                                X
                            </th> 
                          
                        </tr>
                      <tr  :name="x.MasatefiyaID" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{x.Date}}</td>
                          <td>{{x.Cost}}</td>
                          <td>{{x.REFNO}}</td>
                          <td> <button class="btn-del" @click="removeMasatefiyaExpense($event)">X</button></td>
                   
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
        this.items=this.items.filter(item=>{return item.MasatefiyaID != id});
        console.log(res);
    }).catch(err=>console.log(err));
}
},
created(){
this.getMasatefiyaExpense();
}
}
</script>
<style >

</style>