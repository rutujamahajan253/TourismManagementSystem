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
    <title>Delete Employee</title>
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
            $eid = $_POST['eid'];

            $sql = "DELETE FROM `t_employee` WHERE `eid`='$eid'";

            // $result = mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql);
            // $num = mysqli_num_rows($result);

            if ($result) {
                echo '<html><div class="alert alert-primary" role="alert">
               Employee data deleted successfully.
              </div></html>';
            } else {
                echo '<html><div class="alert alert-danger" role="alert">
                Employee data is not deleted.
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
                                    <label for="eid" class="form-label">Enter the employee ID to delete</label>
                                        <input type="text" class="form-control" id="eid" name="eid" required>
                                    </div>
                                </div>
                            </div>
                                <br>
                            <div class="row">
                                <div class="col-sm-5">
                                </div>
                                <div class="col-sm-6">
                                    <input class="btn btn-dark text-light rounded" type="submit" name="submit" value="Delete employee">
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

                <?php
                $sql = "SELECT * FROM t_employee WHERE 1";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                $arr = mysqli_fetch_array($result);
                while ($arr = mysqli_fetch_array($result)) {
                ?>

                    <tr class=" ">
                        <td><?php echo $arr['eid'];  ?></td>
                        <td><?php echo $arr['efname'];  ?></td>
                        <td><?php echo $arr['elname']; ?></td>
                        <td><?php echo $arr['eaddress']; ?></td>
                        <td><?php echo $arr['ecity']; ?></td>
                        <td><?php echo $arr['email']; ?></td>
                        <td><?php echo $arr['emobile']; ?></td>
                        <td><?php echo $arr['destination']; ?></td>
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