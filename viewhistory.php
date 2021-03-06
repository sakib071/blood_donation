<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/donar_search.css">
    <title>View History</title>
</head>

<body>
    <div class="titletag">
        <h1>HELP AND BE HELPED</h1>
    </div>
    <div class="container">
        <div class="title">View History</div>
        <form action="viewhistory.php" method="post" class="form">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <h3>Name</h3>
                        </th>
                        <th scope="col">
                            <h3>Blood Group</h3>
                        </th>
                        <th scope="col">
                            <h3>Address</h3>
                        </th>
                        <th scope="col">
                            <h3>Phone</h3>
                        </th>
                        <th scope="col">
                            <h3>Date</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $uid = $_SESSION['username'];
                    $connection = mysqli_connect("localhost", "root", "", "blood_donation");
                    $sql = "SELECT * from schedule where username = '$uid'";
                    $result = $connection->query($sql);

                    if($username = $uid)
                    {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "</td><td>" . $row['full_name'] . "</td><td>" . $row['bloodgroup'] . "</td><td>". $row['address']. "</td><td>".$row['phone']."</td><td>" . $row['date'] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No records found";
                    }
                    }
                    $connection->close();

                    if(isset($_POST['back']))
                    {
                        header('location: home2.html');
                    }
                    ?>
                </tbody>
            </table>
            <div class="input-group">
                <button class="back" name="back">Back to home</button>
            </div>


        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php
    exit();
    $connection->close();
?>