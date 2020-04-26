<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$telephone=$_POST['phone'];
$email=$_POST['email'];
$sugg=$_POST['text'];

extract($_POST, EXTR_OVERWRITE);

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Reply-To: $email\r\n"; 
$headers .= "Return-Path: $email\r\n";
$headers .= "From: $email\r\n"; 
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$recipient="shiva@secondsdigital.com,enquiry@anappletreeevent.com,pravin@anappletreeevent.com";


$message="\Apple Tree Event\n";

$subject="Contact Form";

$message = '<table width="500" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFF" style="font-weight: 700;font-size: 12px;color: #666;font-family:Arial, Helvetica, sans-serif; background-color:#FFFFFF;">
  <tr bgcolor="#cc0033">
    <td width="500" colspan="2" style="font-weight: 700;font-size: 13px;color: #FFF; border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Apple Tree Event - Feedback</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Name</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$name.'</td>
  </tr>
    <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Email ID</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$email.'</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Telephone</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$telephone.'</td>
  </tr>  
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-right:none; padding:10px;">Message</td>
    <td width="250" style="border: 1px solid #CCC; padding:10px;">'.$sugg.'</td>
  </tr>
  </table>';

//mail($recipient, $subject, $message, $headers);
if(mail($recipient, $subject, $message, $headers))
    echo"<script>alert('Thanks For Contacting Us');location.href='home'</script>";
else
    echo"<script>alert('failed');</script>";
$headers1="";

}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Best Event Management Company In Pune | Event Planners</title>
        <meta name="keywords" content="Event management company in pune, event planners in pune" />
        <meta name="description" content="An Apple Tree Event. Best Event Management Company In Pune. We Undertake Corporate Events, Social Events, Private Events, Wedding Planning and More."> 
        <meta name="" robots"" content="" index, follow"">
        <meta http-equiv="" Content-Type "" content=""text/html; charset=utf-8">
        <meta name="" language"" content="" English"">
        <meta name="" revisit-after"" content="" days"">
        <meta name=""author"" content=""An Apple Tree Events"">


        <meta name="google-site-verification" content="-4rVyhIGr-oC6ZNjp6ux5MUgpwehQLBkIKqZ63lbK3Y" />
		
        <!-- Web Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet"> -->

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/> -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
     
        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
        
        <link rel="canonical" href=" http://www.anappletreeevent.com/" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161734066-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161734066-1');
</script>
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
                    <li class="active"><a href="home">Home</a></li>
                    <li><a href="about" >About</a></li>
                    <li><a  href="events" >Events</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li ><a  href="blog">Blog</a></li>
                    <li><a  href="contacts" >Contacts</a></li>
                
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
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="about">About</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="events">Events</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="gallery">Gallery</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="blog">Blog</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="contacts">Contacts</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.behance.net/keenthemes">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://twitter.com/keenthemes">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://dribbble.com/keenthemes">
                            <i class="g-padding-r-5--xs ti-dribbble"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Dribbble</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs ">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--red">An Apple Tree Event </h1>
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--green">Best Event Management Company In Pune </h1>
                    
                        </div>
                        <!--<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>-->
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/01.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs ">
            
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">We Craft Experience<br>That Help Brands<br>Stand Out</h2>
                            </div>
                            <!--<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                            </a>-->
                     
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/03.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs ">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--red" >Make Your Events Stand Out From The Rest </h1>
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--green" > Best Event Planners In Pune </h1>
                    
                        </div>
                        <!--<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>-->
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle js__swiper-btn--next"><i class="fa fa-angle-right"></i></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle js__swiper-btn--prev"><i class="fa fa-angle-left"></i></a>
               <!-- End Arrows -->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
            <i class="fa fa-angle-double-down" ></i></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-8  0--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Apple Tree Event</p>
                <p class="text-uppercase g-font-size-18--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-28--xs">Best Event Management Services In Pune</p>
                <h2><b>Why Choose Us!</b></h2>
                <h2 class="g-font-size-32--xs g-font-size-36--md">We Understand The Importance Of Events. <br>  We Create A Lifetime Memory For You.</h2><br/>
              
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                 <i class="fa fa-desktop g-font-size-28--xs g-color--primary"></i>
                                <!-- <i class="g-font-size-28--xs g-color--primary ti-desktop"></i> -->
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs" ><b>Corporate Events</b></h3>
                            <p class="g-margin-b-0--xs">Whether you have to produce prospective customers, assemble customer steadfastness, increment representative resolve or praise a significant achievement, the Apple Tree Event Management group has the event management aptitude and business foundation to guarantee your event is a triumph.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                            <i class="fa fa-cog g-font-size-28--xs g-color--primary"></i>
                                <!-- <i class="g-font-size-28--xs g-color--primary ti-settings"></i> -->
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs"><b>Social Events</b></h3>
                            <p class="g-margin-b-0--xs">Managing an affiliation is confounded, so given us a chance to concentrate on your occasion so you can concentrate on your affiliation and individuals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs"><b>Individual/Private Events</b></h3>
                            <p class="g-margin-b-0--xs">Many individuals may not understand that enormous companies aren't the main ones that profit by an expert event management organization and that an event organizer can be a reasonable way to make those valuable moments throughout everyday life, or private events, even more important.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
          <!--  <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-package"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Endless Possibilities</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-star"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Powerful Performance</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Parallax Support</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- // end row  -->
        </div>
        <!-- End Features -->

        <!-- Parallax -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">The Fastest Way To Celebrate</h2>
                </div>
                <a href="Gallery" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Learn More</a>
            </div>
        </div>
        <!-- End Parallax -->

        <!-- Culture -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Apple Tree</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs">Event planning requires foreknowledge, finesse and meticulousness. You have to see the 10,000 foot view just as the most minor of subtleties. You need Vision. Which is the reason we begun Apple Tree Event Management (ATEM). We needed to make an organization with the experience, aptitudes and information to support any event, regardless of how huge or how little, satisfy its definitive potential. We can enable youngster occasions to get off the ground and existing occasions take off. We're adaptable, quick, responsive and dependable. What's more, we continually bring a new point of view. Regardless of what phase of the planning you're in, we'd welcome the chance to enable you to make your event as well as can be expected be.</p>
                        <p class="g-font-size-18--xs">Apple Tree is a full administration event management firm situated in Pune, Maharashtra that was made by matching together our energy for business and events.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/970x970/03.jpg" alt="Image">
            </div>
        </div>
        <!-- End Culture -->

        <!-- Subscribe -->
        <!--<div class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Join Over 1000+ People</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group">
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- End Subscribe -->

        <!-- Portfolio Filter -->
        <div class="container g-padding-y-80--xs">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Our Portfolio</h2>
            </div>
            <div class="s-portfolio">
                <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                    <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">Show All</div>
                    <div data-filter=".graphic" class="s-portfolio__filter-v1-item cbp-filter-item">Corporate</div>
                    <div data-filter=".logos" class="s-portfolio__filter-v1-item cbp-filter-item">Social</div>
                    <!--<div data-filter=".motion" class="s-portfolio__filter-v1-item cbp-filter-item">Individual</div>-->
                </div>
            </div>
        </div>
        <!-- End Portfolio Filter -->

        <!-- Portfolio Gallery -->
        <div class="container g-margin-b-100--xs">
            <div id="js__grid-portfolio-gallery" class="cbp">
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/05.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/05.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/06.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/06.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/07.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/07.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/08.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/08.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item  graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/09.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/09.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item-->
                <div class="s-portfolio__item cbp-item motion logos">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/10.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/04.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
                <!-- End Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/01.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/02.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/02.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/03.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/03.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/04.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/04.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/11.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/11.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="img/970x647/12.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Gallery</h4>
                            <p class="g-color--white-opacity">by Apple Tree Event</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/970x647/12.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Gallery <br/> by Apple Tree Event">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="fa fa-unlink"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->

        <!-- Testimonials -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" A major thank you to you Apple Tree Event and your whole staff on your fabulous work. You have a first rate task. Our association couldn't make its success without you people. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs "></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Dr. Sampath Sarda (NGO Event)</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>"I need to thank everybody at Apple Tree Event for your assistance in making this years annual meeting a genuine achievement. It truly makes a difference to work with individuals who realize what they are doing and are happy to take the necessary steps to get it going. I admire it."</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs "></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Neha Sonene (Deeper deck)</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" The measure of time you and your staff put into the execution, from arranging, to set-up, to clean up was extraordinary. Obviously your work and watching out for each and every detail has extraordinarily added to the achievement of the show. Much obliged to you Apple Tree Event. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs "></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Kavita Gody (Daughter's Engagement & wedding)</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" We are thrilled with the arrangements made for my daughters wedding are really awesome. I will definately recommend An Apple Tree Event in my circle  "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs "></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Said Khan (Daughter's wedding)</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" We expected our kid's birthday to be excellent, Apple Tree team came up with their unique ideas and It has amazed us.  "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs "></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Varsha Bhojwani (Baby Birthday) </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle js__swiper-btn--next"><i class="fa fa-angle-right"></i></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle js__swiper-btn--prev"><i class="fa fa-angle-left"></i></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Testimonials -->

        <!-- Clients -->
        <div class="g-bg-color--sky-pure-white ">
            <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
                <!-- Swiper Clients -->
                <div class="s-swiper js__swiper-clients">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="s-clients-v1" src="img/clients/01-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                                <img class="s-clients-v1" src="img/clients/02-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                                <img class="s-clients-v1" src="img/clients/03-dark.png" style=" width: 87%;" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                                <img class="s-clients-v1" src="img/clients/04-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                <img class="s-clients-v1" src="img/clients/05-dark.png" style="margin-top: 21px;Width: 102%;"alt="Clients Logo">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- News -->
        
        <!-- End News -->

        <!-- Counter -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">35</figure>
                                <span class="g-font-size-40--xs g-color--white">+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">150</figure>
                                <span class="g-font-size-40--xs g-color--white">+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Events Organized</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">5</figure>
                                <span class="g-font-size-40--xs g-color--white">+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Upcoming Events</h4>
                        </div>
                    </div>
                   
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">2</figure>
                                <span class="g-font-size-40--xs g-color--white">x</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Faster Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter -->

        <!-- Feedback Form -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Get In Touch</h2>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Name" name="name">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email" name="email">
                            </div>
                            <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone" name="phone">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Your message" name="text"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Feedback Form -->

        <!-- Google Map -->
       <!-- <section class="s-google-map">
            <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

       <?php require_once('footer.php');?>

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
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
