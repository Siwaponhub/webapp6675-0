<?php
require 'conn.php';
$sql_update="UPDATE actor SET Actor_ID='$_POST[Actor_ID]', Actor_name='$_POST[Actor_name]',Actor_lastname='$_POST[Actor_lastname]' ,Actor_age='$_POST[Actor_age]' ,Product_name='$_POST[Product_name]' WHERE Actor_ID ='$_POST[Actor_ID]'";



$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/movie/mainactor.php");
}

?>