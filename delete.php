
<?php

include('db.php');

if (!isset($_SESSION['USER_DATA']))  {
      
  header("Location: login.php"); //redirects people who are not logged in to login page.
     
}





if( isset($_GET['submit']))
{
    
    $id=$_GET['Story_id'];

    $sql= "Delete from story where id= $id";

    $result= mysqli_query($connection, $sql);

if (mysqli_query($connection, $sql)) {

    echo "<h3>Your story has been deleted.";
   header("Location: story_listing.php");     //redirect to stories listing page upon successful deletion
} 
else {
    echo "ERROR! wasn't deleted please try again <br>" . mysqli_error($connection);
}

mysqli_close($connection);

die;

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Delete Page </title>


  <style>
    .button {
      background-color: black;
      border: 2px solid transparent;
      border-radius: 4px;
      color: white;
      padding: 7px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 15px;
      margin: 4px 2px;
      cursor: pointer;
      font-weight: 600;
      -webkit-transition-duration: 0.1s;
      transition-duration: 0.1s;

    }


    .button:hover {
      border: 2px solid black;
      color: black;
      text-transform: none;
      background-color: white;
    }


    .split-para {
      display: block;
      margin: 10px;
    }

    .split-para span {
      display: block;
      float: right;
      width: 20%;
      margin-left: 10px;
    }
  </style>

</head>

<body>


<?php

if(isset($_POST['submit']))
{
$del=$_POST['Story_id'];

$sql = "SELECT * FROM story NATURAL JOIN user_data where id='$del'";
$result = mysqli_query($connection, $sql);

$value=mysqli_fetch_assoc($result);
?>


<div class="card bg-light text-dark" style="padding: 40px; margin: auto ; width:80%; border: 0%; box-shadow:0 0 0 0;">
      <div class="card-body">
        <h3 class="card-title"><?= $value['title'] ?></h3>
        <h5 class="card-text">

          By <b> <?= $value['full_name'] ?> </b> on <b> <?= $value['str_date'] ?></b>

        </h5>



        <p class="card-text"><?= $value['body'] ?></p>

</div>



<div class="conatiner" style="text-align:center;padding:50px;">



    <h3><b>  Are you sure you want to permanently delete this story? </b> </h3>

   <form action="delete.php" method="GET">

  <!-- confirm if user really wants to delete his tory parmanently -->

  <input type="text" class="form-control" id="Story_id" name="Story_id" value='<?= $del ?>' hidden> 

  <button type="submit" class="button" name="submit">YES</button>

  
   </form>

    <!-- redirect user to story_listing page if he decides not to delet -->

   <a href="story_listing.php" class="button">NO</a> 


  </div>

<?php
}
?>