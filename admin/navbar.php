<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewpoint" content="width-device-width", initial-scale = "1">
    <style type="text/css"></style>
    <title> </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel = "stylesheet" type="text/css" href="style.css"  >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class ="container-fluid">
    <div class="navbar-header">
    	<a class="navbar-brand active">Library System </a>
    </div>
                <ul class="nav navbar-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="feedback.php">FEEDBACK </a></li>
				</ul>
				<?php 
					if (isset($_SESSION['login_user']))
					{ ?>
						
						
						?>
						<ul class="nav navbar-nav navbar-right">
						<li><a href="">
							<div style="color:white"> 
							<?php 
								echo "Welcome ".$_SESSION['login_user'];
							?>
							</div>
						</a></li>
							<li><a href="student_logout.php"><span class="gliphicon gliphicon-log-out"> LOGOUT</span></a></li>
						</ul>
						<?php 
					}
					else {?>
						<ul class="nav navbar-nav navbar-right">
						<li><a href="student_login.php"><span class="gliphicon gliphicon-log-in"> LOGIN</span></a></li>
						<li><a href="student_logout.php"><span class="gliphicon gliphicon-log-out"> LOGOUT</span></a></li>
						<li><a href="registration.php"><span class="gliphicon gliphicon-user">  SIGN UP</span></a></li>
						</ul>
					<?php }
				?>
                

                </div>

    </div>
    </nav>
    

</body>
</html>