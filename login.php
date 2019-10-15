<?php include('server.php') ?>

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
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body onLoad="showSlides();">
  <header>
    <img class="head" src="img/ya.jpg" alt="Yamaha">
  </header>


<nav class="navbar navbar-expand-lg navbar-dar bg-black" id="nnn">
  <a class="navbar-brand" href="index.php"><img src="img/1yamaha.jpg" class="mainlogo" width="150" height="50" class="d-inline-block align-top" alt="Yamaha"></a>
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
      <?php if (!isset($_SESSION['username'])) : ?>
      
    <?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>

      <p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong> !!! </p>
      <p> <a href="index.php?logout='1'" style="color: red;"> logout</a> </p>
    <?php endif ?>
    </ul>

    
   <!-- Search dugme ---

   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

<div class="box1">
   <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
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