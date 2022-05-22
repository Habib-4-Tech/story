
<?php
include('db.php');

session_start();


if (!isset($_SESSION['USER_DATA'])) {

    header("Location: login.php"); // not logged in user redirected to login page
  }
$priv=$_SESSION['USER_DATA']['ID'];   
include('nav.php');


?>

<?php
$is_res=false;         //global variables declared
$results_per_page = 4;
$page=1;
$search="";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Search News Stories</title>


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


<div class="conatiner" style="text-align:center;padding:50px;">
    <h1><b>  Search Stories </b> </h1>
  </div>

 <!-- Form takes search request by Title/Author/Single key word  -->

<div class="container bg-light text-dark" style="padding: 40px; margin: auto ; width:80%; border: 0%; box-shadow:0 0 0 0;">
<form action="search.php" method="GET">

<input type="text" size="100" name="search" id="search" placeholder="Search by Title/Author/Single key word">

<button type="submit" class="button" name="submit" >Search</button>




</form>

  </div>


  <?php
  if (isset($_GET["page"])) {
    $page  = $_GET["page"];  //gets page number
  } else {
    $page = 1;  // page number set to deafault 1 if no page is requested
  };

  

  if(isset($_GET['search']) && $_GET['search']!="")  //checks if $_GET['search'] is set and not null
  {

  $search= $_GET['search'];
  $search= mysqli_real_escape_string($connection, $search); // This function adds a escape character before potentialy dangerous characters and helps prevent SQL injection attacks 


 
  $start_from = ($page - 1) * $results_per_page;
  $sql = "SELECT * FROM story NATURAL JOIN user_data WHERE title LIKE '%$search%' or body LIKE '%$search%' or full_name LIKE '%$search%' ORDER BY p_date DESC LIMIT $start_from, " . $results_per_page;
  $result = mysqli_query($connection, $sql);
  if(mysqli_fetch_assoc($result)==0){
    echo "<h1 align='center'><b> No matches found </b> </h1> ";
  }
  else{
    $is_res=true; //flag to identify that atleast one or more results have been fetched by the search query
  }

  }




  ?>



  <?php

if($is_res==true){
  foreach ($result as $key => $value) {  //fetched results are displayed
  ?>

    <div class="card bg-light text-dark" style="padding: 40px; margin: auto ; width:80%; border: 0%; box-shadow:0 0 0 0;">
      <div class="card-body">
        <h3 class="card-title"><?= $value['title'] ?></h3>
        <h5 class="card-text">

          By <b> <?= $value['full_name'] ?> </b> on <b> <?= $value['str_date'] ?></b>

        </h5>



        <p class="card-text"><?= $value['body'] ?></p>






        <form action="delete.php" method="post">

          <p class="split-para">

          <a href="xml.php?Story_id=<?= $value['id'] ?>" class="button">XML</a>

          <a href="json.php?Story_id=<?= $value['id'] ?>" class="button">JSON</a>
           

          <?php
          if($priv==$value['user_id']) //only author can see edit and delete button
          {
            ?>

            <span>
              <a href="edit.php?Story_id=<?= $value['id'] ?>" class="button">Edit</a>



              <button type="submit" class="button" name="submit">Delete</button>
              </right>
             

              <input type="text" class="form-control" id="Story_id" name="Story_id" value='<?= $value['id'] ?>' hidden>
 
            </span>
            <?php } ?>
          </p>


        </form>




      </div>
    </div>
    <br>
  <?php
  }
}
  ?>


  <center>




    <?php
    if($is_res==true)

    {
    $sql="SELECT COUNT(id) AS total FROM story NATURAL JOIN user_data WHERE title LIKE '%$search%' or body LIKE '%$search%' or full_name LIKE '%$search%' "; // finds total number of stories found after running query
    $result = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($result);
    $total_pages = ceil($result["total"] / $results_per_page); // calculate total pages with results







    if ($page > 1) {
      echo "<a href='search.php?search=$search&page=" . ($page - 1) . "'class='btn btn-dark'> << </a>"; //displays go to previous page button.Carrys page number and search key.
      echo "&nbsp";
    }





    for ($i = 1; $i <= $total_pages; $i++) { 
      
      $class="btn btn-dark";

      if ($i == $page){
        $class="btn btn-light";
      }          
      echo "<a href='search.php?search=$search&page=" . $i . "'class='$class'>  $i </a> "; //displays all page buttons with corresponding links. The links carry page number and search key
      
    }

  
    if ($page < $total_pages) {
      if ($page > 1 ) {
        echo "<a href='search.php?search=$search&page=" . ($page + 1) . "'class='btn btn-dark'> >> </a>"; //displays go to next page button. Carrys page number and search key.
      }
    }
    }
    ?>
  </center>


</body>

</html>