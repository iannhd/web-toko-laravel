@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item ">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Cart 
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 30%">
                    <img src="./images/product-details-1.jpg" class="cart-image w-100" alt="">
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">
                      Sofa Ternyaman
                    </div>
                    <div class="product-subtitle">
                      by Andi Sukka
                    </div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">
                      $29,112
                    </div>
                    <div class="product-subtitle">
                      USD
                    </div>
                  </td>
                  <td style="width: 15%">
                    <a href="" class="btn btn-remove-cart">
                    Remove
                    </a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 30%">
                    <img src="./images/product-details-2.jpg" class="cart-image w-100" alt="">
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">
                      Sneaker
                    </div>
                    <div class="product-subtitle">
                      by BuildWith Angga
                    </div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">
                      $80,309
                    </div>
                    <div class="product-subtitle">
                      USD
                    </div>
                  </td>
                  <td style="width: 15%">
                    <a href="" class="btn btn-remove-cart">
                    Remove
                    </a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 30%">
                    <img src="./images/product-details-3.jpg" class="cart-image w-100" alt="">
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">
                      Coffee Holder
                    </div>
                    <div class="product-subtitle">
                      by Addictex
                    </div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">
                      $13,492
                    </div>
                    <div class="product-subtitle">
                      USD
                    </div>
                  </td>
                  <td style="width: 15%">
                    <a href="" class="btn btn-remove-cart">
                    Remove
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shipping Details</h2>
          </div>
          
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 1</label>
              <input type="text" 
              class="form-control" 
              id="addressOne" 
              name="addressOne" 
              value="Setra Duta Cemara">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressTwo">Address 2</label>
              <input type="text" 
              class="form-control" 
              id="addressTwo" 
              name="addressTwo" 
              value="Blok B2 No. 34">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="province">Province</label>
              <select type="text" 
              class="form-control" 
              id="province" 
              name="province" 
              >
              <option value="West Java">West Java</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="city">City</label>
              <select type="text" 
              class="form-control" 
              id="city" 
              name="city" 
              >
              <option value="Bandung">Bandung</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="postalCode">Postal Code</label>
              <input type="number" 
              class="form-control" 
              id="postalCode" 
              name="postalCode" 
              value="55321">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">country</label>
              <input type="text" 
              class="form-control" 
              id="country" 
              name="country" 
              value="Indonesia">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" 
              class="form-control" 
              id="mobile" 
              name="mobile" 
              value="+628123999112">
            </div>
          </div>
        </div>
        <div class="row mb-0" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-4">Payment Informations</h2>
          </div>
          
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">$10</div>
            <div class="product-subtitle">Country Tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">$280</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$580</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">$5280</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" 
            class="btn btn-success px-4 my-2 btn-block"
            >
              Checkout Now
            </a>
          </div>
        </div>
      </div>
    </section>
    
  </div>
@endsection