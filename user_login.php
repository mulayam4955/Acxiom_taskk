<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="style.css">
        </head>
<body>
    <div class="container">
        <form action="login_customer.php" method="post">
         <h1>Event Management System</h1>
         <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
         <?php }  ?>
         <label>User ID </label>
         <input type="text" name="uname" placeholder="User Name"><br>
 
         <label>Password</label>
         <input type="password" name="password" placeholder="Password"><br> 
 
         <!-- <button type="submit">Login</button> -->
         <button type="cancel">Cancel</button>
         <button type="submit"><a href="user_signup.php" class="ca">SIGNUP</a></button>
         <button type="submit">LOGIN</button>
         <!-- <a href="user_signup.html" class="ca">Create an account</a>
         <a href="welcome_user.php" class="ca">Login</a> -->
        </form>
     </div>


</body>
</html>