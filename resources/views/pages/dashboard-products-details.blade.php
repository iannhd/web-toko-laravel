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
          @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0">
                        @foreach ($errors->all() as $error)
                            <li style="list-style: none" class="align-items-center"> <b> {{$error}} </b></li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <form action="{{route('dashboard-products-update', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <div class="form-group">
                      <label for="">Nama Produk</label>
                      <input type="text" 
                      name="name"
                      class="form-control"
                      value="{{$product->name}}">
                    </div> 
                  </div>
                  </div>
                  <div class="col-md-6">
                    <label for="">Price</label>
                    <input 
                    name="price" 
                    type="number" 
                    value="{{$product->price}}"
                    class="form-control"/>
                  </div>
                  <div class="col-md-12">
                    <label for="">Category</label>
                    <select name="categories_id" class="form-control">
                          <option value="{{$product->categories_id}}">{{$product->category->name}} (Tidak Diganti) </option>
                      @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                  </select>
                  </div>
                  <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" id="editor" class="form-control">
                      {!! $product->description !!}
                    </textarea>
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
              @foreach($product->galleries as $gallery)
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img src="{{Storage::url($gallery->photos ?? '')}}" alt="" class="w-100">
                    <a href="{{route('dashboard-products-gallery-delete', $gallery->id)}}" class="delete-gallery">
                      <img src="/images/icon-delete.svg" alt="">
                    </a>
                  </div>
                </div>
              @endforeach
              <div class="col-12">
                <form action="{{route('dashboard-products-gallery-upload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="products_id" value="{{$product->id}}">
                    <input type="file" name="photos" id="file" style="display: none;"
                    onchange="form.submit()">
                    <button onclick="thisFileUpload()" type="button" class="btn btn-secondary btn-block mt-3">
                      Add Photo
                    </button>
                </form>
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