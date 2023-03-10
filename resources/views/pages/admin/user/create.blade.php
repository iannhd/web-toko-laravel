@extends('layouts.admin')

@section('title')
    User
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">
          User
        </h2>
        <p class="dashboard-subtitle">
          Create New User
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
                 <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama User</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email User</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Password User</label>
                                <input type="password" name="password" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Roles</label>
                                <select name="roles" required class="form-control">
                                <option value="ADMIN" >Admin</option>
                                <option value="USER">User</option>
                            </select>
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