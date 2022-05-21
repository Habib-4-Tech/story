<?php
include('db.php');
session_start();

if (!isset($_SESSION['USER_DATA'])) {

  header("Location: login.php");
}

$x=$_SESSION['USER_DATA']['ID'];

?>

<?php
if (isset($_POST['submit'])) {

  $title = $_POST['title'];
  $text = $_POST['text'];
  $date_str = $_POST['date'];
  $text = mysqli_real_escape_string($connection, $text);
  $title = mysqli_real_escape_string($connection, $title);

  $date = date('Y/m/d', strtotime($date_str));



  $sql = "INSERT INTO story(title,body,p_date,str_date,user_id) VALUES('$title','$text','$date','$date_str','$x') ";

  if (mysqli_query($connection, $sql)) {
    echo "<h3>Your story has been posted.";
    echo $date;
    header("Location: story_listing.php");
  } else {
    echo "ERROR! wasn't posted please try again <br>" . mysqli_error($connection);
  }

  mysqli_close($connection);

  //header("Location: explore.php");
  die;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>



  <title>Create Story</title>


  <style>
    .button {
      background-color: whitesmoke;
      /* Green */
      border: none;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s;
      /* Safari */
      transition-duration: 0.4s;
    }



    .button:hover {
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }
  </style>
</head>




<body>
  <div class="card bg-light text-dark" style=" padding:25px; text-align:center;">

    <h1> <b> Create New Story </b></h1>
  </div>

  <div class="container bg-dark text-white" style=" padding:50px;">

    <form action="" method="post" class="needs-validation" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="storytitle" class="form-label">Title</label>
        <input type="text" class="form-control" id="storytitle" name="title" placeholder="Enter title of your story" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="mb-3">
        <label for="Textarea1" class="form-label"> <b>Text</b></label>
        <textarea class="form-control" id="Textarea1" name="text" rows="10" placeholder="Enter the body of your story" required></textarea>
        <div class="valid-feedback"><b>Valid.</b></div>
        <div class="invalid-feedback"><b>Please fill out this field.</b></div>
      </div>













      <div class="mb-3">
        <label for="date" class="form-label"><b> Published date</label>
        <input type="text" id="datepicker" class="form-control" name="date" placeholder="" required>

      </div>



      <center>

        <button type="submit" class="button" name="submit">Submit</button>
      </center>
    </form>


  </div>

  </div>

  </div>



  <script>
    $("#datepicker").datepicker({
      dateFormat: "dd MM yy"
    });
  </script>

</body>

</html>