
<?php

$dummy="Dummy text";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>News Story Index Page </title>


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
            font-size: 18px;
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




    <br>

    <div class="card bg-dark text-white" style="padding: 150px; margin: auto ; width:80%; border: 0%; box-shadow:0 0 0 0;">
        <center>
            <h1> WELCOME TO NEWS STORIES </h1>
            <br>
            <h3> Premium hub for all the latest news! </h3>

           

            <a href="story_listing.php" class="button">View News Storis</a>
            <br>
            <h3> Join our platform and get access to premium functionalities!</h3>
           
            <a href="register.php" class="button">Register</a>
            <br>
            <h3> Continue your amazing search for news with us!</h3>

            <a href="login.php" class="button">Login</a>
        </center>
    </div>
</body>

</html>