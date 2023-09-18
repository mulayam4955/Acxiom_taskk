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
        <form action="login_admin.php" method="post">
         <h1>Event Management System</h1>
         <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
         <?php }  ?>
         <label>ADMINID </label>
         <input type="text" name="uname" placeholder="User Name"><br>
 
         <label>ADMINPASSWORD</label>
         <input type="password" name="password" placeholder="Password"><br> 
 
         <!-- <button type="submit">Login</button> -->
         <button type="cancel">Cancel</button>
         <button type="submit">LOGIN</button>

         <!-- <button type="submit">SIGNUP</button> -->
         <!-- <a href="maintain.php" class="ca">Login</a> -->
         <a href="admin_signup.php" class="ca">Create an account</a> 

        </form>
     </div>


</body>
</html>