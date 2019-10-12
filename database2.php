<?php


include('constants.php');

$db = new PDO("mysql:host=".HOST,USER,PASS);
$sql = "CREATE DATABASE IF NOT EXISTS question";
$db->exec($sql);

 $use_db = "use question";
$db->exec($use_db);
$sql = "CREATE TABLE IF NOT EXISTS users(
user_name varchar(20) not null  UNIQUE,
email  varchar(200) not null  UNIQUE,
password varchar(20) ,
class int(11) ,
root int(11))";
$db->exec($sql);
$insert_data = "INSERT INTO users(user_name,email,password,class,root) VALUES ('mahmoud','mg7427370@gmail.com',
'mahmoud123',0,1);";

	$db->exec($insert_data);
 

 

class DataBase
{
 private $pd=null;
public function __construct($name) 
{
   $this->pd=new PDO("mysql:host=localhost;dbname=$name","root","");

}
 public function myExec($q)
{
   $this->pd->exec($q);

}	
public function getRows($q,$arg)
{
  $stm= $this->pd->prepare($q);

$stm->execute($arg);
return $stm->fetchAll();

}

}
 $db=new DataBase("question");
?>
