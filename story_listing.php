<?php
include('db.php');

$priv="";

session_start();
if (isset($_SESSION['USER_DATA'])) {

$priv=$_SESSION['USER_DATA']['ID'];
include('nav.php');                //navigation bar is displayed to logged in users
}

else{
  include('nav_g.php');   //differet navigation bar displayed to uses who are not logged in
}


?>

<?php
$results_per_page = 4;     //this variable will be used to display ony 4 stories per page
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

    .button-cp{
 
      color:black;
      background-color:white;

    }

  </style>

</head>

<body>



















  <div class="conatiner" style="text-align:center;padding:50px;">
    <h1><b> Stories Listing </b> </h1>
  </div>

  <?php
  if (isset($_GET["page"])) {   
    $page  = $_GET["page"]; //page number is stored in variable
  } else {
    $page = 1;  //default to page 1 if $_GET['page'] is not set
  };
  $start_from = ($page - 1) * $results_per_page;  // used to find from where/which index to start fetching data 
  $sql = "SELECT * FROM story NATURAL JOIN user_data ORDER BY p_date DESC LIMIT $start_from, " . $results_per_page;  //desired number of stories fetched tsrating from start index
  $result = mysqli_query($connection, $sql);
  ?>



  <?php
  if(mysqli_fetch_assoc($result)>0) //checks if atleast 1 story is found
 {
  foreach ($result as $key => $value) {  // displays the fetched stories
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
          
          if($priv==$value['user_id']) // user can only edit or delete his own stories. Made sure by matching sesssion  user_id with fetched user_id
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

else{
  echo "<h3><b> No story available </b> </h3>";
}


  ?>


  <center>

    <?php
    $sql = "SELECT COUNT(id) AS total FROM story";

    $result = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($result); // finds total number of stories
    $total_pages = ceil($result["total"] / $results_per_page); // calculate total pages with results


    if ($page > 1) {
      echo "<a href='story_listing.php?page=" . ($page - 1) . "'class='btn btn-dark'> << </a>"; //Displays go to previous page button
      echo "&nbsp";
    }


    for ($i = 1; $i <= $total_pages; $i++) {      
      
      $class="btn btn-dark";

      if ($i == $page){
        $class="btn btn-light";
      }          
      echo "<a href='story_listing.php?page=$i'class='$class'>  $i </a> ";   //displays all the page buttons with corresponding links
      
   
    }


  
    if ($page < $total_pages) {
      if ($page > 1 ) {
        echo "<a href='story_listing.php?page=" . ($page + 1) . "'class='btn btn-dark'> >> </a>";  //Displays go to next page button
      }
    }

    ?>
  </center>


</body>

</html>