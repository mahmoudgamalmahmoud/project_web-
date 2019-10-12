<?php
include ('database2.php');


$root=0;
$class=1;
$insert_data = "INSERT INTO users(user_name,email,password,class,root) VALUES ('".$_POST['user_name']."','".$_POST['email']."',
'".$_POST['pass']."',".$class.",".$root.");";


 $db->myExec($insert_data);
 header("location:main.php");
  ?>