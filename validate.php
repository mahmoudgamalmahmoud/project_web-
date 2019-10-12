<?php
include('database2.php');

if (!empty($_POST['email'])&&!empty($_POST['pass']))
{

	$Q="select * from users where email = ?;";
	 $rows=$db->getRows($Q,array($_POST['email']));

echo count($rows);
  if(count($rows)>0)
{
      foreach($rows as $row)
      {
      	if ($_POST['email']==$row['email']&&$_POST['pass']==$row['password']&&$row['root']==1)
      	{
      		header('location:insert.php');

      	}
      	elseif ($_POST['email']==$row['email']&&$_POST['pass']==$row['password']&&$row['root']==0)
      	 {
      		header('location:main.php');
      	}
        else
        {

          header('location:start.html');
        }
      




      }
     
}
else 
{
  header('location:start.html');
}



}
else
{



	header('location:start.html');
}







  ?>