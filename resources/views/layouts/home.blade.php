@extends('master')

{{-- Home page structure --}}

@section('body_middle')

 	@include('partials.header')

 	<div class="container">

 		<div class="row">

 			<div class="col-sm-4">

				@section('menu')

					{{-- Make sure you did configure the menu on admin --}}
					{{-- Weloquent\Support\Navigation\Menu::render('primary') --}}

				@show

				@section('sidebar')

					<?php dynamic_sidebar(); ?>

                @show


 			</div>

 			<div class="col-sm-8">

				@unless(is_home())

					@include('partials.breadcrumb')

				@endunless

				@include('partials.orderCtrl')

 				@yield('main')

				{{ \Weloquent\Support\Pagination::render() }}

 			</div>

 		</div>

 	</div>


 	@include('partials.footer')

@stop
