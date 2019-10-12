<?php 


include ('database.php');

 if(!empty($_POST['question']) && !empty($_POST['A'])&& !empty($_POST['B'])&& !empty($_POST['C'])&& !empty($_POST['D'])&& !empty($_POST['answer']))
  {
session_start();

$_SESSION['id']=$_SESSION['id']+1;


$insert_data = "INSERT INTO questions(id, question,A,B,C,D ,answer) VALUES 
	(".$_SESSION['id'].", '".$_POST['question']."', '".$_POST['A']."','".$_POST['B']."','".$_POST['C']."' ,'".$_POST['D']."','".$_POST['answer']."');";

	$db->myExec($insert_data);

 
//echo $_SESSION['id'];



header('location:insert.php');

  
}
else 
{

echo "<div id='la'><label>you must enter all your data </label></div>";
echo "<div id='link'>  <br><a href='insert.php'> return to start page </a> </div>";

}
?>