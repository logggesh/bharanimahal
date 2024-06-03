<?php
    $localhost="localhost";
    $username="bharanimahal";
    $password="Bharani@1234";
    $dbname="bharanimahal";
    $name=$_POST["name1"];
    $comments=$_POST["comments1"];

    $con=mysqli_connect($localhost,$username,$password,$dbname);
    $query="insert into reviews values('$name','$comments')";
    $process=mysqli_query($con,$query);


?>