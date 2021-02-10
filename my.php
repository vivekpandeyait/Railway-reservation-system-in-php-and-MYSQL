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
  <title>INDIAN RAILWAYS</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
   
</head>
   
<body id="example2" >
<audio src="A.Don.Jis.mp3" id="my_audio" ></audio>
  
    <?php include 'header.php';?>
    <div class="container" id="back">
    
    
        <?php include 'background.php';?> 
    
         
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
       
      <h3>HOME</h3>	<hr><hr>	
      <p> INDIAN RAILWAY website is under maintenance we'll back shortly  then you can access every things.</p><br><br><br><br><hr>
      
             
        
      
 </div>
   
  </div>
        </div>
  
<?php include 'footer.php';?>
  
  


</body>
</html>
