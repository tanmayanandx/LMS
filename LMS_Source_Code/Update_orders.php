<?php
    
    $servername = 'sql307.epizy.com';
    $username = 'epiz_28553357';
    $password = '2WlJqFmvyJr7f';
    $db = "epiz_28553357_registration";

    $conn =  mysqli_connect($servername,$username,$password,$db);  
    if(!$conn )  
    {  
    echo "nope";
    die('Could not connect: ' . mysqli_error());  
    }  
    else{
        echo 'Connected successfully';
    } 
    
   if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $status = $_POST['status'];
    $payment_done = $_POST['payment_done'];
    $payment_in_rs = $_POST['payment_in_rs'];
    $q = "UPDATE `placeorder` SET `status`='$status',`payment_done`='$payment_done',`payment_in_rs`= '$payment_in_rs' WHERE id = $id";
    

    mysqli_query($conn,$q);

    header('location:orders.php');
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
    <h1>UPDATE USER ORDER</h1>
    </div>

    <br> <br>
   
    <div  style=" display: flex; justify-content: center;">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" Required>
                <div id="status" class="form-text"></div>
            </div>
            <br>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Payment Done</label>
                <input  name= "payment_done" class="form-control" id="payment_done">
            </div>
            <br>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Payment In Rs.</label>
                <input  type="payment_in_rs" name="payment_in_rs" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="payment_in_rs" class="form-text">.</div>
            </div>
            <br>
            

            <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>

            <br> <br>
            
        </form>
    </div>

</body>

</html>