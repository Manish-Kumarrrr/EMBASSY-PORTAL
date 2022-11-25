<html>

<head>
    <title>Embassies</title>
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
            height: 80vh;
            position: relative;
            margin: auto;
            margin-top: 5vh;
            border: 2px solid blue;
            border-radius: 10px;
            text-align: center;
            /* align-items: center; */
            padding: 1%;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            color: blue;
            /* overflow-y: scroll; */

            /* display: flex;
            justify-content: space-around;
            flex-direction: row; */

        }

        .adil section {

            margin-bottom: 2vh;
            font-size: 30px;
            font-weight: 800;
            text-shadow: 1.5px 1.5px 1px lightgrey;
            color: black;
        }

        .search {
            width: 100%;
            display: block;
            height: 5%;
            /* border: 1px solid black; */
        }

        .adil4 {

            display: flex;
            justify-content: space-around;
            flex-direction: row;
            position: relative;
            box-sizing: border-box;
            max-height: 50vh;
        }

        .adil4 .adil2,
        .adil4 .adil3 {
            height: 400px;
            width: 48%;
            margin: 1%;

        }

        .adil4 .adil2 {
            float: left;
            border: 2px solid lightgrey;
            color: black;
        }

        .adil2 select {
            margin-top: 5%;
            width: 60%;
            height: 12%;
            outline: none;
            text-align: center;
        }


        .adil3 {
            float: right;
            border: 2px solid lightgrey;
            text-align: center;
            height: 500px;
            /* overflow-y: scroll; */
            position: relative;

            /* box-sizing: border-box; */
            /* position: absolute; */

        }

        .search_for {
            margin-top: 13px;
            padding: 5px;
            overflow-y: scroll;
            justify-content: center;
            align-items: center;
            height: 320px;
            color: blue;
            /* border: 2px solid black; */
        }

        .incountry {
            position: sticky;
            color: black;
        }

        button {
            width: 70px;
            height: 40px;
            border-radius: 4px;
        }


        .adil:hover {
            box-shadow: 0px 0px 15px 3px grey;
        }

        .search_for h6:hover,
        .adil3 h6:hover {
            transition: 0.5s;
        }

        .search_for h6:hover,
        .adil h6:hover {
            display: inline;
            border: 2px solid black;
            border-radius: 5px;
            padding: 4px;
            margin-bottom: 2px;
            text-decoration: none;
        }

        form {
            display: flex;
            justify-content: space-evenly;
        }

        form select {

            height: 40px;
            width: 340px;
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
                            <a class="dropdown-item" href="embassies.php">Embassy </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.html">Admin Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </nav>


    <?php
    $DB_HOSTNAME = "localhost";
    $DB_USERNAME = "root";
    $DB_PASS = "";
    $DB_NAME = "project";
    $conn = mysqli_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASS, $DB_NAME) or die('DATABASE CONNECTION ERROR');
    ?>



    <div class="adil">
        <section class="search"> Search Embassies </section>
        <hr>

        <form action="embassies_individual.php" method="post">
            <select name="ofCountry">
                <option value="" required>Embassy Of Country</option>
                <?php
                $sql = "SELECT DISTINCT(country) FROM embassy ORDER BY country";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if ($num > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $adil = $row['country'];
                        echo '<option value="' . $row['country'] . '">' . $row['country'] . '</option>';
                        echo "<br>";
                    }
                }
                ?>
            </select>
            <button type="submit" name="submit"> Search</button>
            <select name="inCountry">
                <option value="" required>Embassy IN Country</option>
                <?php
                $sql = "SELECT DISTINCT(location) FROM embassy ORDER BY location";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $adil = $row['location'];
                        // echo "<option value='opt'>" . $row['location'] . "</option>";
                        // echo "<br>";
                        echo '<option value="' . $row['location'] . '">' . $row['location'] . '</option>';
                        echo "<br>";
                    }
                }
                ?>
            </select>
        </form>

        <!-- *******************OF COUNTRY************************ -->
        <div class="adil4">

            <div class="adil2">
                <h2 align="center"> OF COUNTRY</h2>
                <hr>
                <!-- <select name="" id="">
                        <option>
                            <h3>SELECT COUNTRY</h3>
                        </option>
                        <?php
                        $sql = "SELECT DISTINCT(country) FROM embassy ORDER BY country";
                        $result = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $adil = $row['country'];
                                echo "<option value='opt'>" . $row['country'] . "</option>";
                                echo "<br>";
                            }
                        }
                        ?>
                    </select>

                    <button type="submit" value="submit">Search</button>
                    <hr> -->

                <!-- ******************Trying to print in search box too********************* -->

                <div class="search_for">
                    <?php

                    $sql = "SELECT DISTINCT(country) FROM embassy ORDER BY country";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);

                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $adil = $row['country'];
                            echo "<h6 ><strong>" . $row['country'] . "</strong></h6>";
                            echo "<hr>";
                        }
                    }

                    ?>
                </div>
            </div>

            <!-- *********************IN COUNTRY********************** -->

            <div class="adil3">
                <div class="incountry">
                    <h2 align="center"> IN COUNTRY</h2>
                </div>

                <hr>
                <div class="search_for">
                    <?php
                    // $DB_HOSTNAME = "localhost";
                    // $DB_USERNAME = "root";
                    // $DB_PASS = "";
                    // $DB_NAME = "embassy";
                    // $conn = mysqli_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASS, $DB_NAME) or die('DATABASE CONNECTION ERROR');

                    // $aadil = $_GET['uid'];
                    // $sql = "SELECT DISTINCT(location) FROM embassy WHERE location='$aadil' ORDER BY location";

                    $sql = "SELECT DISTINCT(location) FROM embassy ORDER  BY location";
                    $result = mysqli_query($conn, $sql);
                    // $row = mysqli_fetch_assoc($result);

                    // echo "<a href=" . $row['link'] . "> Go to maps</a>";
                    $num = mysqli_num_rows($result);

                    if ($num > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $adil = $row['location'];
                            // echo "<a href='embassies_individual.php?uid2=$adil'>" . $row['location'] . "</a>";
                            echo "<h6 ><strong>" . $row['location'] . "</strong></h6>";
                            echo "<hr>";
                        }
                    }

                    ?>

                </div>
            </div>

        </div>


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