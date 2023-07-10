  <nav id="mainNav" class="navbar navbar-fixed-top">
                <div class="container">
                    <!--Brand and toggle get grouped for better mobile display--> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index-2.php">
                            <img src="assets/images/logo.png" class="img-resposive" alt="">
                        </a>
                    </div>
                    <!--Collect the nav links, forms, and other content for toggling--> 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index-2.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-2.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="tours.php">Tours</a></li>
                                    <li><a href="tour_details.php">Tours Details</a></li>
                                    <li><a href="destination.php">Destination</a></li>
                                    <li><a href="destination_details.php">Destination Details</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="blog-grid-1.php" tabindex="-1" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-grid-1.php">Blog Grid One</a></li>
                                            <li><a href="blog-grid-2.php">Blog Grid Two</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" tabindex="-1" class="dropdown-toggle" data-toggle="dropdown">Hotels</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="hotels-grid.php">Hotels Grid</a></li>
                                            <li><a href="hotels-list.php">Hotels List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="hotels-details.php">Hotels Details</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="tours.php">Tours</a></li>
                            <li><a href="destination.php">Destinations</a></li>
                            <li><a href="hotels-list.php">Hotels</a></li>
                            <li><a href="blog-details.php">Blog</a></li>
                             <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                         <?php
                                    if(@$_SESSION['id']){
?>
<li><a href="index.php#packages">packages</a></li>
<?php
                                    }
                                       ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Forms<span class="caret"></span></a>
                                <ul class="dropdown-menu">                
                                  
                                    <?php
                                    if(@$_SESSION['id']){
?>
<li><a href="logout.php">Log out</a></li>
<?php
                                    }else{
                                       ?>
                                         <li><a href="login.php">Log in</a></li>
                                    <li><a href="register.php">Register</a></li>
                                       <?php 
                                    }
                                    ?>
                                    
                                        </ul>
                                    </li>
                        </ul>
                        
                    </div> <!-- /.navbar-collapse --> 
                </div> <!-- /.container --> 
            </nav> 