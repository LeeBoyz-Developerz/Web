<!DOCTYPE html>
<html>
    <head>
    <?php include("include/header.html"); ?>
    </head>
    <body class="about">
    <div id="main-wrapper" class="animate" data-animation="fadeIn">
          <!-- Header -->
<header id="header" class="header">
    <div class="container">
        <a href="/" class="header-logo">
            <img src="/Content/Images/header-logo-black.png" alt="">
        </a> <!-- end .header-logo -->
    </div>
   <!--menu:start-->
   <nav class="header-main-nav hidden-xs">
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
</nav> <!-- end .mobile-main-nav -->
<!--menu-mobile:end-->
        

<!-- Page Content -->
<div id="page-content">
    <div class="container about-page">
        <!--content:start-->
        <div class="page-content">
            <div class="page-header">
                <h1 class="animate" data-animation="fadeIn">About Us</h1>
            </div> <!-- end .page-header -->
            <div class="about-posts-container">
                <article class="about-post-item animate" data-animation="fadeIn">
                    <div class="content-column first">
                        <span class="number">|</span>
                        <h3>Who We Are</h3>
                    </div>
                    <div class="content-column second">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                            sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae.
                        </p>
                        <a href="#" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article> <!-- end .about-post-item -->
                <article class="about-post-item animate" data-animation="fadeIn">
                    <div class="content-column first">
                        <span class="number">||</span>
                        <h3>Our Mission</h3>
                    </div>
                    <div class="content-column second">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                            perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae.
                        </p>
                        <a href="#" class="read-more">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article> <!-- end .about-post-item -->
            </div>
        </div> <!-- end .page-content -->
        <!--content:end-->
    </div>
</div> <!-- end #page-content -->
     <!-- Footer -->
<footer class="main-footer">
            <?php include("include/footer.html") ?>
        </footer>
<!-- end #footer .footer -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="~/Content/Scripts/jquery-2.1.4.min.js">\x3C/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="Scripts/jquery.flexslider-min.js"></script>
<script src="Scripts/jquery.waypoints.min.js"></script>
<script src="Scripts/script.js"></script>
<script type="text/javascript" src="Scripts/site.js"></script>
    
</body>
</html>