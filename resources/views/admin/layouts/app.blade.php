<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="Digital Kreasi Nusantara">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Dashboard Teknik Komputer B</title>

	<link href="{{ asset('vendors/themes/adminkit/css/app-pro.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	@yield('css')
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
		@include('admin.layouts.sidebar')
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				@include('admin.layouts.navbar')
			</nav>

			<main class="content">
				@yield('content')
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="" class="text-muted"><strong>Absensi Online Berbasis Iot</strong></a> &copy; 2021
							</p>
						</div>
						<div class="col-6 text-end">
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="{{ asset('vendors/themes/adminkit/js/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('vendors/themes/adminkit/js/app-pro.js') }}"></script>
	<script src="{{ asset('vendors/sweetalert/sweetalert.js') }}"></script>
	@yield('script')
	       @if ($message = Session::get('success'))
				<script>
					var message = "{{ $message }}";
					var type = "success";
					var duration = "5000";
					var ripple = 1;
					var dismissible = 1;
					var positionX = "right";
					var positionY = "top";
					window.notyf.open({
						type,
						message,
						duration,
						ripple,
						dismissible,
						position: {
							x: positionX,
							y: positionY
						}
					});
				</script>
		@endif

		@if ($message = Session::get('error'))
				<script>
					var message = "{{ $message }}";
					var type = "error";
					var duration = "5000";
					var ripple = 1;
					var dismissible = 1;
					var positionX = "right";
					var positionY = "top";
					window.notyf.open({
						type,
						message,
						duration,
						ripple,
						dismissible,
						position: {
							x: positionX,
							y: positionY
						}
					});
				</script>
			@endif
	<script>
	function doSomething() {
	  $.ajax({
            url:"{{ route('getrfid')}}",
            dataType: 'json',
            type: 'GET',
            success:function(data){
                console.log('success');
                console.log(data.message);
				
                },
            error:function(){
            }
        })
	}

	function masuk() {
	  $.ajax({
            url:"{{ route('ajax-masuk')}}",
            dataType: 'json',
            type: 'GET',
            success:function(data){
                console.log('success');
                if(data.message == "sukses"){
					location.reload();  
				}else{
					console.log(data.message);
				}
				
                },
            error:function(){
            }
        })
	}


setInterval(doSomething, 5000);
setInterval(masuk, 6000);
	</script>

</body>

</html>