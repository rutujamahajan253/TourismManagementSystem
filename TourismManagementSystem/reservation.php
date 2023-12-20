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
    <title>Tourist Reservation</title>
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
          <a class="nav-link active text-light" style="margin-left: 20px;" aria-current="page" href="homePage.php">Home</a>
        </li>
      </ul>
      <button class="btn btn-light" style="margin-left: 1050px;" onclick="window.location.href = 'logout.php';">Log Out</button>
    </div>
  </div>
</nav>

<div>
        <?php
        $rid=0;
        if (isset($_POST['pay'])) {

            $adults = $_POST['rpeople'];
            $children = $_POST['rchildren'];
            $tid = $_POST['tid'];
            $package_id = $_POST['package_id'];

            $sql = "INSERT INTO `t_reservation` (`rid`, `rpeople`, `rchildren`,`package_id`,`tid`,`date`) VALUES ('$rid','$adults', '$children','$package_id', '$tid',current_timestamp())";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<html><div class="alert alert-success" role="alert">
               Revervation is done successfully!
              </div></html>';
              header("Location: payment.php");
            } else {
                echo '<html><div class="alert alert-danger" role="alert">
                Reservation unsuccessfull!!
               </div></html>';
            }
        }
        ?>
    </div>

    <div class="container">
        <div class="p-3 mt-3 mb-5 text-center fw-semibold fs-2 rounded" style="margin-left:30%; margin-right:30%;">Tourist Reservation</div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="reserve">
            <!-- <div class="row mb-3"> -->
                <div class="row">
                <label for="Num_of_people" class="col-sm-3 col-form-label" style="margin-left:30%; margin-bottom:20px;">Number of adults</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="Num_of_people" name="rpeople" required>
                </div>
                </div>

                <div class="row">
                <label for="Num_of_child" class="col-sm-3 col-form-label" style="margin-left:30%; margin-bottom:20px;">Number of children</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="Num_of_child" name="rchildren" required>
                </div>

                </div>
                <div class="row">
                <label for="package_id" class="col-sm-3 col-form-label" style="margin-left:30%; margin-bottom:20px;">Enter the package ID of your choice</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="package_id" name="package_id" required>
                </div>
                </div>
                <div class="row">
                <label for="tid" class="col-sm-3 col-form-label" style="margin-left:30%; margin-bottom:20px;">Enter your ID</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="tid" name="tid" required>
                </div>
                </div>
            <!-- </div> -->
            <!-- <div class="row mb-3">
                <label for="Reservation_start_date" class="col-sm-3 col-form-label">Start date</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="Reservation_start_date">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Reservation_end_date" class="col-sm-3 col-form-label">End date</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="Reservation_end_date">
                </div>
            </div> -->
            <div class="row mb-3">
                <div class="col-6 mt-4" style="margin-left:45%">
                <input type="submit" value="Make payment" name="pay" class="btn text-light rounded" style="background-color:black;">
                    <!-- <a class="btn text-light rounded" style="background-color:black" href="payment.php" role="button">Make Payment</a> -->
                    <!-- <button type="submit" class="btn text-light rounded" onclick="window.location.href = 'payment.html'" style="background-color:blueviolet">Make Payment</button> -->
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>