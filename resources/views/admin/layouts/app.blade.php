<!DOCTYPE html>
<html>
	<head>
		@include('admin.layouts.partials._meta')
		<title>Admin Note Clip | {!!get_app_title()!!}</title>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/general/bower/bootstrap/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/general/font-awesome-4.7.0/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/custom.css')}}">
		@stack('styles')
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col col-xs-12">
					@include('admin.layouts.partials._header')
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					<div class="container content">
						@yield('content')
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					@include('admin.layouts.partials._footer')
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{{asset('assets/general/bower/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/general/bower/popper.js/dist/umd/popper.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/general/bower/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/admin/js/custom.js')}}"></script>
		@stack('scripts')
	</body>
</html>