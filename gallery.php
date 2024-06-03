<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
   <link rel="stylesheet" href="gallery.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-dark" id="release" onclick="release()">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php"><div class="logo"><img src="logo/logo.png" class="d-inline-block align-text-top"></div></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="gallery.php">Gallery</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="h1 text-center text-white mt-5">Gallery</div>
                        </div>
                    <div class="row mt-5 ms-1">
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/1.webp" alt="1st" class="img-thumbnail moveit" onclick="contshowit('gallery/1.webp')">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/2.webp" alt="1st" class="img-thumbnail centerit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/3.webp" alt="1st" class="img-thumbnail rightit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/6.webp" alt="1st" class="img-thumbnail moveit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/5.webp" alt="1st" class="img-thumbnail centerit">
                    </div>
                    
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/4.webp" alt="1st" class="img-thumbnail rightit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/7.webp" alt="1st" class="img-thumbnail moveit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/8.webp" alt="1st" class="img-thumbnail centerit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/9.webp" alt="1st" class="img-thumbnail rightit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/10.webp" alt="1st" class="img-thumbnail moveit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/11.webp" alt="1st" class="img-thumbnail centerit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/12.webp" alt="1st" class="img-thumbnail rightit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/13.webp" alt="1st" class="img-thumbnail moveit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/14.webp" alt="1st" class="img-thumbnail centerit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/15.webp" alt="1st" class="img-thumbnail rightit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/16.webp" alt="1st" class="img-thumbnail moveit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/17.webp" alt="1st" class="img-thumbnail centerit">
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img src="gallery/18.webp" alt="1st" class="img-thumbnail rightit">
                    </div>
                    </div>
                </div>
            </div>       
<div class="imagepopcont">
<img src="" alt="" id="popupimg" class="popupimg" >
</div>

</body>
<script src="gallery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>