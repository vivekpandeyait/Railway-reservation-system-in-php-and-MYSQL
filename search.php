<?php
// Initialize the session
include('config.php');
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    	 <link rel = "icon" href =  
"http://techvideo.000webhostapp.com//logo.png" 
        type = "image/x-icon"> 
  <title>INDAIN RAILWAY</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>  
  <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <?php include 'database.php';?>
  <script type="text/javascript">
    window.onload=function(){
      document.getElementById("my_audio").play();
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>  
    <style>
    
    body {
  background-color: #92a8d1;
}
    </style>
</head>
   
<body >
<?php include 'header.php';?>
    
    
    
    
    
  <div class="container" id="back">
    
    
         
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>

      <h3>PNR STATUS:</h3>	<hr><hr>	
      <br><br><br><br><hr>
      <center>
          <?php
$link=mysqli_connect("localhost","root","","id11413316_moodi"); 
if(!$link)
{	
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " .mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " .mysqli_connect_error() . PHP_EOL;
exit;
}
$pnrno=$_GET['pnrno'];
$res=mysqli_query($link,"select * from info where pnrno='$pnrno'");
if(mysqli_num_rows($res)==0)
{
echo "$name doesn't exist";
}
else
{
echo "<table border='2' align=center width=80%>";
echo "<tr><td width=10% align=center>ID</td><td width=10% align=center>PNRNO</td><td width=10% align=center>TRAIN&NO</td><td width=10% align=center>FROM</td><td width=10% align=center>DESTINATION</td><td width=10% align=center>DATE&TIME</td><td width=10% align=center>BERTH</td><td width=10% align=center>PRE STATUS</td><td width=10% align=center>CURRENT STATUS</td></tr>";
while($arr=mysqli_fetch_row($res))
echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td><td>$arr[6]</td><td>$arr[7]</td></tr>";
echo "</table>";
}
?>
    </center>
      <hr>        
        
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr> 
 </div>
   
  </div>
   </div>
<?php include 'footer.php';?>
  
  
    



</body>
</html>
