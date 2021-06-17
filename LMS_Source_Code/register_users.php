<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRESH START | Admin Page</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="services.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

</head>


<body>

    <div class="logo" style="border-bottom:2px solid black;">
        <img src="/img/vector/default.svg" alt="">
    </div>
    
     <div class="navbar" style="background-color:#FFFFFF;border-bottom:2px solid black;">
        
        <a href="register_users.php" class="navs">REGISTERED USERS</a>
        <a href="orders.php" class="navs">ORDERS</a>
        <a href="logout.php" class="navs">LOGOUT</a>
        
    </div>
    
    
   
    <br>
    <br>
    <br>
    <br>





    <div class="container text-center">
        <div class="col-lg-12">
            <h1>REGISTERED USERS</h1>
            <br>
            <table class="table table-stripped table-hover table-bordered">

                <tr class="text-white bg-dark" >
                    <th>S. NO.</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>E-MAIL</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
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

    $q = "select * from freshstartregister" ;
    $query = mysqli_query($conn,$q);

    $count = 1;
    while($res = mysqli_fetch_array($query)){
    
?>
                <tr>
                    <th><?php echo ($count) ?></th>
                    <th><?php echo $res['username'] ?></th>
                    <th><?php echo $res['password'] ?></th>
                    <th><?php echo $res['email'] ?></th>
                    <th><button class="btn-primary btn"> <a style="color:white;" href="Update.php?id=<?php echo $res['client_id']; ?>">Update</a> </button></th>
                    <th><button class="btn-danger  btn"> <a style="color:white;" href="delete.php?id=<?php echo $res['client_id']; ?>">Delete</a> </button></th>
                  
                </tr>
                <?php 
                $count = $count + 1;
        }
    ?>
            </table>
        </div>
    </div>

    


 
    <br>
    <br>
    <br>
    

     <!-- footer start -->
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><span>FRESH START</span></h3>

            <p class="footer-links">
                <a href="home.php">Home</a>
                
                <a href="signup.php"></a>
                |
                <a href="services.php">Pricing</a>
                |
                <a href="about.php">About</a>
                
                <a href="#"></a>
            </p>

            <p class="footer-company-name">fresh-start &copy; 2021</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Hidayat nagar ,kalamassary</span> kochi, India</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>7688871771 ,  9973097643, 8826608399</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:19it058muku@ug.cusat.ac.in">19it058muku@ug.cusat.ac.in</a> <br><br>
                   <a href="mailto:19it071ravi@ug.cusat.ac.in">19it071ravi@ug.cusat.ac.in</a> <br><br>
                   <a href="mailto:19it085tanm@ug.cusat.ac.in">19it085tanm@ug.cusat.ac.in</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                <strong>FRESH START</strong> is a premiere online Dry-Cleaning and Laundry service created by a group of
                CUSATIANS with a
                vision to pioneer laundry service in India .
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>
    <!-- footer end -->


</body>

</html>