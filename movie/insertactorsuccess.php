<?php
require 'conn.php';
$sql_update="INSERT INTO actor(Actor_ID,Actor_name,Actor_lastname,Actor_age,Product_name) VALUES ('$_POST[Actor_ID]','$_POST[Actor_name]','$_POST[Actor_lastname]' ,'$_POST[Actor_age]' ,'$_POST[Product_name]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/movie/mainactor.php");
}

?>