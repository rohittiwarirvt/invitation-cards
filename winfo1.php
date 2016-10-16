<html>
<body background="img/a2.jpg" link="white">  
 
<br><br><h1><font color="white"><center>
  <?php
$m=new MongoClient();
$db = $m->cards;

$collection = $db->wedding;
{
$document = array(
		"CARD ID"=>"W1",
		"BRIDE NAME"=>"$_POST[bname]",
		"GROOM NAME"=>"$_POST[gname]",
                "VENUE"=>"$_POST[address]",
		"EVENT DATE"=>"$_POST[dob]",
		"EVENT TIME"=>"$_POST[time]",
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