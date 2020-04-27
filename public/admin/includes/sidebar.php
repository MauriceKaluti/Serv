    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/resq247logocircle.png" width="50" height="50" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Active Admin:  <?php echo $_SESSION['adminlogin']; ?></div>
                    <!-- <div class="email"> <?php echo $_SESSION['adminlogin']; ?></div> -->
                    <?php          
                        $adminid = $_SESSION['adminlogin'];
                        $query7=mysqli_query($con,"Select AdminEmailId from  tbladmin where AdminUserName='$adminid'");
                        $row7=mysqli_fetch_array($query7);
                     ?>
                     <div class="email">Email: <?php echo htmlentities($row7['AdminEmailId']);?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="reset_password.php"><i class="material-icons">person</i>Update Profile</a></li>
                            <li role="separator" class="divider"></li>                          
                            <li role="separator" class="divider"></li>
                            <li><a href="./logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                  
                    <!-- New Tabs -->
                      <li class="active">
                        <a href="dashboard.php">
                             <i class="fa fa-home"></i>
                            <span style="margin-top: -2px;">Dashboard</span>
                        </a>
                    </li>                  

                      <li >
                        <a href="add_event.php">
                            <i class="fa fa-calendar"></i>
                            <span style="margin-top: -2px;">Add Event</span>
                        </a>
                    </li>

                      <li>
                        <a href="enquiries.php">
                            <i class="fa fa-question-circle"></i>
                            <span style="margin-top: -2px;">Enquiries</span>
                        </a>
                    </li>

                       <li>
                        <a href="emergency_medical.php">
                            <i class="fa fa-medkit"></i>
                            <span style="margin-top: -2px;">Emergency Medical</span>
                        </a>
                    </li>

                    <li>
                        <a href="emergency_road.php">
                            <i class="fa fa-road"></i>
                            <span style="margin-top: -2px;">Emergency Road</span>
                        </a>
                    </li>

                    <li>
                        <a href="emergency_fire.php">
                            <i class="fa fa-fire"></i>
                            <span style="margin-top: -2px;">Emergency Fire</span>
                        </a>
                    </li>

                      <li>
                        <a href="estates_medical_package.php">
                            <i class="fa fa-building"></i>
                            <span style="margin-top: -2px;">Estates Medical Package</span>
                        </a>
                    </li>

                     <li>
                        <a href="family_medical_package.php">
                            <i class="fa fa-users"></i>
                            <span style="margin-top: -2px;">Family Medical Package</span>
                        </a>
                    </li>

                       <li>
                        <a href="corporate_medical_package.php">
                            <i class="fa fa-building-o"></i>
                            <span style="margin-top: -2px;">Corporate Medical Package</span>
                        </a>
                    </li>

                      <li>
                        <a href="institution_medical_package.php">
                            <i class="fa fa-university"></i>
                            <span style="margin-top: -2px;">Institution Medical Package</span>
                        </a>
                    </li>

                     <li>
                        <a href="residence_medical_package.php">
                            <i class="fa fa-home"></i>
                            <span style="margin-top: -2px;">Residence Medical Package</span>
                        </a>
                    </li>

                     <li>
                        <a href="individual_medical_package.php">
                            <i class="fa fa-male"></i>
                            <span style="margin-top: -2px;">Individual Medical Package</span>
                        </a>
                    </li>

                    <li>
                        <a href="corporate_fire_package.php">
                            <i class="fa fa-building-o"></i>
                            <span style="margin-top: -2px;">Corporate Fire Package</span>
                        </a>
                    </li>

                    <li>
                        <a href="hotel_fire_package.php">
                            <i class="fa fa-hotel"></i>
                            <span style="margin-top: -2px;">Hotel Fire Package</span>
                        </a>
                    </li>


                    <li>
                        <a href="institution_fire_package.php">
                            <i class="fa fa-university"></i>
                            <span style="margin-top: -2px;">Institution Fire Package</span>
                        </a>
                    </li>



                    <!-- End New Tabs -->
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">ResQ247 Admin Panel</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.4.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->