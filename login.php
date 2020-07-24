<html>
<head>
<title>login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style2.css">
 
</head>
<body>
<div class="inner-wrapper">
	<div class="container ">
		<div class="row justify-content-center">
			<div class="col-xs-4">
				<p><h1 class="text-center"> Login </h1></p>

	<form action="login.php" method="POST">
		<div class="form-group">
			<Label for="Email">Username</Label>
		<input type ="text" class="form-control"  name="email" placeholder="Enter username/email">
	</div>
	<div class="form-group">
		<Label for="password">Password</Label>
		<input type ="password" class="form-control" name ="password" placeholder="Enter password" >
	</div>
	<ce>
	<input type="submit" value="Login" name="login" class="btn btn-primary " > 
	<h5 class="text-center">Not a member?</h5>
	
	<a href="signup.php" class="btn btn-danger" role="button">Sign-up</a>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
<?php

session_start();
$conn=mysqli_connect("localhost","root","","notesmania");
if(isset($_POST['login'])){

$C_Email=$_POST['email'];
$C_Password=$_POST['password'];

  	$query = "SELECT * FROM customer WHERE Email ='$C_Email' AND Password1 ='$C_Password'";
  	$result = mysqli_query($conn, $query);
  		if(!$row = mysqli_fetch_assoc($result))
        	{
                     echo "<script>alert('Wrong password or username')</script>";
                }
    else 
                {
                	$_SESSION['email'] = $_POST['email'];
                    $_SESSION['success'] = "You are now logged in";
  	 				 header('location: index.php');
                }   

}
?>

