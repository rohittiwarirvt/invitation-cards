<html>
<body background="img/a2.jpg" link="white">  
 
<br><br><h1><font color="white"><center>
  <?php
  session_start();
$m=new MongoClient();
$db = $m->cards;
$user = isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] ? $_SESSION['user'] : false;
$collection = $db->birthday;
{
$document = array(
		"CARD ID"=>"B0",
		"NAME"=>"$_POST[ename]",
		"VENUE"=>"$_POST[address]",
		"EVENT DATE"=>"$_POST[dob]",
		"EVENT TIME"=>"$_POST[time]",
		'user_id'=> $user['_id']
		);
$collection->insert($document);
}
echo "BOUGHT SUCCESSFULLY";

?>
</h1></font></center><br><br>

<br><br><center><h3><font color="white" size="30px">THANK U FOR SHOPPING!!!</font></h3></center><br>
<br><br><center><h3><font color="white" size="30px">VISIT OUR HOME PAGE:<a href="cdmain.html">HOME</a></font></h3></center>

</body>
</html>