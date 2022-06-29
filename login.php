<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "blood_donation";

$connection = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['loginbtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = (" SELECT * FROM register where username = '$username' and password = '$password'");

    $query = $connection->query($sql);

   if($username == $_POST['username'])
   {
    if (mysqli_num_rows($query)>0){
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: home2.html');
        $sql = "INSERT INTO user(email) VALUES('$email')";
    }else{
        echo 'Wrong Password Or id';
        header('location: login_back.html');
    }
    }
    else{
        echo 'Wrong Password Or id';
        header('location: login_back.html');
    }
}
?>