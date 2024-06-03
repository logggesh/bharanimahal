<?php
    $localhost="localhost";
    $username="root";
    $password="";
    $dbname="bharanimahal";
    $con=mysqli_connect($localhost,$username,$password,$dbname);
    $query="select * from bharanimahal";
    $process=mysqli_query($con,$query);
    echo $con;
?>