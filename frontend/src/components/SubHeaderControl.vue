<template>
    <div>       
                 <div class="router-view-nav">
                <ul>
                    <router-link  :key="link.id" v-for="link in links" :to="link.address">
                    <a href="">
                    <li>{{link.displayText}}</li>
                    </a>

                    </router-link>
                
                </ul>
            </div>
    </div>
</template>
<script>
export default {
    name:"SubHeaderControl",
    props:{
        links:Array
    }
   
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