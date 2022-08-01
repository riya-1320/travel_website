<?php

   $connection = mysqli_connect('localhost','root','','userdata');
   if($connection) {
    echo "connected";
   }

   if(isset($_POST)){
      $name = $_POST['name'];
     
      $email = $_POST['email'];
     
      $message = $_POST['message'];
     

      $request = " insert into contact(`name`, `email`,`message`) values('$name','$email','$message')";
      $result=mysqli_query($connection, $request);
      if(!$result){
        echo mysqli_connect_error();
      }

         header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>