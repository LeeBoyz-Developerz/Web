<!DOCTYPE html>
<html lang="en">
<head id="Head">

                <?php include("include/header.html"); ?>
                 
<body>
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
    <div class="container team-page">
        <!--content:start-->
        <div class="page-content">
            <div class="page-header">
                <h1 class="animate" data-animation="fadeIn">Team</h1>
                <p class="animate" data-animation="fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas atque fugiat, sequi, odit quia non natus? Libero inventore ullam omnis! Minus cum, quo totam eligendi provident hic incidunt dolores amet.</p>
            </div>
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
                <div class="col-sm-4">
                    <div class="team-item" data-animation="fadeInUp" data-animation-delay="1500">
                        <img src="/img/Images/user-4.png" alt="" class="thumbnail">
                        <h4>Mc Dad Louigene</h4>
                        <h5>Freelance Photographer</h5>
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-intasgram"></a></li>
                            <li><a href="#" class="fa fa-snapchat"></a></li>
                        </ul>
                    </div> <!-- end .team-item -->
                </div>
                <div class="col-sm-4">
                    <div class="team-item" data-animation="fadeInUp" data-animation-delay="2000">
                        <img src="/img/Images/user-5.png" alt="" class="thumbnail">
                        <h4>Isabel Vargas</h4>
                        <h5>Developer</h5>
                        <!-- <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul> -->
                    </div> <!-- end .team-item -->
                </div>
                <div class="col-sm-4">
                    <div class="team-item" data-animation="fadeInUp" data-animation-delay="2500">
                        <img src="/img/Images/user-6.png" alt="" class="thumbnail">
                        <h4>Isa Sthormes</h4>
                        <h5>Consultant</h5>
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div> <!-- end .team-item -->
                </div>
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
<script src="Scripts/wiwet.template.js"></script>
<script type="text/javascript" src="Scripts/site.js"></script>
    
</body>
</html>

