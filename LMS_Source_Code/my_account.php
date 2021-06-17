<?php
session_start();

// echo $_SESSION['name'];
// echo $_SESSION['pass'];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRESH START</title>
    <link rel="stylesheet" href="home.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="footer.css">


</head>

<style>

body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60a662e1185beb22b30f233f/1f64v4h80';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<body>

    <div class="logo">
        <img src="/img/vector/default.svg" alt="">
    </div>
    
    <div class="navbar">
        <a href="home.php" class="navs">HOME</a>
        <a href="my_account.php" class="navs">MY ACCOUNT</a>
        <a href="services.php" class="navs">SERVICES</a>
       
        <a href="about.php" class="navs">ABOUT US</a>
    </div>
    <br>
    <br> <br>
    <div class="account_name" style="text-align:center;margin:25px;">
    <h1>Account Holder Details</h1>
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

    $sql = "select email from freshstartregister where username = '{$_SESSION['name']}' and password = '{$_SESSION['pass']}'";
    $result = mysqli_query($conn, $sql);
    
?>
<?php
    
//     if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//             while($row = mysqli_fetch_assoc($result)) {
//              echo "id: " . $row["email"];
//             }
//     } else {
//   echo "0 results";
// }
$s_number = 1;
?>


   <div style="display:flex;justify-content:center;">
     <table class="styled-table" >
    <thead>
        <tr>
            <th>UserName</th>
            <th>E-mail</th>
            
        </tr>
    </thead>
    <tbody>
        <tr class="active-row">
            <td><?php echo $_SESSION['name']; ?></td>
            <td><?php if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                            echo  $row["email"];
                            $_SESSION['email'] = $row["email"];
                                                }
                                        } else {
                                    echo "0 results";
                                    } ?> </td>
            
        </tr>
        
        <!-- and so on... -->
    </tbody>
    </table>
   </div>
   <br> <br> <br>
<hr>

    <br> <br> <br> <br> <br>
    <div class="account_name" style="text-align:center;">
    <h1>Your Orders</h1>
    </div>


   <h2>Responsive Table</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
             <th>S.NO.</th>
            <th>Phone Number</th>
            <th>Pickup Slot</th>
            <th>Address</th>
            <th>Date</th>
            <th>Status</th>
            <th>Payment Done</th>
            <th>Payment in Rs.</th>
           
        </tr>
        </thead>
        <tbody>
        <tr>
<?php 

$select_query = " select phone_number,pickupslot,address,date,status,payment_done,payment_in_rs from placeorder where username = '{$_SESSION['name']}' and email = '{$_SESSION['email']}'  ";

$res = mysqli_query($conn, $select_query);

   
    if (mysqli_num_rows($res) > 0) {
    // output data of each row
            while($row = mysqli_fetch_assoc($res)) {
            //  echo "id: " . $row["email"];

    ?>
            <td><?php   echo $s_number; ?> </td>
            <td><?php   echo $row["phone_number"]        ;    ?></td>
            <td><?php   echo $row["pickupslot"]          ;   ?></td>
            <td><?php   echo $row["address"]           ;  ?></td>
            <td><?php   echo $row["date"]          ;   ?></td>
            <td><?php   echo $row["status"]          ;   ?></td>
            <td><?php   echo $row["payment_done"]          ;   ?></td>
            <td><?php   echo $row["payment_in_rs"]          ;   ?></td>
        </tr>
<?php
     $s_number = $s_number + 1;       }
    } else {
  echo "0 results";
}
?>
        <tbody>
    </table>
</div>




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