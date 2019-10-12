

<!DOCTYPE html>
<html>
<head>
  <title>start page</title>
</head>
<style type="text/css">
  body {
    margin: 0px;
    padding: 0px;
  }
  .in
  {
    margin:20px;
    
    width: 400px;
  height: 40px;
border : 2px solid black;
font-size :20px;
text-align: left;
background: #F2F2F2;
  }
   #bt
  {
height: 40px;
background:  #999 ;
margin: 20px;
 border : 2px solid black;
    
    width: 200px;
    color:white;
    font-size:25px;
  }
   #container
  {
    background-image:;
  text-align: center;
  margin-bottom: 75px;




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
    margin-bottom:25px;


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
   a{

    
    border: solid 1px #ccc;
    font-size: 20px;
    background: #EFEFEF ;
    color :black;
  padding: 10px;
     
font-style: italic;

   }
   #la 
{
  text-align: center;
  margin: 25px; 
}
 #link 
   {
   text-align: center;
   margin-bottom: 40px; 


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
  </style>
  </style>
<body>
 <div id="header" >

 <div id ="h">
  <img id ="ih" src="1.jpg">
 exam _online  </div>
  </div>
  <div id="b">
  </div> 
  <?php 


 session_start();
$count =0;
include ('database.php');

$q= "SELECT * FROM questions " ;

  $rows=$db->getRows($q,array());
  if(count($rows)>0)
{
      foreach($rows as $row)
{
  echo "<fieldset>";

  echo " <legend>".$row['question'].'</legend>'."<input type='radio' value='". $row['A']."' name=' " . $row['id']."'> ".$row['A']."<br>" ."<input type='radio' value='". $row['B']."' name=' " . $row['id']."'> ".$row['B']."<br>"."<input type='radio' value='". $row['C']."' name=' " . $row['id']."'> ".$row['C']."<br>"."<input type='radio' value='" . $row['D']."' name=' " . $row['id']."'> ".$row['D'];
  echo "</fieldset> ";
$count=$count+1;

}
}

$_SESSION['id']=$count;
?>
<div id='container'>



 <form action="insert2.php" method="POST">
  <label> enter your question</label>
  <br>
  <input  class ="in" id ="t1" type="text" name="question" >
  <br>
  <label> option1 </label>
  <br>
  <input  class ="in" id ="t1" type="text" name="A" >
  <br>
   <label> option2 </label>
   <br>
  <input  class ="in" id ="t1" type="text" name="B" >
  <br>
   <label> option3 </label>
   <br>
  <input  class ="in" id ="t1"type="text" name="C"  >
  <br>
   <label> option4 </label>
   <br>
  <input class ="in" id ="t1" type="text" name="D"  >
  <br>
 <label> answer </label>
 <br>
  <input  class ="in" id ="t1"type="text" name="answer">
  <br>

    <input id ="bt" type="submit" value="insert" name="submit" >
   
 
  </form>
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