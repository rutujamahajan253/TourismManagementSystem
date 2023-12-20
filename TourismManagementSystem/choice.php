<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login/Signup Option Form</title>
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
    </div>
  </div>
</nav>

    <div class="container">
        <div class="mt-4 mb-5 text-center fw-semibold fs-3 rounded" style="margin-left:23%; margin-right:25%;">Choose one action to be performed</div>

        <!-- <div class="row mb-3"> -->
            <div class="row">
            <label for="gotoPackage" class="col-sm-4 fs-5" style="margin-left: 25%;">Return to the packages</label>
            <a class="btn text-light rounded col-sm-2" style="background-color:black; margin-left:10%; margin-bottom:60px;" href="Fpackage.php" role="button">Go to Packages</a>
            </div>

            <div class="row">
            <label for="logout" class="col-sm-4 fs-5" style="margin-left: 25%">Log out from the website</label>
            <a class="btn text-light rounded col-sm-2" style="background-color:black; margin-left:10%; margin-bottom:60px;" href="logout.php" role="button">Log out</a>
            </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>
</body>

</html>