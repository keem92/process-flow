<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>
<body>
    <!--ring div starts here-->
  <div class="ring">
    <i style="--clr:#00ff0a;"></i>
    <i style="--clr:#ff0057;"></i>
    <i style="--clr:#fffd44;"></i>
    <div class="login">
      <h2>Login</h2>
      <form action="check.php" method="POST" class="login_form">  
        <div class="inputBx">
          <input type="text" placeholder="Username" name="uname">
        </div>
        <div class="inputBx">
          <input type="password" placeholder="Password" name="password">
        </div>
        <div class="inputBx">
          <input type="submit" value="Sign in">
        </div>
        <!-- <div class="links">
          <a href="#">Forget Password</a>
          <a href="#">Signup</a>
        </div> -->
        
      </form>
    </div>
  </div>
  <!--ring div ends here-->
</body>
</html>