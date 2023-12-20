<?php
require_once('config.php');
error_reporting(0);
mysqli_report(MYSQLI_REPORT_INDEX);
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
        if (isset($_POST['submit'])) {
            $firstname = $_POST['efname'];
            $lastname = $_POST['elname'];
            $address = $_POST['eaddress'];
            $city = $_POST['ecity'];
            $email = $_POST['email'];
            $mobilenumber = $_POST['emobile'];
            $destination = $_POST['destination'];

            $sql = "INSERT INTO `t_employee` (`eid`,`efname`, `elname`,`eaddress`, `ecity`, `email`, `emobile`,`destination`) VALUES ('$eid','$firstname', '$lastname','$address', '$city','$email', '$mobilenumber', '$destination')";

            // $result = mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql);
            // $num = mysqli_num_rows($result);

            if ($result) {
                echo '<html><div class="alert alert-primary" role="alert">
               Data is successfully saved.
              </div></html>';
            } else {
                echo '<html><div class="alert alert-danger" role="alert">
                Data not saved to the database.
               </div></html>';
            }
        }
        ?>
    </div>

    <div class="page-content p-5" id="content">
        <!-- Bootstrap table and table-dark classes -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">srno</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">address</th>
                    <th scope="col">city</th>
                    <th scope="col">email</th>
                    <th scope="col">mobilenumber</th>
                    <th scope="col">destination</th>
                </tr>
            </thead>
            <tbody>

                    <tr class=" ">
                        <td>1</td>
                        <td><input type="text" class="form-control" id="firstname" placeholder="First name" name="efname" required></td>
                        <td><input type="text" class="form-control" id="lastname" placeholder="Last name" name="elname" required><?php echo $arr['elname']; ?></td>
                        <td><input type="text" class="form-control" placeholder="Address" name="eaddress" required></td>
                        <td><input type="text" class="form-control" placeholder="City" name="ecity" required></td>
                        <td><input type="email" class="form-control" id="email" name="email" placeholder="Email" required></td>
                        <td><input type="text" class="form-control" id="inputMobileNumber" name="emobile" placeholder="Mobile Number" required></td>
                        <td><input type="text" class="form-control" id="inputDestination" name="destination" placeholder="Input Destination" required></td>
                    </tr>
                    <tr class=" ">
                        <td>2</td>
                        <td><input type="text" class="form-control" id="firstname" placeholder="First name" name="efname" required></td>
                        <td><input type="text" class="form-control" id="lastname" placeholder="Last name" name="elname" required><?php echo $arr['elname']; ?></td>
                        <td><input type="text" class="form-control" placeholder="Address" name="eaddress" required></td>
                        <td><input type="text" class="form-control" placeholder="City" name="ecity" required></td>
                        <td><input type="email" class="form-control" id="email" name="email" placeholder="Email" required></td>
                        <td><input type="text" class="form-control" id="inputMobileNumber" name="emobile" placeholder="Mobile Number" required></td>
                        <td><input type="text" class="form-control" id="inputDestination" name="destination" placeholder="Input Destination" required></td>
                    </tr>
                    <tr class=" ">
                        <td>3</td>
                        <td><input type="text" class="form-control" id="firstname" placeholder="First name" name="efname" required></td>
                        <td><input type="text" class="form-control" id="lastname" placeholder="Last name" name="elname" required><?php echo $arr['elname']; ?></td>
                        <td><input type="text" class="form-control" placeholder="Address" name="eaddress" required></td>
                        <td><input type="text" class="form-control" placeholder="City" name="ecity" required></td>
                        <td><input type="email" class="form-control" id="email" name="email" placeholder="Email" required></td>
                        <td><input type="text" class="form-control" id="inputMobileNumber" name="emobile" placeholder="Mobile Number" required></td>
                        <td><input type="text" class="form-control" id="inputDestination" name="destination" placeholder="Input Destination" required></td>
                    </tr>
                    <tr class=" ">
                        <td>4</td>
                        <td><input type="text" class="form-control" id="firstname" placeholder="First name" name="efname" required></td>
                        <td><input type="text" class="form-control" id="lastname" placeholder="Last name" name="elname" required><?php echo $arr['elname']; ?></td>
                        <td><input type="text" class="form-control" placeholder="Address" name="eaddress" required></td>
                        <td><input type="text" class="form-control" placeholder="City" name="ecity" required></td>
                        <td><input type="email" class="form-control" id="email" name="email" placeholder="Email" required></td>
                        <td><input type="text" class="form-control" id="inputMobileNumber" name="emobile" placeholder="Mobile Number" required></td>
                        <td><input type="text" class="form-control" id="inputDestination" name="destination" placeholder="Input Destination" required></td>
                    </tr>
                    <tr class=" ">
                        <td>5</td>
                        <td><input type="text" class="form-control" id="firstname" placeholder="First name" name="efname" required></td>
                        <td><input type="text" class="form-control" id="lastname" placeholder="Last name" name="elname" required><?php echo $arr['elname']; ?></td>
                        <td><input type="text" class="form-control" placeholder="Address" name="eaddress" required></td>
                        <td><input type="text" class="form-control" placeholder="City" name="ecity" required></td>
                        <td><input type="email" class="form-control" id="email" name="email" placeholder="Email" required></td>
                        <td><input type="text" class="form-control" id="inputMobileNumber" name="emobile" placeholder="Mobile Number" required></td>
                        <td><input type="text" class="form-control" id="inputDestination" name="destination" placeholder="Input Destination" required></td>
                    </tr>
            </tbody>
        </table>

        <input class="btn btn-dark text-light rounded" type="submit" name="submit" value="Add employee">
    </div>

    <script>
        function myFunction() {
            alert("You have successfully paid for your tour!")
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>