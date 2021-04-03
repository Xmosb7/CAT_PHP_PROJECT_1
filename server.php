<?php
    session_start();
    $username = '';
    $email = '';
    $password='';
    $errors = array();

    //connect to the database
    $db = mysqli_connect('localhost','root','','registeration');
    
    //register form
    //if the register button is set / clicked
    if( isset($_POST['register']) ){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
        //ensure filled in the form are filled
        if(empty($username)){
            array_push($errors,"Username field is empty");
        }
        if(empty($email)){
            array_push($errors,"email field is empty");
        }
        if(empty($password_1)){
            array_push($errors,"password field is empty");
        }
        if($password_1 != $password_2){
            array_push($errors,"the two passwords is not match");
        }    
        // if there are no error then save them
        if(count($errors) == 0){
            $password = md5($password_1); //encrypt password in md5
            $sql = "INSERT INTO users (username,email,password) VALUES ('$username' ,'$email','$password') " ;
            mysqli_query($db,$sql);
            $_SESSION['username']=$username;
            $_SESSION['success']="you now are logged in";
            header('location: index.php'); //redirect
        }       
        
    }
    //login form
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        //ensure filled in the form are filled
        if(empty($username)){
            array_push($errors,"Username field is empty");
        }
        if(empty($password)){
            array_push($errors,"Password field is empty");
        }

        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
            $result = mysqli_query($db,$query);
            if (mysqli_num_rows($result) == 1 ){
                //login
                $_SESSION['username']=$username;
                $_SESSION['success']="you now are logged in";
                header('location: index.php'); //redirect
            }
            else{
                array_push($errors,"Wrong USername or Password");
                header('location: login.php'); //redirect
            }
        }
    }

    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>