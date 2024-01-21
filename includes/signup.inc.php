<?php


if(isset($_POST['signupbtn'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $pwd = $_POST['pwd'];
   
   if(empty($username)){
       header("location:../signup.php?emptyfield1");
       exit();
   }else if(empty($email)){
       header("location:../signup.php?emptyfield2");
       exit();
   }else if(empty($pwd)){
       header("location:../signup.php?emptyfield3");
       exit();
   }else{
       echo "working";
   }
   

}
