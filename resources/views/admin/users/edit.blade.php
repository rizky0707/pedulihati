@extends('layouts.app')

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
                <div class="card-header">Manage Users {{ $user->name }}</div>

                <div class="card-body">
                    <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    @foreach($roles as $role)
                    <div class="form-check">
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                        {{$user->hasAnyRole($role->name)?'checked':''}}>
                        <label>{{$role->name}}</label>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">
                        update
                    </button>
                    </form>
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
