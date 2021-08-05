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
                <form action="" @submit.prevent="addBillType">
             
              <label for="Date">
                    <h3>
                     Bill Type
                    </h3>
                    </label>
                    <input v-model="billType" type="text" class="txt-input" required/>
              
                    <label for="Cost">
                    <h3>
                    Description
                    </h3>
                    </label>
                    <input v-model="Description" type="text" class="txt-input" placeholder="Description" requried/>
              
                    <button type="submit"  class="btn-submit">Add</button>
                </form>
         
           
            </fieldset>
            <fieldset class="view-items-container">
                    <legend> <h3> Expenses </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                Bill Type
                            </th>
                            <th>
                               Description
                            </th>
                      
                            <th>
                                X
                            </th> 
                          
                        </tr>
                      <tr  :name="x.BID" v-bind:key="x.BID" v-for="(x) in billTypes">  
                          <td>
                              {{getBillName(x.BID)}}
                          </td>
                          <td>{{x.BillDescription}}</td>
            
                          <td> <button class="btn-del" @click="removeBillType($event)">X</button></td>
                   
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
        Description:'',
        BID:'',
        items:[],
        billDate:'',
        billType:'',
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
 
addBillType(){
    const data = {
    "BILLType":this.billType,
    "BILLDescription":this.Description,
 
    };
    Bill.addBillType(data).then(res=>{
     this.billTypes.push(data);   
     console.los(res);
    }).catch(err=>{
        console.log(err.response);
        alert(err.response.data.message)});

},
removeBillType(e){
    const id= e.target.parentNode.parentNode.getAttribute("name");
    Bill.removeBillType(id).then(res=>{
        this.billTypes = this.billTypes.filter(item=>{return item.BID != id});
        console.log(res);
    }).catch(err=>alert(err.response.data.message));
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