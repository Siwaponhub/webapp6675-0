<?php
    require 'conn.php';
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Movie Bio</title>
</head>

<body>
    <div class="container">
        <h1>Movie</h1><br>
        <a class="btn btn-success" href='mainactor.php'>Actor</a>
        <a class="btn btn-success" href='mainmember.php'>Member</a>
        <a class="btn btn-success" href='mainmovie.php'>Movie</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">เรื่อง</th>
                    <th scope="col-4">ประเภท</th>
                    <th scope="col-4">ปี</th>
                    <th scope="col-4">ราคา</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["Produce_id"]."</td>"."<td>".$row["Produce_name"]."</td>"."<td>".$row["Produce_type"]."</td>"."<td>".$row["Product_year"]."</td>"."<td>".$row["Product_price"]."</td>"."<td>"."<a class='btn btn-warning' href='editmovie.php?Produce_id=".$row["Produce_id"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertmovie.php'>Insert Movie</a>
    </div>
</body>

</html>