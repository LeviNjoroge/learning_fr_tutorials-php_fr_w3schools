<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle calculations</title>
    <style>
        div{
            width: 100px;
            height: 100px;
            border: 2px solid black;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <form action="circle_calculations.php" method="POST">
        <label for="radius">Radius: </label>
        <input type="text" name="radius" id="radius" placeholder="Enter the radius of the circle:"> <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    $radius = $_POST["radius"];
    $Circumference = round(2*$radius*pi(), 2);
    $Area = round($radius**2*pi(),2);
    ?>
    
    <div></div>

    <p>
        The results are in: <br>
        The area of the circle is: <?php echo $Area?> <br>
    </p>
</body>
</html>