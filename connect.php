<?php  
   $servername = 'localhost:3307';
   $username = 'root';
   $password = '';
   $db = 'crudoperation';
   
   //On établit la connexion
   $con = new mysqli($servername, $username, $password,  $db);
   
   //On vérifie la connexion
   if(!$con){
  
       die(mysqli_error($con));
   }
 
?>