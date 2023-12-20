<?php
require_once('config.php');
error_reporting(0);
mysqli_report(MYSQLI_REPORT_INDEX);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourist Signup Form</title>
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
      <button class="btn btn-light" style="margin-left: 1050px;" onclick="window.location.href = 'homePage.php';">Back</button>
    </div>
  </div>
</nav>

    <div>
        <?php
        $tid=0;
        if (isset($_POST['register'])) {

            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $email = $_POST['temail'];
            $password = $_POST['tpassword'];
            $gender = $_POST['tgender'];
            $age = $_POST['tage'];
            $mobileno = $_POST['tmobile'];
            $address = $_POST['taddress'];
            $city = $_POST['tcity'];

            $sql = "INSERT INTO `t_signup` (`tid`, `fname`, `lname`, `temail`, `tpassword`,`tgender`,`tage`, `tmobile`, `taddress`, `tcity`, `date`) VALUES ('$tid','$firstname', '$lastname', '$email', '$password','$gender','$age','$mobileno', '$address','$city', current_timestamp())";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<html><div class="alert alert-primary" role="alert">
               Data is successfully saved.
              </div></html>';
              header("Location: tourist_login.php");
            } else {
                echo '<html><div class="alert alert-danger" role="alert">
                Data not saved to the database.
               </div></html>';
            }
        }
        ?>
    </div>

    <div class="container fs-6">
        <div class="p-3 mt-3 mb-5 text-center fw-semibold fs-3 text-light rounded" style="background-color:black; margin-left:30%; margin-right:30%;">TOURIST SIGNUP FORM</div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="signup" class="row g-3">
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" required>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="temail" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="tpassword" required>
            </div>
            <div class="col-md-3">
                <label for="tgender" class="form-label">Gender</label>
                <select id="tgender" class="form-select" name="tgender" required>
                    <option selected>Choose</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="tage" class="form-label">Age</label>
                <input type="text" class="form-control" name="tage" required>
            </div>
            <div class="col-md-6">
                <label for="tmobile" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" name="tmobile" required>
            </div>
            <div class="col-md-8">
                <label for="taddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="taddress" placeholder="1234 Main St" required>
            </div>
            <div class="col-md-4">
                <label for="tcity" class="form-label">City</label>
                <input type="text" class="form-control" name="tcity" required>
            </div>
            <!-- <div class="col-6">
            </div> -->
            <div class="col-6 mt-4" style="margin-left:50%">
                <!-- <a class="btn text-light rounded" style="background-color:blueviolet" href="tourist_login.html" role="button" name="register">Sign up</a> -->
                <!-- <a class="btn text-light rounded" style="background-color:blueviolet" role="button" name="register">Sign up</a> -->
                <input type="submit" value="Sign Up" name="register" class="btn text-light rounded" style="background-color:black;">
                <!-- <button type="submit" class="btn text-light rounded" style="background-color:blueviolet" onclick="window.location.href='tourist_login.html'">Sign up</button> -->
                <!-- <button type="submit" class="btn text-light rounded" style="background-color:blueviolet" onclick="window.location.href = 'tourist_login.html';">Sign up</button> -->
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>