<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
               <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Salary Expense
                    </h3>
                </legend>
                <form action="" @submit.prevent="addSalaryExpense">

       <label for="expenseType">
                    <h3>
                 Employee  
                    </h3>
                    </label>
                  
                    <select v-model="employeeID" class="txt-input">
                      
                        <option  :key="x.EmployeeID" v-for="x in EmployeeList" :value="x.EmployeeID">{{x.EmployeeName}}</option>
                    </select>
               
              <label for="Date">
                    <h3>
                     Date
                    </h3>
                    </label>
                    <input v-model="employeeDate" type="date" class="txt-input" required/>
              
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
                                Employee Name
                            </th>
                            <th>
                                X
                            </th> 
                          
                        </tr>
                      <tr  :name="x.SalaryID" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{x.Date}}</td>
                          <td>{{x.Cost}}</td>
                          <td>{{x.EmployeeName}}</td>
                          <td> <button class="btn-del" @click="removeSalaryExpense($event)">X</button></td>
                   
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
import Employees from "@/api_calls/Employees.js";
export default {
name:"AddLoadingExpense",
components:{
    SubHeaderControl
} ,
data(){
    return{   
        items:[],
        employeeDate:'',
        Cost:'',
        employeeID:'',
        EmployeeList:[],
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
getSalaryExpense(){
    Expenses.getSalaryExpense().then(res=>{
       console.log(res);
       this.items = res["data"];
    })
},
addSalaryExpense(){
    const data = {
     "Date":this.employeeDate,
    "Cost":this.Cost,
    "EmployeeID":this.employeeID
    };
    Expenses.addSalaryExpense(data).then(res=>{
     this.items.push(data);   
     console.los(res);
    }).catch(err=>{
        console.log(err.response);
        alert(err.response.data)});

},
removeSalaryExpense(e){
    const id= e.target.parentNode.parentNode.getAttribute("name");
    Expenses.removeSalaryExpense(id).then(res=>{
        this.items=this.items.filter(item=>{return item.SalaryID != id});
        console.log(res);
    }).catch(err=>console.log(err));
},
getEmployees(){
Employees.getEmployees().then(res=>{this.EmployeeList = res["data"];}
).catch(err=>{
    alert(err.response.message);
})
}, 

},
created(){
this.getSalaryExpense();
this.getEmployees();
}
}
</script>
<style >

</style>