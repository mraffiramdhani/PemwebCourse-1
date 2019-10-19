
<?php

  require "controller/connection.php";

  if( !isset($_SESSION["login"]) ){

    header("Location: login.php");
    exit;

  }

  if( isset($_POST["logout"]) ){
    logout();
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Course 1 - Statefull</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">PemwebCourse</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link navMenu" href="#" onclick="homePage()">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav nav-right">
      <li class="nav-item">
        <form method="post" action="">
          <button type="submit" class="btn btn-primary" name="logout">Logout</button>
        </form>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li> -->
    </ul>
  </div>
</nav>

<div class="container">
  <div class="jumbotron col-md-6 offset-md-3" style="margin-top: 50px;">
    <h1 class="display-3">Hi, <?php echo $_SESSION["username"];?></h1>
  </div>
</div>
<script type="text/javascript" src="js/control.js"></script>
</body>
</html>