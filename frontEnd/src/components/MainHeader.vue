<template>
    <div id="main"> 
        <div class="top-nav">
        <div class="profile-pic-holder">

        </div>
         <div class="name-info">
            <h3>
                Abel KidaneMariam
            </h3>
            <h4>Sales</h4>         
         </div>
         <!-- <div class="logout-container">
             <button class="btn-logout">
                Logout
             </button>
         </div> -->
     </div>
    </div>
</template>
<script>
export default {
    name:"MainHeader"
}
</script>
<style >
  
    .top-nav{
    width: 245px;
    height:70px;
    background:url(../assets/images/background-main.png) no-repeat;
    background-size:cover;
    background-position: center;
    display:flex;
    flex-direction: row;
    padding:10px;
}
.name-info{
margin-top:0px;
padding:5px;
color:white;
font-size:17px;

}
.profile-pic-holder{
    width:50px;
    height:50px;
    background:white;
    border-radius:50%;
    
}
.logout-container{
position: absolute;
right:10px;
top:10px;
 
}
.btn-logout{
    width:100px;
    padding:10px;
    border-radius:10px;
    border:none;
    cursor:pointer;
    background-color: white;
    font-size:15px;
}
</style>