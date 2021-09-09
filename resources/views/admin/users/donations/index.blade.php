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
            <h6 class="h2 text-white d-inline-block mb-0">Manage Donations</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Manage Donations</a></li>
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
                    <div class="card-header">Manage Donations</div>
    
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Jenis Donasi</th>
                                    <th>Jumlah</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($donasis as $donasi)
                                <tr>
                                <th>{{$no++}}</th>
                                <th>{{$donasi->nama}}</th>
                                <th><span class="badge badge-default">{{$donasi->category->name}}</span></th>
                                <th>{{$donasi->jumlah}}</th>
                                <th></th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
@section('script')
<script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );
</script> 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
@endsection

