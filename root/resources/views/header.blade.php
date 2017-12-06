<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<link rel="Top" href="{{ URL::to('/') }}" />
		<link rel="Search" href="http://digilib.uns.ac.id/dokumen/search" />
		<link rel="icon" type="image/png" href="{{ URL::to('/assets/img/sleman.png') }}">
		<link rel="stylesheet" href="{{ URL::to('/assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ URL::to('/assets/css/bootstrap.css') }}">
		<link href="{{ URL::to('/assets/css/css.css') }}" rel="stylesheet" type="text/css">
		<!-- <link rel="stylesheet" href="https://digilib.uns.ac.id/dist/css/datepicker3.css"> -->
	<!--link rel="stylesheet" href="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"-->
		<script type="text/javascript" src="{{ URL::to('/assets/js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ URL::to('/assets/js/bootstrap.min.js') }}"></script>
		<!--<script type="text/javascript" src="https://digilib.uns.ac.id/dist/js/bootstrap-datepicker3.js"></script>-->
		<title>Digital Library Kejaksaan Sleman</title>
	</head>
    <body>
        <section id="header">
            <div id="container" style="width: 100%; margin: 0px; padding: 0px;">
                <div class="col-md-2 col-xs-2" style="background-color: #964B00; height: 130px; padding-left: 62px; padding-top: 15px;">
                    <a><img src="{{ URL::to('/assets/img/sleman.png') }}" height="110" width="90"></a>
				</div>
				<div class="col-md-8 col-xs-8" style="background-color: #964B00; height: 130px; padding-left: 20px; padding-top: 20px; color:#FFF; font-size:32px;">
                    Digital Library<br>Kejaksaan Negeri Sleman
				</div>
				<div class="col-md-2 col-xs-2" style="background-color: #964B00; height: 130px; padding-left: 40px; padding-top: 5px;">
				</div>
                <div class="col-md-12 col-xs-18" style="background-color: #FFD700; height: 3px;">
					
                </div>
            </div>
        </section>
        <section id="menu">
            <div id="container" style="width: 100%;">
                <div class="col-md-12 col-xs-18" style="background-color: #964B00; height: auto; color: #FFF;">
                    <div class="row">
                        <div class="col-md-8 col-xs-8">
                            <!--<div class="top-menu">-->
    <nav class="navbar navbar-default navbar-right" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" 
                    data-target="#example-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Dokumen <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
						<li style="text-align: right;"><a href="">Fakultas</a></li>
						<li style="text-align: right;"><a href="">Jenis Dokumen</a></li>
                        <li class="divider"></li>
						<li style="text-align: right;"><a href="">Dokumen Terbaru</a></li>
						<li style="text-align: right;"><a href="">Dokumen Terbanyak di baca</a></li>
						<li style="text-align: right;"><a href="">Dokumen Per Tahun</a></li>
					</ul>
                </li>
                <li><a href="{{ URL::to('/kontak') }}">Kontak</a></li>
                <li><a href="{{ URL::to('/login') }}">Login</a></li>
                <li><a href="{{ URL::to('/register') }}">Register</a></li>
        <!--    <li><a href="https://digilib.uns.ac.id/dokumen/cari">Search</a></li>-->
                
                    </ul>
        </div>
    </nav>
<!--</div>-->                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-18" style="background-color: #FFD700; height: 3px;">
                </div>  
            </div>
        </section>