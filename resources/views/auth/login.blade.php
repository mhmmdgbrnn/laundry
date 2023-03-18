@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="wrap">
                <div class="img" style="background-image: url(images/laundry.png);"></div>
                <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                  <div class="w-100">
                      <h3 class="mb-4">Login</h3>
                  </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="https://www.instagram.com/mhmmdgbrnn_/?hl=id" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
                                <a href="https://web.facebook.com/muhammad.gibran.980" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                            </p>
                        </div>
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group mt-3">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                      <label class="form-control-placeholder" for="email">{{ __('Email') }}</label>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <br>
            <div class="form-group">
              <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              <label class="form-control-placeholder" for="password">{{ __('Password') }}</label>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('Login') }}</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="w-50 text-left">
                    <label class="checkbox-wrap checkbox-primary mb-0">Ingatkan Saya
                         <input type="checkbox" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="w-50 text-md-right">
                   <a href="{{ route('password.request') }}">Lupa Password</a>
                </div>
            </div>
          </form>
          
        </div>
      </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
@endsection
