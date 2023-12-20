<?php
require_once('config.php');
// error_reporting(0);
mysqli_report(MYSQLI_REPORT_INDEX);
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourist Payment</title>
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
        $pid=0;
        if (isset($_POST['payment'])) {

            $price = $_POST['pprice'];
            $type = $_POST['ptype'];

            $sql = "INSERT INTO `t_payment` (`pid`, `pprice`, `ptype`,`pdate`) VALUES ('$pid','$price', '$type',current_timestamp())";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<html><div class="alert alert-success" role="alert">
               You have successfully paid for the tour!
              </div></html>';
              header("Location: choice.php");
            } else {
                echo '<html><div class="alert alert-danger" role="alert">
                Payment unsuccessfull !!
               </div></html>';
            }
        }
        ?>
    </div>

    <div class="container">
        <div class="p-3 mt-3 mb-5 text-center fw-semibold fs-2 rounded" style="margin-left:30%; margin-right:30%;">Tourist Payment</div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="pay">
            <div class="row mb-3">
                <label for="ptype" class="col-sm-3 col-form-label" style="margin-left:25%; margin-bottom:20px;">Type of payment</label>
                <div class="col-sm-4">
                    <select id="ptype" name="ptype" class="form-select" required>
                        <option selected>Select</option>
                        <option>Google Pay</option>
                        <option>Phonepe</option>
                        <option>Paytm</option>
                        <option>Credit Card</option>
                        <option>Debit Card</option>
                        <option>Offline</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="pprice" class="col-sm-3 col-form-label" style="margin-left:25%; margin-bottom:20px;">Enter total amount</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="pprice" name="pprice" required>
                </div>
    </div>

            <div class="row mb-3">
                <div class="col-6 mt-4" style="margin-left: 45%;">
                <input type="submit" value="Pay" name="payment" class="btn text-light rounded" style="background-color:black;">
                </div>
            </div>
        </form>
    </div>

    <script>
        function myFunction() {
            alert("You have successfully paid for your tour!")
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>