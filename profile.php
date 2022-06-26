<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <title>Profile</title>
</head>

<body>
    <div class="titletag">
        <h1>HELP AND BE HELPED</h1>
    </div>
    <div class="container">
    <div class="title">Profile</div>
        <?php
                $connection = mysqli_connect("localhost", "root", "","blood_donation");
                $sql = "SELECT * from register where username = 'jubair031'";
                $result = $connection->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo '<form method="post" class="form">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Username</span>
                            <p class="usertext">'.$row['username'].' </p>
                        </div>
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <p class="fullnametext">'.$row['full_name'].'</p>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="emailtext" value="'.$row['email'].'" name="email">
                        </div>
                        <div class="input-box">
                            <span class="details">Phone</span>
                            <input type="text" value="'.$row['phone'].'" name="phone">
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="text" value="'.$row['password'].'" name="password">
                        </div>
                        <div class="input-box">
                            <span class="details">Blood Group</span>
                            <p class="bloodgrptext">'.$row['bloodgroup'].'</p>
                        </div>
                        <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text" value="'.$row['address'].'" name="address">
                        </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <p class="gendertext">'.$row['gender'].'</p>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" class="updatebtn" name="updatebtn" value="Update">
                    </div>
                </form>';
                }
        ?>
    </div>
    
    <?php      
         $connection->close();
    ?>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>