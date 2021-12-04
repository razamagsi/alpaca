<?php
session_start();

$user = $_SESSION['email'];
if($user == true){

  
}
else{
    header('location: login.php');
    
}



   include("connection.php");
   ?>
   <div class="row mt-5">
     <?php
   $request=$_POST['request'];
   $query="SELECT * FROM user inner join buyer_details on user.user_Id = buyer_details.bd_Id where status='$request'";

   $output=mysqli_query($conn,$query);
   while($fetch = mysqli_fetch_assoc($output))
   {
     ?>
    <div class="row card col-md-3 mb-3">
      <img class="card-img-top" src="./imges/buyer1.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $fetch["buyer_name"]; ?></h5>
            <p class="card-text"><?php echo $fetch["email"]; ?>
            <br>
            <p class="card-text"><?php echo $fetch["status"]; ?>
            <br> <br>
            <a href="buyer-profile.php?id=<?php echo $fetch["bd_Id"];?>&bname=<?php echo $fetch["buyer_name"]?>&bemail=<?php echo $fetch["email"];?>&bimage=<?php echo $fetch["image_path"];?>&bnumber=<?php echo $fetch["phone_no"];?>&baddress=<?php echo $fetch["address"];?>&bgender=<?php echo $fetch["gender"];?>&bcity=<?php echo $fetch["city"];?>&bcountry=<?php echo $fetch["country"];?>&bzip=<?php echo $fetch["zip"];?>" class="btn btn-primary">View Details</a>

    
       </div>
       <?php
}


?>
   </div>