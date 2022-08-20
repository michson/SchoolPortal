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

                    <h1 class="page-header"> <a href="v_details.php"><button type="reset" class="btn btn-success"><i class="fa fa-backward"></i> Back</button></a> Give Admission</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Students Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- php code -->
                    <?php
                    if (isset($_POST['submit'])) {
                        $id = $_POST['id'];
                        include 'connect.php';
                        // if (empty($wing)) {
                        //  echo "<script> alert('Please Reselect Wing! Update not Successfull');
                        // window.location='dashboard.php';
                        // </script>";
                        // }else{
                        $sql = "UPDATE biodata SET adstatus='1' WHERE id='$id'";
                        $result = $conn->query($sql);
                        echo "<script> alert('Record Update Successfull');
                        window.location='v_details.php';
                        </script>";
                        // }
                        }
                ?>
                 <?php
                 $id = $_GET['id'];
                include 'connect.php';
                $c = "SELECT * FROM biodata WHERE id='$id'";
                $c_result = mysqli_query($conn,$c);
                $row = mysqli_fetch_array($c_result);
                ?>
                                    <!-- end of php code -->
                                    <form role="form" method="POST" action="update.php">
                                        <div class="form-group">
                                          <!--   <label>Track ID</label> -->
                                            <input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id">
                                        </div>
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input class="form-control" value="<?php echo $row['surname'].' '.$row['name']; ?>" name="location" disabled>
                                        </div>      
                                        <div class="form-group">
                                            <label>Update</label>
                                            <select class="form-control" name="update">
                                                <option>---Select---</option>
                                                <option value="1">Admit Student</option>
                                                <option value="0">Deny Student</option>
                                            </select>
                                            <!-- <input class="form-control" value="<?php echo $row['location']; ?>" name="location" required="required"> -->
                                        </div>                  
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
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
