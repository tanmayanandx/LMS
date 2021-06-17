<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRESH START | Admin Page</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="services.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

</head>

<style>
@media(max-width:720px) {
        .navs{
            font-size:12px;
        }
        .navbar{
            margin-top:-9px;
            border-top:2px solid black;
            position:sticky;
            top:0px;
        }
}
</style>
<body>

    <div class="logo" style="border-bottom:2px solid black;">
        <img src="/img/vector/default.svg" alt="">
    </div>
    
    <div class="navbar" style="background-color:#FFFFFF;">
        <a href="admin_page.php" class="navs">HOME</a>
        <a href="register_users.php" class="navs">REGISTERED USERS</a>
        <a href="orders.php" class="navs">ORDERS</a>
        <a href="logout.php" class="navs">LOGOUT</a>
        
    </div>
   
    <br>


    <div style="text-align: center;" class="admin_login">
        <h1
            style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
            WELCOME TO ADMIN PANEL</h1>
    </div>
    <br>
    
    <br>
    
    <br>
    
    <br>

    <div class="content"
        style="display: flex; flex-direction: column;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;justify-content: center;align-items: center;">
        <a href="register_users.php" style="text-decoration: none; margin: 10px;">
            <h2 style="">REGISTERED USERS</h2>
        </a>
        <a href="orders.php" style="text-decoration: none; margin: 10px;">
            <h2>ORDERS</h2>
        </a>
    </div>



   
    <br>
    <br>
    <br>
    

    <!-- footer start -->
    <footer id = "footer" class="footer-distributed">

        <div class="footer-left">

            <h3><span>FRESH START</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
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
                <p>7688871771</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">mikkiverma0311@gmail.com</a></p>
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