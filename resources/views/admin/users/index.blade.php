@extends('layouts.app')
@section('style')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" type="text/css"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" type="text/css">
@endsection
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Manage Users</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Manage Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
          

          
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Manage Users</div>
    
                    <div class="card-body">
                    <table class="table">
      <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Actions</th>
            </tr>
      </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
            <th>{{$user->name}}</th>
            <th>{{$user->email}}</th>
            <th>{{implode(',', $user->roles()->get()->pluck('name')->toArray())}}</th>
            <th>
              <a href="{{route('admin.users.edit', $user->id)}}" class="float-left">
                <button type="button" class="btn btn-primary btn-sm">Edit</button>
              </a>
              <a href="{{route('admin.impersonate', $user->id)}}" class="float-left">
                <button type="button" class="btn btn-success btn-sm">Impersonate</button>
              </a>
              <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                  {{ method_field('DELETE') }}
                  @csrf
                  <button type="sub" class="btn btn-danger btn-sm">Delete</button>
              </form>
            </th>
            </tr>
            @endforeach
            
            </tbody>
          </table>
          {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    </div>

    <div class="row">

      
    </div>
    
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; {{date('Y')}} <a href="https://kembangin.com" class="font-weight-bold ml-1" target="_blank">Kembangin Team</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
 
  
@endsection
