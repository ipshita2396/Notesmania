<html>
<title>signup</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css1.css">
  
</head>


<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">
    	<img id="logo" src="images/logo.png" height="48px" width="50px">
    </div>
    <a class="navbar-brand brand " href="index.php"><strong> &nbsp Notesmania</strong></a>
    <form class="navbar-form navbar-left" action="search.php" method="POST">
      <div class="form-group">
      	<div class="col-xs-4">
        <input type="text" name="topic" placeholder="Search for notes">
    </div>
      </div>
      <button type="submit" name ="search" class="btn btn-default">
      <span class="glyphicon glyphicon-search"></span></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="document.php"><span class="glyphicon glyphicon-upload"></span> <strong>Upload Notes</strong></a></li>
            <li><a href="signup.php" class="color"><span class="glyphicon glyphicon-user"></span><strong> Sign Up</strong></a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>

    </ul>
</div>
</nav>
<body>
<div class="inner-wrapper">
	<div class="container ">
		<div class="row justify-content-center">
			<div class="col-xs-4">
				<p><h1 class="text-center"> Create an account </h1></p>

	<form class="form" action="asignup.php" method="POST">
		<div class="form-group">
			<Label for="Name">Name</Label>
		<input type ="text" class="form-control"  name="name" placeholder="Enter your name " required>
	</div>
		<div class="form-group">
			<Label for="username">Username</Label>
		<input type ="text" class="form-control"name="auser" placeholder="Enter usename" required>
	</div>
		
	<div class="form-group">
		<Label for="password">Password</Label>
		<input type ="password" class="form-control" name ="password1" placeholder="Enter password" required>
	</div>
	<div class="form-group">
		<Label for="password2">Confirm Password</Label>
		<input type ="password" class="form-control"  name ="password2" placeholder="Confirm password" required >
	</div>

	<input type="submit" name ="register" value="Create account " class="btn btn-danger "/> 
</form>
</div>
</div>
</div>
</div>
</body>
</html>
<?php

$conn=mysqli_connect("localhost","root","","notesmania");
 if (!$conn) {
 
   die("Connection failed: " . mysqli_connect_error());
 
}

if(isset($_POST['register'])){

$C_Name=$_POST['name'];
$C_Email=$_POST['auser'];
$C_Mob_no=$_POST['mob_no'];
$C_Password1=$_POST['password1'];
$C_Password2=$_POST['password2'];

	$sql="insert into admin (name,uname,Password1,Password2)values('$C_Name','$C_Email','$C_Password1','$C_Password2')";

        if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Signed in successfully .Please login to continue')</script>";
    		
                }
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
}
}
mysqli_close($conn);

?>
