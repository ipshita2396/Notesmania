<?php
$conn = mysqli_connect("localhost","root","","notesmania");
 if (!$conn) {
 
   die("Connection failed: " . mysqli_connect_error());
 
}
session_start();
if(isset($_SESSION['uname'])){
$query ="delete from document where id='$_GET[id]'";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Product has been deleted')</script>";
    
}
}else{
	header('admin.php');
}
?>