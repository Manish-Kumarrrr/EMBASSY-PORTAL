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


if($row==0){
    echo '<div class="container"  >
    <div class="row">
        <div class="col-md-12">
            <div class="error-template" style="
            text-align: center;">
                <h1 >
                  PLEASE FIRST SIGN UP
                    
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
</div>';
}

   else if ($row) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Successfully !</strong> Entered in Status Tab
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

  

      echo '<div class="container"  >
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
    </div>';


    $sql1 = "SELECT * FROM account WHERE adhaar='$adhaar'";
      $result1 = mysqli_query($conn, $sql);
      $row1= $result1->fetch_assoc();

      if($row1==1)
   { echo '<div class="container"  >
    <div class="row">
        <div class="col-md-12">
            <div class="error-template" style="
            text-align: center;">
                <h1 >
                    YOUR PASSPORT APPLICATION IS ' . $row["status"] . '
                    
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
    ';}
else {
    echo '<div class="container"  >
    <div class="row">
        <div class="col-md-12">
            <div class="error-template" style="
            text-align: center;">
                <h1 >
                    YOUR  ARE STILL NOT APPLY FOR PASSPORT
                    
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
}

    }