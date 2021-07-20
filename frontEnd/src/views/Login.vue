<template>
    <div>
        <div class="login-container">
        <div class="login">
           <h1>login</h1>
            <form action="" @submit="login">
                <input type="text" placeholder="Enter Username" class="txt-input">
                <input type="password" placeholder="*****" class="txt-input">
                <button class="btn-submit">Login</button>
            </form>
        </div>
        <div class="display-picture">

        </div>
   
    </div>
    </div>
</template>
<script>
export default {
    name:"Login",
    methods:{
        login(){

        }
    }
}
</script>
<style scoped>
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
.login-container{
 display: grid;
 grid-template-columns: 40% 60%;
 grid-template-rows: 100vh;
}
.login{
 grid-column:1;
 width:100%;
 padding:20%;
 margin-top:50px;
}
.login h1{
    text-align: center;
}
.display-picture{
    grid-column:2;
    background: url(../assets/images/background-main.png) no-repeat;
    background-size:cover;
    background-position: center;
} 
.txt-input{
    padding:25px;
    width:350px;
    border:none;
    display: block;
    margin:10px;
    cursor: pointer;
    border-bottom:2px solid rgb(11, 170, 96);
}
.btn-submit{
    margin:10px;
    width:350px;
    padding:25px;
    border:none;
    border-radius:15px;
    cursor:pointer;
    color:white;
    background: rgb(11, 170, 96);
    font-size:20px;
}
</style>