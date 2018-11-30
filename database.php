<?php


include('constants.php');

$db = new PDO("mysql:host=".HOST,USER,PASS);
$sql = "CREATE DATABASE IF NOT EXISTS question";
$db->exec($sql);

 $use_db = "use question";
$db->exec($use_db);
$sql = "CREATE TABLE IF NOT EXISTS questions(
id int(11)  primary key,
question varchar(200) ,
A text ,
B text ,
C text ,
D text ,
answer text )";
$db->exec($sql);
$insert_data = "INSERT INTO questions(id, question,A,B,C,D ,answer) VALUES 
	(1, 'When was the first world war ?', '1914','1902','1903' ,'1904','1914'),
	(2, 'When was the second world war ?', '1956','1939','1944' ,'1994','1939'),
	(3, 'what is your love ?', 'Andrew Johnson','George Washington','Ulysses S. Grant' ,'Benjamin Harrison','George Washington'),
	(4, 'How many continents of the world? ', '6','2','7' ,'5','7'),
	(5, 'how many countries in the world ? ', '100 countries','122 countries','167 countries' ,'195 countries','195 countries');";

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
