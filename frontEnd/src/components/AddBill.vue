<template >
    <div class="router-view-container">
        <SubHeaderControl :links="links"/>
               <div class="router-view">
            <div class="add-purchase">
         <fieldset class="form-contain">
                <legend>
                    <h3>
                        Add Bill Expense
                    </h3>
                </legend>
                <form action="" @submit.prevent="addBillExpense">

       <label for="expenseType">
                    <h3>
                    Bill Type
                    </h3>
                    </label>
                    <select v-model="BID" name="" id="" class="txt-input">
                        <option   :key="x.BID" :value="x.BID" v-for="x in billTypes">{{x.BILLType}}</option>
                    </select>
             
              <label for="Date">
                    <h3>
                     Date
                    </h3>
                    </label>
                    <input v-model="billDate" type="date" class="txt-input" required/>
              
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
                                GRTypeNNO
                            </th>
                            <th>
                                X
                            </th> 
                          
                        </tr>
                      <tr  :name="x.BILLEXPENCEID" v-bind:key="x.BID" v-for="(x) in billExpenses">  
                          <td>
                              {{getBillName(x.BID)}}
                          </td>
                          <td>{{x.Date}}</td>
                          <td>{{x.Cost}}</td>
            
                          <td> <button class="btn-del" @click="removeBillExpense($event)">X</button></td>
                   
                      </tr>
                    </table>
                </fieldset>
            </div>
         
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import Bill from "@/api_calls/Bills.js";
export default {
name:"AddLoadingExpense",
components:{
    SubHeaderControl
} ,
data(){
    return{   
        BID:'',
        items:[],
        billDate:'',
        billTypes:[],
        billExpenses:[],
       Cost:'',
        GRNNO:'',
        
        links:[
        {
            id:0,
            address:"bill",
            displayText:"Bill"
        },{
            id:1,
            address:"billTypes",
            displayText:"Bill Types"
        }
    ]
}},
methods:{
 
addBillExpense(){
    const data = {
    "BID":this.BID,
    "Date":this.billDate,
    "Cost":this.Cost
    };
    Bill.addBillExpense(data).then(res=>{
     this.billExpenses.push(data);   
     console.los(res);
    }).catch(err=>{
        console.log(err.response);
        alert(err.response.data.message)});

},
removeBillExpense(e){
    const id= e.target.parentNode.parentNode.getAttribute("name");
    Bill.removeBillExpense(id).then(res=>{
        this.billExpenses = this.billExpenses.filter(item=>{return item.BILLEXPENCEID != id});
        console.log(res);
    }).catch(err=>console.log(err));
}, getAllBillTypes(){
    Bill.getAllBillTypes().then(res=>{
        this.billTypes = res["data"];
    })
},
getAllExpenseList(){
    Bill.getAllExpenseList().then(res=>{
        this.billExpenses =  res["data"];
    })
}, getBillName(id){
    for(const x in this.billTypes){
        if(this.billTypes[x].BID == id){
            return this.billTypes[x].BILLType;
        }
    }
}
},
created(){
this.getAllBillTypes();
this.getAllExpenseList();
}
}
</script>
<style >

</style>