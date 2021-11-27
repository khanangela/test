<?php

$username = "root";
$password ="";
$server = 'localhost';
$db = 'test';

$con = mysqli_connect($server,$username,$password,$db );

if($con){
    // echo "Connection succesful";
     ?>

    <script>
       alert('connection successful');
    </script>

    <?php
}else{
    // echo "NO Connection";
    die("no connection" . mysqli_connect_error());
}

?>

