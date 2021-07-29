<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
               <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Other Expense 
                    </h3>
                </legend>
                <form     @submit.prevent="addOtherExpense">

                  <label for="expenseType">
                    <h3>
                      Expense Type
                    </h3>
                    </label>
                    <select v-model="OEID" class="txt-input">
                        <option :key="x.OEID" v-for="x in OETypes" :value="x.OEID">
                            {{x.OEType}}
                        </option>
                    </select>
                    
              <label for="Date">
                    <h3>
                     date
                    </h3>
                    </label>
                    <input v-model="OEdate" type="date" class="txt-input"  placeholder="Description" required/>
              
                 <label for="cost">
                     Cost
                 </label>
                 <input v-model="Cost" type="number" class="txt-input" placeholder="Cost" requried/>
                    <button type="submit"  class="btn-submit">Add</button>
                </form>
         
           
            </fieldset>
            <fieldset class="view-items-container">
                    <legend> <h3> Other  Expenses </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Expense type
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Cost
                            </th>
                            <th>
                                X
                            </th> 
                          
                        </tr>
                      <tr  :name="x.OExpencesID" :key="index" v-for="(x,index) in items">  
                          <td>{{x.OtherExpencesTypes[0].OEType}}</td>
                          <td>{{x.Date}}</td>
                          <td>{{x.Cost}}</td>
                          <td> <button class="btn-del" @click="removeOtherExpense($event)">X</button></td>
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
name:"removeOtherExpense",
components:{
    SubHeaderControl
} ,
data(){
    return{   
        items:[],
        OETypes:[],
        OEType:'',
        OEID:'',
        Cost:'',
        OEdate:'',
        OEDescription:'',
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
getOtherExpense(){
    Expenses.getOtherExpense().then(res=>{
        this.items = res["data"];}).catch(err=>alert(err))
},
addOtherExpense(){
    const data = {
   "OEID":this.OEID,
    "Date":this.OEdate,
    "Cost":this.Cost
    };
    console.log(data);
    Expenses.addOtherExpense(data).then(res=>{
    window.location.reload();   
     console.los(res);
    }).catch(err=>{
        console.log(err.response);
        alert(err.response.data.message)});

},
removeOtherExpense(e){
    const id= e.target.parentNode.parentNode.getAttribute("name");
    Expenses.removeOtherExpense(id).then(res=>{
        this.items=this.items.filter(item=>{return item.OExpencesID != id});
        console.log(res);
    }).catch(err=>console.log(err));
},
getOtherTypes(){
    Expenses.getOtherExpenseType().then(res=>{
        this.OETypes = res["data"];
    })
}
},
created(){
this.getOtherExpense();
this.getOtherTypes();
}
}
</script>
<style >

</style>