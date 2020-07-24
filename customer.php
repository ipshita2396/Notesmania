<?php

$conn = mysqli_connect("localhost","root","","notesmania");
 if (!$conn) {
 
   die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
if(isset($_POST['regiter'])){

$C_Name=$_POST['name'];
$C_Email=$_POST['email'];
$C_Mob_no=$_POST['mob_no'];
$C_Password1=$_POST['password1'];
$C_Password2=$_POST['password2'];

 echo $sql="insert into customer(Name,Email,Mob_no,Paasword1,Password2) values('$C_Name','$C_Email','$C_Mob_no','$C_Password1','$C_Password2')";





}
mysqli_close($conn);
?>