<?php
require_once('config/connect.php');


$result=$con->query("SELECT * FROM flights");

if (isset($_POST['submit'])) {
  $counting=$_POST['optradio'];
  $departfrom=$_POST['depart'.$counting];
  $arriveat=$_POST['arriveat'.$counting];
  $departuredate=$_POST['dptdate'.$counting];
  $passengerno=$_POST['passengers'];
  $statement="INSERT INTO booking(departfrom,arriveat,departdate,passengerno) VALUES ('".$departfrom."','".$arriveat."','".$departuredate."','".$passengerno."')";
  $query2=mysqli_query($con,$statement);
  header('location: index.php');
}
 ?>

<!DOCTYPE html>
<html>
<?php
require_once('config/connect.php');



$result=$con->query("SELECT * FROM flights");

if (isset($_POST['submit'])) {
  $counting=$_POST['optradio'];
  
  $departfrom=$_POST['depart'.$counting];
  $arriveat=$_POST['arriveat'.$counting];
  $departuredate=$_POST['dptdate'.$counting];
  $passengerno=$_POST['passengers'];
  $statement="INSERT INTO booking(user,departfrom,arriveat,departdate,passengerno) VALUES ('".$departfrom."','".$arriveat."','".$departuredate."','".$passengerno."')";
  $query2=mysqli_query($con,$statement);
 
}
 ?>
<script type="text/javascript" src="jquery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">



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
					<li><a href="index.php">Home</a></li>
					<li><a href="pages/imggal.php">image gallary</a></li>
					<li><a href="pages/about.php">About us</a></li>
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

</div>
<div class="col-md-5 col-md-offset-0 text-center" style="color:darkblue;">
	<h2> Have a great trip with Rainbow airlines</h2>
</div>
	
					<div class="col-md-5 col-md-offset-1 form">
						
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th>#</th>
                  <th>Depart From</th>
                  <th>Arrive At</th>
                  <th>Departure Date</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $count=0;
                  while ($row = $result->fetch_assoc()):
                    ?>
                  <tr>
                    <form class="form" action="" method="post" role="form">

                      <td><input type="radio" name="optradio" value="<?= $count ?>" required>
                        </td>

                        <td><?php echo $row['departfrom']; ?>
                          <div class="<?=$row['flightno'] ?>" style="display:none;">
                            <input type="text" name=<?= 'depart'.$count  ?> value="<?= $row['departfrom'] ?>" class="form-control">
                          </div></td>

                          <td><?php echo $row['arriveat']; ?>
                            <div class="<?=$row['flightno'] ?>" style="display:none;">
                              <input type="text" name=<?= 'arriveat'.$count ?> value="<?= $row['arriveat'] ?>" class="form-control">
                            </div></td>

                            <td><?php echo $row['departuredate']; ?>
                              <div class="<?=$row['flightno'] ?>" style="display:none;">
                                <input type="date" name=<?= 'dptdate'.$count ?> value="<?= $row['departuredate'] ?>" class="form-control">
                              </div></td>

                  </tr>
                  <?php
                  $count++;
                  endwhile; ?>
                </tbody>
              </table>
               <label for="sel1">Passengers</label>
                <select class="form-control" id="sel1" name="passengers">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select><br>

              <input type="submit" name="submit" value="Book Flight" class="btn btn-primary pull-right">
</div>


	


</body>

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
</html>