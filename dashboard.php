<?php
session_start();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
   // echo"Wrong Name or Password";
    
    header('location: login.php');
    
    
}
?>

<?php
include("connection.php");
//$id = $_GET['id'];
//$showqurry =" SELECT * FROM complaints  where id={'ids'}";
//$showdata = mysqli_query($conn, $showqurry);
$qurry = "SELECT * FROM complaints";
$data = mysqli_query($conn, $qurry);
$total = mysqli_num_rows($data);
//?>
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
    <title>ALPACA-Dashboard</title>
    <style>
       
    </style>

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
                        <a data-toggle="tab" href="#" class="nav-link px-3 active h-10 dashboard">
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
                                    <a data-toggle="tab" href="buyer.php" class="nav-link px-3">
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
                        <a href="complaint.php" class="nav-link px-3">
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
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-3 mb-3 text-center ">
                    <div class="card bg-primary text-white " style="width: 100%;">
                        <div class="card-header fw-bold align-self-md-auto ">Total Users</div>
                        <div class="card-body py-2 text-center fw-bold ">
                            <h1>45</h1>
                        </div>
                        <button class="btn btn-primary "> View Details <span class="ms-auto ">
                  <i class="bi bi-chevron-right "></i>
                </span></button>

                    </div>
                </div>
                <div class="col-md-3 mb-3 text-center ">
                    <div class="card bg-warning text-white " style="width: 100%;">
                        <div class="card-header fw-bold align-self-md-auto ">Total Revenue</div>
                        <div class="card-body py-2 text-center fw-bold ">
                            <h1>36</h1>
                        </div>
                        <button class="btn btn-warning "> View Details <span class="ms-auto ">
                  <i class="bi bi-chevron-right "></i>
                </span></button>

                    </div>
                </div>
                <div class="col-md-3 mb-3 text-center ">
                    <div class="card bg-success text-white " style="width: 100%;">
                        <div class="card-header fw-bold align-self-md-auto ">Total Orders</div>
                        <div class="card-body py-2 text-center fw-bold ">
                            <h1>36</h1>
                        </div>
                        <button class="btn btn-success "> View Details <span class="ms-auto ">
                  <i class="bi bi-chevron-right "></i>
                </span></button>

                    </div>
                </div>
                <div class="col-md-3 mb-3 text-center ">
                    <div class="card bg-danger text-white " style="width: 100%;">
                        <div class="card-header fw-bold align-self-md-auto ">Todays Orders</div>
                        <div class="card-body py-2 text-center fw-bold ">
                            <h1>29</h1>
                        </div>
                        <button class="btn btn-danger "> View Details <span class="ms-auto ">
                  <i class="bi bi-chevron-right "></i>
                </span></button>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3 col-12">
                    <div class="card ">
                        <div class="card-header ">
                            <span><i class="bi bi-table me-2 "></i></span> Complaints
                        </div>
                        <div class="card-body col-md-12 mb-3 col-12 ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Complaint ID</th>
                                        <th scope="col">Complaint Description</th>
                                        <th scope="col">Complaint Details </th>
                                        <th scope="col">Visit </th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="col-md-12 mb-3 col-12" >
                               <?php
                                    if($total != 0){
                                        while($result = mysqli_fetch_assoc($data)){
                                         ?>
                                            <tr>
                                            <td><?php echo $result["complaint-id"]; ?></td>
                                            <td><?php echo $result["complaint-description"]; ?></td>
                                            <td><?php echo $result["complaint-details"];?></td>
                                            <td><a href="complaints.php?id=<?php echo $result["complaint-id"]?>&cd=<?php echo $result["complaint-description"];?>&cdes=<?php echo $result["complaint-details"];?>"><button class="btn btn-primary" title="Check Complaints">Check</button></a></td>

                                            </tr> 
                                           
                                           <?php 
                                        }    
                                    }
                                     
                                    else{
                                        echo" <tr>
                                        <th colspan='3'> No Records Found </th>
                                        </tr>";
                                    }
                                    ?>                            
                                 </tbody>
                            
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