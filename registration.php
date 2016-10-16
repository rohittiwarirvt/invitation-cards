<html>
<body>  
 
<h1><center>
  <?php
$m=new MongoClient();
$db = $m->mydb;

$collection = $db->mycol;
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
</body>
</html>