  <script type="text/javascript" src="js/sweetalert.js"></script>
  <link href="css/font-awesome.css" rel="stylesheet">
 <style type="text/css">
      strong.header{
    font-weight: 800;
    font-size: 40px;
 text-shadow: 2px 2px 2px;
 color: #FF4800;

}
      small.header{
    font-weight: 500;
    font-size: 20px;
 text-shadow: 2px 2px 2px;
 color: #DC3545;
}
  </style>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-9 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            <form method="post">
                            <input type="text" style="height: 30px;" class="col-lg-6" name="search" required="required" />
                            <button class="btn-secondary" type="submit" name="search-btn"><i style="font-size: 20px;" class="fa fa-search"></i></button>
                             <?php
                             if (isset($_POST['search-btn'])) {
                                 $search= $_POST['search'];
                        include 'conn.php';
                        $recordes = mysqli_query($conn2, "SELECT * FROM biodata");
                         $recordes = mysqli_query($conn2, "SELECT * FROM biodata");
                        include 'conn.php';
                        $records = mysqli_query($conn2, "SELECT * FROM biodata WHERE apnum='$search'");
                        if ($records->num_rows > 0) {
    while($rows = $records->fetch_assoc()) {
        $imgname=$rows['adstatus'];
        $apnum=$rows['apnum'];
        $name=$rows['name'];
        $surname=$rows['surname'];
        if ($search!=$apnum) {
            echo "<script> alert('application number does not exist');</script>";
        }
        if ($search==$apnum && $imgname==0) {
         echo"<script> Swal.fire('ADMISSION PROGRESS','$surname $name Sorry you have not be given admission yet!','warning');</script>";
        }
        if ($search==$apnum && $imgname==1) {
         echo "<script> Swal.fire('ADMISSION PROGRESS','$surname $name Congratulation you have been given admission','success');</script>";
        }
     }
 }
                             }
        ?>
                            </form>

                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn bg-danger">
                            <a href="admin/">ADMIN LOGIN</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/images/logo.png" alt="logo" height="55px" width="100%"></a>
                        </div><!-- .site-branding -->
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <strong class="header">STUDENT</strong> <small class="header">MANAGEMENT</small>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="login-portal.php">Login Portal</a></li>
                                <li><a href="apply.php">Apply for ND</a></li>
                                <li><a href="applyh.php">Apply for HND</a></li>
                                <li><a href="our program.php">Programs</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Federal Polytechnic Offa</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->