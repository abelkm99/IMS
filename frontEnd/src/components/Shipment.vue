<template>
    <div class="router-view-container">
      <SubHeaderControl  :links="links"/> 
      <div class="router-view">
                <div class="add-purchase">
                  <fieldset class="form-contain">
             <legend>   <h3> Unshipped Purchases </h3> </legend>
            <table class="view-items">
                        <tr class="view-items-header">
                            <th>
                             GRNNO
                            </th>
                            <th>
                              Purchase Date
                            </th>
                            <th >
                                Delivered Date
                            </th>
                            <th>
                                Supplier Name
                            </th>
                            <th>
                                Item Type Count
                            </th>
                            
                          
                        </tr>
            <vue-window-modal  :active="editVisible"  title="ADD SHIPMENT"  v-on:clickClose="closeForm(false)" style="width:auto;height:auto;">  
                
                    <fieldset>
                     <legend> <h3> Add shipment </h3> </legend>
                    <form @submit.prevent="addShipment">
                    <table>
                       <tr>
                           <td>
                               <label for="date">  <h3> Shipment Date </h3> </label>
                                <input v-model="shipmentDate" type="date" class="ont" required>
                           </td>
                          
                       </tr>
                         <tr class="view-items-header">
                             <th>
                           
                              Item Code
                           
                            </th>
                            <th>
                            
                                Quantity    

                            </th>
                            <th>
                           
                                Price Per Quantity
                           
                            </th>
                           <th>
                               Total
                           </th>
                            <th>
                                Extra 
                            </th>
                            <th>
                                Remaining
                            </th>
                        
                         </tr>
                       

                         
                         <tr :key="x.ItemID"   v-for="x in ItemEdit">
                           
                             <td>
                                 {{getItemCodeName(x.ItemID)}}
                             </td>
                             <td>
                                 {{x.Quantity}}
                             </td>
                             <td>
                                 {{x.PPP}}
                             </td>
                              
                            <td>
                                {{x.Total}}
                            </td>

                             <td>
                            
                                 <input  :name="x.PurchaseID" type="number"  class="ont ext" @blur="setRem($event)" required placeholder="EXTRA Amount">
                            
                             </td>
                                
                                <td>
                          
                                    <input    :name="x.PurchaseID"  type="number" class="ont rem" @blur="setExt($event)" placeholder="Remaining" required>
                          
                                </td>
                          
                               
                         </tr>
                      
                          
                                 <button class="btn-submit" type="submit">Add</button>
                          
                          
                        
                    </table>
 </form>
                    </fieldset>
       
            </vue-window-modal>
                      <tr  :name="x.GRNNO" v-bind:key="index" v-for="(x,index) in items" @dblclick="openForm(x.GRNNO)" >  
                          <td>{{x.GRNNO}}</td>
                          <td>{{x.PurchsedDate}}</td>
                          <td :class="x.Delivered==true?'':'missing-delivery'"> {{x.DeliverdDate}}</td>
                          <td>{{getSupplierName(x.SupplierID)}}</td>
                          <td>{{x.Purchase.length}}</td>
                    
                      </tr>
                    </table>
            </fieldset>
            </div>
      </div>       
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
import Purchase from "@/api_calls/Purchase.js";
import Supplier from "@/api_calls/Supplier.js";
import Items from "@/api_calls/Items.js";
import Shipment from "@/api_calls/Shipment.js";
export default {
    name:"Shipment",
    components:{
        SubHeaderControl
    },
    data(){
 return {
     items:[],
     Extra:'',
     Remaining:'',
     shipmentDate:'',
     ItemEdit:[],
     editVisible:false,
ItemsList:[],
     SupplierList:[],
     links:[
         {
             id:0,
             address:"shipment",
             displayText:"Ship Purchases",

         },{
             id:1,
             address:"shipTowareHouse",
             displayText:"Ship  WareHouse"
         }
     ]
 }
    },
    methods:{
        getNotDelivered(){
            Purchase.getNotDelivered().then(res=>{
                this.items = res["data"];
                console.log(res["data"]);
            }).catch(err=>{alert(err.response.data.message)})
        },
        Suppliers(){
            Supplier.getSuppliers().then(res=>{
                this.SupplierList = res["data"];
            }).catch(
                err=>{
                    alert(err.response.data.message);
                }
            )
        }, getSupplierName(id){
            for(const x in this.SupplierList ){
                if(this.SupplierList[x].SupplierID == id){
                    return  this.SupplierList[x].SupplierName;
                }
            }
        },openForm(id){
            this.editGRN = id;
            this.ItemEdit = this.items.filter(item=>{return item.GRNNO == id})[0].Purchase;
            
            this.editVisible = ! (this.editVisible);
        },closeForm(state){
            this.editVisible = state;
        },
           getItemCodeName(id){
          
            for(const x in this.ItemsList){
                if(this.ItemsList[x].ItemID == id){
                    return this.ItemsList[x].ItemCode;
                }
            }
        },
        addShipment(){
            // get All inputs
            const remInputs = document.getElementsByClassName("rem");
            const extInputs = document.getElementsByClassName("ext");
            var shipmentString = "";
            for(let i=0;i < remInputs.length; i++){
                console.log("here" ,  remInputs[i], extInputs[i]);
                shipmentString += remInputs[i].getAttribute("name") + "," +  remInputs[i].value + "," + extInputs[i].value + ";"; 
            }
            console.log(shipmentString);
 
            const data = {
                "DeliverdDate":this.shipmentDate,
                "GRNNO":this.ItemEdit[0].GRNNO,
                "ShipmentInfo":shipmentString
            }
            console.log(data);
            Shipment.addShipment(data).then(res=>{
                console.log(res)
            }).catch(err=>{alert(err.response.data.message)});
        },
        setExt(e){
            const elem =  e.target.parentNode.parentNode;
               elem.childNodes.forEach((ele)=>{
                    if(ele.childNodes[0].classList){
                    if(ele.childNodes[0].classList.contains("ext")){
                        ele.childNodes[0].value = 0;
                    }
                    }
           
            })
        },setRem(e){
            const elem =  e.target.parentNode.parentNode;
           
               elem.childNodes.forEach((ele)=>{
                    if(ele.childNodes[0].classList){
                    if(ele.childNodes[0].classList.contains("rem")){
                        ele.childNodes[0].value = 0;
                    }
                    }
           
            })
        }
    }, created(){
       this.getNotDelivered(); 
       this.Suppliers();
       Items.getItems().then(res=>{
           this.ItemsList = res["data"]
       })
    }
}
</script>
<style>
.ont{
    width:100%;
    padding:5px;
    border:none;
    border-bottom:2px solid yellow;
}
.btn-submit{
    cursor:pointer;
}

</style>