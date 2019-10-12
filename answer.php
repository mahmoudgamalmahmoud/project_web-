

<!DOCTYPE html>
<html>
<head>
  <title>answer</title>
</head>

<style type="text/css">
body {
    margin: 0px;
    padding: 0px;
  }
   #bt
  {
height: 40px;
background:  #999 ;
margin: 20px;
 border : 2px solid black;
    
    width: 300px;
    color:white;
    font-size:25px;
  }
   #ih
  {

    width: 30px;
    height: 30px;


  }
   #header{
   
    height: 70px;
    background-color: #999 ;


  }
   #b
  {
    height: 10px;
    background-color: #191E22;
    


  }
  #h{
  color:black;
  font-size: 30px;
padding:20px;



  }
   #end 
{
  background-color :#252F31;
  height: 75px;
  text-align: left;

  color: white;
}
#final
{ padding: 10px;
font-size :15px; 
font-style: italic;
word-spacing:3px;}
 #e
  {
    height: 10px;
    background-color:  #999;


  }
   #container
  {
    /*background-image:url("2.jpg");*/
  text-align: center;

  height: 400px; 

font-size: 39px;
color: black;






  }
 
   a{

    
    border: solid 1px #ccc;
    font-size: 20px;
    background: #EFEFEF ;
    color :black;
  padding: 10px;
     
font-style: italic;

   }
</style>
<body>
 <div id="header" >

 <div id ="h">
  <img id ="ih" src="1.jpg">
 your_result  </div>
  </div>
  <div id="b">
  </div>

<?php
session_start();
include ('database.php');
$result=0; 
if($_POST['submit']=="finish")
{
  

for($n=1;$n<=$_SESSION['id'];$n++)
{
	if(!empty($_POST[$n]))
	{
$s1=$_POST[$n];

$q= "SELECT * FROM questions where id =? " ;

  $rows=$db->getRows($q,array($n));
  foreach ($rows as $row ) 
  {
  	if ($s1==$row['answer'])
  	{

  		$result=$result+1;
  		
  	}
  	
  }
}

}

}
;


 ?>
 <div id='container'>
 <div style=" padding-top: 20px; color: black; font-size: 80px;  font-style: italic;  " > your result </div>

<br>
<label> result : </label><?php echo $result;?>

<div >  <form action="start.html">
  <input id ="bt" type="submit" value="logout" name="submit" >
</form> </div>



</div>
  
    

 <div id="e">
  </div>
 <div  id="end"> 

  <div id="final"> 
 must enter your name 
  <br>
  must enter your class 
  <br>
  push start to start exam 
 
   
  
   
  </div>
  </div>
 </body>
</html>