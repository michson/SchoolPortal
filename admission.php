<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Graceland Polytechnic Offa</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
  input[type="text"],[type="file"],[type="email"],#gender,#mstatus,textarea,[type="date"]{
    width: 100%;
    resize: none;
}
</style>
<script>
  var loadFile = function(event) {
    var passport = document.getElementById('output');
    passport.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<body class="host_version"> 

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login or Registration</h4>
            </div>
            <div class="modal-body customer-box">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                    <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                        <p></p>
                        <center><h4>Already have an account? you can <a href="login.php">Login here</a></h4></center>
                        <p></p>
                        <div class="row">                           
                                <div class="col-sm-10">
                                    <a href="my - portal/login.php"><button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                        LOGIN
                                    </button></a>
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1" data-dismiss="modal" aria-hidden="true">
                                        Cancel</button>
                                </div>
                        </div>
                    </div>  
                    <div class="tab-pane" id="Registration">
                        <p></p>
                        <center><h4>Go back to homepage or click the <b>APPLY NOW</b> button to apply for your Addmission</h4></center>
                        <p></p>
                        <div class="row">                           
                                <div class="col-sm-10">
                                    <a href="admission.html"><button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                        APPLY NOW
                                    </button></a>
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1" data-dismiss="modal" aria-hidden="true">
                                        Cancel</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- LOADER -->
  <div id="preloader">
    <div class="loader-container">
      <div class="progress-br float shadow">
        <div class="progress__item"></div>
      </div>
    </div>
  </div>
  <!-- END LOADER --> 
  
  <!-- Start header -->
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-host">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="about.html" id="dropdown-a" data-toggle="dropdown">About Us </a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="about.html">School History </a>
                <a class="dropdown-item" href="about.html">Mission & Vision</a>
                <a/ class="dropdown-item" href="about.html">Governing Council</a>
                <a class="dropdown-item" href="about.html">Academic Board</a>
                <a class="dropdown-item" href="about.html">Principal Officer</a>
                <hr>
                <a class="dropdown-item" href="past-admin.html">Past Administrators</a>
                <hr>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Schools</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="school-st.html">School of Applied Science and Technology</a>
                <a class="dropdown-item" href="school-bms.html">School of Business and Management Studies</a>
                <a/ class="dropdown-item" href="school-et.html">School of Engineering Technology</a>
                <a class="dropdown-item" href="school-ict.html">School of Information and Communication Technolgy </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Programmes</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="programmes.html">National Diploma</a>
                <a class="dropdown-item" href="programmes.html">High National Diploma</a>
                <hr>
                <a/ class="dropdown-item" href="programmes.html">NCE</a>
                <hr>
                <a class="dropdown-item" href="programmes.html">Health Education</a>
                <a class="dropdown-item" href="programmes.html">Computer-Based Test (CBT)</a>
                <a class="dropdown-item" href="programmes.html">Certificate Programmes</a>
                <a class="dropdown-item" href="programmes.html">Continuing Education Programmes</a>
                <a class="dropdown-item" href="programmes.html">IJMB</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="lecturers.html">Lecturers</a></li>
            <li class="nav-item active"><a class="nav-link" href="admission.php">Admission</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Library</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Quick Access</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="nbte.html">NBTE</a>
                <a class="dropdown-item" href="jamb.html">JAMB</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>LOGIN</span></a></li>
                    </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->
  
  <div class="all-title-box">
    <div class="container text-center">
      <h1>Admission</h1>
    </div>
  </div>

  
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="color: green">APPLY FOR ANY OF OUR COURSES</h3>
            </div><!-- end title -->





    <br>
    <h3 class="text-primary">Please fill all the fields Requested</h3>
    <br>
<form method="post" action="apply.php" enctype="multipart/form-data">
<div class="form-row">
  <label class="control-label col-md-2 text-center text-danger">First Name:</label>
  <div class="col-md-4">
  <input type="text" name="name" id="name" required/>
    <span id="name-error" class="signup-error help-block"></span>
</div>
  <label class="control-label col-md-2 text-center text-danger">Surname:</label>
  <div class="col-md-4">
  <input type="text" name="surname" id="surname" required/>
    <span id="surname-error" class="signup-error help-block"></span>
</div>
</div>
<br>
<div class="form-row">
     <label class="control-label col-md-2 text-center text-danger">Middle Name:</label>
  <div class="col-md-4">
  <input type="text" name="middlename" id="middlename"  required/>
    <span id="surname-error" class="signup-error help-block"></span>
</div>
<label class="control-label col-md-2 text-center text-danger">Email:</label>
  <div class="col-md-4">
<input type="email" name="email" id="email" required />
<span id="email-error" class="signup-error help-block"></span>
</div>
</div>
<br>
<div class="form-row">
<label class="control-label col-md-2 text-center text-danger">Status:</label>
  <div class="col-md-4">
    <select name="mstatus" id="mstatus" required>
        <option value="" selected>Select..</option>
        <option value="single">Single</option>
        <option value="married">Married</option>
    </select>
    <span id="mstatus-error" class="signup-error help-block"></span>
</div>
<label class="control-label col-md-2 text-center text-danger">Gender:</label>
  <div class="col-md-4">
 <select  name="gender" id="gender" required>
    <option value="" selected>Select..</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
     <span id="gender-error" class="signup-error help-block"></span>
 </select>
</div>
</div>
<br>
<div class="form-row">
     <label class="control-label col-md-2 text-center text-danger">State</label>
  <div class="col-md-4">
  <select type="select" name="state" id="middlename" required style="width: 100%; resize: none;">
                        <option selected>---Select---</option>
                      <option>ABUJA FCT</option>
                                          <option>ABIA</option>
                                            <option>ADAMAWA</option>
                                            <option>AKWA IBOM</option>
                                            <option>ANAMBRA</option>
                                            <option>BAUCHI</option>
                                            <option>BAYELSA</option>
                                            <option>BENUE</option>
                                            <option>BORNO</option>
                                            <option>CROSS RIVER</option>
                                            <option>DELTA</option>
                                            <option>EBONYI</option>
                                            <option>EDO</option>
                                            <option>EKITI</option>
                                            <option>ENUGU</option>
                                            <option>GOMBE</option>
                                            <option>IMO</option>
                                            <option>JIGAWA</option>
                                            <option>KADUNA</option>
                                            <option>KANO</option>
                                            <option>KATSINA</option>
                                            <option>KEBBI</option>
                                            <option>KOGI</option>
                                            <option>KWARA</option>
                                            <option>LAGOS</option>
                                            <option>NASSARAWA</option>
                                            <option>NIGER</option>
                                            <option>OGUN</option>
                                            <option>ONDO</option>
                                            <option>OSUN</option>
                                            <option>OYO</option>
                                            <option>PLATEAU</option>
                                            <option>RIVERS</option>
                                            <option>SOKOTO</option>
                                            <option>TARABA</option>
                                            <option>YOBE</option>
                                            <option>ZAMFARA</option>
                  </select>
    <span id="surname-error" class="signup-error help-block"></span>
</div>
<label class="control-label col-md-2 text-center text-danger">Local Gov:</label>
  <div class="col-md-4">
<select name="local" class="form-control" id="local" required>
  <option value="" selected>Select..</option>
  <?php
  include 'conn.php';
    $local_result = mysqli_query($conn1, "SELECT * FROM locals");
    while ($array = mysqli_fetch_array($local_result)) {
      echo "<option value='{$array['local_name']}'>{$array['local_name']}</option>";
    }
  ?>
</select>
<span id="email-error" class="signup-error help-block"></span>
</div>
</div>
<br>
 <script>  
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }   
</script>
<div class="form-row">
<label class="control-label col-md-2 text-center text-danger">Phone:</label>
  <div class="col-md-4">
<input type="text" maxlength="11" onkeypress="javascript:return isNumber(event)" name="phone" id="phone" required />
<span id="phone-error" class="signup-error help-block"></span>
</div>
<label class="control-label col-md-2 text-danger text-center">Address</label>
  <div class="col-md-4">
<textarea name="address" id="address" required></textarea>
<span id="address-error" class="signup-error help-block"></span>
</div>
</div>
<br>
<div class="form-row">
<label class="control-label col-md-2 text-center text-danger">D.o.b:</label>
  <div class="col-md-4">
<input type="date" placeholder="dd/mm/yyyy" name="dob" id="dob" required />
<span id="dob-error" class="signup-error help-block"></span>
</div>
<div class="text-center col-md-2" id="img_contain">
  <img src="images/images/pro.png" id="output" width="130" height="120" class="img img-responsive thumbnail">
</div>
  <label class="control-label col-md-1 text-danger text-center">Upload Passport</label>
  <div class="col-md-3">
<input type="file" accept="image/*" name="passport" onchange="loadFile(event)">
    <span id="passport-error" class="signup-error help-block"></span>
</div>
</div>
<br>
<?php include 'olevel.html'; ?>
<br>
<p class="text-justify">
    I, declare that all information provide above are genuine and correct. Candidate should be aware that falsification of any information is automatic disqualification. Kindly review inputted information before clicking the '<b>Finish</b>' button.

    <b style="color: red">Note: Change of Bio-data cannot be done after submission</b>.
</p>
<div class="form-group">
    <input class="checkbox" id="attest" type="checkbox" name="declaration" value="accept" required />&nbsp;Declaration by Applicant
     <span id="attest-error" class="signup-error help-block"></span>
</div>
<br>
<button type="submit" name="register" class="btn btn-primary col-md-4">Apply Now</button>
<br>
<?php 
include 'phpapply.php';
?>
</form>
<br>

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
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
  <!-- Mapsed JavaScript -->
  <script src="js/mapsed.js"></script>
  <script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
<script type="text/javascript">
 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var programLists = new Array(2) 
 programLists["empty"] = ["Select Programme"]; 
 programLists["ND Programme"] = ["Select School","Applied Science and Technology", "Business and Management", "Engineering Technology", "Environmental Studies", "Information and Communication Technology"];
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function schoolChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = programLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("school"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>



 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var schoolLists = new Array(4) 
 schoolLists["empty"] = ["Select School"];
 schoolLists["Applied Science and Technology"] = ["Select Course", "Computer Science", "Food Science Technology", "Mathematics and Statistics", "Science Laboratory Technology"];
 schoolLists["Business and Management"] = ["Select Course", "Accountancy", "Banking and Finance", "Business Administration", "Public Administration"];
 schoolLists["Engineering Technology"] = ["Select Course", "Civil Engineering", "Computer Engineering Technology", "Electrical/Electornic Engineering Technology", "Mechanical Engineering"];
 schoolLists["Environmental Studies"] = ["Select Course", "Architectural", "Building Technology", "Estate Management", "Quantity Survey", "Urban and Regional Planning"];
 schoolLists["Information and Communication Technology"] = ["Select Course", "Library & Information Science", "Mass Communication", "Office Technology & Management"];
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function courceChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = schoolLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("course"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>

</script>

</body>
</html>
