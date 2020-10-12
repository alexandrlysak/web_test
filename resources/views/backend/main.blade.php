@extends('layouts.layout')

@section('title')
	Admin Page Title
@endsection

@section('css')
@parent
<link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
@endsection

@section('main-content')

<section class="main-content">
	<div class="container">

		<div id="admin-dashboard" class="wrapper flex">

			<div class="item">
				<div class="img">
					<img src="{{asset('assets/img/admin1.png')}}" alt="">
				</div>
				<button id="upload-regions-button">
					Upload regions <span class="icon icon-spinner"></span>
				</button>
				<input id="regions-input-file" type="file" accept="csv">
			</div>

			<div class="item">
				<div class="img">
					<img src="{{asset('assets/img/admin2.png')}}" alt="">
				</div>
				<button id="upload-offices-button">
					Upload offices <span class="icon icon-spinner"></span>
				</button>
				<input id="offices-input-file" type="file" accept="csv">
			</div>

			<div class="item">
				<div class="img">
					<img src="{{asset('assets/img/admin3.png')}}" alt="">
				</div>
				<button id="clear-database-button">
					Clear database <span class="icon icon-spinner"></span>
				</button>
			</div>

		</div>

		<div id="messages">
			<div class="wrapper error"></div> 
			<div class="wrapper success"></div>
		</div>
	</div>

	
</section>



@endsection

@section('js')
@parent
<script src="{{asset('assets/js/admin.js')}}"></script>
@endsection