<nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong><?php echo $_SESSION['lname']; ?> </strong><?php echo $_SESSION['fname']; ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <!-- search section-->
                  <!--   <li class="sidebar-search">
                        
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </li> -->
                     <!--end search section-->
                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="v_details.php"><i class="fa fa-table fa-fw"></i> View Applicant</a>
                    </li>
                    <li>
                        <a href="v_add.php"><i class="fa fa-users fa-fw"></i> View Admitted Applicant</a>
                    </li>                    
                    <li>
                        <a href="logout.php"><i class="fa fa-power-off fa-fw"></i>Logout</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>