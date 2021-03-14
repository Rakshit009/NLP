<?php
include("database.php");

$structure_query = "SELECT * FROM `structure`";
$run_structure = mysqli_query($con,$structure_query);
$structure_row = mysqli_fetch_assoc($run_structure);
$site_name = $structure_row['name'];
$site_login = $structure_row['login'];
$site_register = $structure_row['register'];
?>
<!DOCTYPE html>
<head>
  <link rel="icon" href="../../backgrounds/Purveyor.png" type="image/gif">
  <title>Purveyor - You are only one book away from google mood</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="inde.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <link href="https://fonts.googleapis.com/css?family=Abel|Arimo|Crimson+Pro|Lobster|PT+Sans+Narrow|Pacifico|Patua+One|Roboto|Rubik&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dbe29486b0.js"></script>
<style type="text/css">
  a:hover, a:focus {
    color: #005580;
    text-decoration: underline;
    transition: 0.5s;
    border-radius: 1px; 
}
.spoke
{
  color:white;
  margin-top: 30%;
  font-family: 'Dosis', cursive;
  font-size:30px;
  text-align: center;
}
.flow_button{
  width:140px;
  font-family:'Patua One';
  background:transparent;
  border:1px solid white;
  color:white;
  padding:5px;
  font-size: 18px;
}
.flow_button:hover{
  background-color:white;
  color:black;
  transition:0.6s;
}
</style>
</head>
<body style="background-color: #131E3C">
<nav class="navbar navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button  type="button" class="navbar-toggle navbar-brand" data-toggle="collapse" data-target="#myNavbar">
          <span style="background-color: white" class="icon-bar"></span>
          <span style="background-color: white" class="icon-bar"></span>
          <span style="background-color: white" class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="margin:10px;color:white" href="index.php" ><?php echo $site_name ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" style="margin:15px;" ><?php echo $site_login ?></a></li>
        <li><a href="register.php" style="margin:15px;"><?php echo $site_register ?></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="col-md-6 ">
    <center>
      <p class="spoke">You’re Only One Book Away From a Good Mood.<span style="color: #51a23d;"></span></p>
    </center>
      <center><button onclick="window.location.href = 'main.php';" class="flow_button">See Books</button>
      </center>
</div>
<div class="col-md-6 page">
	<img src="images/ee.jpg" style="margin:10%" width="80%">
</div>
</body>
</html>
