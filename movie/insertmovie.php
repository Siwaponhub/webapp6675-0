<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Movie</title>
</head>

<body class="container">
<h1>Insert Movie</h1><br>
    <form id="form1" name="form1" method="post" action="insertmoviesuccess.php">
        
        <p>
        
            <label for="Produce_id">ID</label>
            <input type="text" name="Produce_id" id="Produce_id">

</p>
        <p>

            <label for="Produce_name">ชื่อ</label>
            <input type="text" name="Produce_name" id="Produce_name">

        </p>

        <p>

            <label for="Produce_type">ประเภท</label>

            <input type="text" name="Produce_type" id="Produce_type">

        </p>

        <p>

            <label for="Product_year">ปี</label>

            <input type="text" name="Product_year" id="Product_year">

        </p>

        <p>

            <label for="Product_price">ราคา</label>

            <input type="text" name="Product_price" id="Product_price">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmember.php'>Home</a>
    </form>
</body>

</html>