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
    else{
        echo 'Connected successfully';
    }
    
    $id = $_GET['id'];
    $q = "DELETE FROM `placeorder` WHERE id = $id";

    mysqli_query($conn,$q);

    header('location:orders.php');
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>
    
</body>

</html>