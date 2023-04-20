<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "blood_donation";

$connection = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['loginbtn'])) {
    $username = $_POST['username'];
    $raw_password = $_POST['password'];

    $sql = (" SELECT * FROM register where username = '$username' ");

    $query = $connection->query($sql);
    $hashed_pass = $query->fetch_assoc()['password'];

    if (mysqli_num_rows($query)>0 && password_verify($raw_password, $hashed_pass)){
        session_start();
        $_SESSION['username'] = $query->fetch_assoc()['username'];
        $_SESSION['email'] = $query->fetch_assoc()['email'];
        header('location: home2.html');
        $sql = "INSERT INTO user(email) VALUES('$username')";
        $query = $connection->query($sql);
    }else{
        echo 'Wrong Password Or id';
        header('location: login_back.html');
    }
}
?>