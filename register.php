<html>
<body background="img/a2.jpg" link="white">  
 
<h1><font size="20px" color="white"><center>
  <?php
$m=new MongoClient();
$db = $m->cards;

$collection = $db->user;
{
$document = array(
		"NAME"=>"$_POST[username]",
		"PASSWORD"=>"$_POST[password]",
		"ADDRESS"=>"$_POST[address]",
		"DOB"=>"$_POST[dob]",
		"GENDER"=>"$_POST[gender]",
		"EMAIL"=>"$_POST[email]"
);
$collection->insert($document);
}
echo "Registered !";

?>
</font></h1></center>
<center><font size="20px"><a href="cdmain.html">HOME</a></center>
</body>
</html>