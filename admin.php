<html>

<head>
    <title>embassyportal/adminpage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>

<body >

    <!--        style="background-image: url('image/server.jpg');"> naviation******************************************************************************************************************************** -->
    <nav class="navbar navbar-expand-lg " style="background-color: black; color:white;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="#" style="
                    font-family: 'Abril Fatface', cursive,sans-serif;
                    FONT-WEIGHT: BOLD;
                    FONT-SIZE: 40;color:white;
                ">EMBASSY PORTAL</a>
            </ul>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark"     >


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
    if(isset($_POST['pass']))
    $pass = $_POST['pass'];
    else
    $pass='123';

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
        $sql = "SELECT * FROM account ";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        if ($pass == '123') {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Welcome ADMIN 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

        echo "<div class='container' style='margin:100px 400px;' >
        <div class='row'>
            <div class='col-md-12'>
                <div class='error-template' style='
                text-align: center; color:red; backdrop-filter: blur(70px);'  >
                    <h1 >
                       User's Data
                    </h1>
                    
                </div>
            </div>
        </div>
    </div>
    ";

//         echo "<table align= \"center\"   style='font-size:23px; font-weight: bolder;  font-family: sans-serif; color:red; backdrop-filter: blur(80px);
//         border:1px solid red; ' >";
//         echo "<th>
//         <td>Sno. </td>
//         <td>FIRST NAME </td>
//         <td > SURNAME    </td>
//         <td> EMAIL  ID   </td>
//         <td> PHONE  NUMBER </td>
//         <td> ADHAAR NUMBER</td>
//         <td> PAN NUMBER </td>
//         <td> Date Of Birth </td>
//         <td> PASSWORD </td>
//         <td> ADDRESS </td>
//         </th>";
//         $l=0;
//         do{
//             $l=$l+1;
//             echo "
      
//  <tr style='font-size:23px; font-weight: 700;  font-family: sans-serif; color:blue;  border:1px solid red;' >
//  <td>&rarr;</td>
//  <td style=' border:1px solid red;'>".$l. "</td>
//   <td style=' border:1px solid red;'>".$row['name']. "</td>
// <td style=' border:1px solid red;'>".$row['surname']. "</td>
// <td style=' border:1px solid red;'>".$row['email']. "</td>
// <td style=' border:1px solid red;'>".$row['phone']. "</td>
// <td style=' border:1px solid red;'>".$row['adhaar']. "</td>
// <td style=' border:1px solid red;'>".$row['pan']. "</td>
// <td style=' border:1px solid red;'>".$row['dob']. "</td>
// <td style=' border:1px solid red;'>".$row['pass']. "</td>
// <td style=' border:1px solid red;'>".$row['address']. "</td>

// </tr>";

//         }while(($row = $result->fetch_assoc()));



echo '<table class="table table-bordered table-dark">
<thead>
  <tr>
    <th style="width:12rem;">#</th>
    <th style="width:50rem;">FIRST NAME </th>
    <th style="width:45rem;">SURNAME </th>
    <th style="width:80rem;">EMAIL  ID   </th>
    <th style="width:60rem;">PHONE  NUMBER</th>
    <th style="width:60rem;">ADHAAR NUMBER</th>
    <th style="width:45rem;">PAN NUMBER</th>
    <th style="width:45rem;">Date Of Birth</th>
    <th style="width:45rem;">PASSWORD</th>
    <th style="width:45rem;">ADDRESS</th>
  </tr>
</thead>';

$l=0;
do{
    $l=$l+1;
    echo "
   

    <tr style='margin:0; padding:0;' >
      <td style='width:12rem;'   >".$l."</td>
    
      <td style='width:50rem;'  >".$row['name']."</td>
      <td style='width:45rem;'  >".$row['surname']."</td>
      <td style='width:80rem;'  >".$row['email']."</td>
      <td style='width:60rem;'  >".$row['phone']."</td>
      <td style='width:60rem;'  >".$row['adhaar']."</td>
      <td style='width:45rem;' >".$row['pan']."</td>
      <td style='width:45rem;' >".$row['dob']."</td>
      <td style='width:45rem;' >".$row['pass']."</td>
      <td style='width:45rem;' >".$row['address']."</td>

   
    </tr>
  

    
    
    
    ";

}while(($row = $result->fetch_assoc()));

echo'</table>';
echo "<div class='container' style='margin:100px 400px;' >
<div class='row'>
    <div class='col-md-12'>
        <div class='error-template' style='
        text-align: center; color:red; backdrop-filter: blur(70px);'  >
            <h2 >
               Passport Data
            </h2>
            
        </div>
    </div>
</div>
</div>
";
 
$sql = "SELECT * FROM passport ";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();



echo '<table class="table table-bordered table-dark">
<thead>
  <tr>
    <th style="width:12rem;">#</th>
    <th style="width:60rem;">ADHAAR NUMBER</th>
    <th style="width:45rem;">PASSWORD</th>
    <th style="width:50rem;">OCCUPATION </th>
    <th style="width:45rem;">QUALIFILCATION </th>
    <th style="width:80rem;">ANNUAL INCOME   </th>
   
    <th style="width:45rem;">CRIMINAL RECORD</th>
    <th style="width:45rem;">INCOME PROOF</th>
    <th style="width:45rem;">STATUS</th>
    <th style="width:45rem;">DECISION</th>

  </tr>
</thead>';

$l=0;
do{
    $l=$l+1;
    echo "
   

    <tr style='margin:0; padding:0;' >
      <td style='width:12rem;'   >".$l."</td>
    
      <td style='width:60rem;'  >".$row['adhaar']."</td>
      <td style='width:45rem;' >".$row['pass']."</td>
      <td style='width:50rem;'  >".$row['occupation']."</td>
      <td style='width:45rem;'  >".$row['qualification']."</td>
      <td style='width:80rem;'  >".$row['income']."</td>
      <td style='width:60rem;'  >".$row['criminal']."</td>
      <td style='width:45rem;' >".$row['incomeproof']."</td>
      <td style='width:45rem;' >".$row['status']."</td>
      <td   ><a href='rejectpassport.php?adn=".$row['adhaar']."><button type='button' class='btn btn-danger'>Reject</button>
      <a href='accept.php?adn=".$row['adhaar']."><button type='button' class='btn btn-success'>Accept</button></td>


   
    </tr>
  

    
    
    
    ";

}while(($row = $result->fetch_assoc()));





echo'</table>';
echo "<div class='container' style='margin:100px 400px;' >
<div class='row'>
    <div class='col-md-12'>
        <div class='error-template' style='
        text-align: center; color:red; backdrop-filter: blur(70px);'  >
            <h2 >
              Visa Data
            </h2>
            
        </div>
    </div>
</div>
</div>
";
 
$sql = "SELECT * FROM visa ";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();



echo '<table class="table table-bordered table-dark">
<thead>
  <tr>
    <th style="width:12rem;">#</th>
    <th style="width:60rem;">ADHAAR NUMBER</th>
    <th style="width:45rem;">PASSWORD</th>
    <th style="width:50rem;">NATIONALITY </th>
    <th style="width:45rem;">TYPE OF VISA </th>
    <th style="width:80rem;">SUPPORTED DOC  </th>
   
    <th style="width:45rem;">HEALTH DOC</th>
    <th style="width:45rem;">STATUS</th>
    <th style="width:45rem;">DECISION</th>
    


  </tr>
</thead>';

$l=0;
do{
    $l=$l+1;
    echo "
   

    <tr style='margin:0; padding:0;' >
      <td style='width:12rem;'   >".$l."</td>
    
      <td   >".$row['adhaar']."</td>
      <td  >".$row['pass']."</td>
      <td   >".$row['nationality']."</td>
      <td   >".$row['visatype']."</td>
      <td   >".$row['supporteddoc']."</td>
      <td   >".$row['health']."</td>
      <td   >".$row['status']."</td>
      
      <td   ><a href='reject.php?adn=".$row['adhaar']."><button type='button' class='btn btn-danger'>Reject</button>
      <a href='accept.php?adn=".$row['adhaar']."><button type='button' class='btn btn-success'>Accept</button></td>



   
    </tr>
  

    
    
    
    ";

}while(($row = $result->fetch_assoc()));



echo '<\table>';
echo'<table>';



















        } else {
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error! </strong>Wrong MASTER KEY
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

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