<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRESH START</title>
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="footer.css">


</head>
<style>
*{
    padding: 0px;
    font-family: 'Roboto', sans-serif;
    margin: 0px;
}


.logo{
    background-image: url(/img/banner.jpg);
    display: flex;
    justify-content: center;
    align-items: center;
    /* border: 2px solid black; */
}

.logo img{
    height: 400px;
    width: 400px;
}

.navbar{
    /* border: 2px solid black; */
    border-bottom: 2px solid black;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: #FFFFFF;
    height: 60px;
    position: sticky;
    top: 0;
    
}

.navs{
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
    color: black;
    font-size: 20px;
    letter-spacing: 1px;

}
@media(max-width:400px){
    .navs{
        font-size: 12px;
    }
}
.navs:hover{
    text-decoration: underline;
    color: #066489;
}

.laundry_man{
    display: flex;

}
.laundry_man_content{
    padding: 12px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #00A3E0;
    width: 60%;
    /* border: 2px solid black; */
    font-family: 'Roboto', sans-serif;
}

.laundry_man_image img{
    width: 400px;
    height: 266px;
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
}

.how_it_works{
    font-family: 'Roboto', sans-serif;
    text-align: center;
    color: #00A3E0;
}
.place_order_button{
    background-color: #00A3E0;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

.steps{
    display: flex;
    justify-content: space-evenly;
}

.step{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid black;
    font-family: 'Roboto', sans-serif;
}

.box1{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Roboto', sans-serif;
}

/* form start*/

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #00A3E0;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
 
  .quick_order_place{
      display: flex;
      /* border: 2px solid black; */
      padding: 15px;
  }
  
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .some_image_of_laundry{
      width: 50%;
  }
/* form end*/

/* middle button start */
.glow-on-hover {
    letter-spacing: 2px;
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: -1;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
/* middle button end */
@media(max-width:720px) {
        .navs{
            font-size:12px;
        }
        .navbar{
            margin-top:-9px;
            border-top:2px solid black;
        }
    }
</style>

<body>

    <div class="logo" style="margin-bottom:10px;">
        <img src="/img/vector/default.svg" alt="">
    </div>
    
    <div class="navbar" style="background-color:#FFFFFF;">
        <a href="home.php" class="navs">HOME</a>
        <a href="signup.php" class="navs">MY ACCOUNT</a>
        <a href="signup.php" class="navs">SERVICES</a>
        
        <a href="signup.php" class="navs">ABOUT US</a>
    </div>


    <br><br> <br> <br>
    <div class="middle_button" style="text-align: center;">
       <a href="signup.php"><button class="glow-on-hover" type="button">
            <h2>Signup/Login</h2>
        </button> </a>
    </div>
    <br><br> <br> <br>
    <div class="laundry_man">


        <div class="laundry_man_content">
            <h2>Searching for dry cleaning and laundry near me? <br>
            </h2>
            <br>
            <p style="color: black;"> <strong>FRESH START</strong> is the one stop solution for all your garment
                cleaning needs.</p>
        </div>


        <div class="laundry_man_image">
            <img src="/img/man.png" alt="">
        </div>


    </div>
    <br> <br> <br> <br>

    <div class="how_it_works">
        <h1>How It Works: in 4 Easy Steps</h1>
    </div>
    <br> <br> <br> <br>



    <div class="boxs" style="display: flex; justify-content: space-evenly; margin-bottom: 100px;">
        <div class="box1">
            <img src="/img/step1.png" height="100px" width="100px" alt="">
            <h3 style="padding-top: 4px;">Step 1</h3><br>
            <h3 style="color: #00A3E0;">Bag up all your
                clothes</h3>
        </div>
        <div class="box1">
            <img src="/img/step2.png" height="100px" width="150px" alt="">
            <h3 style="padding-top: 4px;">Step 2</h3><br>
            <h3 style="color: #00A3E0;">We pick up your clothes</h3>
        </div>
        <div class="box1">
            <img src="/img/step3.png" height="100px" width="100px" alt="">
            <h3 style="padding-top: 4px;">Step 3</h3><br>
            <h3 style="color: #00A3E0;">We clean your clothes</h3>
        </div>
        <div class="box1">
            <img src="/img/step4.png" height="100px" width="100px" alt="">
            <h3 style="padding-top: 4px;">Step 4</h3><br>
            <h3 style="color: #00A3E0;">We deliver clean, folded clothes</h3>
        </div>
    </div>

    <hr>
    <div class="quick_order_place" style="margin-top: 50px;">
        <!-- <h3>QUICK ORDER PLACE</h3> -->

        <div class="some_image_of_laundry">
            <img src="/img/place_order.png" alt="">
        </div>

        <div class="container">
            <form action="signup.php">
                <h2 style="margin-bottom: 20px;">Place Order</h2>
                <label for="fname">Contact Number</label>
                <input type="text" id="fname" name="firstname"  placeholder="Mobile No.">

                <!-- <label for="lname">Last Name</label> -->
                <!-- <input type="text" id="lname" name="lastname" placeholder="Your last name.."> -->

                <label for="country">Pickup Slot</label>
                <select id="country" name="country">
                    <option value="australia">Anytime</option>
                    <option value="canada">Morning</option>
                    <option value="usa">Evening</option>
                </select>

                <label for="subject">Address</label>
                <textarea id="subject" name="subject"
                    placeholder="Enter the pickup and dropoff address" style="height:200px"></textarea>

                <!-- <input type="submit" value="Submit" placeholder="Place Order"> -->
                 <button type="submit" value="Submit" name="submit" class="place_order_button"
                    style="background-color: #00A3E0;color: white;padding: 12px 20px;border: none;border-radius: 4px;cursor: pointer;">Place
                    order</button>
            </form>
        </div>


    </div>
    <br>
    <br>
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
                <a href="signup.php">About</a>
                |
                <a href="admin_login.php">Admin-Login</a>
                
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