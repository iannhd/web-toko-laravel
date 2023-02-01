@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0">
                </li>
                <li data-target="#storeCarousel" data-slide-to="1">
                </li>
                <li data-target="#storeCarousel" data-slide-to="2">
                </li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./bwa-icon/banner.png" class="d-block w-100" alt="Carousel Image">
                </div>
                <div class="carousel-item ">
                  <img src="./bwa-icon/banner.png" class="d-block w-100" alt="Carousel Image">
                </div>
                <div class="carousel-item ">
                  <img src="./bwa-icon/banner.png" class="d-block w-100" alt="Carousel Image">
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </section>
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="./bwa-icon/categories-gadgets.svg" class="w-100" alt="">
              </div>
              <p class="categories-text">Gadgets</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="./bwa-icon/categories-furniture.svg" class="w-100" alt="">
              </div>
              <p class="categories-text">Furniture</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="./bwa-icon/categories-makeup.svg" class="w-100" alt="">
              </div>
              <p class="categories-text">Makeup</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="./bwa-icon/categories-sneaker.svg" class="w-100" alt="">
              </div>
              <p class="categories-text">Sneaker</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="./bwa-icon/categories-tools.svg" class="w-100" alt="">
              </div>
              <p class="categories-text">Tools</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="./bwa-icon/categories-baby.svg" class="w-100" alt="">
              </div>
              <p class="categories-text">Baby</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
            <div class="row">
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-apple-watch.png');"></div>
                  </div>
                  <div class="products-text">
                    Apple Watch 4
                  </div>
                  <div class="products-price">
                    $890
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-orange-bogotta.png');"></div>
                  </div>
                  <div class="products-text">
                    Orange Bogotta
                  </div>
                  <div class="products-price">
                    $94,509
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-sofa-ternyaman.png');"></div>
                  </div>
                  <div class="products-text">
                    Sofa Ternyaman
                  </div>
                  <div class="products-price">
                    $1,409
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-bubuk-maketti.png');"></div>
                  </div>
                  <div class="products-text">
                    Bubuk Maketti
                  </div>
                  <div class="products-price">
                    $225
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-tatakan-gelas.png');"></div>
                  </div>
                  <div class="products-text">
                    Tatakan Gelas
                  </div>
                  <div class="products-price">
                    $45,184
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-mavic-kawe.png');"></div>
                  </div>
                  <div class="products-text">
                    Mavic Kawe
                  </div>
                  <div class="products-price">
                    $503
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-black-edition-nike.png');"></div>
                  </div>
                  <div class="products-text">
                    Black Edition Nike
                  </div>
                  <div class="products-price">
                    $70,482
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <a href="./details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('./bwa-icon/products-monkey-toys.png');"></div>
                  </div>
                  <div class="products-text">
                    Monkey Toys
                  </div>
                  <div class="products-price">
                    $783
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>    
@endsection