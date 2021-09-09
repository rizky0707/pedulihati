@extends('layouts.app')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Edit Categories</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Edit Categories</a></li>
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
                    {{-- <div class="card-header">Manage Categories
                    <div class="text-right">
                      <a href="#!" class="btn btn-primary">See all</a>
                    </div>
                  </div> --}}
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">Add Category</h3>
                    </div>
                   
                  </div>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('category.update', $edit_category->id)}}">
                            @csrf
                            @method('PUT')
                        <div class="pl-lg-4">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label" for="Name">Name</label>
                                  <input type="text" id="Name" name="name" value="{{$edit_category->name}}" class="form-control" placeholder="Name">
                                  @if(count($errors) > 0)
                                  @foreach ($errors->all() as $error)
                                  <small id="emailHelp" class="form-text text-warning">Category sudah ada / Category harus lebih dari 2 huruf</small>
                                  @endforeach
                                  @endif
                                </div>
                              </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Send">
                          </div>
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


