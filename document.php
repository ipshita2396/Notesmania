<html>
<head>
<title>document</title>
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
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><strong> Sign Up</strong></a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>

    </ul>
</div>
</nav>

<body>
<div class="inner-wrapper">
	<div class="container ">
		<div calss="row justify-content-center">
			<div class="col-xs-4">
				<p><h1 class="text-center">Document Details  </h1></p>

	<form  class="form"action="document.php" method="POST" enctype="multipart/form-data">
	
	
	<div class="form-group">
		<Label for="topic">Title</Label>
		<input type ="text" class="form-control"  name="title" required >
	</div>
	<div class="form-group">
		<label for="sem">Semester</label>
		<select class="form-control" name ="semester">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
	</select>
	
	</div>
	<div class="form-group">
		<label for="sub">Subject </label>
		<input type ="text" name="subject" class ="form-control" >
	</div>
	
	<div class="form-group">
		<label for="Document">Document</label>
		<input type ="file" name="document_image" class="form-control">
	</div>
	<div class="form-group">
		<label for="disc">Description</label>
		<textarea type ="text"  name ="document_desc" class ="form-control"  row ="10"  ></textarea>
	</div>

	<input type="submit" name="upload" value="Upload" class="btn btn-primary btn-block"/> 
</form>
</div>
</div>
</div>
</div>

</body>
</html>
<?php
 session_start();
$conn = mysqli_connect("localhost","root","","notesmania");
 if (!$conn) {
 
   die("Connection failed: " . mysqli_connect_error());
 
}
if(isset($_SESSION['email'])||(isset($_SESSION['uname']))){

 
	if(isset($_POST['upload']))
	{
	$C_Title=$_POST['title'];
	$C_Semester=$_POST['semester'];
	$C_Subject=$_POST['subject'];
	$C_Price=$_POST['price'];
	$C_Document_desc=$_POST['document_desc'];


//geting the document
$C_Document_image=$_FILES['document_image']['name'];
$C_Document_image_tmp=$_FILES['document_image']['tmp_name'];
move_uploaded_file($C_Document_image_tmp, "documents/$C_Document_image");
$sql ="insert into document(title,semester,subject,document_image,document_desc)values('$C_Title','$C_Semester','$C_Subject','$C_Document_image','$C_Document_desc')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Product has been uploaded')</script>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		}
		 }else{

	echo "<script>alert('Please login first')</script>";

}
mysqli_close($conn);

?>