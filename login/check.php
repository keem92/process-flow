<?php
    include ("../connection.php");

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $name = $_POST['uname'];

            $pass = $_POST['password'];

            $sql = "select * from registration where username='".$name."' AND password='".$pass."'  ";

            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);

            if($row["usertype"]=="admin")
            {
                echo "<script type='text/javascript'>alert('Successfully Logged In');</script>";
                header("location:../admin/index.php");
            }
            elseif ($row["usertype"]=="marketer")
            {
                echo "<script type='text/javascript'>alert('Successfully Logged In');</script>";
                header("location:../marketer/index.php");
            }
            elseif ($row["usertype"]=="vendor")
            {
                echo "<script type='text/javascript'>alert('Successfully Logged In');</script>";
                header("location:../vendor/index.php");
            }

            else
            {
                echo "<script type='text/javascript'>alert('Incorrect Username or Password');</script>";
                header("location:../login/index.php");
            }
        }

?>