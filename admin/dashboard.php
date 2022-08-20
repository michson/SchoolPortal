 <!-- head -->
        <?php include '_include/head.php'; ?>
<!-- head -->
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <?php include '_include/head_nav.php'; ?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include '_include/nav.php'; ?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $_SESSION['lname']; ?> <?php echo $_SESSION['fname']; ?></b>
 <i class="fa  fa-pencil"></i>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


        
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>Dashboard </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Dashboard
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                     <?php 
                     include 'connect.php';
                     $sql = "SELECT * FROM biodata";
                     $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    ?>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-table fa-3x"></i>
                            <h3><?php echo $row; ?></h3>
                        </div>
                        <div class="panel-footer">
                            <a href="v_details.php"><span class="panel-eyecandy-title">No of Records
                            </span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-power-off fa-3x"></i>
                            <h3>Logout</h3>
                        </div>
                        <div class="panel-footer">
                            <a href="logout.php"><span class="panel-eyecandy-title">Logout</span></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
