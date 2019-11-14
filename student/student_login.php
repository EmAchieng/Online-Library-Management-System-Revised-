<?php 
	include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Log in</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
        section {
            margin-top: -20px;
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
            background-image: url("images/latemigrations.jpg");
        }
    </style>
</head>
<body>
<!--  coding is in the navbar

    <nav class="navbar navbar-inverse">
    <div class="scrollmenu">
                <div class="nav navbar-nav">
                <a href="index.php">HOME</a>
                <a href="books.php">BOOKS</a>
                <a href="feedback.php">FEEDBACK </a>

                <div class="nav navbar-nav navbar-right">
                    <a href="student_login.php"><span class="gliphicon gliphicon-log-in"> LOGIN</span></a>
                    <a href="student_login.php"><span class="gliphicon gliphicon-log-out"> LOGOUT</span></a>
                <a href="registration.php"><span class="gliphicon gliphicon-user">  SIGN UP</span></a>
                </div>

                </div>

    </div>
    </nav>
    -->
    <h2>Student Log in. </h2>


<section>
    <div class="log_img"></div>
    <div class="sec_img">
                    <div class=" w3-content w3-section" style="width: 800px; align: center">
                        <img class="mySlides w3-animate-bottom" src ="images/glass.png" style="width: 100%">
                        <img class="mySlides w3-animate-bottom" src="images/oldschool.png" style="width: 100%">
                        <img class="mySlides w3-animate-bottom" src="images/beach.png" style="width: 100%">
                        <img class="mySlides w3-animate-bottom" src="images/latemigrations.jpg" style="width: 100%">

                    </div>
                    <script type="text/javascript">
                        var a=0;
                        carousel();

                        function carousel() {
                            //declare variable
                            var i;
                            var x= document.getElementsByClassName("mySlides");

                            //displays number of image
                            //one image shows; other none
                            //document.write(x.length);
                            for (i=0; i<x.length; i++) {
                                //to display the element
                                //start from 0 to the length of the array
                                x[i].style.display= "none";
                            }
                            //a incremented by 1
                            a++;

                            if(a > x.length) {a = 1}
                            x[a-1].style.display = "block";
                            //call the function
                            //image changes after 5 seconds
                            setTimeout(carousel, 5000)

                        }
                    </script>
        <br> <br><br>
    <div class="box1">
        <h1 style="text-align: left; font-size: 35px; font-family: Lucida Console;
">Online Library Management System</h1><br>
        <h1 style="text-align: left; font-size: 25px;">Log in To Continue</h1><br>
        <form name="login" action="" method="">
            <div class="login">
            <input class="'form-control" type="text" name="username" placeholder="Username" required=""><br><br>
            <input  type="password" name="Password" placeholder="password" required=""><br><br>
            <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: blue; width: 70px; height: 30px"> </div>
        </form>
    <p style="color: white; padding-left: 15px">
        <br><br>
        <a style="color: #cccccc"> Forgot Password? </a> &nbsp &nbsp &nbsp &nbsp &nbsp
        New To This Site? &nbsp &nbsp &nbsp &nbsp &nbsp <a style="color:white;" href="registration.html"> Sign Up</a>
    </p>
    </div>

</section>

</body>
</html>