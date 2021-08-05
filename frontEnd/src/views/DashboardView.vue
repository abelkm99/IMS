<template>
<div>

    <div class="dashboard-container">
             <div class="dashboard-interactives">
        <div class="dashboard-side-nav">
            <MainHeader id="mn"/>
            <ul>
                 
                <router-link to="sales">
                <a href="">
                    <li>Sales</li>
                </a>
            </router-link>
              <router-link to="orders">
                  <a href="">
                    <li>Orders</li>
                </a>
            
              </router-link>
       
        
                <router-link to="shipment">
                 <a href="">
                    <li>Shipment</li>
                </a>
                </router-link>

             
            </ul>
        </div>
        <div class="dashboard-display">
          <router-view></router-view>
          
        </div>
     </div>

    </div>
    </div>
</template>
<script>
import MainHeader from "@/components/MainHeader.vue";
// import AddPurchase from "@/components/AddPurchase.vue";
export default {
    name:"DashboardView",
    components:{
        MainHeader,
       
    }
}
</script>
<style>
#mn{
    padding:0;
    margin:0;
}
 .dashboard-interactives{
    display:grid;
    grid-template-columns:20% 70%;
}
.dashboard-side-nav{
    padding:0px !important;
    height:80vh;
 
}
.dashboard-side-nav li{
list-style: none;
padding:15px;
margin:10px;
background:rgb(11, 170, 96);
text-align:center;
border-bottom-left-radius:15px;
border-top-left-radius:15px;
border-right:2px solid black;

}


.dashboard-side-nav a{
    color:white;
    text-decoration:none;
    font-size:20px;
    font-weight:bolder;
}
.dashboard-display{
    padding:0px !important;
  
}

</style>