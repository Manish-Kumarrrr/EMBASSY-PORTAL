<html>

<head>
    <title>Embassy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
    <link href="1.css" rek="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <style>
        .bg-dark {
            background-color: blue;
        }

        .adil {
            width: 70vw;
            height: 73vh;
            margin: auto;
            margin-top: 5vh;
            border: 2px solid blue;
            border-radius: 10px;
            /* text-align: center; */
            /* align-items: center; */
            padding: 2%;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            box-sizing: border-box;

        }

        .adil h3 {
            margin: 0px;

        }

        .adil:hover {
            box-shadow: 0px 0px 15px 3px grey;
        }

        .adil a {
            transition: 0.5s;
        }

        .adil a:hover {
            border: 2px solid black;
            border-radius: 5px;
            padding: 4px;
            margin-bottom: 2px;
            text-decoration: none;
        }

        .adil section {
            margin-bottom: 2vh;
            font-size: 30px;
            font-weight: 800;
            text-shadow: 1.5px 1.5px 1px lightgrey;
            color: black;
        }
    </style>
</head>

<body>
    <!-- naviation******************************************************************************************************************************** -->
    <nav class="navbar navbar-expand-lg " style="background-color: black; color:white;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="#" style="
                 
                    FONT-WEIGHT: BOLD;
                    FONT-SIZE: 40;color:white;font-family: 'Abril Fatface', cursive,sans-serif;
                ">EMBASSY PORTAL</a>
            </ul>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--dashboard********************************************************************************************************** -->
                    <li class="nav-item dropdown">
                        <a class="navbar-brand" href="#" id="navbarDropdown" style="text-align: right;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            |Dashboard|
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="home.html">Home</a>
                            <a class="dropdown-item" href="createaccount.html">New User</a>
                            <a class="dropdown-item" href="login.html">User Login</a>
                            <a class="dropdown-item" href="services.html">Our Services</a>

                            <a class="dropdown-item" href="help.html">Help</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.html">Admin Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </nav>



    <div class="adil">
        <!-- <section> Search Indian Embassies In</section>
        <hr> -->
        <?php
        $DB_HOSTNAME = "localhost";
        $DB_USERNAME = "root";
        $DB_PASS = "";
        $DB_NAME = "embassy";
        $conn = mysqli_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASS, $DB_NAME) or die('DATABASE CONNECTION ERROR');

        $aadil = $_POST["ofCountry"];
        $aaadil = $_POST["inCountry"];
        $sql = "SELECT * FROM `embassy` WHERE `location`='$aaadil' AND `country`='$aadil'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($result && $row) {
            echo "<section>" . "EMBASSY OF " . $row['country'] . " IN " . $row['location'] . "</section>";
            echo "<hr>";

            // echo "<h3>Address</h3><br>" . $row['address'];
            // $map = $row['link'];
            echo "<h3>Address</h3><br><a href='" . $row['link'] . "'>" . $row['address'] . "</a>";
            // echo "<h3>Address</h3><br><a href='$map'>" . $row['address'] . "</a>";
            echo "<br>";
            echo "<br>";
            // echo "<h3>E-mail</h3><br>" . $row['email'];
            $email = $row['email'];
            echo "<h3>E-mail</h3><br><a href=mailto:$email>" . $row['email'] . "</a>";
            echo "<br>";
            echo "<br>";
            $phone = $row['phone'];
            echo "<h3>Contact Us</h3><br><a href=tel:$phone>" . $row['phone'] . "</a>";
            // echo "<h3>Contact</h3><br>" . $row['phone'];
            echo "<br>";
            echo "<br>";
            // echo "<h3>Website</h3><br>" . $row['website'];
            $website = $row['website'];
            echo "<h3>Website</h3><br><a href='$website'>" . $row['website'] . "</a>";
            echo "<br>";
            echo "<br>";
        } else {
            echo "<h3 align='center'>Not Found!!!</h3>";
        }

        ?>
    </div>

    <!--marquee ************************************************************************************************************************************* -->
    <br>
    <br>
    <br>
    <div class="">
        <div>
            <marquee Scrolldelay=25>
                <div style="display:flex; flex-direction:row;">
                    <div><img src="image\m1.jpg"></image>
                    </div>
                    <div><img src="image\m.jpg"></image>
                    </div>
                    <!--m stnd mrq-->
                    <div><img src="image\m2.jpg"></image>
                    </div>
                    <div><img src="image\m3.jpg"></image>
                    </div>
                    <div><img src="image\m4.jpg"></image>
                    </div>
                    <div><img src="image\m5.jpg"></image>
                    </div>
                    <div><img src="image\m6.jpg"></image>
                    </div>
                    <div><img src="image\m7.jpg"></image>
                    </div>
                    <div><img src="image\m8.jpg"></image>
                    </div>
                    <div><img src="image\m9.jpg"></image>
                    </div>
                    <div><img src="image\m10.jpg"></image>
                    </div>
                    <div><img src="image\m11.jpg"></image>
                    </div>
                    <div><img src="image\m1.jpg"></image>
                    </div>
                    <div><img src="image\m2.jpg"></image>
                    </div>
                    <div><img src="image\m3.jpg"></image>
                    </div>
                    <div><img src="image\m4.jpg"></image>
                    </div>
                </div>
            </marquee>
        </div>
    </div>
    <br>
    <br>


    <br><br><br>

    <footer class="text-center text-white relative-bottom" style="background-color: #21081a;">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="error-template" style="
                              text-align: center;">
                <h2>Contact us</h2>
                <h5>Email: embassyportal2022@hotmail.com</h5>
                <h5>Phone No: 8210724381</h5>
                <h5>Address: Dak Bunglow Patna-800001</h5>
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.8499612865257!2d85.13544761483894!3d25.609901483705855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed585cccbdcd8f%3A0x2ffc9435b3f39b42!2sDak%20Bungalow%20Chauraha%2C%20Budh%20Vihar%2C%20Fraser%20Road%20Area%2C%20Patna%2C%20Bihar%20800001!5e0!3m2!1sen!2sin!4v1667073437765!5m2!1sen!2sin" width="93%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
            <h5>
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">embassyportal.com</a>
            </h5>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>


</body>

</html>