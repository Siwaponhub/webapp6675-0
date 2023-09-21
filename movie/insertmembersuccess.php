<?php
require 'conn.php';
$sql_update="INSERT INTO member(Member_ID,Member_name,Member_lastname,Member_phone,Member_Address) VALUES ('$_POST[Member_ID]','$_POST[Member_name]','$_POST[Member_lastname]' ,'$_POST[Member_phone]' ,'$_POST[Member_Address]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/movie/mainmember.php");
}

?>