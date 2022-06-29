<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "blood_donation";

$connection = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['regbtn'])) 
{
    if (!empty($_POST['username']) && !empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['gender']) && !empty($_POST['bloodgroup'])) 
    {
        $username = $_POST['username'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = ($_POST['password']);
        $confirm_password = ($_POST['confirm_password']);
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];
        $address = $_POST['address'];

        if($password == $confirm_password)
        {
            $query = "SELECT * FROM REGISTER WHERE email = '$email' AND password = '$password'";
            $run = mysqli_query($connection, $query);
            if($run -> num_rows > 0){
                echo "Email already registered.";
            }else{
            $query = "INSERT INTO REGISTER(username,full_name,email,phone,password,confirm_password,gender,bloodgroup,address) VALUES('$username','$full_name','$email','$phone','$password','$confirm_password','$gender','$bloodgroup','$address')";
            $run =  mysqli_query($connection, $query);
            if($run)
            {
                echo "Registered";
                header("Location: home2.html");
            }
            else
                echo "Password not matched";
        }
            }
        else
            echo "Password not matched";
    }
}
?>