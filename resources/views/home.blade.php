@extends('layouts.layout')

@section('title')
	Home Page Title
@endsection

@section('top')
<section class="top">
	<div class="container">
		<div id="topSlider">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="content-wrapper">
						<div class="title">
							CONTRARY TO POPULAR BELIEF
						</div>

						<div class="content">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</div>
					</div>
				</div>
				<div class="item">
					<div class="content-wrapper">
						<div class="title">
							CONTRARY TO POPULAR BELIEF
						</div>

						<div class="content">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</div>
					</div>
				</div>
				<div class="item">
					<div class="content-wrapper">
						<div class="title">
							CONTRARY TO POPULAR BELIEF
						</div>

						<div class="content">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('services')
<section class="services">
	<div class="container">
		<div class="wrapper flex">
			<div class="item">
				<div class="img">
					<img src="{{asset('assets/img/1.png')}}" alt="">
				</div>
				<div class="title">
					Responsive design
				</div>
				<div class="description">
					I am so clever that sometimes I do not  understand a single word of what I am saying and get very confused.
				</div>
			</div>

			<div class="item">
				<div class="img">
					<img src="{{asset('assets/img/2.png')}}" alt="">
				</div>
				<div class="title">
					Web development
				</div>
				<div class="description">
					It is better to be hated for what you are than to be loved for what you are not, so might as well be yourself.
				</div>
			</div>

			<div class="item">
				<div class="img">
					<img src="{{asset('assets/img/3.png')}}" alt="">
				</div>
				<div class="title">
					Customer support
				</div>
				<div class="description">
					Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
				</div>
			</div>

			<div class="item">
				<div class="img">
					<img src="{{asset('assets/img/4.png')}}" alt="">
				</div>
				<div class="title">
					Images included
				</div>
				<div class="description">
					Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
				</div>
			</div>

		</div>
	</div>
</section>
@endsection

@section('search')
<section class="search">
	<div class="container">
		<div class="title">
			Search
		</div>
		<div class="content">
			<input id="searchZipInput" type="text" value="HELLO" placeholder="Search ...">
			<button> <span class="icon icon-search"></span> Search </button>
		</div>
		<div class="message"></div>
	</div>
</section>
@endsection

@section('main-content')
<section class="main-content">
	<div class="container">

		<div class="content-item portfolio">
			<div class="title">
				Portfolio
			</div>
			<div class="content">

				<div id="portfolioSlider">
					<div class="owl-carousel owl-theme">

						<div class="item">
							<a href="{{asset('assets/img/img1.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img1.jpg')}}" class="portfolio-img" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="{{asset('assets/img/img2.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img2.jpg')}}" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="{{asset('assets/img/img3.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img3.jpg')}}" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="{{asset('assets/img/img4.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img4.jpg')}}" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="{{asset('assets/img/img1.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img1.jpg')}}" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="{{asset('assets/img/img2.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img2.jpg')}}" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="{{asset('assets/img/img3.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img3.jpg')}}" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="{{asset('assets/img/img4.jpg')}}" data-fancybox data-caption="It is a long established fact">
								<div class="content-wrapper">
									<div class="image">
										<img src="{{asset('assets/img/img4.jpg')}}" alt="It is a long established fact" />
									</div>
									<div class="title">
										It is a long established fact
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-item what-is">
			<div class="title">
				What is lorem ipsum ?
			</div>
			<div class="content">
				<div class="panel">
					<div class="left">
						<img src="{{asset('assets/img/img5.jpg')}}" alt="">
					</div>
					<div class="right">
						<div class="title">
							Why do we use it?
						</div>
						<div class="description">
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
							The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", 
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-item latest-news">
			<div class="title">
				Latest news
			</div>
			<div class="content">
				<div class="panel flex">
					<div class="left-column">
						<div class="item">
							<div class="left">
								<img src="{{asset('assets/img/img6.jpg')}}" alt="Some interesting news">
							</div>
							<div class="right">
								<div class="title">
									Some interesting news1
								</div>
								<div class="description">
									Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
								</div>
								<button>Read more</button>
							</div>
						</div>
						<div class="item">
							<div class="left">
								<img src="{{asset('assets/img/img7.jpg')}}" alt="Some interesting news">
							</div>
							<div class="right">
								<div class="title">
									Some interesting news2
								</div>
								<div class="description">
									Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
								</div>
								<button>Read more</button>
							</div>
						</div>
					</div>
					<div class="right-column">
						<div class="item">
							<div class="left">
								<img src="{{asset('assets/img/img8.jpg')}}" alt="Some interesting news">
							</div>
							<div class="right">
								<div class="title">
									Some interesting news3
								</div>
								<div class="description">
									Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
								</div>
								<button>Read more</button>
							</div>
						</div>
						<div class="item">
							<div class="left">
								<img src="{{asset('assets/img/img9.jpg')}}" alt="Some interesting news">
							</div>
							<div class="right">
								<div class="title">
									Some interesting news4
								</div>
								<div class="description">
									Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
								</div>
								<button>Read more</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<div class="hidden">

		<div id="searchResult">

			<div class="main-title"></div>

			{{-- <div id="google_map_search" class="map"></div> --}}

			<div id="google_map_search" contenteditable="true" style = "height: 450px; width: 100%;"></div>

			<div class="offices-wrapper flex">
				
				{{-- <div class="item">
					<div class="title">
						1) Main office
					</div>
					<div class="description">
						<div class="address">
							261-263 Phan XichLong Street
						</div>
						<div class="city">
							Phu Nhuan District, Ho Shi Minh City
						</div>
						<div class="zip">
							70030
						</div>
						<div class="country">
							Vietnam
						</div>
					</div>
				</div>
				<div class="item">
					<div class="title">
						2) Main office
					</div>
					<div class="description">
						<div class="address">
							261-263 Phan XichLong Street
						</div>
						<div class="city">
							Phu Nhuan District, Ho Shi Minh City
						</div>
						<div class="zip">
							70030
						</div>
						<div class="country">
							Vietnam
						</div>
					</div>
				</div>
				--}}

				
				
			</div>

		</div>

	</div>
@endsection