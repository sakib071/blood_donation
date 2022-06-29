<?php
if(isset($_POST['regbtn']))
{
    header('location: register.html');
}
else if(isset($_POST['loginbtn']))
{
    header('location: login.html');
}
?>