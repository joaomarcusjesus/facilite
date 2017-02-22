@extends('aplicacao.layouts.aplicacaomaster')

@section('title') Facilite Serviços - Home @endsection

@section('navbar')
    @include('site.includes.header')
@endsection

@section('content')
	<div class="top-25 visible-xs"></div>
    <div class="top-12 visible-sm"></div>
    <div class="top-12 visible-md"></div>
    <div class="top-6 visible-lg"></div>
	<h1 style="text-align: center">HOME PAGE DO SITE</h1>
@endsection

@section('footer')
	@include('site.includes.footer')
@endsection