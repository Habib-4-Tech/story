<?php
include('db.php')


?>



<?php

if (isset($_GET['Story_id']))
{
$Story_id=$_GET['Story_id'];

$sql= "Select *  FROM story where id= $Story_id";

$result = mysqli_query($connection, $sql);
$result = mysqli_fetch_assoc($result);
$N_title= $result['title'];
$N_text= $result['body'];

$N_date=$result['str_date'];


$arr = array('title' => $N_title , 'body' => $N_text, 'published_date' => $N_date);

echo json_encode($arr);

}




?>

