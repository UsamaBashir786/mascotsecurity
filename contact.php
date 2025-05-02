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
  <!-- ./ preloader -->

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
            <h1 class="title">Contact Us</h1>
            <h4 class="sub-title"><a class="home" href="index.php">Home </a><span></span><a class="inner-page" href="contact.php"> Contact Us</a></h4>
          </div>
        </div>
      </section>
      <!-- ./ page-header -->

      <section class="contact-section pt-130 pb-130">
        <div class="container">
          <div class="row gy-lg-0 gy-5">
            <div class="col-lg-5 col-md-12">
              <div class="contact-content">
                <div class="section-heading">
                  <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Contact Us</h4>
                  <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Let's Talk Security</h2>
                  <p>Your safety is our priority. Whether you're looking to secure a construction site, plan event coverage, or request a site assessment, our team is ready to help day or night.</p>
                </div>
                <div class="contact-list">
                  <div class="list-item">
                    <div class="icon">
                      <i class="fa-light fa-location-dot"></i>
                    </div>
                    <div class="content">
                      <h4 class="title">Our Coverage Areas</h4>
                      <p>North West<br>West Yorkshire</p>
                    </div>
                  </div>
                  <div class="list-item">
                    <div class="icon">
                      <i class="fa-light fa-phone"></i>
                    </div>
                    <div class="content">
                      <h4 class="title">Contact Information</h4>
                      <span><a href="tel:01617061820">0161 706 1820</a> (Main Office)</span>
                      <span><a href="tel:03301334609">0330 133 4609</a> (Control Room)</span>
                      <span><a href="mailto:info@mascotsecurity.co.uk">info@mascotsecurity.co.uk</a></span>
                      <span><a href="mailto:Control@mascotsecurity.co.uk">Control@mascotsecurity.co.uk</a> (24/7 Support)</span>
                      <span><a href="https://www.mascotsecurity.co.uk">www.mascotsecurity.co.uk</a></span>
                    </div>
                  </div>
                  <div class="list-item">
                    <div class="icon">
                      <i class="fa-light fa-clock"></i>
                    </div>
                    <div class="content">
                      <h4 class="title">Hours of Operation</h4>
                      <span>We're Here 24/7</span>
                      <span>Our Control Room is always on standby</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="blog-contact-form form-2">
                <div class="request-form">
                  <h4>Request a free quote, book a consultation, or simply ask us a question.</h4>
                  <p>A member of our team will get back to you promptly.</p>
                  <form action="mail.php" method="post" id="ajax_contact" class="form-horizontal">
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-item">
                          <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-item">
                          <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-item">
                          <input type="text" id="email" name="email" class="form-control" placeholder="Email address*">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-item">
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number*">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-item">
                          <div class="nice-select select-control form-control country" tabindex="0">
                            <span class="current">Select Service Required</span>
                            <ul class="list">
                              <li data-value="" class="option selected focus">Select Service Required</li>
                              <li data-value="construction" class="option">Construction Security</li>
                              <li data-value="event" class="option">Event Security</li>
                              <li data-value="site" class="option">Site Assessment</li>
                              <li data-value="other" class="option">Other Services</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-item message-item">
                          <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="submit-btn">
                      <button id="submit" class="rr-primary-btn" type="submit">Submit Message</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ./ contact-section -->

      <!-- Our Coverage Map Section -->
      <section class="coverage-section pb-70 pt-70">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-heading text-center mb-50">
                <h2 class="section-title">Our Coverage Areas</h2>
                <p>We provide comprehensive security services across the North West and West Yorkshire regions</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="map-wrapper pb-130">
        <div class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1189157.2478895717!2d-3.5063673691231354!3d53.79807574715138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a4d4c5226f5db%3A0xcd4677171ff55b2b!2sNorth%20West%20England%2C%20UK!5e0!3m2!1sen!2s!4v1651254870264!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <!-- ./ map-wrapper -->

      <?php include 'includes/footer.php'; ?>
      <!-- ./ footer-section -->

    </div>
  </div>

  <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
  <!--scrollup-->

  <?php include 'includes/js-links.php'; ?>
</body>

</html>