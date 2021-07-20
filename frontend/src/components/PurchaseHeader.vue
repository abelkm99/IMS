<template>
    <div>
                 <div class="router-view-nav">
                <ul>
                    <router-link to="purchase">
                    <a href="">
                    <li>Add purchase</li>
                    </a>

                    </router-link>
                
                <router-link to="viewpurchase">
                  <a href="">
                    <li>Purchases</li>
                </a>
                </router-link>
           
         
                </ul>
            </div>
    </div>
</template>
<script>
export default {
    name:"PurchaseHeader"
}
</script>
<style>
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
    margin:5px;
}
</style>