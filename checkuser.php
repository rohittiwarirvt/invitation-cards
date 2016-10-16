<html>
<body>  
 
<font color="white" size="20px"><table align="center">
<tr><th>
 <?php
$m=new MongoClient();
$db = $m->cards;

$collection = $db->user;
if($_POST[username]==NULL)
{
if($_POST[password]==NULL)
{
echo"enter info";
}
}
else{

            $cursor = $collection->find(array("NAME" => "$_POST[username]","PASSWORD"=>"$_POST[password]"));
				  if ($cursor->count() == 0)
				  { 
				  echo" login unsuccessful";
				  echo"<form action =login.html><input type=submit value=Relogin></form>";
				 
				  }
				  else
				  {
				   echo"LOGIN SUCCESSFUL";
				   echo"<form action =cdmain1.html><input type=submit value=ENTER></form>";
				  }            
     }         
?>
</tr></th>
</font></table>
</body>
 </html>
