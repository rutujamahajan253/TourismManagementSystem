<?php
require_once('config.php');
error_reporting(0);
mysqli_report(MYSQLI_REPORT_INDEX);
// session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourist Login Form</title>
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
        session_start();
        if (isset($_POST['submit'])) {
            $email = $_POST['temail'];
            $password = $_POST['tpassword'];
            $_SESSION['email'] = $email;
            $_SESSION['role'] = 1;
            $email_search = "SELECT * FROM t_signup WHERE temail='$email' AND tpassword='$password'";
            $query = mysqli_query($conn, $email_search);
            $email_count = mysqli_num_rows($query);

            if ($email == 'admin@gmail.com' && $password == 'admin'){
                $_SESSION['email'] = $email;
                $_SESSION['status'] = 1;
                $_SESSION['role'] = 'admin';
                header("Location: admin.php");
            }
            else {
            if(mysqli_num_rows($query) != 0) {
                $_SESSION['temail'] = $email;
                $_SESSION['status'] = 1;
                $_SESSION['role'] = 'tourist';
                header("Location: Fpackage.php");
            }
            else {
                echo '<script>alert("Invalid Email Or Password.")</script>';
            }
        }
        }
        ?>
    </div>
    <div class="container">
        <div class="p-3 mt-3 mb-5 text-center fw-semibold fs-3 rounded" style="margin-left:30%; margin-right:30%">TOURIST LOGIN FORM</div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"  style="margin-left:30%; margin-right:30%">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" name="temail" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" name="tpassword" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 mt-4" style="margin-left:45%">
                <input type="submit" name="submit" id="submit" class="btn text-light rounded" style="background-color:black" value="Login">
                    <!-- <a class="btn text-light rounded" style="background-color:blueviolet" href="packages.html" role="button">Log in</a> -->
                    <!-- <button type="submit" class="btn text-light rounded" style="background-color:blueviolet">Log in</button> -->
                </div>
            </div>
        </form>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>
</body>

</html>