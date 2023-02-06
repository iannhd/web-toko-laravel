@extends('layouts.admin')

@section('title')
    Category
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          Category
        </h2>
        <p class="dashboard-subtitle">
          Edit Category
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
                 <form action="{{route('category.update', $item->id)}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" name="name" value="{{$item->name}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Foto Kategori</label>
                                <input type="file" name="photo" class="form-control">
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