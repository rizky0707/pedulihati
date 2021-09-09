@extends('welcome')
@section('title', 'Berita')
@section('content')
<div id="page-header">
    <div class="container-fluid">
    <div class="page-header-wrap">
    <img src="http://dompetdhuafa.org/asset/foto_berita/page-header-berita-home.jpg" alt="Program" class="img-fluid">
    <div class="page-header-ct">
    <div class="div-table">
    <div class="div-table-cell">
    <div class="container">
    <h1>Berita</h1>
    <input type="hidden" id="seo" value="Program">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    
      <div class="container mt-4">
        <div class="row">
        <div class="col-md-12" style="
        padding-right: 55px;">
        <div class="input-group mb-4 ">
          <input type="text" class="form-control" placeholder="cari berita" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Search</button>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://nucos.s3.ap-southeast-1.amazonaws.com/post/lazisnu-pusat/20CM8cCVFBYI9mMMnwU1B4jUS0HtxZWQn3kJNUta.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://nucos.s3.ap-southeast-1.amazonaws.com/post/lazisnu-pusat/20CM8cCVFBYI9mMMnwU1B4jUS0HtxZWQn3kJNUta.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://nucos.s3.ap-southeast-1.amazonaws.com/post/lazisnu-pusat/20CM8cCVFBYI9mMMnwU1B4jUS0HtxZWQn3kJNUta.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
