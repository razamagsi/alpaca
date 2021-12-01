<?php
session_start();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
    header('location: login.php');
    
}
include("connection.php");
//$id = $_GET['id'];
$showqurry =" SELECT * FROM buyer_name  where id={'ids'}";
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
    <title>ALPACA-Buyer</title>
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
                        <a class="nav-link px-3 sidebar-link active" data-bs-toggle="collapse" href="#layouts">
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
                                    <a href="#" class="nav-link px-3 active ">
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
    <!-- Buyer -->
    <?php
       include("connection.php");
       error_reporting();
       $qurry = "SELECT * FROM buyer_details";
       $data = mysqli_query($conn, $qurry);
       $total = mysqli_num_rows($data) >0;
    ?>
    
    <main class="mt-5 pt-3  card-body border-0">
        <div class="container-fluid ">
            <div class=" row ">
                <div class="col-md-12 ">
                    <h4>Buyers</h4>
                </div>
                <br><br>
                <select class="form-select " style="width: 20%;" aria-label="Default select example">
                 <option selected>All Buyers</option>
                 <option value="1">Active Buyers</option>
                 <option value="2">Blocked Buyers</option>
                 <option value="2">Pending Buyers</option>
               </select>

               
                <div class="row mt-5">

                <?php
                        if($total){
                        while($result = mysqli_fetch_assoc($data)){
                ?>  
           
            
                <div class="row card col-md-3 mb-3" >
                  <img class="card-img-top" src="./imges/buyer1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $result["buyer_name"]; ?></h5>
                        <p class="card-text">

                            <i class="bi bi-envelope"></i>
                            <?php echo $result["email"]; ?> </p>   
                        <a href="buyer-profile.php?id=<?php echo $result["bd_Id"];?>&bname=<?php echo $result["buyer_name"]?>&bemail=<?php echo $result["email"];?>&bimage=<?php echo $result["image_path"];?>&bnumber=<?php echo $result["phone_no"];?>&baddress=<?php echo $result["address"];?>&bgender=<?php echo $result["gender"];?>&bcity=<?php echo $result["city"];?>&bcountry=<?php echo $result["country"];?>&bzip=<?php echo $result["zip"];?>" class="btn btn-primary">View Details</a>
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