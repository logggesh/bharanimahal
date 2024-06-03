<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings & Reveiws</title>
    <link rel="icon" href="logo/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="ratings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
        <div class="h2 text-center mt-4 text-white">Ratings & Reveiws</div>
        <?php
                $localhost="localhost";
                $username="bharanimahal";
                $password="Bharani@1234";
                $dbname="bharanimahal";
                $con=mysqli_connect($localhost,$username,$password,$dbname);
                $query="select * from reviews";
                $process=mysqli_query($con,$query);
                while ($row = mysqli_fetch_assoc($process)) {
                    echo '<div class="col-lg-6">';
                    echo '<div class="card mt-5">';
                    echo '<div class="card-header">' . $row['Name'] . '</div>';
                    echo '<div class="card-body">' . $row['Comments'] . '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>