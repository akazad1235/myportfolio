@extends('layout.app')
@section('title', 'service')
@section('content')
	<div class="container">
		<div class="row py-2">
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
							<h3>Laravel with vuejs</h3>
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
							<h3>Java Script</h3>
						</div>
						<div class="card-text text-justify">My mission is to develop unique idea and quality software that will secure top ranking in marketplace,  </div>
						<a href="" class="btn btn-info my-2">Live Demo</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-2">
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
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<h5 class="m-3">Contact Me</h5>
					<div class="card-body">
						<form>
						  <div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
						  </div>
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
						  </div>
						  <div class="form-group">
						    <label for="phone">Phone Number</label>
						    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp">
						  </div>
		
						  <button type="submit" class="btn btn-primary">Submit</button>
						<form>
					</div>
				</div>
				
				
			</div>
			<div class="col-md-6">
				<div class="card">
					<h5 class="m-3">Address</h5>
					<div class="card-body">
						<p>Shukrabad, Dhaka Bangladesh</p>
						<p>01770010503</p>
						<p>akazad@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
