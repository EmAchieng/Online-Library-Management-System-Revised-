<?php 
	include 'connection.php';
	include 'navbar.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        nav {
            float: right;
            word-spacing: 30px;
            padding: 20px;
        }

        nav li {
            display: inline-block;
            line-height: 80px;
        }
        div.scrollmenu {
            background-color: #333;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }

        body {
            background-image: url("images/library1.jpeg");
        }
    </style>
</head>
<body>
<!--  
<div class="scrollmenu">
    <a href="index.php">HOME</a>
    <a href="books.php">BOOKS</a>
    <a href="student_login.php">STUDENT-LOGIN</a>
    <a href="registration.php">REGISTRATION</a>
    <a href="feedback.php">FEEDBACK</a>
</div>
-->
<h2>Student Registration. </h2>

<section>
        <div class="reg_img"></div>
        <div class="box2">
            <h1 style="text-align: left; font-size: 35px; font-family: Lucida Console;
">Library Management System</h1><br>
            <h1 style="text-align: left; font-size: 25px;">User Registration</h1><br>
            <form name="Registration" action="" method="POST">
                <br><br>
                <div class="login">
                    <input type="text" name="first" placeholder="First Name" required=""><br><br>
                    <input type="text" name="last" placeholder="Last Name" required=""><br><br>
                    <input type="text" name="username" placeholder="Username" required=""><br><br>
                    <input type="password" name="password" placeholder="password" required=""><br><br>
                    <input type="text" name="roll" placeholder="Roll No." required=""><br><br>
                    <input type="text" name="email" placeholder="Email Address" required=""><br><br>
                    <input type="text" name="contact" placeholder="Contact" required=""><br><br>
                    <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: blue; width: 70px; height: 30px"></div>
            </form>

        </div>

    </section>
    <?php 
    	if (isset($_POST['submit']))
    	{
    		/* variables */
    		$count=0;
    		$sql="SELECT username FROM student ";
    		$res=mysqli_query($db, $sql);
    		
    		
    		/* loop */
    		/*fetch username one by one  */
    		/*  runs n times*/
    		
    		while($row=mysqli_fetch_assoc($res)) {
    			/* if username is same */
    			if($row['username'] ==$_POST['username'])
    			/*  increment count variable to next*/
    			{
    				$count=$count+1;
    			}
    			
    		}
    		/* else if same name not found in table */
    		if($count=0)
    		
    		{mysqli_query($db, "INSERT INTO student VALUES(); ('$_POST[first]', '$_POST[last]', '$_POST[username]','$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]'  )");
    	?>
    	
    	<script type="text/javascript">
    		alert("Registration Successful");
    		

    	</script>
    	<?php 
    		}
    		/*count variable is not 0 ie username with the same name */
    		/* don't register another user with same name */
    	else{
    		?>
    		    	
    		    	<script type="text/javascript">
    		    		alert("Username already exists. ");
    		    		
    		
    		    	</script>
    		    	<?php 
    		
    		
    	
    	}
    	}
    
    ?>

</section>
</body>
</html>