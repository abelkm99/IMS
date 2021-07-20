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
         <div class="logout-container">
             <button class="btn-logout">
                Logout
             </button>
         </div>
     </div>
    </div>
</template>
<script>
export default {
    name:"MainHeader"
}
</script>
<style>
#main{
  padding:0;
  margin:0;
}
    .top-nav{
    width: 100%;
    height:130px;
    background:url(../assets/images/background-main.png) no-repeat;
    background-size:cover;
    background-position: center;
    display:flex;
    flex-direction: row;
   
    padding:10px;
}
.name-info{
margin-top:10px;
padding:15px;
color:white;
font-size:20px;

}
.profile-pic-holder{
    width:100px;
    height:100px;
    background:white;
    border-radius:50%;
    margin-left:30px;
}
.logout-container{
position: absolute;
right:10px;
top:50px;
 
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