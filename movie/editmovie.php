<?php
// if(!isset($_GET['Produce_id '])){
//     header("refresh: 0; url=http://localhost/movie/mainmenu.php");
// }
require 'conn.php';
$sql = "SELECT * FROM product WHERE Produce_id ='$_GET[Produce_id]'";
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
    <h1>Edit Movie</h1>
    <form id="form1" name="form1" method="post" action="editmoviesuccess.php">

        <p>

            <label for="Produce_id">ID</label>
            <input type="text" name="Produce_id" id="Produce_id" value="<?=$row['Produce_id'];?>" hidden>
            <input type="text" name="Produce_id" id="Produce_id" value="<?=$row['Produce_id'];?>" readonly/>

        </p>

        <p>

            <label for="Produce_name">เรื่อง</label>
            <input type="text" name="Produce_id" id="Produce_id" value="<?=$row['Produce_id'];?>" hidden>
            <input type="text" name="Produce_name" id="Produce_name" value="<?=$row['Produce_name'];?>" />

        </p>

        <p>

            <label for="Produce_type">ประเภท</label>

            <input type="text" name="Produce_type" id="Produce_type" value="<?=$row['Produce_type'];?>" />

        </p>

        <p>

            <label for="Product_year">ปี</label>

            <input type="text" name="Product_year" id="Product_year" value="<?=$row['Product_year'];?>" />

        </p>

        <p>

            <label for="Product_price">ราคา</label>

            <input type="text" name="Product_price" id="Product_price" value="<?=$row['Product_price'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmovie.php'>Home</a>
    </form>
</body>

</html>