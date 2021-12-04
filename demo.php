<?php
session_start();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
    header('location: login.php');
    
}

//$id = $_GET['id'];
//$showqurry =" SELECT * FROM buyer_name  where id={'ids'}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>

   
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
                                    <a href="buyer.php" class="nav-link px-3 ">
                                        <span class="me-2"><i class="bi bi-bag"></i
                      ></span>
                                        <span>Buyer</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3 active">
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
    <main class="mt-5 pt-3  card-body border-0">
        <div class="container-fluid ">
            <div class=" row ">
                <div class="col-md-12 ">
                    <h4>Seller</h4>
                </div>
                <br><br>
                
                <select name="fetchby" id="fetchval" class="form-select " style="width: 20%;" aria-label="Default select example">
                 <option value="all" selected>All Sellers</option>
                 <option value="Active"> Active Sellers</option>
                 <option value="Blocked">Blocked Sellers</option>
                 <option value="pending">Pending Sellers</option>
               </select>
               <div id="container">
                <div class="row mt-5">
                  <?php
                  include("connection.php");
                  $qurry = " SELECT * FROM user inner join seller_details on user.user_Id = seller_details.sd_Id";
                  $data = mysqli_query($conn, $qurry);
                  while($row = mysqli_fetch_assoc($data)){
  
                  ?>
                
                   <div class="row card col-md-3 mb-3" >
                       <img class="card-img-top" src="./imges/buyer1.jpg" alt="Card image cap">
                        <div class="card-body">
                             <h5 class="card-title"><?php echo $row["seller_name"]; ?></h5>
                             <p class="card-text"><?php echo $row["email"]; ?>
                             <br>
                             <p class="card-text"><?php echo $row["status"]; ?>
                         
                            </p> 
                             <a href="seller-profile.php?id=<?php echo $result["sd_Id"];?>&bname=<?php echo $result["seller_name"]?>&bemail=<?php echo $result["email"];?>&bimage=<?php echo $result["image_path"];?>&bnumber=<?php echo $result["phone_no"];?>&baddress=<?php echo $result["address"];?>&bgender=<?php echo $result["gender"];?>&bcity=<?php echo $result["city"];?>&bcountry=<?php echo $result["country"];?>&bzip=<?php echo $result["zip"];?>&category=<?php echo $result["category"];?>&companyname=<?php echo $result["company_name"];?>&dob=<?php echo $result["dob"];?>&nameonid=<?php echo $result["name_on_id"];?>&storename=<?php echo $result["store_name"];?>&subcategory=<?php echo $result["sub_category"];?>&idcardno=<?php echo $result["id_card_no"];?>"class=" btn btn-primary">View Details</a>
                        </div>
                   
                    </div>
                    <?php   
                    }
                    ?>                         
                     
                </div>
               </div>
            </div>  
        </div>
    </main>
            
</body>
</html>