<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login/Signup Option Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<?php
    include("navbar.php");
    ?>

    <h2 style="text-align: center; margin-bottom:20px; margin-top:20px;">WELCOME TO OUR TOURISM MANAGEMENT WEBSITE</h2>
    <!--                    CAROUSEL START                    -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="carousel1.jpg" class="d-block w-100" height=500px; alt="Error loading image">
            </div>
            <div class="carousel-item">
                <img src="carousel2.jpg" class="d-block w-100" height=500px; alt="Error loading image">
            </div>
            <div class="carousel-item">
                <img src="carousel3.jpg" class="d-block w-100" height=500px; alt="Error loading image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- <div class="container">
        <div class="p-3 mt-3 mb-5 text-center fw-semibold fs-3 text-light rounded" style="background-color:black; margin-left:25%; margin-right:25%;">Welcome to our tourism management website</div>

        <div class="row mb-3" style="margin-top: 100px;">
            <label for="option" class="col-lg-5 fs-5" style="margin-left: 33%; margin-bottom:20px;">Please, login to continue to our website!</label>
            <a class="btn text-light rounded col-sm-2" style="background-color:black; margin-left:40%; margin-bottom:80px;" href="tourist_login.php" role="button">Login</a>
            <label for="option1" class="col-lg-5 fs-5" style="margin-left: 33%; margin-bottom:20px;">Don't have an account? Create one here!</label>
            <a class="btn text-light rounded col-sm-2" style="background-color:black; margin-left:40%; margin-bottom:80px;" href="tourist_signup.php" role="button">Signup</a>
        </div>
    </div> -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>
</body>

</html>