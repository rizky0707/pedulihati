<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login - Peduli Hati</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/admin/assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/admin/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    
    <!-- Page content -->
    <div class="pb-5">

    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"></div>
              {{-- <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="{{asset('assets/admin/assets/img/icons/common/github.svg')}}"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="{{asset('assets/admin/assets/img/icons/common/google.svg')}}"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div> --}}
              <h1 align="center">Login</h1>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Login mendapatkan Informasi Seputar Donasi</small>
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    {{-- <input class="form-control" placeholder="Email" type="email"> --}}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    {{-- <input class="form-control" placeholder="Password" type="password"> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="custom-control-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                  {{-- <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label> --}}
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
                @if (Route::has('password.request'))
                <a class="text-light" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
           
            <div class="col-6 text-right">
              <a href="{{route('register')}}"><span class="badge badge-light">Create new account</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('assets/admin/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/admin/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('assets/admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/admin/assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
