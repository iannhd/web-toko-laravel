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
          <form action="{{route('dashboard-products')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <div class="form-group">
                      <label for="">Product name</label>
                      <input type="text" 
                      class="form-control" name="name">
                    </div> 
                  </div>
                  </div>
                  <div class="col-md-6">
                    <label for="">Price</label>
                    <input name="price" type="number" id="" class="form-control"/>
                  </div>
                  <div class="col-md-12">
                    <label for="">Kategori</label>
                      <select name="categories_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" id="editor" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="">Thumbnails</label>
                    <input type="file" name="photo" class="form-control">
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