<html>

<head>
    <title>embassyportal/visa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>

<body>

    <!-- naviation******************************************************************************************************************************** -->
    <nav class="navbar navbar-expand-lg " style="background-color: black; color:white;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="#" style="
                  font-family: 'Abril Fatface', cursive,sans-serif;
                    FONT-WEIGHT: BOLD;
                    FONT-SIZE: 40;color:white;
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
                            <a class="dropdown-item" href="services.html">Current Status</a>

                            <a class="dropdown-item" href="help.html">Help</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.html">Admin Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2">

                <h1 style="text-align: center; color: blue; ">Your Application For Visa
                </h1>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $adhaar = $_POST['adhaar'];
        // $pass = $_POST['pass'];
        $nationality = $_POST['nationality'];
        $visatype = $_POST['visatype'];
        $supporteddoc = $_POST['supporteddoc']; //doc

        $record = $_POST['record_id'];
        $org = $_POST['org'];
        $date = $_POST['date'];
        $blood = $_POST['blood'];
        $dissabilities = $_POST['dissabilities'];
        $health = $_POST['health']; //doc

        // $filename = $_FILES["face"]["name"];
        // $tempname = $_FILES["face"]["tmp_name"];
        // $folder = "project-dbms/memory/" . $filename;

        // move_uploaded_file($tempname, $folder);


        // $filename1 = $_FILES["identity"]["name"];
        // $tempname1 = $_FILES["identity"]["tmp_name"];
        // $folder1 = "project-dbms/memory/" . $filename1;

        // move_uploaded_file($tempname1, $folder1);


        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "project";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            // die("Sorry we failed to connect: " . mysqli_connect_error());
            echo "<h3 align='center'>Facing some technical issue! Please try later.<h3>";
        } else {


            // CREATE TABLE health_record (
            //   adhaar bigint(12) NOT NULL,
            //   record_id varchar(20) NOT NULL,
            //   blood_group varchar(20) DEFAULT NULL,
            //   dissabilities varchar(50) DEFAULT NULL,
            //   organisation varchar(200) DEFAULT NULL,
            //   issue_date date DEFAULT NULL,
            //       health varchar(200) DEFAULT NULL,
            //   PRIMARY KEY (record_id),
            //     FOREIGN KEY(adhaar) REFERENCES account(adhaar)
            // );

            $sql1 = "SELECT adhaar FROM visa WHERE adhaar='$adhaar'";
            $result1 = mysqli_query($conn, $sql1);
            $row1 = $result1->fetch_assoc();

            if ($row1 == NULL) {
                $sql = "INSERT INTO `visa` (`adhaar`, `nationality`, `visatype`, `supporteddoc`, `status`) VALUES ('$adhaar', '$nationality', '$visatype', '$supporteddoc', 'PROCESSING')";

                $result = mysqli_query($conn, $sql);

                $adil = "INSERT INTO `health_record` VALUES('$adhaar','$record','$blood','$dissabilities','$org','$date','$health')";

                $result2= mysqli_query($conn, $adil);


                echo '
        <div class="container">
  
        <div class="row">
  
            <div class="col-xl-8 offset-xl-2">
        
        
        <div class="alert alert-success alert-dismissible fade show" role="alert" >
          <strong>Successfully!</strong> Submited
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        
        </div></div>
        </div>';


                echo '<div class="container"  >
        <div class="row">
            <div class="col-md-12">
                <div class="error-template" style="
                text-align: center;">
                  
                    <h3>CHECK APPLICATION STATUS</h3>
                    <h4>with regular interval</h4>
             
                   
                </div>
            </div>
        </div>
    </div>';
            } else {
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '
      
      <div class="container">
  
      <div class="row">

          <div class="col-xl-8 offset-xl-2">
      

      
      
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error! </strong>USER ALREADY APPLIED FOR VISA
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    
    
    </div></div>
</div>
    
    ';
            }
        }
    }


    ?>





    <!-- /.container-->
    <br><br><br>

    <!-- marque************************************************************************************************************************* -->
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
    <!-- footer****************************************************************************************************************************** -->
    <footer class="text-center text-white relative-bottom" style="background-color: #21081a;">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->
        <br>
        <br>
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