<?php
require 'conn.php';
$sql_update="UPDATE product SET Produce_id='$_POST[Produce_id]', Produce_name='$_POST[Produce_name]',Produce_type='$_POST[Produce_type]' ,Product_year='$_POST[Product_year]' ,Product_price='$_POST[Product_price]' WHERE Produce_id ='$_POST[Produce_id]'";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/movie/mainmovie.php");
}

?>