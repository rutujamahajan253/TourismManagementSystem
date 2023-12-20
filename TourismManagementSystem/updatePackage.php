<?php
require_once('config.php');
error_reporting(0);
mysqli_report(MYSQLI_REPORT_INDEX);
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="module.css">
    <link rel="stylesheet" href="Profile_Pic.css">
    <title>Update Package</title>
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
      <button class="btn btn-light" style="margin-left: 980px;" onclick="window.location.href = 'admin.php';">Back</button>
      <button class="btn btn-light" style="margin-left: 20px;" onclick="window.location.href = 'logout.php';">Log Out</button>
        </div>
  </div>
</nav>

    <div>
        <?php
        $docid = 0;
        if (isset($_POST['submit'])) {
            $package_id = $_POST['package_id'];
            $destination = $_POST['pdestination'];
            $amount = $_POST['pamount'];
            $date = $_POST['pdate'];
            $days = $_POST['pdays'];
            $transportation = $_POST['ptransportation'];
            $vacancy = $_POST['pvacancy'];
            $type = $_POST['ptype'];
            $category = $_POST['pcategory'];
            $eid = $_POST['eid'];
            $hid = $_POST['hid'];
            $image = $_POST['image'];

            $target = "t_packages/".basename($image);

            $sql = "UPDATE `t_packages` SET `pdestination`='$destination', `pamount`='$amount',`pdate`='$date', `pdays`='$days', `ptransportation`='$transportation', `pvacancy`='$vacancy',`ptype`='$type',`pcategory`='$category',`eid`='$eid',`hid`='$hid', `image`='$image' WHERE `package_id`='$package_id'";

            // $result = mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql);
            // $num = mysqli_num_rows($result);

            if ($result) {
                echo '<html><div class="alert alert-primary" role="alert">
               Package updated successfully!
              </div></html>';
            } else {
                echo '<html><div class="alert alert-danger" role="alert">
                Package not updated!!
               </div></html>';
            }
        }

        ?>
    </div>

    <!-- Page content holder -->
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="page-content p-5" id="content">
            <section style="background-color: #eee;">
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="package_id" class="form-label">Enter the package ID to update</label>
                                        <input type="text" class="form-control" id="package_id" name="package_id" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="image" class="form-label">Update the picture</label>
                                        <input type="file" class="form-control" id="image" name="image" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="pdestination" class="form-label">Destination</label>
                                        <input type="text" class="form-control" id="pdestination" name="pdestination">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="pamount" class="form-label">Total amount</label>
                                        <input type="text" class="form-control" id="pamount" name="pamount">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="pdate" class="form-label">Enter the start date</label>
                                    <input type="date" class="form-control" id="pdate" name="pdate">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="pdays" class="form-label">Number of days</label>
                                        <input type="text" class="form-control" name="pdays">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-2 col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="ptransportation" class="form-label">Mode of transportation</label>
                                        <input type="text" class="form-control" id="ptransportation" name="ptransportation">
                                    </div>
                                </div>
                                <div class="mt-2 col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="pvacancy" class="form-label">Total vacancies</label>
                                        <input type="text" class="form-control" id="pvacancy" name="pvacancy">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-2 col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="ptype" class="form-label">Type of tour</label>
                                        <input type="text" class="form-control" id="ptype" name="ptype">
                                    </div>
                                </div>
                                <div class="mt-2 col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                    <label for="pcategory" class="form-label">Category of tour</label>
                                        <input type="text" class="form-control" id="pcategory" name="pcategory">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 row">
                                <div class="mt-2 col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <input type="text" class="form-control" id="eid" name="eid" placeholder="ID of employee alloted">
                                    </div>
                                </div>
                                <div class="mt-2 col-sm-6">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <input type="text" class="form-control" id="hid" name="hid" placeholder="ID of hotel alloted">
                                    </div>
                                </div>
                                <br>
                            <div class="row">
                                <div class="col-sm-5">
                                </div>
                                <div class="col-sm-6">
                                    <input class="btn btn-dark text-light rounded" type="submit" name="submit" value="Update package">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </form>

    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Bootstrap table and table-dark classes -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">srno</th>
                    <th scope="col">destination</th>
                    <th scope="col">amount</th>
                    <th scope="col">date</th>
                    <th scope="col">days</th>
                    <th scope="col">transportation</th>
                    <th scope="col">vacancy</th>
                    <th scope="col">type</th>
                    <th scope="col">category</th>
                    <th scope="col">eid</th>
                    <th scope="col">hid</th>
                    <th scope="col">image dir</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM t_packages WHERE 1";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                $arr = mysqli_fetch_array($result);
                while ($arr = mysqli_fetch_array($result)) {
                ?>

                    <tr class=" ">
                        <td><?php echo $arr['package_id'];  ?></td>
                        <td><?php echo $arr['pdestination'];  ?></td>
                        <td><?php echo $arr['pamount']; ?></td>
                        <td><?php echo $arr['pdate']; ?></td>
                        <td><?php echo $arr['pdays']; ?></td>
                        <td><?php echo $arr['ptransportation']; ?></td>
                        <td><?php echo $arr['pvacancy']; ?></td>
                        <td><?php echo $arr['ptype']; ?></td>
                        <td><?php echo $arr['pcategory']; ?></td>
                        <td><?php echo $arr['eid']; ?></td>
                        <td><?php echo $arr['hid']; ?></td>
                        <td><?php echo $arr['image']; ?></td>
                    </tr>
                <?php
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>

    <script>
        $(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
        });

        function myFunction() {
            alert("Doctor added successfully.");
        }
    </script>

</body>

</html>