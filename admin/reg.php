<?php
    session_start();
	if(!isset($_SESSION['username']))
	{
		header("location:../login.php");
	}
	elseif($_SESSION['usertype']=='admin')
	{
		header("location:../login.php");
	}
	elseif($_SESSION['usertype']=='vendor')
	{
		header("location:../login.php");
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="reg.css">

    <!-- BOOTSTRAP CDN LINK -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container my-5">
        <h2>TABLE DATA</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE NUMBER</th>
                    <th>USER TYPE</th>
                    <th>GENDER</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../connection.php';

                    $sql = "SELECT * FROM registration";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                        echo"
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[usertype]</td>
                                <td>$row[gender]</td>
                                <td>
                                    <a class='btn btn-primary btn-sm' href='/'>Edit</a>;
                                    <a class='btn btn-danger btn-sm' href='/'>Delete</a>;
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>