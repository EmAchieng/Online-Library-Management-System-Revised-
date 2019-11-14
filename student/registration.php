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
                    <input type="text" name="contact" placeholder="Phone Number" required=""><br><br>
                    <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: blue; width: 70px; height: 30px"></div>
            </form>

        </div>

    </section>

</section>
</body>
</html>