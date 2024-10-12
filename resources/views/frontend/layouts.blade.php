<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.2.3.4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.2.3.1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Construction Tshirt</title>
  </head>
  
  <body>
  	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    
    <header class="header">
      <div class="container-xxl">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="images/logo.png" alt="">
          </a>
        
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="product.html">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="#">What’s New</a></li>
              <li class="nav-item"><a class="nav-link" href="faq.html">FAQS</a></li> 
              <li class="nav-item"><a class="nav-link" href="contact.html">CONTACT US</a></li>
            </ul>
          </div>

          <div class="my-ac-wrap">
            <ul>
              <li class="hed-search-wrap">
                <div class="hed-search">
                    <a class="open-search" href="#">
                      <i class="bi bi-search"></i>
                    </a>
                    <div class="form-search">
                        <form>
                            <input type="search" placeholder="Search:">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                    <div class="close-overlay"></div>
                </div>
              </li>
              <li>
                <div class="user-ac">
                  <a href="#"><img src="images/user.png" alt="" /></a>
                </div>
              </li>
              <li>
                <div class="cart">
                  <a href="#">
                    <i class="bi bi-bag"></i>
                    <span class="count">2</span>
                  </a>
                </div>
              </li>                
            </ul>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
          </button>
        </nav>
      </div>
    </header>


    @yield('content')


    <footer class="footer">
      <div class="container-xxl">
        <div class="newsletter-prt">
          <h3>Sign Up For Exclusive Offers From Us</h3>
          <div class="newsletter-bx">
            <form method="get" action="#">
              <input type="email" placeholder="Enter your email..">
              <button type="submit" class="btn btn-outline-warning">Subscribe</button>
            </form>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <div class="f-logo">
              <a href="index.html"><img src="images/logo.png" alt="" /></a>
            </div>
            <p class="copyright mt-5 d-none d-sm-block">Copyright © 2024. All Rights Reserved.</p>
          </div>
          <div class="col-md-2">
            <ul class="footer-menu-list">
              <li><a href="index.html">Home</a></li>
              <li><a href="product.html">Products</a></li>
              <li><a href="#">What’s New</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">CONTACT US</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="contact-lst">
              <li><a href="tel:15145618019">+15145618019</a></li>
              <li><a href="mailto:b.torres@weborka.com">b.torres@weborka.com</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="f-social">
              <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
            <p class="copyright mt-3 d-block d-sm-none">Copyright © 2024. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.2.3.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/aos.2.3.1.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  </body>
</html>

