<?php
session_start()

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
    <title>SignUp|FRESH START</title>
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

    <div class="signup_form" style="display:flex; justify-content:center;align-item:center;">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username" minlength="6" Required>
                <div id="username" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input Required minlength="9" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input Required type="password" minlength="8" name= "password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input Required type="password" minlength="8" name = "cpassword" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">SignUp</button>

            <br> <br> Already have an account
            <a href="login.php" style="margin-top:15px" > click here to Login </a>
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
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // $pass = password_hash($password,PASSWORD_BCRYPT);

        // $email = "select * from freshstartregister where email = '$email' ";
        // $query = mysqli_query($conn,$email);

        // $emailcount = mysqli_num_rows($query);

        // if($emailcount>0){
        //     echo "email already exist";
        // }

    }
    
    if($password===$cpassword)
    $insertquery = " insert into freshstartregister(username,email,password) values('$username','$email','$password') ";

    $res = mysqli_query($conn,$insertquery);

    if($res){
        ?>
       <div class="alert alert-success" role="alert" style="text-align:center;">
        Registered Successfully <a href="login.php" class="alert-link">Login</a>
       </div>
        <?php
    }
    else{
        ?>
       
        <?php
    }

    ?>
    }

</body>

</html>

