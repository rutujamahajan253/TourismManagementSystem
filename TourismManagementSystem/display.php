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
    <title>Dispay Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<div>
        <?php
            if($_SESSION['status']==1)
            {
                $email = $_SESSION['temail'];
                $sql = "SELECT * FROM t_packages WHERE temail='$email'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                $arr = mysqli_fetch_array($result);
            }
            else{
                echo '<html><div class="alert alert-danger" role="alert">
                Login to access.
              </div></html>';
            }

        ?>
    </div>
    
    <section style="background-color: #eee;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Package ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['package_id']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Your Destination</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['pdestination']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Total amount</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['pamount']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Pakage date</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['pdate']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Number of days of tour</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['pdays']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Transportation</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['ptransportation']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Vacancies</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['pvacancy']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Type of package</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['ptype']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Category</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"></p><?php echo $arr['pcategory']; ?>
                                </div>
                            </div>
                            <hr>
                            <!-- <div class="row">
                                <div class="col-sm-5">
                                </div>
                                <div class="col-sm-6">
                                    <input class="btn btn-success" onclick="window.location.href = 'update.php'" value="Update" name="submit">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
        </section>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>
</body>

</html>