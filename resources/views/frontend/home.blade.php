@extends('frontend.layouts')

@section('content')

<section class="banner">
    <div class="banner-slider owl-carousel">

        @empty(!$banners)

        @foreach ($banners as $key => $banner)

        <div class="item" data-dot="<button> 0{{ $key+1 }} </button>">
            <div class="banner-inner-section">
              <img src="{{ asset('storage/'. $banner->media->path) }}" alt="" />
              <div class="banner-txt">
                <h2>{{ $banner->title }}</h2>
                <h4>{{ $banner->description }}</h4>
                <a href="#" class="btn btn-outline-warning mt-4">Get started today <i class="fa-solid fa-arrow-right"></i></a>
              </div>           
            </div>
          </div>  
            
        @endforeach
            
        @endempty

    </div>
  </section>

  <section class="main-wrap">
    <div class="container-xxl">
      <div class="top-title-prt">
        <div class="style-txt-prt" data-aos="fade-left" data-aos-duration="3000">
          <h2>What's your style?</h2>
          <p>1 color logo included both sided on clothing 5000pts embroidery on hat included</p>
        </div>
        <ul class="filter-lst">
          <li class="active" data-aos="zoom-in" data-aos-duration="2000">
            <div class="filter-ico">
              <img src="images/ico1.png" alt="" />
              <span><img src="images/ico1-h.png" alt="" /></span>
            </div>
            <h4>T-Shirts</h4>
          </li>
          <li data-aos="zoom-in" data-aos-duration="2300">
            <div class="filter-ico">
              <img src="images/ico2.png" alt="" />
              <span><img src="images/ico2-h.png" alt="" /></span>
            </div>
            <h4>ML T-Shirts</h4>
          </li>
          <li data-aos="zoom-in" data-aos-duration="2600">
            <div class="filter-ico">
              <img src="images/ico3.png" alt="" />
              <span><img src="images/ico3-h.png" alt="" /></span>
            </div>
            <h4>Kangaroos</h4>
          </li>
          <li data-aos="zoom-in" data-aos-duration="2900">
            <div class="filter-ico">
              <img src="images/ico4.png" alt="" />
              <span><img src="images/ico4-h.png" alt="" /></span>
            </div>
            <h4>Caps</h4>
          </li>
          <li data-aos="zoom-in" data-aos-duration="3000">
            <div class="filter-ico">
              <img src="images/ico5.png" alt="" />
              <span><img src="images/ico5-h.png" alt="" /></span>
            </div>
            <h4>Hats</h4>
          </li>
        </ul>
      </div>

      <div class="row mt-5 customize-bx">
        <div class="col-md-4">
          <div class="pro-bx" data-aos="flip-left" data-aos-duration="1000">              
            <div class="price-tag">
              <h5><span>Starting at</span> $1079</h5>
            </div>
            <div class="pro-img">
              <img class="img-fluid" src="images/pro1.png" alt="" />
            </div>
            <ul class="quantity-info-lst">
              <li>
                <span class="quantity">20</span>
                <p>T-Shirts</p>
              </li>
              <li>
                <span class="quantity">10</span>
                <p>Kangaroos</p>
              </li>
              <li>
                <span class="quantity">12</span>
                <p>Caps</p>
              </li>
            </ul>
            <div class="select-overlay">
              <a href="#" class="btn btn-outline-warning">Select <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pro-bx" data-aos="flip-left" data-aos-duration="1200">
            <div class="price-tag">
              <h5><span>Starting at</span> $1079</h5>
            </div>
            <div class="pro-img">
              <img class="img-fluid" src="images/pro2.png" alt="" />
            </div>
            <ul class="quantity-info-lst">
              <li>
                <span class="quantity">12</span>
                <p>T-Shirts</p>
              </li>
              <li>
                <span class="quantity">8</span>
                <p>Kangaroos</p>
              </li>
              <li>
                <span class="quantity">10</span>
                <p>ML T-Shirts</p>
              </li>
            </ul>
            <div class="select-overlay">
              <a href="#" class="btn btn-outline-warning">Select <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pro-bx" data-aos="flip-left" data-aos-duration="1400">
            <div class="price-tag">
              <h5><span>Starting at</span> $1079</h5>
            </div>
            <div class="pro-img">
              <img class="img-fluid" src="images/pro3.png" alt="" />
            </div>
            <ul class="quantity-info-lst">
              <li>
                <span class="quantity">38</span>
                <p>T-Shirts</p>
              </li>
              <li>
                <span class="quantity">12</span>
                <p>Kangaroos</p>
              </li>
            </ul>
            <div class="select-overlay">
              <a href="#" class="btn btn-outline-warning">Select <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pro-bx" data-aos="flip-left" data-aos-duration="1600">
            <div class="price-tag">
              <h5><span>Starting at</span> $1079</h5>
            </div>
            <div class="pro-img">
              <img class="img-fluid" src="images/pro3.png" alt="" />
            </div>
            <ul class="quantity-info-lst">
              <li>
                <span class="quantity">12</span>
                <p>T-Shirts</p>
              </li>
              <li>
                <span class="quantity">6</span>
                <p>Kangaroos</p>
              </li>
            </ul>
            <div class="select-overlay">
              <a href="#" class="btn btn-outline-warning">Select <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pro-bx" data-aos="flip-left" data-aos-duration="1800">
            <div class="price-tag">
              <h5><span>Starting at</span> $1079</h5>
            </div>
            <div class="pro-img">
              <img class="img-fluid" src="images/pro1.png" alt="" />
            </div>
            <ul class="quantity-info-lst">
              <li>
                <span class="quantity">24</span>
                <p>T-Shirts</p>
              </li>
              <li>
                <span class="quantity">6</span>
                <p>Kangaroos</p>
              </li>
              <li>
                <span class="quantity">12</span>
                <p>ML T-Shirts</p>
              </li>
            </ul>
            <div class="select-overlay">
              <a href="#" class="btn btn-outline-warning">Select <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pro-bx" data-aos="flip-left" data-aos-duration="2000">
            <div class="price-tag">
              <h5><span>Starting at</span> $1079</h5>
            </div>
            <div class="pro-img">
              <img class="img-fluid" src="images/pro4.png" alt="" />
            </div>
            <ul class="quantity-info-lst">
              <li>
                <span class="quantity">12</span>
                <p>T-Shirts</p>
              </li>
              <li>
                <span class="quantity">6</span>
                <p>Kangaroos</p>
              </li>
              <li>
                <span class="quantity">6</span>
                <p>Hats</p>
              </li>
            </ul>
            <div class="select-overlay">
              <a href="#" class="btn btn-outline-warning">Select <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-4">
        <a href="#" class="btn btn-outline-warning">View All <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="row mt-5">
        <div class="col-md-8" data-aos="fade-right" data-aos-duration="2000">
          <div class="offer-bx">
            <img class="img-fluid" src="images/bg3.jpg" alt="" />
            <div class="offer-txt">
              <h4>Upto 20% Off</h4>
              <h3>Make The Most Of <br/>Our <strong>Kangaroos Printing</strong></h3>
              <a href="#" class="btn btn-outline-warning mt-3">Get started today <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-left" data-aos-duration="2500">
          <div class="offer-bx custom-chng">
            <img class="img-fluid" src="images/bg4.jpg" alt="" />
            <div class="offer-txt">
              <h4>Upto 15% Off</h4>
              <h3>On All T-Shirt Printing</h3>
              <a href="#" class="btn btn-outline-warning mt-3">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="deal-wrap">
    <div class="container-xxl">
      <div class="title-prt">
        <h2>Deal of the day</h2>
        <a href="#" class="btn btn-outline-warning">View All <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="row mt-5">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1500">
          <div class="deal-bx">
            <a href="#">
              <div class="deal-img">
                <img class="img-fluid" src="images/deal1.jpg" alt="" />
                <span class="hot-tag">Hot <br/>Deal</span>
              </div>
              <div class="content-prt">
                <h3>Printed Kangaroo</h3>
                <span class="price">$40</span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="2000">
          <div class="deal-bx">
            <a href="#">
              <div class="deal-img">
                <img class="img-fluid" src="images/deal2.jpg" alt="" />
                <span class="hot-tag">Hot <br/>Deal</span>
              </div>
              <div class="content-prt">
                <h3>Printed Cap</h3>
                <span class="price">$40</span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="2500">
          <div class="deal-bx">
            <a href="#">
              <div class="deal-img">
                <img class="img-fluid" src="images/deal3.jpg" alt="" />
                <span class="hot-tag">Hot <br/>Deal</span>
              </div>
              <div class="content-prt">
                <h3>Printed ML T-Shirt</h3>
                <span class="price">$40</span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="3000">
          <div class="deal-bx">
            <a href="#">
              <div class="deal-img">
                <img class="img-fluid" src="images/deal4.jpg" alt="" />
                <span class="hot-tag">Hot <br/>Deal</span>
              </div>
              <div class="content-prt">
                <h3>Printed T-Shirt</h3>
                <span class="price">$40</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="main-wrap">
    <div class="container-xxl">
      <div class="row">
        <div class="col-md-6" data-aos="zoom-in" data-aos-duration="3000">
          <div class="category-bx">
            <img class="img-fluid" src="images/bg1.jpg" alt="" />
            <div class="inr-txt">
              <h3>T-Shirt Printing Made Easy.</h3>
              <p>You've got the ideas, we've got the tools</p>
              <a href="#" class="btn btn-outline-warning mt-3">Get started <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="zoom-in" data-aos-duration="3000">
          <div class="category-bx">
            <img class="img-fluid" src="images/bg2.jpg" alt="" />
            <div class="inr-txt">
              <h3>One Place For All Your Needs</h3>
              <ul>
                <li>T-Shirts</li>
                <li>Caps</li>
                <li>Kangaroos</li>
                <li>ML T-Shirts</li>                  
                <li>Hats</li>
              </ul>
              <a href="#" class="btn btn-outline-warning mt-3">SHOP NOW <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection