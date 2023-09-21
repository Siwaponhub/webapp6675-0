<?php
// if(!isset($_GET['Actor_ID '])){
//     header("refresh: 0; url=http://localhost/movie/mainmenu.php");
// }
require 'conn.php';
$sql = "SELECT * FROM actor WHERE Actor_ID ='$_GET[Actor_ID]'";
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
    <h1>Edit Actor</h1>
    <form id="form1" name="form1" method="post" action="editactorsuccess.php">

        <p>

            <label for="Actor_ID">ID</label>
            <input type="text" name="Actor_ID" id="Actor_ID" value="<?=$row['Actor_ID'];?>" hidden>
            <input type="text" name="Actor_ID" id="Actor_ID" value="<?=$row['Actor_ID'];?>" readonly/>

        </p>

        <p>

            <label for="Actor_name">ชื่อ</label>
            <input type="text" name="Actor_ID" id="Actor_ID" value="<?=$row['Actor_ID'];?>" hidden>
            <input type="text" name="Actor_name" id="Actor_name" value="<?=$row['Actor_name'];?>" />

        </p>

        <p>

            <label for="Actor_lastname">นามสกุล</label>

            <input type="text" name="Actor_lastname" id="Actor_lastname" value="<?=$row['Actor_lastname'];?>" />

        </p>

        <p>

            <label for="Actor_age">อายุ</label>

            <input type="text" name="Actor_age" id="Actor_age" value="<?=$row['Actor_age'];?>" />

        </p>

        <p>

            <label for="Product_name">เรื่อง</label>

            <input type="text" name="Product_name" id="Product_name" value="<?=$row['Product_name'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainactor.php'>Home</a>
    </form>
</body>

</html>