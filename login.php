<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body background="../images/lector.jpg" class="body_deg">
    
    <center>

        <div class="form_deg">

            <center class="tittle_deg">
                Login Form

                <h4>
                    <!-- HOW TO LOGIN MESSAGE DISPLAY -->
                    <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                </h4>
            </center>

            <form action="login_check.php" method="POST" class="login_form">

                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="Password" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="login">
                </div>

            </form>

        </div>

    </center>

</body>
</html>