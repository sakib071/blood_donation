<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "blood_donation";

$connection = mysqli_connect($server, $user, $pass, $database);

if(isset($_GET['delete'])){
    echo $_GET['delete'];
    $username = $_GET['delete'];
    $query = "DELETE FROM `REGISTER` where username = '$username'";
    $run =  mysqli_query($connection, $query);

    if($run){
        echo '<script> alert("Deleted successfully"); </script>';
        // header('Location: admin.php');
    }
    else{
        echo '<script> alert("Data no deleted"); </script>';
    }
}
?>