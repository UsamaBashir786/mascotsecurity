<!DOCTYPE html>
<html class="no-js" lang="en">
    
<head>
<?php include 'includes/css-links.php'; ?>
    </head>

    <body>
        <!-- header-area-start -->
        <?php include 'includes/navbar.php'; ?>
        <!-- /.Main Header -->

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                </form>
                <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
            </div>
        </div>
        <!-- /#popup-search-box -->

        <?php include 'includes/sidebar.php'; ?>
        <!--/.sidebar-area-->

        <div id="preloader">
            <div class="loading" data-loading-text="Mascot"></div>
        </div>

    <div id="smooth-wrapper">
        <div id="smooth-content">

        <section class="page-header" data-background="assets/img/bg-img/page-header-bg.jpg">
            <div class="overlay"></div>
            <div class="shapes">
                <div class="shape shape-1"><img src="assets/img/shapes/page-header-shape-1.png" alt="shape"></div>
                <div class="shape shape-2"><img src="assets/img/shapes/page-header-shape-2.png" alt="shape"></div>
                <div class="shape shape-3"><img src="assets/img/shapes/page-header-shape-3.png" alt="shape"></div>
            </div>
            <div class="container">
                <div class="page-header-content text-center">
                    <h1 class="title">Error Page</h1>
                    <h4 class="sub-title"><a class="home" href="index.php">Home </a><a class="inner-page" href="error.php">Error Page</a></h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="error-section pt-130 pb-130">
            <div class="container">
                <div class="error-content text-center">
                    <h2 class="text">Oops! <span>Page Not Found</span></h2>
                    <img src="assets/img/images/error-img.png" alt="img">
                </div>
            </div>
        </section>
        <!-- ./ error-section -->

        <?php include 'includes/footer.php'; ?>
        <!-- ./ footer-section -->

        </div>
    </div>

        <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
        <!--scrollup-->
        <?php include 'includes/js-links.php'; ?>
    </body>

</html>
