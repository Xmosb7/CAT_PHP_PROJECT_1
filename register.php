<?php   include('server.php');  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User Registeration</title>
</head>
<body>
    <div class="header">
         <h2>Register to My system</h2>
    </div>
    
    <form method="post" action="register.php">
        <!-- display errors here -->
         <?php include('errors.php'); ?>
          
        <div class="input-group">
           <label>Username</label>
           <input type="text" name="username" value="<?php echo $username; ?>" >      
        </div>
        <div class="input-group">
           <label>Email</label>
           <input type="text" name="email" value="<?php echo $email; ?>">      
        </div>
        <div class="input-group">
           <label>Password</label>
           <input type="password" name="password_1">      
        </div>
        <div class="input-group">
           <label>Confirm password</label>
           <input type="password" name="password_2">      
        </div>
        <div class="input-group">
           <button type="submit" name="register" class="btn">REGISTER</button>      
        </div>      
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
    
    
</body>
</html>