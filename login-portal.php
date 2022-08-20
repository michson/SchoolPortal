<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}
?>

<?php 
include 'header.html';
?>

<br>
<br>
<div class="form-login">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <img src="images/default.png" alt="user" class="hover-btn-new log orange" style="width: 120px; margin-top: -100px; /*margin-left: 300px;*/ border-width: 20px; border-style: ridge; border-color: lightgreen; background-color: white">
      <h6 style=""><marquee style="background-color: green; color: white">Welcome to Graceland POlytechic Offa Login Portal...</marquee></h6>

        <h4 style="color: green;"><b>Login Here</b></h4>
        <br>
<div class="form-group">
  <label class="control-label col-md-2">App Num</label>
  <div class="col-md-10">
  <input type="text" name="username" id="name" class="demoInputBox form-control" required/>
    <span id="name-error" class="signup-error help-block"></span>
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-2">Surname</label>
  <div class="col-md-10">
  <input type="password" name="password" id="surname" class="demoInputBox form-control" required/>
    <span id="surname-error" class="signup-error help-block"></span>
</div>
</div>
<input type="submit" name="login_portal" id="login_portal" class="btn-primary" style="margin-left: 3px;" value="Login Here">
<br><br>
<div id="info" onclick="info()">
<?php

include 'config.php';
$record = mysqli_query($conn2, "SELECT * FROM biodata");
    while($row = $record->fetch_assoc()) {
       $id=$row['id'];  
      $name= $row['surname'];  
  }
if (isset($_POST['login_portal'])){
$username=$_POST['username'];
$password=$_POST['password'];
include 'config.php';
$record = mysqli_query($conn2, "SELECT * FROM biodata");
$records = mysqli_query($conn2, "SELECT * FROM biodata WHERE apnum='$username'");
    while($rows = $records->fetch_assoc()) {
        $id=$rows['id']; 
       $name= $rows['surname'];
   $apnum= $rows['apnum']; 
    if ($name==$password && $apnum==$username) {
$_SESSION["name"] = $apnum;
$_SESSION["password"] = $password;
echo "<script>alert('login successfully'); window.location.href='../my - portal/';</script>";
}

elseif ($name!=$password || $apnum!=$username) {
    echo '<div id="error-message" style="display:block;"> login was not successfully </div>' ;
  }
    }

    }
?></div>
    </form>
</div>


 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Graceland Polytechnic, Offa was established in 2013 on the initiative of the President CEO Princess (Dr). Ayodele Olufemi Oyeleke. The Polytechnic is set to provide full time and part time courses of instruction and training in Technology, Applied Science, Commerce, Management, Industrial, Agricultural Production and Distribution, Research in the development and adaptation of technique as the Governing Council may from time to time determine. It is to arrange conferences, seminars and study groups relative to the fields of learning and to perform such other functions as in the opinion of the Governing Council may serve to promote the objectives of the Polytechnic.</p>   
            <div class="footer-right">
              <ul class="footer-links-soi">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul><!-- end links -->
            </div>            
                    </div><!-- end clearfix -->
                </div><!-- end col -->

        <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="schools.html">Schools</a></li>
              <li><a href="programmes.html">Programmes</a></li>
              <li><a href="teachers.html">Teachers</a></li>
              <li><a href="admission.html">Admission</a></li>
              <li><a href="library.html">Library</a></li>
              <li><a href="contact.html">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
        
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:info@gracelandpolytechnicoffa.edu.ng">info@gracelandpolytechnicoffa.edu.ng</a></li>
                            <li><a href="www.gpo.com">www.gpo.com</a></li>
                            <li>PO Box 16122 </li>
                            <li>NO. 0 Beside Navy base Offa Kwara state. </li>
                            <li><a href="dailto: +234-803-8102-114">+234-803-8102-114,</a><a href="dailto: +234-905-2510-621">+234-905-2510-621</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
        
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">Graceland Polytechnic Offa</a> Design By : <a href="https://html.design/">Project Student</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>