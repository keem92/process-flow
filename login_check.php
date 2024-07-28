<?php
    include './connection.php';
    session_start();


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from registration where username = '".$name."' and password = '".$password."' ";
        $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);


            if($row["usertype"] == "admin")
            {
                $_SESSION['username']=$name;
                $_SESSION['usertype']="admin";
                header("location:./admin/index.php");
            }
            elseif($row["usertype"] == "marketer")
            {
                $_SESSION['usertype']="marketer";
                $_SESSION['username']=$name;
                header("location:./marketer/index.php");
            }
            elseif($row["usertype"] == "vendor")
            {
                $_SESSION['username']=$name;
                $_SESSION['usertype']="vendor";
                header("location:./vendor/index.php");
            }else{
                // echo "<script type='text/javascript'>alert('Email Already Taken!');</script>";
                
                $message= "Invalid Username or Password!!!";
                $_SESSION['loginMessage']=$message;
                header("locatiom:login.php");
            }
    }
?>