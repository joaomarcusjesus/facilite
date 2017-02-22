@extends('site.layouts.master')

@section('title') Facilite Serviços - Home @endsection

@section('navbar')
    @include('site.includes.header')
@endsection

@section('content')
	<div class="top-25 visible-xs"></div>
    <div class="top-12 visible-sm"></div>
    <div class="top-12 visible-md"></div>
    <div class="top-6 visible-lg"></div>
    <h2>Escolha um serviço:</h2>
	<hr>
	<!-- <div class="container border-test">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
			<h1>teste</h1>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
			<h1>teste</h1>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
			<h1>teste</h1>
		</div>
	</div> -->
	<div class="col-lg-1 col-md-1 col-sm-2"></div>
              <!-- BLOCO PRINCIPAL -->
              <div class="col-lg-10 col-md-10 col-sm-8">
                <!-- BLOCOS DE CHECKBOX's -->
                <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-5">
                  <img src="{{ asset('img/eletricista.png') }}" alt="eletricista" class="img-circle">
                  <h3>Eletricista</h3>
                </div>

                <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-5">
                  <img src="{{ asset('img/chaveiro.png') }}" alt="chaveiro" class="img-circle">
                  <h3>Chaveiro</h3>
                </div>

                <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-5">
                  <img src="{{ asset('img/encanador.png') }}" alt="encanador" class="img-circle">
                  <h3>Encanador</h3>
                </div>

              </div>
@endsection

@section('footer')
	@include('site.includes.footer')
@endsection