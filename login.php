<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User login</title>
</head>
<body>
    <div class="header">
         <h2>Login to My system</h2>
    </div>
    
    <form method="POST" action="login.php">
        <!-- display errors here -->
        <?php include('errors.php'); ?>
         
        <div class="input-group">
           <label>Username</label>
           <input type="text" name="username" value="<?php echo $username; ?>" >      
        </div>
        <div class="input-group">
           <label>Password</label>
           <input type="password" name="password">      
        </div>
        <div class="input-group">
           <button type="submit" name="login" class="btn">Login</button>      
        </div>      
        <p>
            Not yet a member? <a href="register.php">Create new account</a>
        </p>
    </form>
    
    
</body>
</html>