<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "blood_donation";

$connection = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['subbtn'])) 
{
    if (!empty($_POST['username']) && !empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['bloodgroup'])) 
    {
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];
        $address = $_POST['address'];
        if($run -> num_rows > 0){
            //
        }else{
        $query = "INSERT INTO schedule(username,full_name,email,phone,gender,bloodgroup,address) VALUES('$username','$full_name','$email','$phone','$gender','$bloodgroup','$address')";
        $run =  mysqli_query($connection, $query);
        if($run)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            echo "Registered";
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