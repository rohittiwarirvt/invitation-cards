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

<p class="head1"><font face="Shivaji02" size="25"><b><i>Invitation Cart &nbsp;</i></b></font><font size="5" color="#FCEF6F"></font><p>
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
		print '<li><a href="login.html"><b> MY Account</b></a></li>
			   <li><a href="logout.php"><b>Logout</b></a></li>';
	}
	
?>

</ul>
</div>



<div class="order-container">
<div class="top"></div>
<div class="orders">
<?php
  $user = isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] ? $_SESSION['user'] : false;
$m=new MongoClient();
$db = $m->cards;
$birthday = $db->birthday;



$my_birthday = $birthday->find(array('user_id' => $user['_id']));
  if ($birthday->count() > 0  ) {
echo "<div class='heading'>Birthday</div>";
echo "<div class='column-heading'><div> Card No.</div><div> NAME</div><div>Venue</div><div>Event Date</div><div>Event Time</div></div>";
echo "<div class='content-wrapper'>";
    foreach ($my_birthday as  $order) {
      echo "<div>{$order['CARD ID']}</div><div>{$order['NAME']}</div><div>{$order['VENUE']}</div><div>{$order['EVENT DATE']}</div><div>{$order['EVENT TIME']}</div>";
    }
echo "</div>";
  } else {
    echo "<div class='record-not-exists'><p>The record not exists</p></div>";   
  }

 $wedding = $db->wedding;

$my_wedding = $wedding->find(array('user_id' => $user['_id']));
  if ($wedding->count() > 0  ) {
echo "<div class='heading'>Wedding</div>";
echo "<div class='column-heading'><div> Card No.</div><div> BRIDE NAME</div><div>GROOM NAME</div><div>Event Date</div><div>Event Time</div></div>";
echo "<div class='content-wrapper'>";
  foreach ($my_wedding as  $order) {
    echo "<div>{$order['CARD ID']}</div><div>{$order['BRIDE NAME']}</div><div>{$order['GROOM NAME']}</div><div>{$order['EVENT DATE']}</div><div>{$order['EVENT TIME']}</div>";
  }

  } else {
    echo "<div class='record-not-exists'><p>The record not exists</p></div>"; 
  }


  $vastu = $db->vastu;

  $my_vastu = $vastu->find(array('user_id' => $user['_id']));
  if ($vastu->count() > 0  ) {
    echo "<div class='heading'>Vastu</div>";
    echo "<div class='column-heading'><div> Card No.</div><div> NAME</div><div>Venue</div><div>Event Date</div><div>Event Time</div></div>";
    echo "<div class='content-wrapper'>";
      foreach ($my_vastu as  $order) {
        echo "<div>{$order['CARD ID']}</div><div>{$order['NAME']}</div><div>{$order['VENUE']}</div><div>{$order['EVENT DATE']}</div><div>{$order['EVENT TIME']}</div>";
      }
  echo "</div>";
  } else {
   echo "<div class='record-not-exists'><p>The record not exists</p></div>";  
  }
  echo "</div>";
?>
</div>
<div></div>

<div>
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
