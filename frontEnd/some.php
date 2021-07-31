<?php 
 include_once('../dbcon.php');
 require_once('Auth.php');
 
 
 if(isset($_SESSION['username']) && isset($_SESSION['password'])){
   if(auth($_SESSION['username'],$_SESSION['password'])){

   }else{
     header("location:login.php");
     exit();
   }
 }else{
   header("location:login.php");
   $pn='';
 }
 if(isset($_GET['id'])){
     $id1 = $_GET['id'];
     $id =mysqli_real_escape_string($GLOBALS["conn"],$_GET["id"]); 
     $sql = "select * from Registration where id=$id";
     $data =  mysqli_fetch_array(mysqli_query($GLOBALS["conn"],$sql),MYSQLI_ASSOC);
     $firstname = $data["firstname"];
     $lastname =  $data["lastname"];
     $phone = $data["phone"];
     $GLOBALS["pn"] = $phone;
     $current_address =  $data["current_address"];
     $director_address = $data["director_address"];
     $age =  $data["age"];
     $gender  =  $data["gender"];
     $slip = $data["slip"];
     $religion = $data["religion"];
     $education = $data["education"];
     $confirmed = $data["confirmed"];
     $botToken = "1942102896:AAEZ33m_7PBGeJIfTzBGhQ_A1sCUp5dTgvg";
     $url = "https://api.telegram.org/bot$botToken/sendMessage";
  
     // insert into approved
     $sql_insert  = "insert into Approved (firstname,lastname,phone,current_address,director_address,age,gender,slip,religion,education,confirmed) values ('$firstname','$lastname','$phone','$current_address','$director_address','$age','$gender','$slip','$religion','$education','$confirmed')";
   
     if($confirmed != ''){
         // fetch id
         if(mysqli_query($GLOBALS["conn"],$sql_insert)){
         
            $sql_approved = "select * from Approved where phone='$phone'";
         if($row =  mysqli_fetch_array(mysqli_query($GLOBALS["conn"],$sql_approved),MYSQLI_ASSOC)){ 
             $verboseText = "Dear Appplicant your application has been approved your applicant ID is ".$row["confirmed"];
            $data = [
              "chat_id"=>$confirmed,
              "text"=> $verboseText,
              ];
 

          $options = array(
     'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
     ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        echo "check here";
        echo $result;
         }
 
         }else{
             header("location:home.php");
         }
                 
        //delete from  registration
        $sql_delete = "delete from Registration where id=$id";
        if(mysqli_query($GLOBALS["conn"],$sql_delete)){
            header("location:home.php");
          
        }else{
            echo $GLOBALS["conn"]->error;
        };
    }else{
    echo "<script>alert('user did not confirm their Telegram Number')
        window.location.replace('home.php');
    </script>";
         
    }
    
 
}
 
 
?>
 