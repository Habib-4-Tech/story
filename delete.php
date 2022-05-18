
<?php

include('db.php');

if( isset($_POST['submit']))
{
    
    $id=$_POST['Story_id'];

    $sql= "Delete from story where id= $id";

    $result= mysqli_query($connection, $sql);

if (mysqli_query($connection, $sql)) {

    echo "<h3>Your story has been deleted.";
   header("Location: story_listing.php");
} 
else {
    echo "ERROR! wasn't deleted please try again <br>" . mysqli_error($connection);
}

mysqli_close($connection);

die;

}

?>

