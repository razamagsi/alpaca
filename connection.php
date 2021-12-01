<?php 

$severname ="localhost";
$username ="root";
$password ="";
$dbname ="alpaca2";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if($conn){

    //echo("Connection Sussesfull");
}
else{
    echo" Connection Failed".mysqli_connect_errno();
}

?>