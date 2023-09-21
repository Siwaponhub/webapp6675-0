<?php
// if(!isset($_GET['Member_ID '])){
//     header("refresh: 0; url=http://localhost/movie/mainmenu.php");
// }
require 'conn.php';
$sql = "SELECT * FROM member WHERE Member_ID ='$_GET[Member_ID]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <h1>Edit Member</h1>
    <form id="form1" name="form1" method="post" action="editsuccess.php">

        <p>

            <label for="Member_ID">ID</label>
            <input type="text" name="Member_ID" id="Member_ID" value="<?=$row['Member_ID'];?>" hidden>
            <input type="text" name="Member_ID" id="Member_ID" value="<?=$row['Member_ID'];?>" readonly/>

        </p>

        <p>

            <label for="Member_name">ชื่อ</label>
            <input type="text" name="Member_ID" id="Member_ID" value="<?=$row['Member_ID'];?>" hidden>
            <input type="text" name="Member_name" id="Member_name" value="<?=$row['Member_name'];?>" />

        </p>

        <p>

            <label for="Member_lastname">นามสกุล</label>

            <input type="text" name="Member_lastname" id="Member_lastname" value="<?=$row['Member_lastname'];?>" />

        </p>

        <p>

            <label for="Member_phone">มือถือ</label>

            <input type="text" name="Member_phone" id="Member_phone" value="<?=$row['Member_phone'];?>" />

        </p>

        <p>

            <label for="Product_name">ที่อยู่</label>

            <input type="text" name="Member_Address" id="Member_Address" value="<?=$row['Member_Address'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmember.php'>Home</a>
    </form>
</body>

</html>