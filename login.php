<html>

<head>
  <title>Login Here</title>
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
  $adhaar = $_POST['adhaar'];

  $pass = $_POST['pass'];

  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "project";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Die if connection was not successful
  if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
  } else {
    // Submit these to a database
    // Sql query to be executed 
    $sql = "SELECT * FROM account WHERE adhaar=$adhaar and pass=$pass";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    if ($row) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

      // $sql1 = "SELECT * FROM account WHERE adhaar='$adhaar'";
      // $result1 = mysqli_query($conn, $sql);
      // $row1= $result1->fetch_assoc();

      echo '<div class="container" style="margin:200px 500px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="error-template" style="
                text-align: center;">
                    <h1 >
                        Welcome ' . $row["name"] . '
                        
                    </h1>
                    <h3>Now you can avail following Services</h3>
                    <div class="error-actions">
                    <a href="passport.html" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                    Apply for Passport</a>

                        <a href="visa.html" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                            Apply for Visa </a>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
    } else {
      // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error! </strong>USER DOES NOT EXIST
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

      echo '<div class="container" style="margin:200px 500px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="error-template" style="
                text-align: center;">
                    <h1 >
                        Oops!</h1>
                    <h2>
                        USER NOT found</h2>
                    <div class="error-details"><h4>
                    Sorry, no user exists with this Aadhaar number, the requested page could not be found!</h4>
                    </div>
                    <div class="error-actions">
                        <a href="login.html" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                            Login Again </a>
                          <a href="login.html" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                            Contact Support </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
    }
  }



  ?>


  
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
    <br>
    <br>
    <!-- footer****************************************************************************************************************************** -->
    <!-- Copyright -->
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
        <a class="text-white" href="https://mdbootstrap.com/">embassyportal.com.com</a>
      </h5>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="validator.js"></script>
  <script src="contact.js"></script>
</body>

</html>