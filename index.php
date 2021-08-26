<?php
 $insert = false;
if(isset($_POST['username'])){
$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);

   
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   
    $username = $_POST['username'];
   
    $Asset=$_POST['Asset'];
    $Issued =$_POST['Issued'];
    $sql = "INSERT INTO `user`.`user` (`username`, `Asset`, `Issued`)
     VALUES ('$username', '$Asset', '$Issued');";
    
    //echo $sql;

    if($con->query($sql) == true){
       // echo "Successfully inserted";}
    $insert =true;
    }
    else{

        echo "ERROR : $sql <br> $con->error";
    }
    

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bp.jpg" alt="">
    <div class="container">
        <h1>Welcome</h1>
        <p>Enter your details </p>

        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting</p>";

        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="id" id="id" placeholder="Enter your user id">
            <input type="text" name="username" id="username" placeholder="Enter your username">
            <input type="text" name="Asset" id="Asset" placeholder="Enter Asset name">
            <input type="text" name="Issued" id="Issued assets" placeholder="Enter Issued assests">
          
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>

