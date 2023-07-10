 <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index-2.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="user-all.php">All Users</a>
                                    </li>
                                    <li><a href="user-add.php">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="package-all.php">All Packages</a>
                                    </li>
                                    <li><a href="package-add.php">Add New Package</a>
                                    </li>
                                   </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking and Enquiry</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="booking.php">User Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

<?php 
 if(@$_SESSION['id']){
    header("location:index-2.php");
 }
 else{
?>
                        <li><a href="login.php" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                        </li>
<?php }
?>
                    </ul>
                </div>