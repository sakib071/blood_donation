<?php
include('delete.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/donar_search.css">
    <title>ADMIN</title>
</head>

<body>
    <div class="titletag">
        <h1>HELP AND BE HELPED</h1>
    </div>
    <div class="container">
        <div class="title">Search Donor</div>
        <form action="delete.php" method="post" class="form">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <h3>Username</h3>
                        </th>
                        <th scope="col">
                            <h3>Name</h3>
                        </th>
                        <th scope="col">
                            <h3>Email</h3>
                        </th>
                        <th scope="col">
                            <h3>Phone</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "blood_donation";

$connection = mysqli_connect($server, $user, $pass, $database);
$query = " SELECT * FROM register";
$run = mysqli_query($connection, $query);
if($run){
    while($row = mysqli_fetch_array($run))
    {
        ?>
        <tbody>
            <tr>
                <th><?php echo $row['username']; ?></th>
                <th><?php echo $row['full_name']; ?></th>
                <th><?php echo $row['email']; ?></th>
                <th><?php echo $row['phone']; ?></th>

                <form class="dlt" action="delete.php" method="post">
                <?php $dlter=$row['username']; 
                    echo '<td><button class=btn btn-danger><a href="delete.php?delete='.$dlter.'">Delete</a></button></td>'
                    ?>
                    </form>
            </tr>
        </tbody>
        <?php
    }
}
?>
                </tbody>
            </table>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>