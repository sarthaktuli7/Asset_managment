<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include '_dbconnect.php';
 
  $Asset_Name = $_POST["Asset_Name"];
  $Asset_Id = $_POST["Asset_Id"];
  $comment = $_POST["comment"];

  $sql = "INSERT INTO `asset_info` (`Asset Name`, `Asset id`, `description`) VALUES (:Asset_Name, :Asset_Id, :comment); ";
  $stmt = $pdo->prepare($sql);
  $pdoQuery_run = $stmt->execute(array(':Asset_Name' => $Asset_Name,':Asset_Id' => $Asset_Id,':comment' => $comment ));

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/add_asset.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>add_asset</title>
</head>
<body>
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="/img/cdot_logo.png" alt="image"/>
                   
                </div>
            </div>
            <div class="col-md-9">
              <form class="user"  action="add_asset.php" method="post">
                <div class="contact-form">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="Asset_Name">Asset Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="Asset_Name" placeholder="Enter Asset Name" name="Asset_Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="Asset_Id">Asset Id</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="Asset_Id" placeholder="Enter Asset Id" name="Asset_Id">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="comment">Asset Desc:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="comment" name='comment' placeholder="Enter Asset Description Here" ></textarea>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                </div>
              </form>
            </div>
          
        </div>
   
    
</body>
</html>

