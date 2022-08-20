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
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">List of Records</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List of Records
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>App Num</th>
                                            <th>Surname</th>
                                            <th>First Name</th>
                                            <th>Marital Status</th>
                                            <th>Gender</th>
                                            <th>State</th>
                                            <th>Course</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                     $sn = 1;
                                         include 'connect.php';
                                        $sql = "SELECT * FROM biodata WHERE adstatus='0'";
                                    $result = $conn->query($sql);

                                    while($row = $result->fetch_assoc()){
                                        $id = $row['id'];
                                        ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $sn; ?></td>
                                             <td><?php echo $row['apnum']; ?></td>    
                                            <td><?php echo $row['surname']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['mstatus']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['state']; ?></td>
                                            <td><?php echo $row['course']; ?></td>
                                                <td class="center">
                                                <!-- <a class="btn btn-success btn-sm" href="update.php?id=<?php echo $id; ?>"><i class="fa fa-update-o"></i> Update Location</a>

                                                <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $id; ?>"><i class="fa fa-edit"></i> Edit</a> -->

                                                <a class="btn btn-success btn-sm" href="update.php?id=<?php echo $id; ?>"><i class="fa fa-update-o"></i> Admitt</a>                                                

                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure to Delete!')" href="del_rec.php?id=<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                  
                                    <?php 
                                    $sn++;
                                }
                                        ?>
                                          </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
