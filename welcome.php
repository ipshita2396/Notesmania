<html>
<head>
	<title>Notesmaina.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel ="stylesheet" type ="text/css" href ="style1.css">
</head>

<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">
    	<img id="logo" src="images/logo.png" height="48px" width="50px">
      <a class="navbar-brand" href="#">Notesmania</a>

    </div>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
      	<div class="col-xs-4">
        <input type="textarea" class="form-control"  column ="10" placeholder="Search for notes">
    </div>
      </div>
      <button type="submit" class="btn btn-default">
      <span class="glyphicon glyphicon-search"></span></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="document.php"><span class="glyphicon glyphicon-upload"></span> Upload Notes</a></li>
    	
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

    </ul>

    <?php
    session_start();
    if(isset($_SESSION['email'])){
    echo"<h4 style=color:white; align:middle;> ";
    echo ' Welcome  ' .$_SESSION['email']       ;
    echo "&nbsp";

   echo " <a href='logout.php'><input type= submit name = logout value= Logout class= btn .btn-warning ></a> ";
    }
    ?>

  </div>
</nav>

<body>
<div class="background">


<div class="content">
  <h1 class="text-center">Find latest MCA notes here!</h1>
  <?php
  $conn=mysqli_connect("localhost","root","","notesmania");
  
  
echo "<table  border = 5 align = center style= width:100% ;text-align: center;>";
  
echo"<tr>" ;

    echo"<th>";
     echo "<b>S.no</b>";
     echo"</th>";
    echo"<th>";
     echo "<b>Name </b>";
     echo"</th>";
     echo"<th>";
     echo "<b>Subject</b>&nbsp";
     echo"</th>";
     echo"<th>";
     echo "<b>Document</b>&nbsp";
     echo"</th>";
     echo"<tr>";
     echo "<td>";
     $query="SELECT   id ,title,subject,document_image FROM document";
     $result = mysqli_query($conn, $query);
    $rowcount = mysqli_num_rows($result);

    for($i=1;$i<=$rowcount;$i++){

     $row = mysqli_fetch_array($result);
     echo"<tr>";
     echo"<td>";
     echo  $row["id"];
     echo"</td>";
     echo"<td>";
     echo  $row["title"];
     echo"</td>";
     echo"<td>";
     echo $row["subject"];
     echo"</td>";
     echo"<td>";
     
     ?><a download="<?php echo $row["document_image"]?>"href="documents/<?php echo $row["document_image"]?>"><?php
     echo $row["document_image"];?></a><?php
     echo"</td>";
    echo "</tr>";

}
echo"</table>";
  ?>
  
</div>
</div>
</body>

<div class="navbar navbar-inverse navbar-fixed-bottom"> 

 <ul class="nav navbar-nav" >
    	<li><a href="Contact.html"><span class="glyphicon glyphicon-upload"></span class="text-center"> Contact Us</a></li>
    	<li><a href="About.html"><span class="glyphicon glyphicon-download"></span> About Us</a></li>
</ul>
</div>

</div>
</html>
