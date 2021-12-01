<?php
session_start();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
    header('location: login.php');
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>ALPACA-Complaint</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <span class="navbar-toggler-icon" data-bs-target="#offcanvasRight"></span>
        </button>

            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">ADMIN</a>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body p-0">

            <nav class="navbar-dark">
                <ul class="navbar-nav">

                    <li>
                        <a data-toggle="tab" href="dashboard.php" class="nav-link px-3 h-10 dashboard">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider bg-light" />
                    </li>

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-people"></i></i></span>
                            <span>Users</span>
                            <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-1">
                                <li>
                                    <a data-toggle="tab" href="buyer.php" class="nav-link px-3  ">
                                        <span class="me-2"><i class="bi bi-bag"></i
                      ></span>
                                        <span>Buyer</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="seller.php" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-shop-window"></i
                      ></span>
                                        <span>Seller</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="products.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-cart3"></i></span>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-clipboard"></i
        ></span>
                            <span>Complaints</span>
                        </a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="sales.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-cart-check-fill"></i
        ></span>
                            <span>Sales</span>
                        </a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider bg-light" />
                    </li>


                </ul>
            </nav>
        </div>
    </div>
    <!-- dashboard -->

    <main class="mt-5 pt-3  card-body border-0">
        <div class="container-fluid ">
            <div class=" row ">
                <div class="col-md-12 ">
                    <h4>Complaints</h4>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 mb-3 ">
                    <div class="card ">
                        <div class="card-header ">
                            <span><i class="bi bi-table me-2 "></i></span> <b> Complaints Title</b>
                        </div>
                        <div class="card-body ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Complaint ID: </th>
                                    </tr>
                                    <?php
                                    error_reporting();

                                      include("connection.php");

                                      $cid = $_GET['id'];                                    
                                      $cdetail = $_GET['cd'];                                    
                                      $cdes = $_GET['cdes'];                                    
                                        


                                      ?>
                                    <tr>
                                
                                        <td ><?php echo "$cid" ?></td>
                                        </tr>
                                        <tr>
                                        <th scope="col"> Complaint Details: </th>
                                        </tr>
                                        <tr>
                                        <td><?php echo "$cdetail" ?></td>
                                        </tr>
                                        <tr>
                                        <th scope="col">Complaint Description: </th>
                                        </tr>
                                        <tr>
                                        <td><?php echo "$cdes" ?></td>
                                        </tr>
                                     
                                      <td><a href="complaints.php"><button class="btn btn-primary" title="Check Complaints">Check</button></a></td>
                                        

                            
                           
                                </thead>
                                

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js "></script>
    <script src="./js/jquery-3.5.1.js "></script>
    <script src="./js/jquery.dataTables.min.js "></script>
    <script src="./js/dataTables.bootstrap5.min.js "></script>
    <script src="./js/script.js "></script>
</body>

</html>