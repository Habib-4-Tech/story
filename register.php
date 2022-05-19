<?php

include('db.php');



$Name = $id =  $Password = $Conf_password = "";

$NameErr = $idErr =  $PasswordErr = $Conf_passwordErr = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (empty($_POST['name'])) {
        $NameErr = "Name is required";
    } else {
        $Name = test_input($_POST["name"]);

        $namelen = strlen($Name);
        if ($namelen < 4 || $namelen > 70) {
            $NameErr = "Name must be between 4 and 70 characters";
        }
        
        elseif (!preg_match("/^([a-zA-Z-'\.]+\s[a-zA-Z-']+(\s[a-zA-Z-']+)?)$/", $Name)) {
            if (preg_match("/^([a-zA-Z-']+)$/", $Name)) {
                $NameErr = "Last Name required";
            } else {
                $NameErr = "Only letters and white space allowed";
            }
        }
    }


   
    if (empty($_POST["id"])) {
        $idErr = "ID is required";
    } else {
        $id = test_input($_POST["id"]);

        $sql = "select user_id from user_data where user_id = '$id'";
        $result = mysqli_query($connection, $sql);

        $Idlen = strlen($id);
        if ($Idlen < 8 || $Idlen > 20) {
            $idErr = "ID must be between 8 and 20 characters";
        } elseif (!preg_match('/[a-zA-Z]/', $id)) {
            $idErr = "ID must contain at least 1  leter";
        } elseif (!preg_match('/[0-9]/', $id)) {
            $idErr = "ID must contain at least 1 number";
        } elseif (preg_match('/[!@#$%^&*()]/', $id)) {
            $idErr = "ID must not contain any special characters";
        }

        if ($result && mysqli_num_rows($result) > 0) {


            $db_id = mysqli_fetch_assoc($result);
            if ($db_id['user_id'] == $id) {
                $idErr = "This ID  Already Exists!";
            }
        }
    }

    
    // Password validation
    if (empty($_POST["password"])) {
        $PasswordErr = "password is required";
    } else {
        $Password = test_input($_POST["password"]);
        $passlen = strlen($Password);
        if ($passlen < 6 || $passlen > 20) {
            $PasswordErr = "Password must be between 6 and 20 characters";
        } elseif (!preg_match('/[A-Z]/', $Password)) {
            $PasswordErr = "Password must contain at least 1 uppercase leter";
        } elseif (!preg_match('/[a-z]/', $Password)) {
            $PasswordErr = "Password must contain at least 1 lowercase leter";
        } elseif (!preg_match('/[0-9]/', $Password)) {
            $PasswordErr = "Password must contain at least 1 digit";
        } 
    }

    if (empty($_POST["conf_password"])) {
        $Conf_passwordErr = "Confirm your Password";
    } else {
        $Conf_password = test_input($_POST["conf_password"]);
        if ($Password != $Conf_password) {
            $Conf_passwordErr = "Confirm Password Incorrect";
        }
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// insert to database

if ($NameErr == "" && $idErr == "" && $PasswordErr == "" && $Conf_passwordErr == "") {

echo "1";
    if (isset($_POST['submit'])) {

       echo "2";
        $sql = "INSERT INTO user_data(user_id, password,full_name) VALUES ('$id','$Password','$Name')";

        if (mysqli_query($connection, $sql)) {
            echo "<h3>data stored in database successfully.";
        } else {
            echo "ERROR! data isn't stored successfully <br>" . mysqli_error($connection);
        }
        mysqli_close($connection);

        header("Location: login.php");
        die;
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>

    <style>
        span {
            color: red;
        }
    </style>
</head>




<body>


<div class="card " style="padding: 40px; margin: auto ; width:80%; border: 0%; box-shadow:0 0 0 0;">

<h1 align=center><b> User Registration </b></h1>





<form action="register.php" method="post">

  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Your fullname">
    <span> * <?php echo $NameErr ?></span>
  </div>


  <div class="form-group">
    <label for="user_id">User ID</label>
    <input type="text" class="form-control" name="id"  id="id"  placeholder="User ID must be unique and alphanumeric only">
    <span> * <?php echo $idErr ?></span>
  </div>




  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="Password" placeholder="">
    <small id="passwordHelp" class="form-text text-muted">Password must be 6-20 characters long. Must conatian atleast 1 upper case letter,1 lower case letter and a digit</small>
    <span> * <?php echo $PasswordErr ?></span>  
</div>


  <div class="form-group">
    <label for="conf_password">Confirm password</label>
    <input type="password" class="form-control" name="conf_password" id="conf_password" placeholder="">
    <span> * <?php echo $Conf_passwordErr ?></span>
  </div>



 
  <button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>




</body>

</html>