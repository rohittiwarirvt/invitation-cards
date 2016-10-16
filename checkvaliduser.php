<html>
<body>  
 
<table>
<tr><th>
 <?php
$m=new MongoClient();
$db = $m->mydb;

$collection = $db->mycol;
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
				  echo"<form action =index.php><input type=submit value=Relogin></form>";
				 
				  }
				  else
				  {
				   echo"LOGIN SUCCESSFUL";
				   echo"<form action =movie_book.html><input type=submit value=ENTER></form>";
				  }            
     }         
?>
</tr></th>
</body>
 </html>
