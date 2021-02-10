<?php
// Include config file
require_once "config.php";
session_start();

// Define variables and initialize with empty values
$otp = "";
$otp_err  = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate otp
    if(empty(trim($_POST["otp"]))){
        $otp_err = "Please enter a otp.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE otp = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_otp);
            
            // Set parameters
            $param_otp = trim($_POST["otp"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    
                      header("location: index.php");
                } 
            } else{
                echo "Oops! Something code not Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

       
    
    
    
    
    
    // Close connection
    mysqli_close($link);
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
     <title>TEch Video Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
    <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
        
                </a>
              
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
            <h1 style="color:white">Tech Video User sign up</h1> 
				
            </header>
        
            <section>				
                <div id="container_demo" >
                     <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                         <div id="login" class="animate form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($otp_err)) ? 'has-error' : ''; ?>">
                <label>otp</label>
                <input type="text" name="otp" class="form-control" value="<?php echo $otp; ?>">
                <span class="help-block"><?php echo $otp_err; ?></span>
            </div>  
            
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
     
        </form>
    </div>    

                        </div>
						
                    </div>
                </div>  
            </section>
    </div>  
</body>
</html>