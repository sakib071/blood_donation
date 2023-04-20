<?php
session_start();
if(isset($_POST['regbtn']))
{
    header('location: register.html');
}
else if(isset($_POST['loginbtn']))
{
    header('location: login.html');
}
// if (mysqli_num_rows($query)>0){
//     session_start();
//     $_SESSION['username'] = $_POST['username'];
// }
?>