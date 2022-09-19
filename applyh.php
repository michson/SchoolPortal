<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
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
<body class="single-page apply">
    <?php include 'header.php'; ?>
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
  <select type="select" name="state" id="middlename" required>
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
<?php include 'olevelhnd.html'; ?>
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
       <?php include 'footer.html'; ?>
    <script type='text/javascript' src='js/jquery.js'></script>
     <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
     <script type='text/javascript' src='js/swiper.min.js'></script>
       <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
       <script type='text/javascript' src='js/circle-progress.min.js'></script>
         <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type="text/javascript" src="js/jqueryak.js"></script>
    <script type="text/javascript" src="js/sweetalert.js"></script>
<script type="text/javascript"> 
</script>
</body>
</html>

