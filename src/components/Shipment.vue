<template>
    <div class="router-view-container">
      <SubHeaderControl  :links="links"/>        
    </div>
</template>
<script>
import SubHeaderControl from "@/components/SubHeaderControl.vue";
export default {
    name:"Shipment",
    components:{
        SubHeaderControl
    },
    data(){
 return {
     links:[
         {
             id:0,
             address:"addShipment",
             displayText:"Add Shipment",

         },{
             id:1,
             address:"shipments",
             displayText:"Shipments"
         }
     ]
 }
    }
}
</script>
<style>

</style>