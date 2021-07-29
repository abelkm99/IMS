<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
               <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Other Expense Type
                    </h3>
                </legend>
                <form     @submit.prevent="addOtherExpenseType">

       <label for="expenseType">
                    <h3>
                      Expense Type
                    </h3>
                    </label>
              <input v-model="OEType"  type="text" class="txt-input" placeholder="REFERENCE NUMBER" required/>
              <label for="Date">
                    <h3>
                     Description
                    </h3>
                    </label>
                    <input v-model="OEDescription" type="text" class="txt-input"  placeholder="Description" required/>
              
            
                    <button type="submit"  class="btn-submit">Add</button>
                </form>
         
           
            </fieldset>
            <fieldset class="view-items-container">
                    <legend> <h3> Expense Types </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Expense type
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                ID
                            </th>
                            <th>
                                X
                            </th> 
                          
                        </tr>
                      <tr  :name="x.OEID" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{x.OEType}}</td>
                          <td>{{x.OEDescription}}</td>
                          <td>{{x.OEID}}</td>
                          <td> <button class="btn-del" @click="removeOtherExpenseType($event)">X</button></td>
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
name:"addOtherExpenseType",
components:{
    SubHeaderControl
} ,
data(){
    return{   
        items:[],
        OEType:'',
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
getOtherExpenseType(){
    Expenses.getOtherExpenseType().then(res=>{
       console.log(res);
       this.items = res["data"];
    })
},
addOtherExpenseType(){
    const data = {
    "OEType":this.OEType,
    "OEDescription":this.OEDescription
    };
    Expenses.addOtherExpenseType(data).then(res=>{
     this.items.push(data);   
     console.los(res);
    }).catch(err=>{
        console.log(err.response);
        alert(err.response.data.message)});

},
removeOtherExpenseType(e){
    const id= e.target.parentNode.parentNode.getAttribute("name");
    Expenses.removeOtherExpenseType(id).then(res=>{
        this.items=this.items.filter(item=>{return item.OEID != id});
        console.log(res);
    }).catch(err=>console.log(err));
}
},
created(){
this.getOtherExpenseType();
}
}
</script>
<style >

</style>