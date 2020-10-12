@extends('layouts.layout')

@section('title')
	Login Page Title
@endsection

@section('main-content')
<section class="main-content">
	<div class="container">
		<div id="login-form-wrapper" class="wrapper flex">
			{{ $slot }}
		</div>
	<div class="container">
</section>
@endsection