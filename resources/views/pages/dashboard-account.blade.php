@extends('layouts.dashboard')

@section('title')
    Account Settings
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">
        My Account
      </h2>
      <p class="dashboard-subtitle">
        Update your current profile
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input type="text" 
                      class="form-control" 
                      id="name" 
                      name="name" 
                      value="Galih">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Your Email</label>
                      <input type="text" 
                      class="form-control" 
                      id="email" 
                      name="email" 
                      value="Galih@mail.com">
                    </div>
                  </div>
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
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
                </div> 
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection