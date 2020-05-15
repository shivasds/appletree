<?php
require_once "dbcon.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
   <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Apple Tree Event - Blog</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Apple Tree - HTML5 Theme">

        <!-- Web Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet"> -->

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/> -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   
        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <nav class="navbar navbar-custom navbar-fixed-top js__header-sticky js__header-overlay" role="navigation">
                <div class="s-header__container ">
                <div class="navbar-header s-header__navbar-row">
                
                                <div class="s-header__navbar-row-col">
                                    <!-- Logo -->
                                    <div class="s-header__logo">
                                    <a href="home" class="s-header__logo-link logo_padding">
                                            <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-name.png" alt="Apple Tree Logo">
                                            <img class="s-header__logo-img s-header__logo-img-default" src="img/logo.png" alt="Apple Tree Logo">
                                        </a>
                                    </div>
                                    <!-- End Logo -->
                                </div>

                                <div class="s-header__navbar-row-col d-none">
                                    <!-- Trigger -->
                                    <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                        <span class="s-header__trigger-icon"></span>
                                        <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                            <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                        </svg>
                                    </a>
                                    <!-- End Trigger -->
                                </div>
                </div>
                <div class="collapse navbar-collapse " id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="home">Home</a></li>
                    <li><a href="about" >About</a></li>
                    <!-- <li><a  href="services" >Services</a></li> -->
                    <li class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services</i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="event_management">Event Management</a>
                            <a class="dropdown-item" href="event_support">Event Support</a>
                           
                        </div>
                    </li>
                    <li><a  href="events" >Events</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li class="active"><a  href="blog">Blog</a></li>
                    <li ><a  href="contacts" >Contacts</a></li>
                
                    </ul>
                </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider " href="home">Home</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="about">About</a></li>
                            
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" onclick="myFunction(this)">Services</a><i id="arrow_down" class="arrow down"></i></li>

                            <div class="" id="myDIV">
                                <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="event_management">Event Management</a></li>
                                <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="event_support">Event Support</a></li>
                            </div>


                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="events">Events</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="gallery">Gallery</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="blog">Blog</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="contacts">Contacts</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <!-- <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
                </ul> -->
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="">
                            <i class="g-padding-r-5--xs ti-pinterest"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Pinterest</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="">
                            <i class="g-padding-r-5--xs ti-linkedin"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Linkedin</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: url(img/1920x1080/09.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">30 years experience</p>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Creative Team</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
         <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-overflow--hidden">
        <?php
        $sql ="select *from blog order by date_added desc";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>

                <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                    <!-- Speaker -->
                    <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <img class="img-responsive g-width-100-percent--xs" src="upload/<?=$row['image_url'];?>" alt="Image">
                        <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                            <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--black g-margin-b-0--xs"><?=$row['heading'];?></h4>
                            </div>
                            <p class="g-font-weight--700"><?=$row['side_heading'];?></p>
                            <p><?=$row['content'];?></p>
                        </div>
                    </div>
                    <!-- End Speaker -->
                </div>


        <?php
    }
} else {
    echo "<center><h>No Blogs Found!</h1></center>";
}
$conn->close();
        ?>
       

                <!--<div class="col-xs-6 g-full-width--xs">
                    <!-- Speaker 
                    <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <img class="img-responsive g-width-100-percent--xs" src="img/400x400/01.jpg" alt="Image">
                        <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                            <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                <h4 class="g-font-size-22--xs g-font-size-26--sm g-black--white g-margin-b-0--xs">Lucas Richardson</h4>
                            </div>
                            <p class="g-font-weight--700">CEO</p>
                            <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                        </div>
                    </div>
                    <!-- End Speaker -->
                </div>
            </div>
        </div>
        <!-- End Speakers -->


        <!--========== FOOTER ==========-->
       <?php require_once('footer.php');?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->
        <script>
            $(document).ready(function(){

                $("#myDIV").addClass("hidden")
            })
        function myFunction(id) {
            if($(id).hasClass('-is-active')){
                $(id).removeClass('-is-active')
                $("#arrow_down").removeClass('hidden')
                $("#myDIV").addClass('hidden')
            }
            else{
                $(id).addClass('-is-active')
                $("#arrow_down").addClass('hidden')
                $("#myDIV").removeClass('hidden')
            }
            
        }

            </script>
    </body>
    <!-- End Body -->
</html>
