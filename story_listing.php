
<?php 
include('db.php');

?>




<?php

$sql = "SELECT id,title,body,str_date, user_id FROM story order by p_date DESC" ;
$result = mysqli_query($connection, $sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Stories Listing Page</title>

  
    <style>
 
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}


.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>

</head>
<body>
  <div class="conatiner" style="text-align:center;padding:50px;"><h1><b> Stories Listing </b> </h1></div>  
  <?php 
  var_dump($result);
  ?>

  <?php 
    foreach($result as $key => $value) {
     ?>

<div class="card w-80" style="padding:35px; margin: 0px 0px 40px 40px ;">
  <div class="card-body">
    <h3 class="card-title"><?=  $value['title']?></h3>
    <h5  class="card-text">
  
     By <?=  $value['user_id']?>  on <?=  $value['str_date']?> 

    </h5>
    <p class="card-text"><?=  $value['body']?></p>
    <a href="#" class="button">Button</a>
    <a href="#" class="button">Button</a>
  </div>
</div>

<?php
    }
    ?>


</body>
</html>