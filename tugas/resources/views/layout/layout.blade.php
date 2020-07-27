<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | WebDes Admin</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
	<!-- summernote -->
	<link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		@include('layout.navbar')
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		@include('layout.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>@yield('pageTitle')</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Blank Page</li> -->
								@yield('breadcrumb')
							</ol>
						</div>
					</div>
				</div>
			</section>
			<!-- Content Start -->
			<section class="content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>WebDes-Version</b> 0.0.1
			</div>
			<strong>Copyright &copy; 2020 <a href="#">WebDes</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="/admin/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->
	<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/admin/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="/admin/dist/js/demo.js"></script>
	<!-- Summernote -->
	<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- MyScript -->
	<script src="/js/script.js"></script>
</body>

</html>