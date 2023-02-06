@extends('layouts.admin')

@section('title')
    Product
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Product
        </h2>
        <p class="dashboard-subtitle">
          Edit Product
        </p>
      </div>
      <div class="row">
          <div class="col-md-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0">
                        @foreach ($errors->all() as $error)
                            <li style="list-style: none" class="align-items-center"> <b> {{$error}} </b></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
              <div class="card-body">
                 <form action="{{route('product.update', $item->id)}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Product</label>
                                <input type="text" name="name" class="form-control" required value="{{$item->name}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Pemilik Product</label>
                                <select name="users_id" class="form-control">
                                    <option value="{{$item->users_id}}" selected>{{$item->user->name}}</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Kategori Product</label>
                                <select name="categories_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Harga Product</label>
                                <input type="number" name="price" class="form-control" required value="{{$item->price}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Deskripsi Product</label>
                                <textarea name="description" id="editor" cols="30" rows="10">{!! $item->description !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <button type="submit" class="btn btn-success px5
                            ">Save Now</button>
                        </div>
                    </div>
                </form>
              </div>  
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
@endpush()
