<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name = "viewpoint" content="width-device-width", initial-scale = "1">
    <style type="text/css"></style>
    <title>Online Library System </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel = "stylesheet" type="text/css" href="style.css"  >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>

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
    </style>
</head>
<body>
	


        <div class = "wrapper">
            <header>
                <div class="logo">
                <img src="images/pages.jpg">
                </div>
                    <h1 style="color: navajowhite; text-align: center"> Online Library Management System</h1>

        <div class="scrollmenu">
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">HOME</a>
                        </li>
                        <li>
                            <a href="books.php">BOOKS</a>
                        </li>

                        <li>
                            <a href="student_login.php">STUDENT-LOGIN</a>
                        </li>

                        <li>
                            <a href="feedback.php">FEEDBACK</a>
                        </li>
                    </ul>

                </nav>
        </div>
            </header>
            <section>
            
               <div class="sec_img">
                    <div class=" w3-content w3-section" style="width: 800px;">
                        <img class="mySlides w3-animate-left" src ="images/glass.png" style="width: 100%">
                        <img class="mySlides w3-animate-left" src="images/oldschool.png" style="width: 100%">
                        <img class="mySlides w3-animate-fading" src="images/beach.png" style="width: 100%">
                        <img class="mySlides w3-animate-fading" src="images/latemigrations.jpg" style="width: 100%">

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
                 <br><br><br>
                <div class="box">
                    <br><br><br>
                    <h1 style= "text-align: center" > Welcome To Our Library</h1><br>
                    <h1 style="text-align: center "> Opens at 9 am </h1><br>
                    <h2 style="text-align: center"> Closes at 15:00 </h2><br>
                    <h1> </h1>
                </div>
                </div>
            </section>


            <footer>
                <p style="color: white; text-align: center; ">
                    <br>
                    Email Address: &nbsp mylibrary@gmail.com <br><br>

                    Mobile: &nbsp 000-000-000-000
                </p>

            </footer>
                </div>
        </div>

</body>
</html>