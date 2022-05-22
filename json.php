<?php
include('db.php')


?>



<?php

$arrerr= array('error'=>"No Data Found!");

if (isset($_GET['Story_id']))
{
$Story_id=$_GET['Story_id'];

$sql= "Select *  FROM story where id= $Story_id";

$result = mysqli_query($connection, $sql);


if ($result && mysqli_num_rows($result) > 0)
{
$result = mysqli_fetch_assoc($result);
$N_title= $result['title'];
$N_text= $result['body'];

$N_date=$result['str_date'];


$arr = array('title' => $N_title , 'body' => $N_text, 'published_date' => $N_date);

echo json_encode($arr);  //output the encoded data in JSON format
}
else
{
 echo json_encode($arrerr);
}



}
else{
    echo json_encode($arrerr);
}



?>

