<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert member</title>
</head>

<body class="container">
<h1>Insert member</h1><br>
    <form id="form1" name="form1" method="post" action="insertmembersuccess.php">
        
        <p>
        
            <label for="Member_ID">ID</label>
            <input type="text" name="Member_ID" id="Member_ID">

</p>
        <p>

            <label for="Member_name">ชื่อ</label>
            <input type="text" name="Member_name" id="Member_name">

        </p>

        <p>

            <label for="Member_lastname">นามสกุล</label>

            <input type="text" name="Member_lastname" id="Member_lastname">

        </p>

        <p>

            <label for="Member_phone">มือถือ</label>

            <input type="text" name="Member_phone" id="Member_phone">

        </p>

        <p>

            <label for="Member_Address">เรื่อง</label>

            <input type="text" name="Member_Address" id="Member_Address">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmember.php'>Home</a>
    </form>
</body>

</html>