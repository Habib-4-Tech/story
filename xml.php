<?php
header('Content-Type: text/xml');   //output xml format insted of html
include('db.php');

$erroXML="<?xml version='1.0' encoding='UTF-8'?>
<error> Not found </error>";



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



$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<story>
<title> $N_title</title>
<published_date>$N_date</published_date>
<body>$N_text</body>

</story>";
 echo $myXMLData;
}
else{

  echo $erroXML;

}
}

else
{
    echo $erroXML;
}


?>
