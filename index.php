<?php

$conn = mysqli_connect('localhost','root','root','sensorvalues');

$value = $_GET['integer'];

if (isset($_GET['submit'])){
    $sql = "INSERT INTO sensor_values(sensorvalue)VALUES('$value')";
    mysqli_query($conn,$sql);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/phpmyadmin/index.php?route=/sql&db=sensorvalues&table=sensor_values&pos=0">

    </script>
    <title>sensor values</title>
      <link rel ="stylesheet" href="test.css">
</head>

<body>
<form action="index.php" method="get">

<input type="text" name="integer">
<input type="submit" name="submit" value="send">

</form>
<script>
        function Movement(movement){
            var url = 'robot_movement.php?data='+movement;
            var xhr = new XMLHttpRequest();
            xhr.open('GET' , url , false);
            xhr.send();
        }
    </script>
</body>


</html>
