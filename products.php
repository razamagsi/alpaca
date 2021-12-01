<?php
session_start();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
    header('location: login.php');
    
}
?>
<?php
include("connection.php");
error_reporting();
$qurry = "SELECT * FROM product";
$data = mysqli_query($conn, $qurry);
$total = mysqli_num_rows($data);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .price {
    cursor: pointer;
        }
    .checked {
      color: orange;
    }

    </style>

    <title>ALPACA-Products</title>
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
                        <a href="#" class="nav-link px-3 active">
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
                    <h4>Products</h4>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 mb-3 ">
                    <div class="card ">
                        <div class="card-header ">
                            <span><i class="bi bi-table me-2 "></i></span> Products List
                        </div>
                                            
                                            
                                           
                                        
                                           
                                           
                        <?php
                        if($total != 0){
                        while($result = mysqli_fetch_assoc($data)){
                        ?>
                                   
                        <div class="card-body ">
                            <div class="card mb-3" style="max-width: 100%;">
                              <div class="row g-0">
                                <div class="col-md-4">
                                    <?php echo $result["pro-image"]; ?>
                                  <img src="./imges/download.jfif" class="img-fluid rounded-start" alt="...">
                                </div>
                                

                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title" name ="pro-name" ><?php echo $result["product_name"]; ?></h5>
                                    <p class="card-text" name ="pro-description" ><?php echo $result["description"];?></p>
                                    <p class="card-text" name ="store-name"  ><small class="text-muted"><?php echo $result["what_is_in_box"];?></small></p><br>
                                    <p class="card-text text-end price" name ="price" ><medium class=" "><?php echo $result["price"];?></small></p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>                                      
                            </div>    
                        </div>   
                          
                    </div>
                </div>
                                <?php
                            }    
                        }
                         
                        else{
                            echo" <tr>
                            <th colspan='3'> No Records Found </th>
                            </tr>";
                        }
                        ?>    
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