<div class="container" id="example1">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 <img src="logo.png" alt="Logo" style="width:70px;">
 <a class="navbar-brand" href="my.php">INDIAN RAILWAYS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
    <li class="nav-item">
      <a class="nav-link active" href="my.php"><button type="button" class="btn btn-primary" style="width:80PX">Home</button>
</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="pnr.php"><button type="button" class="btn btn-primary" style="width:80px">PNR</button>
</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="booking.php"><button type="button" class="btn btn-primary" style="width:80px">
          Booking</button>
          
</a>
    </li>
	<li class="nav-item">
      <a class="nav-link"  href="payment.php"><button type="button" class="btn btn-primary" style="width:90px">Payment</button>
</a>
      </li>
<li class="nav-item">
      <a class="nav-link"  href="services.php"><button type="button" class="btn btn-primary" style="width:80px">services
	  </button>
</a>
    </li>
      
 
</ul>
      <ul class="navbar-nav mr-auto mt-2 ml-0 mt-lg-0">
   <li class="nav-item">
     
       <!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger"><b>Hi:<?php echo htmlspecialchars($_SESSION["username"]); ?></b></button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Dashboard</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="reset-password.php">Reset Password</a>
       <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php">Log Out!</a>
       
  </div>
</div>
      </li></ul>

<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
</nav>
 
</div>
