<!-- <?php

    $server="localhost"; 
    $username="root";
    $password="";
    $database="user101";

   //connect 
   $conn = mysqli_connect($server,$username,$password,$database);
   if(conn){
       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong>Holy guacamole!</strong> You should check in on some of those fields below.
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
   }else{
       die("ERROR". mysqli_connect_error());
   }
    

?> -->

<?php
  $server="localhost"; 
  $username="root";
  $dbpassword="";
  $database="user101";
  
  try{
   $dbname = "mysql:host=".$server.";dbname=".$database;
   $pdo = new PDO($dbname,$username,$dbpassword);
   $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
  }catch(PDOexception $e){
   echo "failed" . $e->getMessage(); 
  }
?>