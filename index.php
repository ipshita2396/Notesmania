<html>
<head>
	<title>Notesmaina.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="chu.css">
</head>

<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">
    	<img class ="img-responsive" src="images/logo.png" height="48px" width="50px"/>
    </div>
      <a class="navbar-brand brand" href="index.php"><strong>&nbsp Notesmania</strong></a>
    
    
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="document.php"><span class="glyphicon glyphicon-upload"></span> <strong>Upload Notes</strong></a></li>
     <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><strong> Sign Up</strong></a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>

    </ul>

    <?php
    session_start();
    if(isset($_SESSION['email'])){
    echo"<h4 style=color:white; text-align:middle;> ";
    echo ' Welcome  ' .$_SESSION['email']       ;
    echo "&nbsp";

   echo " <a href='logout.php'><input type= submit name = logout value= Logout class= btn .btn-warning ></a> ";
    }
    

    ?>

  </div>
</nav>
<body>
<div class="container">
 <div class="content">
  <h1><b>Find  MCA notes here</b></h1>
  <form action="search.php" method="POST">
    <div class="input-group input-group-lg">
      <input type="text" class="form-control" name="topic" placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" name="search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>

 </div>
  </div>
  </body>
<div class="footer">
  
  <ul>
    <li><a href="request.php">Request us</a></li>
  
    <li><a href="admin.php">Admin panel</a></li>
  </ul>
</div>

</html>
