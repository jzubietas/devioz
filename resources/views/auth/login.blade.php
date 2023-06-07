@extends('layouts.auth_app')
@section('title')
    Admin Login
@endsection
@section('content')
           
    <div class="login login-v2 fw-bold">
        <div class="login-cover">
            <div class="login-cover-img" style="background-image: url({{ asset('img/login-bg/login-bg-17.jpg') }})" data-id="login-cover-image"></div>
            <div class="login-cover-bg"></div>
        </div>

        <div class="login-container">
            <div class="login-header">
              <div class="brand">
                <div class="d-flex align-items-center">
                  <span class="logo"></span> <b>Devioz</b> Admin
                </div>
                <small>Servicios de Desarrollo de software</small>
              </div>
              <div class="icon">
                <i class="fa fa-lock"></i>
              </div>
            </div>
            <div class="login-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-20px">
                      <input type="text" class="form-control fs-13px h-45px border-0" placeholder="Correo" id="email" name="email" required autofocus/>
                      <label for="email" class="d-flex align-items-center text-gray-600 fs-13px">Correo</label>
                      @if ($errors->has('email'))

                            <span class="text-danger">{{ $errors->first('email') }}</span>

                        @endif
                    </div>
                    <div class="form-floating mb-20px">
                      <input type="password" id="password" name="password" class="form-control fs-13px h-45px border-0" placeholder="Contraseña" required/>
                      <label for="password" class="d-flex align-items-center text-gray-600 fs-13px">Contraseña</label>
                      @if ($errors->has('password'))

                            <span class="text-danger">{{ $errors->first('password') }}</span>

                        @endif
                    </div>

                    <div class="form-check mb-20px">
                      <input class="form-check-input border-0" type="checkbox" value="1" id="rememberMe"{{ (Cookie::get('remember') !== null) ? 'checked' : '' }} />
                      <label class="form-check-label fs-13px text-gray-500" for="rememberMe">
                        Recordar contraseña
                      </label>
                    </div>
                    <div class="mb-20px">
                      <button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">Ingresar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="login-bg-list clearfix">
      <div class="login-bg-list-item active"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('img/login-bg/login-bg-17.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-17.jpg') }})"></a></div>
      <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('img/login-bg/login-bg-16.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-16.jpg') }})"></a></div>
      <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('img/login-bg/login-bg-15.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-15.jpg') }})"></a></div>
      <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('img/login-bg/login-bg-14.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-14.jpg') }})"></a></div>
      <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('img/login-bg/login-bg-13.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-13.jpg') }})"></a></div>
      <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('img/login-bg/login-bg-12.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-12.jpg') }})"></a></div>
    </div>

@endsection
