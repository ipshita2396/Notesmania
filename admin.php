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
      <li><a href="alogin.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>

    </ul>

    <?php
    session_start();
    if(isset($_SESSION['uname'])){
    echo"<h4 style=color:white; text-align:middle;> ";
    echo ' Welcome  ' .$_SESSION['uname']       ;
    echo "&nbsp";

   echo " <a href='logout.php'><input type= submit name = logout value= Logout class= btn .btn-warning ></a> ";
    }
    

    ?>

  </div>
</nav>
<body>
  <h1><b>Welcome to the Admin panel<b></h1>
  <div class="background">

  <?php
  $conn=mysqli_connect("localhost","root","","notesmania");

  $query="SELECT id ,title,subject,document_image FROM document ";
     $result = mysqli_query($conn, $query);
    if($rowcount = mysqli_num_rows($result)){
    echo "<table  border = 5 color = black style= width:100% ;text-align: center;>";
  
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
     echo"<th>";
     echo "<b>Download here</b>";
     echo "</th>";
     echo"<th>";
     echo "<b>Delete</b>";
     echo "</th>";
     echo"<tr>";
     echo "<td>";

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
     echo $row["document_image"];
     echo"</td>";
     echo"<td>";
      if(isset($_SESSION['uname'])){
      ?>
       <a download="<?php echo $row["document_image"]?>"href="documents/<?php echo $row["document_image"];?>" class="btn btn-danger btn-xs" role="button" name="download">Download</a> 
     <?php
     }else{
  
     ?>
     <a href="alogin.php" class="btn btn-danger btn-xs" name = download role="button">Download</a>
      
    <?php
  }
       echo"</td>";
       echo "<td><a href =delete.php?id=".$row['id'].">Delete</a></td>"; 
      echo "</tr>";

  
}
}
echo"</table>";

?>
</div>
</body>
</html>
