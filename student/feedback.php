<?php
	include 'connection.php';
	include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
    body {
    	background-image: url("images/pages.jpg");
    }
    .wrapper {
    	padding: 10px;
    	margin: -20px auto;
    	width: 900px;
    	height: 600px;
    	background-color: green;
    	opacity: .8;
    	color: black;
    }
    .form-control
    {
    	height: 70px;
    	width: 60%;
    }
    .scroll {
    	width: 100%;
    	height: 300px;
    	overflow: auto;
    }
    
    
    </style>
    </head>
<body>
	<div class="wrapper">
		<h4> If you have any suggestions or questions please comment here. </h4>
		<form style="" action="" method="POST">
			<input class="form-control" type="text" name="comment" placeholder="Write Something..."><br>
			<input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">
		</form>
	<br><br>
	<div class="scroll">
		<?php 
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO comments VALUES('', '$_POST[comment]'); ";
				if(mysqli_query($db, $sql))
				{
					/* arrange according to which comment came first or last  */
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					
					$res=mysqli_query($db, $q);
					
					echo "<table class= 'table table-bordered'>";
    				while ($row=mysqli_fetch_assoc($res)) {
    					
    					echo "<tr>";
    						echo "<td>"; echo $row['comment']; echo"</td>";
    					
    					echo "</tr>";
    					
    				}
				}
			}
			else {
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					
				$res=mysqli_query($db, $q);
					
				echo "<table class= 'table table-bordered'>";
						while ($row=mysqli_fetch_assoc($res)) {
								
							echo "<tr>";
							echo "<td>"; echo $row['comment']; echo"</td>";
								
							echo "</tr>";
								
						}
			}
		
[]		?>
	</div>
	</div>
</body>
</html>