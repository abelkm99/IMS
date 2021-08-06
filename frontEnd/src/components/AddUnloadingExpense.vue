<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
               <!-- update unload pop up -->
               <vue-window-modal  :active="editUnloadVisible" title="Update Unloading Expense" v-on:clickClose="updateUnloadVisible(false)" style="width:auto;height:auto;">
                   <form @submit.prevent="updateUnloadingExpense">
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
                        <input  v-model="editDate" type="date" placeholder="Date">
                    </td>
                    <td>
                        <input  v-model="editCost" type="number" min="0" placeholder="Cost" required/>
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
               <!-- /update unload pop up -->
               
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
                               Change
                            </th> 
                          
                        </tr>
                      <tr  :name="x.UNLoadID" v-bind:key="x.UNLoadID" v-for="x in items">  
                          <td>{{x.Date}}</td>
                          <td>{{x.Cost}}</td>
                          <td>{{x.GRNNO}}</td>
                          <td>  <button  @click="updateUnloadView(x.UNLoadID,x.GRNNO)" class="btn-submit-mini"> <i class="fas fa-edit"></i> </button>  <button class="btn-err" @click="removeUnloadingExpense($event)"><i class="fas fa-trash-alt"></i></button></td>
                   
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
        editCost:'',
        editDate:'',
        editUnloadVisible:false,
        items:[],
        unloadingDate:'',
        Cost:'',
        GRNNO:'',
        editableUnload:'',
        editGRN:'',
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
    "GRNNO":this.GRNNO,
  
    };
    Expenses.addUnloadingExpense(data).then(res=>{
     this.getUnloadingExpense();
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
    }).catch(err=>alert(err.response.data.message));
},
updateUnloadView(id,GRN){
  
this.editableUnload = id;
this.editUnloadVisible = true;
this.editGRN = GRN;
const dt = this.items.filter(item=>{return item.UNLoadID == id})[0]
this.editDate = dt.Date;
this.editCost = dt.Cost;
},
updateUnloadingExpense(){
  const data = {
    "Date":this.editDate,
    "Cost":this.editCost,
    "GRNNO":this.editGRN,
    "UnLoadID":this.editableUnload
}
Expenses.updateUnloadingExpense(data).then(res=>{
    console.log(res["data"])
    this.getUnloadingExpense();
    this.editUnloadVisible = false;
    }).catch(
        err=>alert(err.response.data.message)
    )
},updateUnloadVisible(state){
    this.editUnloadVisible  = state;
}
},
created(){
this.getUnloadingExpense();
}
}
</script>
<style >

</style>