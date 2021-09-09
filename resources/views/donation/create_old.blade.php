@extends('welcome')
@section('main')
<div class="container">
  <form class="form-group" method="POST" action="{{route('donation.store')}}"> 
    @csrf
    <div class="row">
    <div class="col-md-6">
        <div class="shadow p-3 mb-5 bg-white rounded">
             
                <div class="form-group">
                  <label for="jenis_donasi">Jenis Donasi</label>
                  <select name="category_id" class="form-control" id="jenis_donasi">
                    @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>             
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text"  class="form-control" name="keterangan" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label for="keterangan">Nama</label>
                    <input type="text" class="form-control" name="nama"  placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Jumlah</label>
                    <input type="number" class="form-control"  name="jumlah" placeholder="Jumlah">
                  </div>
    </div>
  </form>

    </div>
    <div class="col-md-6">
        <div class="shadow p-3 mb-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Transfer Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Online Payment</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="form-check tab-pane fade show active pt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <input class="form-check-input" type="radio" name="transfer_bank" id="exampleRadios1" value="0875541762" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    <img src="{{asset('assets/landing/src/images/logo-bca.png')}}" alt="">
                  </label>
                </div>
                {{-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div> --}}
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>  
    </div>
    @guest
    @if (Route::has('register'))
    <a href="{{url('/register')}}" class="btn btn-block  btn-primary">Register</a> 
    @endif
    @else
    <button type="submit" class="btn btn-block  btn-primary">Create</button> 
    @endguest    


    </div>
</div>
</div>
@endsection
