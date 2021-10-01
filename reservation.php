<?php require 'conn.php' ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="reservation.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Brewmaster</title>
</head>
<body>
<div class="logo-container">
<div class="logo-bar">
<div class="logo"><a href="index.php"><img class="logo-image" src="logo.png"></img></a></div>

</div>
</div>
<div class="option-position">
<div class="option-container">
<div class="option-bar">
    <div class="options"><a class="attrib" href="food.php">OUR FOOD</a></div>
    <div class="options"><a class="attrib" href="beer-menu.php">OUR BEERS</a></div>
    <div class="options"><a class="attrib" href="our-story.php">OUR STORY</a></div>
    <div class="options"><a class="attrib" href="about-us.php">ABOUT US</a></div>
</div>
</div>
</div>

<div class="reservation-container">
   <div class="reservation-layout">
        <div class="reservation-background">
            <div class="reservation-form">
                
            <form method="POST">
    <div class="reservation-header">
    <div class="reservation">Reserve Table</div>
    <div class="fill-out-text">Please fill the form below accurately to enable us serve you better!..
        <br> welcome!
    </div>
    </div>
    <div class="form-details">
            Full Name :<br>
            <input id="f_name" type="text" name="f_name" required>
            <input id="l_name" type="text" name="l_name" required><br>
            <div class="fullname">
            <div class="fn-text">First Name </div> <div class="ln-text"> Last Name</div>
        </div>
            Phone :<br>
            <input id="c_phone" type="number" name="c_phone" required><br>
            Email :<br>
            <input id="e_mail" type="text" name="e_mail" required><br>
            Date :<br>
            <input id="r_date" type="date" name="r_date" required><br>
            Time :<br>
            <input id="r_time" type="text" name="r_time" required><br>
            Number of Attendees :<br>
            <input id="r_quantity" type="number" name="r_quantity" required><br>
            Comment / Additional Request :<br>
            <textarea id="r_comment" name="r_comment" id="comment" cols="65" rows="6" ></textarea><br>
            <input name="submit" type="submit" id ="submit">
</div>
    <?php
    if(isset($_POST['submit'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $c_phone = $_POST['c_phone'];
        $e_mail = $_POST['e_mail'];
        $r_date = $_POST['r_date'];
        $r_time = $_POST['r_time'];
        $r_quantity = $_POST['r_quantity'];
        $r_comment = $_POST['r_comment'];


        $sql = "INSERT INTO reservation(f_name,l_name,c_phone,e_mail,r_date,r_time,r_quantity,r_comment) VALUES('$f_name','$l_name','$c_phone','$e_mail','$r_date','$r_time','$r_quantity','$r_comment')";

        if(mysqli_query($conn,$sql)){
            echo "<script> alert('You Successfully Booked a Reservation.');</script>";
        }
        else{
            echo"error:" .$sql. "<br>".mysqli_error($conn);
        }
    }

?>
      

</div>
</div>
</div>
</div>
                    

<div class="footer-container">
    <div class="footer-logo"><a href="#"><img class="logo2" src="logo.png"></a></img></div>
    <div class="footer-text">6878 Ayala Avenue, Makati Philippines | | Tel.# 02234987
                            <br>Link: Https//www.KainanRestaurant.com.ph
    </div>
    <div class="footer-copyright">@copyright 2021 - KAINAN RESTAURANTS INCORPORATED. SINCED 2001.TM</div>
</div>


</body>
</html>