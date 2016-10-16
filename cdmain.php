<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script></script>
<style>

</style>
<link rel="stylesheet" href="./style.css"><link>
</head>
<body background="img/a2.jpg">

<p class="head1"><font face="Shivaji02" size="25"><b><i>आमंत्रण &nbsp;</i></b></font><font size="5" color="#FCEF6F"></font><p>
</p>

<div class="my-account">
	<div class="container">
		<?php 
		$user = isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] ? $_SESSION['user'] : false;
	//	print_r($user['NAME']);
		$to_account = $user ? "<p>Hello, {$user['NAME']}</p>":"<p>Hello, Guest</p>";
		print $to_account;
		
		?>
	</div>
</div>


<div class="top1">
<ul class="topbar">
<li><a href="#point"><b>HOME</b></a></li>
<li><a href="about"><b>ABOUT</b></a></li>
<li><a href="contact1.html" target="_parent"><b>CONTACT</b></a></li>
<li><div class="dropdown">
  <button class="dropbtn"><b>INVITATION</b></button>
  <div class="dropdown-content">
    <a href="birthday.html"><b>BIRTHDAY</b></a>
    <a href="wedding.html"><b>WEDDING</b></a>
    <a href="vastu.html"><b>VASTU PUJA</b></a>
  </div></li>
<li><a href="signup.html"><b>SIGNUP</b></a></li>
<?php

	if ( !isset($_SESSION['user'])) {

		print '<li><a href="login.html"><b>LOGIN</b></a></li>';
	} else {
		print '<li><a href="myaccount.php"><b> MY Account</b></a></li>
			   <li><a href="logout.php"><b>Logout</b></a></li>';
	}
	
?>

</ul>
</div>


<center><div class="slide" style="max-width:60%">
  <img class="mySlides" src="img/k.jpg" style="width:100%">
  <img class="mySlides" src="img/s2.jpg" style="width:100%">
  <img class="mySlides" src="img/s3.jpg" style="width:100%">
  <img class="mySlides" src="img/s4.jpg" style="width:100%">
  <img class="mySlides" src="img/s5.jpg" style="width:100%">
  <img class="mySlides" src="img/s6.jpg" style="width:100%">
</div></center>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>
