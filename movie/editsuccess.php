<?php
require 'conn.php';
$sql_update="UPDATE Member SET Member_ID='$_POST[Member_ID]', Member_name='$_POST[Member_name]',Member_lastname='$_POST[Member_lastname]' ,Member_phone='$_POST[Member_phone]' ,Member_Address='$_POST[Member_Address]' WHERE Member_ID ='$_POST[Member_ID]'";



$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/movie/mainmember.php");
}

?>