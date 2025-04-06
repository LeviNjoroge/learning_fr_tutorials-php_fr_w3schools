<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
    <form action="schoolthingy.php" method="POST">
        <input type="text" name="regno" id="regno" placeholder="Registration number:"> <br>
        <input type="text" name="name" id="name" placeholder="Name: "> <br>
        <input type="submit" value="Submit"> <br>
    </form>
</body>
</html>

<?php 
    $regno = $_POST["regno"];
    $name = $_POST["name"];
    $school[$regno] = $name;
    foreach ($school as $key => $value) {
        echo "$key: $value <br>";
    }
?>