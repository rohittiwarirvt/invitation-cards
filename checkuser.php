 <html>
<body>  
 
<font color="white" size="20px"><table align="center">
<tr><th>
 <?php
$m=new MongoClient();
$db = $m->cards;

$collection = $db->user;
if($_POST['username']==NULL)
{
if($_POST['password']==NULL)
{
echo"enter info";
}
}
else{

            $result = $collection->findOne(array("NAME" => $_POST['username'],"PASSWORD"=>$_POST['password']));
			//print_r($cursor);
			//$cursor->toArray();
				  if (empty($result))
				  { 
				  echo" login unsuccessful";
				  echo"<form action =login.html><input type=submit value=Relogin></form>";
				 
				  }
				  else
				  {
				  				   session_start();
				   echo "LOGIN SUCCESSFUL";
				   
				   //echo "<form action=cdmain.php><input type=submit value=ENTER></form>";
				$_SESSION['is_loggedin'] = true;
				   $_SESSION['user'] = $result;
				   //print_r($_SESSION);
				   header("Location: cdmain.php");
				   die();
				  }            
     }         
?>
</tr></th>
</font></table>
</body>
 </html>
