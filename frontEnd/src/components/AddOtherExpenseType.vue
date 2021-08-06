<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
        <!-- edit pop up -->
            <vue-window-modal :active="editVisible" title="Update Other expense" v-on:clickClose="editVisibleUpdate(false)" style="width:auto;height:auto;">
                    <form @submit.prevent="updateExpenseType">
                    <table class="view-itmes">
                        <tr class="view-items-header">
                            <th>
                                Expense Type
                            </th>
                            <th>
                                Expense Descritpion
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" v-model="editType" placeholder="Expense Type">
                            </td>
                            <td>
                                <input type="text" v-model="editDescription" placeholder="Expense Description">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn-submit">
                                    Confirm
                                </button>
                            </td>
                        </tr>
                    </table>
                    </form>
            </vue-window-modal>
        <!-- /edit pop up -->
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
              <input v-model="OEType"  type="text" class="txt-input" placeholder="EXPENSE TYPE" required/>
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
                            Change
                            </th> 
                          
                        </tr>
                      <tr  :name="x.OEID" v-bind:key="index" v-for="(x,index) in items">  
                          <td>{{x.OEType}}</td>
                          <td>{{x.OEDescription}}</td>
                          <td>{{x.OEID}}</td>
                          <td> <button  @click="editFormView(x.OEID)"  class="btn-submit-mini"> <i class="fas fa-edit"></i> </button> <button class="btn-err" @click="removeOtherExpenseType(x.OEID)"><i class="fas fa-trash-alt">
                              </i></button></td>
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
        editType:'',
        editVisible:false,
        editDescription:'',
        OEType:'',
        OEDescription:'',
        editableType:'',
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
removeOtherExpenseType(id){
   
    Expenses.removeOtherExpenseType(id).then(res=>{
        this.items=this.items.filter(item=>{return item.OEID != id});
        console.log(res);
    }).catch(err=>{alert(err.response.data.message)});
},
editFormView(id){
    this.editVisible = true;
    this.editableType = id;
        const dt = this.items.filter(item=>{return item.OEID == id})[0]
        this.editType = dt.OEType;
        this.editDescription = dt.OEDescription;
},editVisibleUpdate(state){
    this.editVisible = state;
},
updateExpenseType(){
    const data  = {
"OEType":this.editType,
    "OEDescription":this.editDescription,
    "OEID":this.editableType
    }
    Expenses.updateExpenseType(data).then(res=>{
        console.log(res["data"])
            this.editType = '';
        this.editDescription = '';
        this.editableType = '';
        this.editVisible = false;
        this.getOtherExpenseType();
    }).catch(err=>{
        alert(err.response.data.message);
    })
}
},
created(){
this.getOtherExpenseType();
}
}
</script>
<style >

</style>