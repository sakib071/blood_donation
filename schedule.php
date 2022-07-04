<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "blood_donation";

$connection = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['subbtn'])) 
{
    if (!empty($_POST['username']) && !empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['date']) && !empty($_POST['bloodgroup']) && !empty($_POST['address'])) 
    {
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $bloodgroup = $_POST['bloodgroup'];
        $address = $_POST['address'];
        if($run -> num_rows > 0){
            //
        }else{
        $query = "INSERT INTO schedule(username,full_name,email,phone,date,bloodgroup,address) VALUES('$username','$full_name','$email','$phone','$date','$bloodgroup','$address')";
        $run =  mysqli_query($connection, $query);
        if($run)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            echo "Appointment submitted";
            header("Location: home2.html");
        }
        else
            echo "Password not matched";
        }
            }
        else
            echo "Appointment no submitted";
    }
?>