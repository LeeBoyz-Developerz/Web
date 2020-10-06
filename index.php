<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Home LeeBoyz Developerz
    </title>
    <?php include("include/header.html"); ?>
</head>
<body class="home-page">
    <div id="main-wrapper" class="animate" data-animation="fadeIn">
         <!-- Header -->
<header id="header" class="header">
    <div class="container">
        <a href="/" class="header-logo">
            <img src="/Content/Images/header-logo-white.png" alt="">
        </a> <!-- end .header-logo -->
      
    </div>
    <!--menu:start-->
    <nav id="navBar" class="header-main-nav hidden-xs">
        <div class="container">
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/prices.php">Pricing</a></li>
                <li><a href="/services.php">Services</a></li>                
                <li><a href="/team.php">Team</a></li>             
            </ul>
        </div>
        
    </nav> <!-- end .header-main-nav -->
    <!--menu:end-->
</header> <!-- end #header .header -->
<!-- Mobile Nav -->
<!--menu-mobile:start-->
<nav class="mobile-main-nav">
    <a href="/" class="logo">
        <img src="/Content/Images/header-logo-white.png" alt="">
    </a> <!-- end .logo -->
    <a href="#" class="mobile-main-nav-close"><span>&times;</span></a> <!-- end .mobile-main-nav-close -->
    <ul class="nav">
        <li><a href="/">Home</a></li>
        <li><a href="/Home/About">About</a></li>
        <li><a href="/Home/Pricing">Pricing</a></li>
        <li><a href="/Home/Services">Services</a></li>        
        <li><a href="/Home/Team">Team</a></li>  
    </ul>
    <!-- <h1 id="mainTitle">LeeBoyz Developerz</h1> -->
</nav> <!-- end .mobile-main-nav -->
<!--menu-mobile:end-->
        
 <!-- Home Page Slider -->
<section class="home-page-slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="slide" data-background-image="/img/Images/slide-1.png">
                    <article class="slide-content">
                        <div class="container">
                            <img src="/img/Images/slide-1.jpg" alt="" class="sr-only">
                            
                            <h1>Making your business come to life</h1>
                            <a href="#" class="btn btn-primary">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article> <!-- end .slide-content -->
                </div>
            </li>
            <li>
                <div class="slide" data-background-image="/img/Images/slide-2.png">
                    <article class="slide-content">
                        <div class="container">
                            <img src="/img/Images/slide-2.jpg" alt="" class="sr-only">
                            
                            <h1>     Making good quality Applications for your business</h1>
                            <a href="#" class="btn btn-primary">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article> <!-- end .slide-content -->
                </div>
            </li>
            <li>
                <div class="slide" data-background-image="/img/Images/slide-3.png">
                    <article class="slide-content">
                        <div class="container">
                            <img src="/img/Images/slide-3.png" alt="" class="sr-only">                            
                            <h1>     Having your website hosting with us</h1>
                            <a href="#" class="btn btn-primary">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article> <!-- end .slide-content -->
                </div>
            </li>           
        </ul>
    </div>
    <div class="bottom-description">
        <span class="icon"></span>
        <h5><a href="Home/Services">See Our Services</a></h5>
    </div> <!-- end .bottom-description -->
    <div class="container slider-controls-container">
        <div class="slider-controls">
            <span class="current"></span>
            <span>/</span>
            <span class="total"></span>
        </div>
    </div> <!-- end .slider-controls-containe -->
</section> <!-- end .home-page-slider -->
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <!--content:start-->
        <div class="page-content">
            <!-- Services -->
            <section class="row animate-multiple">
                <div class="col-sm-4">
                    <div class="services-item border-on-xs" data-animation="fadeInUp">
                        <h3><a href="#">Photography</a></h3>
                        <i class="icon fa fa-camera-retro"></i>
                        <p>We offer good quality photos for your family or love ones.</p>
                        <span class="number">|</span>
                        <a href="#" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div> <!-- end .services-item -->
                </div>
                <div class="col-sm-4">
                    <div class="services-item" data-animation="fadeInUp" data-animation-delay="500">
                        <h3><a href="#">Domain Services</a></h3>
                        <i class="icon fa fa-print"></i>
                        <p>We do hosting services for any type of website you desire.</p>
                        <span class="number">||</span>
                        <a href="#" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div> <!-- end .services-item -->
                </div>
                <div class="col-sm-4">
                    <div class="services-item" data-animation="fadeInUp" data-animation-delay="1000">
                        <h3><a href="#">Custom Websites</a></h3>
                        <i class="icon fa fa-picture-o"></i>
                        <p>We build quality websites on your desire</p>
                        <span class="number">|||</span>
                        <a href="#" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div> <!-- end .services-item -->
                </div>
            </section>
            <!-- Who We Are -->
            <section class="about">
                <h2 class="h1 animate" data-animation="fadeIn">Who we are</h2>
                <p class="text-center mb70 hidden-xs animate" data-animation="fadeIn">
                    We are a Software company that create good quality website and mobile application. We also host website, photography, and SEO makerting.
                </p>
                <div class="row animate-multiple">
                    <div class="col-sm-4">
                        <div class="team-item" data-animation="fadeInLeft">
                            <img src="/img/Images/user-1.png" alt="" class="thumbnail">
                            <h4>Pablo Benjumea </h4>
                            <h5>Chief Executive Officere</h5>
                            <ul class="social-icons">
                                
                                
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div> <!-- end .team-item -->
                    </div>
                    <div class="col-sm-4">
                        <div class="team-item" data-animation="zoomIn">
                            <img src="/img/Images/user-2.png" alt="" class="thumbnail">
                            <h4>Mc Andy Louigene</h4>
                            <h5>Chief Operating Officer</h5>
                            <ul class="social-icons">
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-github-square"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div> <!-- end .team-item -->
                    </div>
                    <div class="col-sm-4">
                        <div class="team-item" data-animation="fadeInRight">
                            <img src="/img/Images/user-3.png" alt="" class="thumbnail">
                            <h4>Jhoset Ceron</h4>
                            <h5>Chief Technology Officer</h5>
                            <ul class="social-icons">
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-github-square"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div> <!-- end .team-item -->
                    </div>
                </div>
            </section>
            <!-- Pricing -->
            <section class="pricing">
                <h2 class="h1 animate" data-animation="fadeIn">Pricing</h2>
                <p class="text-center mb70 hidden-xs animate" data-animation="fadeIn">
                    We always offer competive price.
                </p>
                <div class="row animate-multiple">
                    <div class="col-sm-4">
                        <div class="pricing-item" data-animation="fadeInUp" data-animation-delay="750">
                            <h4>Custom Website</h4>
                            <span class="price">$2200</span>
                            <!-- <span class="payment-period">per month</span> -->
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Domain</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Logo</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>Design</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Build</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Pages</td>
                                        <td>1-5</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary">Order Now <i class="fa fa-shopping-cart"></i></a>
                        </div> <!-- end .pricing-item -->
                    </div>
                    <div class="col-sm-4">
                        <div class="pricing-item featured" data-animation="fadeInUp">
                            <h4>Standard WordPress</h4>
                            <span class="price">$1300</span>
                            <!-- <span class="payment-period">per month</span> -->
                            <table>
                                <tbody>
                                <tr>
                                        <td>Domain</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Logo</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>Design</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Build</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Pages</td>
                                        <td>1-5</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary">Order Now <i class="fa fa-shopping-cart"></i></a>
                        </div> <!-- end .pricing-item -->
                    </div>
                    <div class="col-sm-4">
                        <div class="pricing-item" data-animation="fadeInUp" data-animation-delay="1500">
                            <h4>E-Commerce</h4>
                            <span class="price">$3999</span>
                            <!-- <span class="payment-period">per month</span> -->
                            <table>
                                <tbody>
                                <tr>
                                        <td>Domain</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Logo</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>Design</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Build</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Pages</td>
                                        <td>1-5</td>

                                    </tr>
                                    <tr>
                                        <td>Products</td>
                                        <td>1-20</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary">Order Now <i class="fa fa-shopping-cart"></i></a>
                        </div> <!-- end .pricing-item -->
                    </div>
                </div>
            </section>

        <!--content:end-->
    </div>
</div> <!-- end #page-content -->
<footer class="main-footer">
            <?php include("include/footer.html") ?>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="~/Content/Scripts/jquery-2.1.4.min.js">\x3C/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="Scripts/jquery.flexslider-min.js"></script>
<script src="Scripts/jquery.waypoints.min.js"></script>
<script src="Scripts/script.js"></script>
<script type="text/javascript" src="Scripts/site.js"></script>
    
    

</body>
</html>