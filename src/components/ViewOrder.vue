<template>
    <div>
            <div class="router-view-container">
                <SubHeaderControl :links="links"/>
            <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
                      <legend>
                          <h3>
                              Search Purchase
                        </h3>
                    </legend>
                    <table>
                
                        <tr>
                            <td>  <label for="supplier"> <h3>Supplier</h3></label>
                                <select name="supplier" id="" class="txt-input">
                                    <option value="Girma">Girma</option>
                                    <option value="Girma">Girma</option>
                                    <option value="">Girma</option>
                                    <option value="">Girma</option>
            
                                </select></td> 
                            <td>
                                <label for="purchaseType"> <h3>Order type</h3></label>
                                <select name="purchaseType" id="" class="txt-input">
                                    <option value="Cash">cash</option>
                                    <option value="Credit">Credit</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                         <td>
                            <label for="purchaseDate"> <h3> Order Date </h3></label>
                            <input type="date" class="txt-input" name="purchaseDate" placeholder="GRN NO"  ></td>
                         <td>  <label for="purchaseDate"> <h3> Delivery Date </h3></label>
                            <input type="date" class="txt-input" name="deliveryDate"></td>
                        </tr>
                
                        <tr>
                            <td>
                                  <label for="purchaseType"> <h3>Order From</h3></label>
                                <select name="purchaseType" id="" class="txt-input">
                                    <option value="ME">ME</option>
                                    <option value="Customers">Customers</option>
                                </select>
                            </td>
                        </tr>
                 
              
                    </table>
                     
                     
           
                  </fieldset>
                <fieldset class="view-items-container">
                    <legend> <h3> Items List </h3></legend>
                    <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                                GRN Number
                            </th>
                            <th>
                                Item Code
                            </th>
                            <th>
                                Item Type
                            </th>
                            <th>
                                Item Quantity
                            </th>
                            <th>
                                Price Per Quantity
                            </th>
                            <th>
                                Purchase Type
                            </th>
                            <th>
                                X
                            </th>
                        </tr>
                  
                          <tr @click="viewWithId">
                         <td>1</td>
                         <td>2</td>
                         <td>3</td>
                         <td>4</td>
                         <td>4</td>
                         <td>5</td>
                         <td>5</td>
                       </tr>  
            <vue-window-modal  :active="visibleFormCrud"  title="Loaded data"  v-on:clickClose="visibleFormCrudUpdate(false)">  
                details for crudgo here
            </vue-window-modal>
                    </table>
                </fieldset>
                </div>
            </div>
            
        </div>
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
export default {
    name:"ViewOrder",
    components:{
        SubHeaderControl
    },
    methods:{
        viewWithId(){
          this.visibleFormCrud=true
        },
        visibleFormCrudUpdate(status){
            this.visibleFormCrud=status;
        }
    }
    ,
    data(){
        return {
    links:
               [
                   {    
                       id:0,
                       address:"makeOrder",
                       displayText:"Make Order"
                   },
                   {
                    id:1,
                    address:"addOrder",
                    displayText:"Add Order"
                   },{
                       id:2,
                       address:"viewOrder",
                       displayText:"Orders"
                   }
               ]
,
visibleFormCrud:false
        }
    }
}
</script>
<style>
    .router-view-container{
    padding:20px;
    background: #eee;
    width:100%;
    height:auto;
}
.router-view-nav a{
color:black;
text-decoration:none;
font-size:20px;
}
.router-view-nav{
    /* display: grid;
    place-items:center; */
}
.router-view-nav li{
    list-style: none;
    display: inline;
    background: rgb(11, 170, 96);
    color:white;
    padding:15px;
    text-align:center;
    border-radius:5px;
}
.add-purchase{
    margin-top:18px;
}
.add-purchase h3{
margin-left: 15px;
}
.txt-input{
    padding:15px;
    width:350px;
    border:none;
    display: block;
    margin:10px;
    cursor: pointer;
    border-bottom:2px solid rgb(11, 170, 96);
    background:white;
}
.btn-submit{
    margin:10px;
    width:120px;
    padding:15px;
    border:none;
    border-radius:15px;
    cursor:pointer;
    color:white;
    background: rgb(11, 170, 96);
    font-size:20px;
}
.form-contain{
    display: grid;
    place-items:center;
}
.view-items th{
padding:15px;
}
.view-items-header{
    background: rgb(11, 170, 96);
    color:white;
}
.view-items-container{
display: grid;
place-items: center;
}
.error{
    background:red;
}
</style>