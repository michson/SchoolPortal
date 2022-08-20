 <?php 
// include 'connect.php';
// $sql = "SELECT * FROM settings";

// $query = mysqli_query($conn,$sql);

// $row = mysqli_fetch_array($query);

// $active = $row['active'];

// if ($active == 'ACTIVE') {
  ?> 

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin">
              <!-- <img src="assets/img/logo.png" alt=""/> -->
              <font color="white" size="10">Admin Login</font>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <!--------------------------- php code ---------------------------------->
<?php
  session_start();
if(isset($_POST['login'])){
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  include 'connect.php';
  $sql = "SELECT * FROM admin WHERE username='$user' and password='$pass'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
    $db_user = $row['username'];
    $db_pass = $row['password'];
    if ($db_user == $user && $db_pass == $pass) {
      $_SESSION['user'] = $user;
      $_SESSION['usertype'] = $row['usertype'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      header("location:dashboard.php");
    }
  if ($db_user != $user || $db_pass != $pass) {
     echo "<div class='alert alert-danger'>
     <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      Wrong Username or Password! </div>";
  //   echo " <br><center><font color= 'red' size='3'><strong><b>Error: </b></strong>Wrong Username or Password!</center></font>";
  }
}
?>
<!--------------------------- end of php code ---------------------------------->
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="index.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button name="login" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
</body>
</html>
