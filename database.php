<?php

$conn = mysqli_connect("localhost","root","","notesmania");
 if (!$conn) {
 
   die("Connection failed: " . mysqli_connect_error());
 
}
 
echo "Connected successfully";
if(isset($_POST['sumbit']))
	{
	$title = $_POST['title'];
	$semester = $_POST['semester'];
	$subject = $_POST['subject'];
	$price = $_POST['price'];
	$document_desc = $_POST['document_desc'];


//geting the document
$document_image =$_FILES['document_image']['name'];
$document_image_tmp=$_FILES['document_image']['tmp_name'];

$sql ="INSERT INTO document(title,semester,subject,price,document_image,document_desc) VALUES('$title','$semester','$subject','$price','$document_image','$document_desc')";
}
mysqli_close($conn);
 ?>