<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html >
<head>

<title>Yamaha</title>

<link rel="icon" type="image/jpg" href="img/yaico.png"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel= stylesheet type="text/css" href="css/reset.css" >
<link rel= stylesheet type="text/css" href="css/style.css" >

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/java.js"></script>
<script src="js/vezba.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body onLoad="showSlides();">
	<header>
		<img class="head" src="img/ya.jpg" alt="Yamaha">
	</header>


<nav class="navbar navbar-expand-lg navbar-dar bg-black" id="nnn">
  <a class="navbar-brand" href="#"><img src="img/1yamaha.jpg" class="mainlogo" width="150" height="50" class="d-inline-block align-top" alt="Yamaha"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Store</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Users</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link disabled" href="#">Bikes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>

    
    <ul class="nav navbar-nav ml-auto">
      <?php 
      if (!isset($_SESSION['username']))
      {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php" ><span class="fas fa-sign-in-alt"></span> Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" ><span class="fas fa-user"></span> Register</a>
      </li>
    <?php
    } 
    ?>
    <?php  if (isset($_SESSION['username'])) : ?>

      <p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong> !!! </p>
      <br>
      <p id="logout"> <a href="index.php?logout='1'" style="color: red;"> <pre>   Logout</pre></a> </p>
    <?php endif ?>
    </ul>

    
   <!-- Search dugme ---

   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

<div class="modal fade" id="LoginModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header markblue" >
          <h4 class="modal-title tit">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <form method="post" action="index.php">
            
            

        	<div class="form-group">
        		<input type="text" name="username" placeholder="Unesite e-mail" class="form-control">
        	</div>
        	<div class="form-group">
        		<input type="password" name="password" placeholder="Unesite password" class="form-control">
        		<a href="" data-toggle="modal" data-target="#SigninModal" data-dismiss="modal" class="linkForgot">Need acc? Register</a>
        	</div>

        	</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer text-center form-group" >
          <button type="submit" class="btn btn-outline-dark form-control" name="login_user" data-toggle="modal" data-target="#loginModal">Login</button>
          
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="SigninModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header markblue" >
          <h4 class="modal-title tit">Registration</h4>
          <button type="button " class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<form>
        	<div class="form-group">
        		<input type="username" name="username" placeholder="Unesite ime" class="form-control">
        	</div>	
        	<div class="form-group">
        		<input type="email" name="email" placeholder="Unesite e-mail" class="form-control" >
        	</div>
        	<div class="form-group">
        		<input type="password" name="password1" placeholder="Unesite sifru" class="form-control">
        	</div>
        	<div class="form-group">
        		<input type="password" name="password2" placeholder="Potvrdite sifru" class="form-control">
        	</div>

        	</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer text-center form-group" >
          <button type="submit" class="btn btn-outline-dark form-control" name="reg_user" data-dismiss="modal" >Sign Up</button>
        </div>

      </div>
    </div>
  </div>



		

<div id="bbox">

<ul id="ultekst">
	<li> A few New England states:
		<ul>
			<li> Vermont
			<li> New Hampshire
			<li> Maine
		</ul>
				<hr size="4" width="20%" color="lightblue">
	<li> Two Midwestern states:
		<ul>
			<li> Michigan
			<li> Indiana
		</ul>
</ul>
</div>

<div class="slideshow">

		<div class="mySlides">
		<img src="img/ya.jpg" width="100%" alt="Prvi slajd">
		</div>

		<div class="mySlides"  >
		<img src="img/yam1.jpg" width="100%" alt="Dugi slajd">
		</div>

		<div class="mySlides">
		<img src="img/ybaa.jpg" width="100%" alt="Treci slajd">
		</div>
</div>

<div id="boxl">
</br>
</br>
<input type="button" onclick="prikazi_alert()" value="Prikazi alert prozor" /> 
<br>
<br>
<input type="button" onclick="prikazi_confirm()" value="Prikazi confirm dialog" />
<br>
<br>
<input type="button" onclick="prikazi_prompt()" value="Prikazi prompt prozor" /> 
</div>
<div id="boxl">
	<details> <summary>HTML 5</summary> Ovo ce se pokazati kada se kilkne na opciju HTML5. </details> 

</div>
<div id="boxl">
Slika i tekst
</div>


<footer> 
<div id=slikk>

	<img src="img/ovo.png" height="80" width="80"></div>
	<p class="dd1">Postavio: Marko Nikolic</p> 
 	<p class="dd2">Kontakt informacije: 
 		<a href="mailto:marko.nikolic.700@metropolitan.ac.rs"> marko.nikolic@metropolitan.ac.rs</a>
 	</p>
</footer>
</body>

</html>