@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product Details
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">
        Shirup Marzan
      </h2>
      <p class="dashboard-subtitle">
        Product Details
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
                     <div class="form-group">
                      <label for="">Nama Produk</label>
                      <input type="text" 
                      class="form-control"
                      value="Papel La Casa">
                    </div> 
                  </div>
                  </div>
                  <div class="col-md-6">
                    <label for="">Price</label>
                    <input 
                    name="category" 
                    type="number" 
                    id="" 
                    value="100.00"
                    class="form-control"/>
                  </div>
                  <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="editor" type="number" id="editor" class="form-control"></textarea>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5 btn-block">
                      Update Product
                    </button>
                  </div>
                </div> 
            </div>
          </div> 
        </form>
      </div>
      </div>
      <div class="row mt-3">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="gallery-container">
                  <img src="/images/product-card-1.png" alt="" class="w-100">
                  <a href="#" class="delete-gallery">
                    <img src="/images/icon-delete.svg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="gallery-container">
                  <img src="/images/product-card-2.png" alt="" class="w-100">
                  <a href="#" class="delete-gallery">
                    <img src="/images/icon-delete.svg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="gallery-container">
                  <img src="/images/product-card-3.png" alt="" class="w-100">
                  <a href="#" class="delete-gallery">
                    <img src="/images/icon-delete.svg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-12">
                <input type="file" name="" id="file" style="display: none;" multiple >
                <button onclick="thisFileUpload()" type="submit" class="btn btn-secondary btn-block mt-3">
                  Add Photo
                </button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script>
  function thisFileUpload(){
    document.getElementById('file').click()
  }
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js" crossorigin="anonymous"></script>
<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
            //DEV to LOG
            // console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
  </script>
@endpush