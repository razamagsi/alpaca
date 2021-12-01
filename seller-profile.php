<?php
session_start();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
    header('location: login.php');
    
}

//$id = $_GET['id'];
$showqurry =" SELECT * FROM buyer_details  where id={'ids'}";
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
    <title>ALPACA-Seller-Profile</title>
    <style>
   .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}
table{
    border: 1px solid black;
    
}

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
                            <span class="me-2"><i class="bi bi-people"></i></span>
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
                                    <a href="buyer.php" class="nav-link px-3 active ">
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
                            <span class="me-2"><i class="bi bi-clipboard"></i></span>
                            <span>Complaints</span>
                        </a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="sales.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-cart-check-fill"></i></span>
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
   
    
    <main class="mt-5 pt-3  card-body border-0">
        <div class="container-fluid ">
            <div class=" row ">
                <div class="col-md-12 ">
                    <h4>Sellers Profile</h4>
                </div>

                <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-image width:100">
                                    <thead>
                                    <?php
                                      error_reporting();
                                 
                                     include("connection.php");
                                 
                                     $sid = $_GET['id'];                                    
                                     $sname = $_GET['bname'];                                    
                                     $email = $_GET['bemail'];                                    
                                     $simage = $_GET['bimage'];                                    
                                     $snumber = $_GET['bnumber'];                                    
                                     $saddress = $_GET['baddress'];                                    
                                     $sgender = $_GET['bgender'];                                    
                                     $scity = $_GET['bcity'];                                    
                                     $scountry = $_GET['bcountry'];                                    
                                     $idcardno = $_GET['idcardno'];                                    
                                     $category = $_GET['category'];                                    
                                     $companyname = $_GET['companyname'];                                    
                                     $dob = $_GET['dob'];                                    
                                     $nameonid = $_GET['nameonid'];                                     
                                     $storename = $_GET['storename'];                                    
                                     $subcategory = $_GET['subcategory'];                                    
                                     $zip = $_GET['bzip'];                                    
                                 
                                    ?>
                                                                    
                                            <td class="w-25">
                                            <img src="./imges/buyer2.jpg" class="rounded-circle img-fluid img-thumbnail" alt="Sheep">
                                            </td>    
                                         <tr>
                                           <th scope="col">ID</th>
                                           <th scope=""><?php echo "$sid"; ?></th>
                                         </tr>
                                         <tr>
                                         <th scope="col">Buyer_Name</th>
                                         <td scope="row"><?php echo "$sname"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Email</th>
                                         <td scope="row"><?php echo "$email"; ?></td>
                                         </tr>
                                         <tr>
                                         <tr>
                                         <th scope="col">Gender</th>
                                         <td scope="row"><?php echo "$sgender"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">ID-Card-No</th>
                                         <td scope="row"><?php echo "$idcardno"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Shop Category</th>
                                         <td scope="row"><?php echo "$category"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Company Name</th>
                                         <td scope="row"><?php echo "$companyname"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">DOB</th>
                                         <td scope="row"><?php echo "$dob"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Name-on-id</th>
                                         <td scope="row"><?php echo "$nameonid"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Store-Name</th>
                                         <td scope="row"><?php echo "$storename"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Sub-Category</th>
                                         <td scope="row"><?php echo "$subcategory"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Phone_No</th>
                                         <td scope="row"><?php echo "$snumber"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Address</th>
                                         <td scope="row"><?php echo "$saddress"; ?> </td>
                                         </tr>
                                         <tr>
                                         <th scope="col">city</th>
                                         <td scope="row"><?php echo "$scity"; ?> </td>
                                         </tr>
                                         <tr>
                                         <th scope="col" title="City Zipcode">Zip</th>
                                         <td scope="row"><?php echo "$zip"; ?></td>
                                         </tr>
                                         <tr>
                                         <th scope="col">Country</th>
                                         <td scope="row"><?php echo "$scountry"; ?></td>
                                         </tr>
                                         
                                    </thead>
		                        </table>   
                                <br>
                                <div class="buttons"> <button class="btn btn-outline-primary px-4">Block</button> <button class="btn btn-primary px-4 ms-3">Active</button> </div>
                            </div>
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