@extends('layout.app')
@section('title', 'home')
@section('content')
	<div class="container-fluid parallax text-center">
		<div class="row ">
			<div class="col-md-12 text-white devTop">
				<h3>Md. Azad Hosen</h3>
				<h6>Laravel Web Developer</h6>
				<button class="btn btn-info">Read More</button>
			</div>
		</div>
	</div>
	<div class="container py-3">
		<h4 class="bg-dark text-center text-white p-3">Your Service</h4>
		<div class="row ">
			<div class="col-md-4">
				<div class="card">
					<img class="service-img" src="{{asset('image/service/laravel.jpg')}}" alt="curd image">
				
					<div class="card-body">
						<div class="card-title">
							<h3>Laravel</h3>
						</div>
						<div class="card-text text-justify">My mission is to develop unique idea and quality software that will secure top ranking in marketplace,  </div>
						<a href="" class="btn btn-info my-2">Live Demo</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="service-img" src="{{asset('image/service/laravelwithvue.png')}}" alt="curd image">
				
					<div class="card-body">
						<div class="card-title">
							<h3>Laravel</h3>
						</div>
						<div class="card-text text-justify">My mission is to develop unique idea and quality software that will secure top ranking in marketplace,  </div>
						<a href="" class="btn btn-info my-2">Live Demo</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="service-img" src="{{asset('image/service/javascript.jpg')}}" alt="curd image">
				
					<div class="card-body">
						<div class="card-title">
							<h3>Laravel</h3>
						</div>
						<div class="card-text text-justify">My mission is to develop unique idea and quality software that will secure top ranking in marketplace,  </div>
						<a href="" class="btn btn-info my-2">Live Demo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
