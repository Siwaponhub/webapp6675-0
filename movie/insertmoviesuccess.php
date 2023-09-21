<?php
require 'conn.php';
$sql_update="INSERT INTO product(Produce_id,Produce_name,Produce_type,Product_year,Product_price) VALUES ('$_POST[Produce_id]','$_POST[Produce_name]','$_POST[Produce_type]' ,'$_POST[Product_year]' ,'$_POST[Product_price]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/movie/mainmovie.php");
}

?>