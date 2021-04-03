<?php 
    include('server.php');
    //if the user isn't logged in then he cann't access this
    if(empty($_SESSION['username'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User login</title>
</head>
<body>
    <div class="header">
         <h2>Home Page</h2>
    </div>
    
    <div class='content'>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                
                </h3>
            </div>
        <?php endif ?>
        <?php if(isset($_SESSION['username'])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username'] ;?></strong></p>
            <p> <a href="index.php?logout='1'" style ='color : red;' >Logout</a> </p>
        <?php endif ?>
    </div>
    
    
</body>
</html>