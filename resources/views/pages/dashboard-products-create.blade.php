@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">
        Create New Product
      </h2>
      <p class="dashboard-subtitle">
        Create Your Own Product
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
                      <label for="">Nama Toko</label>
                      <input type="text" 
                      class="form-control">
                    </div> 
                  </div>
                  </div>
                  <div class="col-md-6">
                    <label for="">Price</label>
                    <input name="category" type="number" id="" class="form-control"/>
                  </div>
                  <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="editor" type="number" id="editor" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="">Kategori</label>
                    <select name="category" id="" class="form-control">
                      <option value="" disabled>Select Category</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <label for="">Thumbnails</label>
                    <input type="file" class="form-control">
                    <p class="text-muted">
                      Kamu dapat memilih lebih dari satu file
                    </p>
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
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection

@push('addon-script')

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js" crossorigin="anonymous"></script>
<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
            //DEV to LOG
            // console.log( editor );
          } )
          .catch( error => {
                throw new error( error );
          } );
  </script>
@endpush