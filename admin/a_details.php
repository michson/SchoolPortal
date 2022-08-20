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
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add New records</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- php code -->
                    <?php
                    if (isset($_POST['submit'])) {
                        $y = date('Y');
                        $m = date('m');
                        $d = date('d');
                        $sdate = $d.'-'.$m.'-'.$y;

                        $ran = rand(10000000,99999999);
                        $rann = 'TR';
                        $track_id = $rann.$ran;

                        $name = $_POST['name'];
                        $from = $_POST['from'];
                        $to = $_POST['to'];
                        $location = $_POST['location'];
                        
                        include 'connect.php';
                        $sql = "INSERT INTO records(sdate,track_id,full_name,g_from,g_to,location) VALUES('$sdate','$track_id','$name','$from','$to','$location')";
                        $result = mysqli_query($conn,$sql);
                        if ($result == TRUE) {
                            ?>
                           <div class="alert alert-success">
                                <font><strong>Alert: </strong>Record Save Succesfully... Thank you.</font>
                            </div>
                            <?php
                        }else{
                            ?>

                             <div class='alert alert-danger'>
                                <font><strong>Alert: </strong>Record Not Save Succesfully... Thank you.</font>
                            </div>
                            <?php
                            
                    }
                        }
                ?>
                                    <!-- end of php code -->
                                    <form role="form" method="POST" action="a_details.php">
                                       <!--  <div class="form-group">
                                            <label>Track ID</label>
                                            <input class="form-control" value="<?php echo $track_id; ?>" name="tr">
                                        </div> -->
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Full Name" name="name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>From</label>
                                            <input class="form-control" placeholder="From" name="from" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>To</label>
                                            <input class="form-control" placeholder="To" name="to" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" placeholder="Location" name="location" required="required">
                                        </div>                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
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

</body>

</html>
