<?php
require_once('config.php');
error_reporting(0);
mysqli_report(MYSQLI_REPORT_INDEX);
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Packages in India</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Tourist Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" style="margin-left: 20px;" aria-current="page" href="homePage.php">Home</a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link text-light" style="margin-left: 15px;" aria-current="page" href="profile.php">Profile</a>
        </li> -->
      </ul>
      <button class="btn btn-light" style="margin-left: 950px;" onclick="window.location.href = 'logout.php';">Log Out</button>
    </div>
  </div>
</nav>

<div class="container py-4">
<div class="p-3 mt-3 mb-5 text-center fw-semibolds fs-3 text-light rounded" style="background-color:black; margin-left:30%; margin-right:30%">Packages For Tourists</div>
    <div class="row mt-4">

        <?php
                $sql = "SELECT * FROM t_packages WHERE 1";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result) > 0;
                // $arr = mysqli_fetch_array($result);
                if($num)
                {
                while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <div class="col-md-3 mb-3">
            <div class="card">
            <img src="<?php echo $row['image']; ?>" class="card-img-top" width=200px height=200px alt="Error loading image!">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['pdestination']; ?></h5>
                    <h6 class="card-title">Package ID: <?php echo $row['package_id']; ?></h6>
                    <h6 class="card-title">Price: <?php echo $row['pamount']; ?></h6>
                    <p class="card-text">Date: <?php echo $row['pdate']; ?></p>
                    <p class="card-text">Number of days: <?php echo $row['pdays']; ?></p>
                    <p class="card-text">Mode of transportation: <?php echo $row['ptransportation']; ?></p>
                    <p class="card-text">Total vacancies: <?php echo $row['pvacancy']; ?></p>
                    <p class="card-text">Tour type: <?php echo $row['ptype'];?></p>
                    <p class="card-text">Tour category: <?php echo $row['pcategory'];?></p>
                    <a href="reservation.php" class="btn text-light rounded" style="background-color:black">Reserve your seat</a>
                </div>
            </div>
        </div>
    
        <?php
                }
                    }
                ?>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>
</body>

</html>