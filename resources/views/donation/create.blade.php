@extends('welcome')
@section('title', 'Donasi')
@section('content')
<section class="donation">
    <div class="container mt-4">
    <div class="row">
    <div class="col-md-6">
        <div class="shadow p-3 mb-5 bg-white rounded">
            Pilihan Donasi
            <hr>
            <form class="form-group" method="POST" action="{{route('donation.store')}}">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Donasi</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>             
                    @endforeach
                    </select>
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah (Rp.)*</label>
                    <input name="jumlah" type="number" class="form-control" id="exampleInputPassword1" placeholder="0">
                    <small>Minimal : 10000</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Do'a</label>
                    <textarea name="keterangan" class="form-control" placeholder="Tulis doa atau dukungan untuk project donasi ini" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
               
        </div>
    </div>
    <div class="col-md-6">
        <div class="shadow p-3 mb-5 bg-white rounded">
            Metode Pembayaran
            <hr>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Online Payment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Transfer Bank</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="radio radio-metode-donasi">
                        <label>
                        <input type="radio" class="PaymentId" name="transfer_bank" value="BCA">
                        <img src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-bca.png">
                        </label>
                    </div>
                </div>
              </div>
              @guest
              @if (Route::has('register'))
              <a href="{{url('/register')}}" class="btn btn-block  btn-primary">Register</a> 
              @endif
              @else
              <button type="submit" class="btn btn-primary btn-block">Donasi Sekarang </button>
              @endguest  
        </div>
      </form>

        </div>

    </div>
    </div>
</div>
</section>
@endsection
