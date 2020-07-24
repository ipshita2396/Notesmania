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

    <form action="alogin.php" method="POST">
        <div class="form-group">
            <Label for="Email">Username</Label>
        <input type ="text" class="form-control"  name="usera" placeholder="Enter username/email">
    </div>
    <div class="form-group">
        <Label for="password">Password</Label>
        <input type ="password" class="form-control" name ="passworda" placeholder="Enter password" >
    </div>
    <input type="submit" value="Login" name="login" class="btn btn-primary "> 
    <h5 class="text-center">Not a member?</h5>
    
    <a href="asignup.php" class="btn btn-danger" role="button">Sign-up</a>

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

$C_Email=$_POST['usera'];
$C_Password=$_POST['passworda'];

    $query = "SELECT * FROM admin WHERE uname ='$C_Email' AND password1 ='$C_Password'";
    $result = mysqli_query($conn, $query);
        if(!$row = mysqli_fetch_assoc($result))
            {
                     echo "<script>alert('Wrong password or username')</script>";
                }
    else 
                {
                    $_SESSION['uname'] = $_POST['usera'];
                    echo "<script>alert('You are now logged in')</script>";
                     
                }   

}
?>

