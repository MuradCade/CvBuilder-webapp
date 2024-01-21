<?php


if(isset($_POST['loginbtn'])){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    
   if(empty($username)){
       header('location:../index.php?error1');
       exit();
       
   }else if(empty($pwd)){
       header('location:../index.php?error2');
       exit();
        
   }else{
       
     echo "Every thing working properly";
       
   }
   }
