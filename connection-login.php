<?php
       $host = "localhost";  
       $user = "root";  
       $password = '';  
       $db = "lit";  
         
       $con = mysqli_connect($host, $user, $password, $db);  
       if(mysqli_connect_errno()) {  
           die("Failed to connect with MySQL: ". mysqli_connect_error());  
       }  
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = $_POST['email'];
      $mypassword = $_POST['password'];

    //   $myemail = mysqli_real_escape_string($db,$_POST['email']);
    //   $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT email FROM login WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $sql = "SELECT username FROM login WHERE email = '$myemail' and password = '$mypassword'";
         $result = mysqli_query($con,$sql);
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
         $_SESSION['username'] = $row["username"];
         $_SESSION['email'] = $myemail;
         header("location: userhomepg.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: Login.php?error=$error");
      }
   }
?>