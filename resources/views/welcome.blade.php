<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Peduli Hati Dia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/landing_real/css/style.css')}}">
</head>
<body>
    <header>
        <div class="main-nav-wrap">
        <div class="container-fluid bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light main-nav">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/program')}}">Program</a>
                </li>
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/berita')}}">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ripple" href="{{route('donation.create')}}">Donasi</a>
                </li>
              </ul>
                {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                {{-- <a class="nav-link" href="donasi.html">Login</a> --}}
                @guest
                <img src="{{asset('assets/landing_real/images/user.svg')}}" width="32px">&nbsp;
					<a class="button button-primary" style="text-decoration: none" href="{{ route('login') }}">  
            Login&nbsp;</a>
					@if (Route::has('register'))
					<a class="button button-primary" style="text-decoration: none" href="{{ route('register') }}">|&nbsp;Daftar</a>
					@endif
					@else 
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							{{-- <a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
            </form> --}}
            <a href="{{url('/home')}}" class="dropdown-item"><span>Dashboard</span>
              </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            class="dropdown-item">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
						</div>
					</li>
					@endguest
              
            </div>
          </nav>
        </div>
      </div>
    </header>
   {{-- content --}}
   @yield('content')
  <img src="{{asset('assets/landing_real/images/wave bawah 01.svg')}}" alt="" srcset="">
  <div id="footer">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <img src="asset/frontpage/images/footer-logo.png" alt="footer-logo" class="img-fluid ft-logo">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="footer-ct">
    <h5>Dompet Dhuafa Republika</h5>
    <p>
    <strong>Philanthropy Building</strong><br>
    Jl. Warung Jati Barat No.14 Jakarta Selatan 12540, Indonesia </p>
    <ul>
    <li><i class="icon phone"></i>(021) 27874080</li>
    <li><i class="icon fax"></i>08111544488 (Whatsapp)</li>
    <li><i class="icon mail"></i>layandonatur@dompetdhuafa.org</li>
    </ul>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
    <div class="footer-ct">
    <h5>Tentang Kami</h5>
    <ul>
    <li><a href="Profil">Profil</a></li>
    <li><a href="CaraBergabung">Cara bergabung</a></li>
    <li><a href="Program">Program</a></li>
    <li><a href="SocialEnterprise">Social Enterprise</a></li>
    <li><a href="https://dompetdhuafa.org/id/p/konfirmasi-donasi">Konfirmasi Donasi</a></li>
    <li><a href="https://donasi.dompetdhuafa.org/">Donasi</a></li>
    </ul>
    </div>
    </div> <div class="col-lg-5 col-md-6 col-sm-12">
    <div class="footer-ct">
    <h5>Social Media</h5>
    <ul class="soc-med">
    <li><a href="https://www.facebook.com/DompetDhuafaID/"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://twitter.com/dompetdhuafaorg"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/dompetdhuafaorg"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.youtube.com/user/DhuafaDompet/"><i class="fab fa-youtube"></i></a></li>
    </ul>
    <h5>Subscribe To Our Newsletter</h5>
    <form class="newstler">
    <div class="form-group">
    <div class="input-group">
    <input type="text" aria-label="Name" placeholder="Name" class="form-control" id="s_nama">
    <input type="email" aria-label="Email" placeholder="E-mail" class="form-control" id="s_email">
    <div class="input-group-append">
    <button class="btn" type="button" id="button-subscribe">GO</button>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div> </div>
    <div class="footer-credits">
    Copyright © Dompet Dhuafa 2021
    </div>
    </div>
    </div>
    
    <script type="text/javascript">
      const currentLocation = location.href;
      const menuItem = document.querySelectorAll('a');
      const menuLength = menuItem.length
      for (let i = 0; i<menuLength; i++){
        if(menuItem[i].href === currentLocation){
          menuItem[i].className = "active"
        }
      }
    </script>
<!-- <script src="js/main.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>