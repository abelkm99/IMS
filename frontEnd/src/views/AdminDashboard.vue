<template>
<div>
 <MainHeader/>
    <div class="dashboard-container">
             <div class="dashboard-interactives">
        <div class="dashboard-side-nav">
            <ul>
                <router-link to="purchase">
                  <a href="">
                    <li>Purchase</li>
                </a>
                </router-link>
                <router-link to="employees">
                  <a href="">
                    <li>Employees</li>
                </a>
                </router-link>
                    <router-link to="Item">
                 <a href="">
                    <li>Items</li>
                </a>
                </router-link>
                     <router-link to="ItemCategory">
                 <a href="">
                    <li>Item  Category</li>
                </a>
                </router-link>
                <router-link to="supplier">
                  <a href="">
                    <li>Supplier</li>
                </a>
              </router-link> 
                 <router-link to="customer">
                  <a href="">
                    <li>Customer</li>
                </a>
            
              </router-link>
              <router-link to="expenses">
                  <a href="">
                    <li>Expenses</li>
                </a>
            
              </router-link>
                   <router-link to="bill">
                  <a href="">
                    <li>Bill</li>
                </a>
            
              </router-link>
         
              <router-link to="driver">
                  <a href="">
                    <li>Driver</li>
                </a>
            
              </router-link>
              
            <router-link to="status">
                <a href="">
                    <li>Status</li>
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
    name:"AdminDashboard",
    components:{
        MainHeader,
       
    }
}
</script>
<style>
 .dashboard-interactives{
    display:grid;
    grid-template-columns:20% 70%;
}
.dashboard-side-nav{
    padding:15px;
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
    padding:20px;
  
}

</style>