<?php
require_once('../config/connect.php');

$select1 = $con->query("SELECT * FROM aboutus WHERE id='1'");
$select2 = $con->query("SELECT * FROM aboutus WHERE id='2'");
$select3 = $con->query("SELECT * FROM aboutus WHERE id='3'");
while($row = $select1->fetch_assoc()){
  $content1 = $row['Description'];
}
while($row = $select2->fetch_assoc()){
  $content2 = $row['Description'];
}
while($row = $select3->fetch_assoc()){
  $content3 = $row['Description'];
}
?>
<script type="text/javascript" src="../jquery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
<script type="text/javascript" src="../Bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<head>
  <title></title>
</head>
<body>
<header>
  <nav class="navbar navbar" role="navigation" style="background-color:#95C1F7; ">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">RAINBOW</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="../index.php">Home</a></li>
          <li><a href="imggal.php">image gallary</a></li>
          <li><a href="about.php">About us</a></li>
        </ul>
                <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="pages/Login/login.php">login</a></li>
              <li><a href="pages/signup/signup.php">sign up</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
</header>
<section class="sectionbody">
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <h1>About Us</h1><br>
          <h4><?=$content1; ?>
          </h4>
        </div>
      </div>
    </div>
    <br>

      <div class="row">
        <div class="col-md-4">
          <div class="img-grid">
          <img src="../img/about1.jpg" alt="" style="width:100%;" class="img-rounded">
        </div>
      </div>
        <div class="col-md-4">
          <div class="img-grid">
          <img src="../img/about2.jpg" alt="" style="width:100%;" class="img-rounded">
        </div>
        </div>
        <div class="col-md-4">
          <div class="img-grid">
          <img src="../img/about3.jpg" alt="" style="width:100%;" class="img-rounded">
        </div>
        </div>
      </div>
      <br><br>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <p><?=$content2; ?></p>
            </div>
            <div class="col-md-6">
              <p><?=$content3; ?></p>
            </div>
          </div>
        </div>
      </div>

  </div>
</section>
<br>
<footer>
  <div class="container">
    <div class="row">
    <div class="col-md-6">
      <h4>All rights reserved by Rainbow Airlines since 2007.<h4>
    </div>
    <div class="col-md-6">
  
    </div>
  </div>
  </div>
  
</footer>
