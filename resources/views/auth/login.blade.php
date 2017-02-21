@extends('layouts.master')

@section('title') Facilite Serviços - Login @endsection

@section('navbar')
    @include('auth.includes.header')
@endsection

@section('content')
    <div class="top-18 visible-xs"></div>
    <div class="top-12 visible-sm"></div>
    <div class="top-12 visible-md"></div>
    <div class="top-12 visible-lg"></div>
    <div class="row">
    <!-- LOGIN -->
    <div class="col-lg-6 col-md-6 border-right">
      <h2 class="text-center">Entrar</h2>

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-2 control-label">Email:</label>
          <div class="col-md-9">
            <input id="email" type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com" value="{{ old('email') }}" required autofocus/>
            
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

          </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-2 control-label">Senha:</label>
          <div class="col-md-9">
            <input id="password" type="password" class="form-control" name="password" placeholder="*****************" required/>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

          </div>
        </div>

        <div class="form-group">
          <div class="col-md-offset-2 col-md-8 col-sm-offset-2">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Me lembre
              </label>
              <label>
                  <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Esqueceu sua senha?
                </a>
            </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg">Entrar</button>
          </div>
        </div>

      </form>
    </div>

    <!-- CADASTRAR -->
    <div class="top-12 visible-xs"></div>
    <div class="col-lg-6 col-md-6 text-center">
      <h2>Ainda não é cadastrado?</h2>
      <p>Clique no botão abaixo e faça o seu cadastro agora mesmo!</p>
      <p><a class="btn btn-primary btn-lg" href="{{url('/register')}}" role="button">Cadastrar agora &raquo;</a></p>
    </div>
    <!-- //CADASTRAR -->

  </div>
@endsection

@section('footer')
    @include('auth.includes.footer')
@endsection

@push('scripts')
    <!-- JQuery-->
    <!-- <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script> -->
@endpush
