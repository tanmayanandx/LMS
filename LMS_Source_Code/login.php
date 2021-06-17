<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Login|FRESH START</title>
</head>

<style>

*{
    padding: 0px;
    margin: 0px;
}


.signup_form{
    display: flex;
    justify-content: center;
    
}


.logo{
    margin-top: -100px;
    margin-bottom: -100px;
    display: flex;
    justify-content: center;
    align-items: center;
    /* border: 2px solid black; */
}

.logo img{
    height: 400px;
    width: 400px;
}

</style>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>

    <div class="logo">
        <img src="/img/vector/default.svg" alt="">
    </div>

    <div class="signup_form">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username" Required>
                <div id="username" class="form-text"></div>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input Required type="password" name= "password" class="form-control" id="exampleInputPassword1">
            </div>

            

            <button type="submit" name="submit" class="btn btn-primary">Login</button>

            <br> <br> Doesn't have an account
            <a href="signup.php" > click here to Signup </a>
        </form>
    </div>

    <?php

    $servername = 'sql307.epizy.com';
    $username = 'epiz_28553357';
    $password = '2WlJqFmvyJr7f';
    $db = "epiz_28553357_registration";

    $conn =  mysqli_connect($servername,$username,$password,$db);  
    if(! $conn )  
    {  
    die('Could not connect: ' . mysqli_error());  
    }  
    // echo 'Connected successfully'; 

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
    
    
        $username_search = " select * from freshstartregister where username='$username' ";
        $query = mysqli_query($conn,$username_search);

        $username_count = mysqli_num_rows($query);

        if($username_count){
            $username_pass = mysqli_fetch_assoc($query);

            $db_pass = $username_pass['password'];
            
            
            $_SESSION['name'] = $username_pass['username'];
            

            if($db_pass == $password){
                // echo "login successfull";
                $_SESSION['pass'] = $username_pass['password'];
                ?>
                <script>
                    location.replace("home.php");
                </script>
                <?php
                
            }
            else {
                ?>
                <div style="text-align:center;margin-top:12px;" class="alert alert-danger" role="alert">
                     Password doesn't match <a href="signup.php" class="alert-link">If you haven't register kindly click here </a>
                 </div
                 <?php
            }
        }
        else{
            ?>
                <div style="text-align:center;margin-top:12px;" class="alert alert-danger" role="alert">
                     Account with this Username or Password doesn't exist <a href="signup.php" class="alert-link">If you haven't register kindly click here </a>
                 </div
                 <?php
        }

    }


    

    ?>
    

</body>

</html>

