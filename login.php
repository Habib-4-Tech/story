<?php
session_start();

include('db.php');



$id = $Password = $User = ""; //Global variable declared

$idErr = $PasswordErr = "";

$FlagError = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    if (empty($_POST["id"])) {             
        $idErr = "User ID is required";
        $FlagError = 1;
    } else {
        $id = test_input($_POST["id"]);

        $sql = "select * from user_data where user_id = '$id'";
        $result = mysqli_query($connection, $sql);

        if ($result && mysqli_num_rows($result) > 0) {

            $User = mysqli_fetch_assoc($result);

            if ($User['user_id'] != $id) {
                $idErr = "User ID doesn't Match";    // checks if id matches
                $FlagError = 1;
            }
        } else {
            $idErr =  "User ID does not exist";
            $FlagError = 1;                        //error flag set to 1 if ID does not exist
        }
    }

    if (empty($_POST["password"])) {
        $PasswordErr = "password is required";
        $FlagError = 1;
    } else {
        $Password = test_input($_POST["password"]);

        if ($User['password'] != $Password) {
            $PasswordErr = "Password is not Matched";     
            $FlagError = 1;                          //error flag set to 1 if password doesn't match
        }
    }




    if ($FlagError == 0) {    //if no error is found


        if (isset($_POST['submit'])) {

            $_SESSION['USER_DATA'] = [             //set values session variable
                'ID' => $User['user_id'],
                'NAME' => $User['full_ame'],

            ];

            if (isset($_POST['remember_me'])) {  // if user checks remeber me, cookie is set with specific expiration time
 

                setcookie('user_id', $User['user_id'], time() + (24 * 60 * 60), "/");
            }

            mysqli_close($connection);


            header("Location:story_listing.php");  // User is redirected to story listing page after succeesful login
        }
    }
}


function test_input($data)
{
    $data = trim($data);             //removes white space from both sides of string
    $data = stripslashes($data);    //removes backslashes  
    $data = htmlspecialchars($data); // converts some predefined characters to HTML entities
    return $data;                    // processed string is returned
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>

    <style>
        span {
            color: red;
        }

        .button {
      background-color: black;
      border: 2px solid transparent;
      border-radius: 4px;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 17px;
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
    </style>
</head>




<body>

  <br>

        <h1 align=center><b> User Login </b></h1> <br>

        <div class="card bg-light text-dark " style="padding: 40px; margin: auto ; width:70%; border: 0%; box-shadow:0 0 0 0;">

        <form action="login.php" method="post">

            <div class="form-group">
                <label for="id">User ID</label>
                <input type="text" class="form-control" id="id" name="id"  
                <?php                                                                                             //If cookie is set input the value and use plcaeholder if cookie is not set.
                
                  if(isset($_COOKIE['user_id'])) {   ?>  value="  <?php         echo $_COOKIE['user_id']; } ?>"      
                  <?php
                  if(!isset($_COOKIE['user_id'])) {   ?>    placeholder="Enter your user ID"

                  <?php } ?>

                     >
                <span> * <?php echo $idErr ?></span>
            </div>




            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">

                <span> * <?php echo $PasswordErr ?></span>
            </div>

            <div class="form-group">
                <center>
                    <button type="submit" name='submit' class="button">Submit</button>

                    <input type="checkbox" name="remember_me" value="yes">
                    <label>Remember Me</label><br>
                </center>
            </div>


        </form>

    </div>


</body>

</html>