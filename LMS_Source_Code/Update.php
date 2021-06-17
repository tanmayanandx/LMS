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
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $q = "UPDATE `freshstartregister` SET `username`='$username',`email`='$email',`password`= '$password' WHERE client_id = $id";

    mysqli_query($conn,$q);

    header('location:register_users.php');
   }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>UPDATE | FRESH-START</title>
</head>

<body>

    <div class="update" style="text-align: center;">
    <h1>UPDATE USER ACCOUNT DETAILS</h1>
    </div>

    <br> <br>
   
    <div  style=" display: flex; justify-content: center;">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username" Required>
                <div id="username" class="form-text"></div>
            </div>
            <br>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input Required type="password" name= "password" class="form-control" id="exampleInputPassword1">
            </div>
            <br>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input Required minlength="9" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">.</div>
            </div>
            <br>
            

            <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>

            <br> <br>
            
        </form>
    </div>

</body>

</html>