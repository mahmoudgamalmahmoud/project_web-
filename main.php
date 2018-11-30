<!DOCTYPE html>
<html>
<head>
  <title>exam </title>
</head>
<body>
<style type="text/css">
  body {
    margin: 0px;
    padding: 0px;
  }
  #h{
  color:black;
  font-size: 30px;
padding:20px;



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
    margin-bottom: 10px;


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

 margin-top:  20px; 
  }
  fieldset 
  {

    background-color: #EFEFEF;
    padding: 10px ;
    border: solid 1px #CCC;
    margin-bottom: 20px;
  }
  legend 
  {
    background: white ;
    padding: 5px; 
    border :solid 1px #CCC;
  }
   #bt
  {
height: 40px;
background:  #999 ;

 border : 2px solid black;
    
    width: 300px;
    color:white;
    font-size:25px;
  }
   #button
   {
    text-align: center;
   }
   #link 
   {
   text-align: center;
   margin-bottom: 40px; 


   }
   a{

    
    border: solid 1px #ccc;
    font-size: 20px;
    background: #EFEFEF ;
    color :black;
  padding: 10px;
     
font-style: italic;

   }
label 
{

   font-size: 30px;
font-style:italic;
   color :black;
  

}
#la 
{
  text-align: center;
  margin: 25px; 
}
  </style>



<div id="header" >

 <div id ="h">
  <img id ="ih" src="1.jpg">
 exam _online  </div>
  </div>
  <div id="b">
  </div>


<?php 


 if(!empty($_POST['txt1']) && !empty($_POST['txt2']))
  {
include ('database.php');
session_start();
$_SESSION['name']=$_POST['txt1'];
$_SESSION['class']=$_POST['txt2'];



echo "<form id='fr' action='answer.php' method='post' >";
$q= "SELECT * FROM questions " ;

  $rows=$db->getRows($q,array());
  if(count($rows)>0)
{
      foreach($rows as $row)
{
  echo "<fieldset>";

  echo " <legend>".$row['question'].'</legend>'."<input type='radio' value='". $row['A']."' name=' " . $row['id']."'> ".$row['A']."<br>" ."<input type='radio' value='". $row['B']."' name=' " . $row['id']."'> ".$row['B']."<br>"."<input type='radio' value='". $row['C']."' name=' " . $row['id']."'> ".$row['C']."<br>"."<input type='radio' value='" . $row['D']."' name=' " . $row['id']."'> ".$row['D'];
  echo "</fieldset> ";


}
}
 echo "<br> <div id='button'>
<input id ='bt' type='submit' value='finish' name='submit' ></div>

 

  </form>";
}
else 
{

echo "<div id='la'><label>you must enter all your data </label></div>";
echo "<div id='link'>  <br><a href='start.html'> return to start page </a> </div>";

}
?>
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