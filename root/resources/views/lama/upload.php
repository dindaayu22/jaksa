<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="distribution" content="global" />
		<meta name="robots" content="follow, all" />
		<meta name="language" content="en, sv" />
		<meta name="google-site-verification" content="sDkjkHlZkLCg_93NJIwpC-GhT_OuB5HSe0iHlkN7Hwk" />
		<meta name="description" content="Digital Library Universitas Sebelas Maret Surakarta" />
		<meta name="keywords" content="digilib, digital, library, uns, ebook, jurnal, journal, skripsi, tugas akhir, penelitian" />
		<meta name="author" content="UPT PERPUSTAKAAN UNS" />
		<link rel="Top" href="https://digilib.uns.ac.id/" />
		<link rel="Search" href="http://digilib.uns.ac.id/dokumen/search" />
		<link rel="icon" type="image/png" href="sleman.png">
		<link rel="stylesheet" href="https://digilib.uns.ac.id/dist/css/style.css">
		<link rel="stylesheet" href="https://digilib.uns.ac.id/dist/css/bootstrap.css">
		<link href="http://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://digilib.uns.ac.id/dist/css/datepicker3.css">
	<!--link rel="stylesheet" href="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"-->
		<script type="text/javascript" src="https://digilib.uns.ac.id/dist/js/jquery.js"></script>
		<script type="text/javascript" src="https://digilib.uns.ac.id/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://digilib.uns.ac.id/dist/js/bootstrap-datepicker3.js"></script>
		<title>Digital Library Kejaksaan Sleman</title>
	</head>
    <body>
        <section id="header">
            <div id="container" style="width: 100%; margin: 0px; padding: 0px;">
                <div class="col-md-2 col-xs-2" style="background-color: #964B00; height: 130px; padding-left: 62px; padding-top: 15px;">
                    <a><img src="sleman.png" height="101px" width="141px"></a>
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
                                        <li><a href="lib.php">Home</a></li>
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
                        				<li><a href="dftr.php">Register</a></li>
                                        <li><a href="login.php">Login</a></li>
                                <!--    <li><a href="https://digilib.uns.ac.id/dokumen/cari">Search</a></li>-->
                                        <li><a href="kontak.php">Kontak</a></li>
                                        <!--<li><a href="upload.php">Upload</a></li> -->
                                    </ul>
                                </div>
                            </nav>
<!--</div>-->           </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-18" style="background-color: #FFD700; height: 3px;"></div>  
            </div>
        </section>
        <section id="main" style="background-color: #F9F8F5;">
            <div id="container" style="width: 80%; margin: 0px auto;">
                <div class="row" style="padding: 0px 20px; background-color:#FFF;">

                    <!--    ------------------------------ SIDE BAR  ---------------------------------------   -->
                           
                    <!--    ------------------------------ END OF SIDE BAR  ---------------------------------   -->

                    <!--    ------------------------------ MAIN PAGE  ---------------------------------------   -->
                    <div class="col-md-12 col-xs-18">
                        <div class="body-main">
                            <div class="col-md-12 col-xs-18" style="margin: 20px 0px 10px 0px; padding-bottom: 10px;">
    	                        <!--<div class="col-md-1 col-xs-1 tile" style="background-color: #; border: 0px; margin: 0.83%; padding: 38px 10px 5px 5px; text-align: left; font-size: 15px; color: #FFF;">
                                </div> -->
                                <div class="col-md-12 col-xs-18">
                                    <h1>Upload File</h1>
                                    <h4>Judul File : </h4>
                                    <input type="text" name="judul" style="width: 500px" height="100px">
                                    <h4>Kategori File : </h4>
                                    <select style="width: 500px">
                                        <option value="kat">-Pilih Kategori File-</option>
                                        <option value="1">Kategori 1</option>
                                        <option value="2">Kategori 2</option>
                                        <option value="3">Kategori 3</option>
                                        <option value="4">Kategori 4</option>
                                        <option value="5">Kategori 5</option>
                                        <option value="6">Kategori 6</option>
                                        <option value="7">Kategori 7</option>
                                        <option value="8">Kategori 8</option>
                                        <option value="9">Kategori 9</option>
                                        <option value="10">Kategori 10</option>
                                        <option value="11">Kategori 11</option>
                                        <option value="12">Kategori 12</option>
                                    </select>
                                    <h4>Jenis File : </h4>
                                    <select style="width: 500px">
                                        <option value="jenis">-Pilih Jenis File-</option>
                                        <option value="privat">Privat</option>
                                        <option value="public">Public</option>
                                    </select>
                                    <h4>Pilih File : </h4>
                                    <input type="file" name="browse" accept=".pdf">
                                    <br>
                                    <br>
                                    <div class="col-md-6 col-xs-9" style="text-align: center;">
                                        <input type="submit" name="upload" value="Upload">
                                    </div>
                                </div>
                                &nbsp<br>&nbsp<br>&nbsp
                                <div style="clear: both;"></div>
                                <div class="col-md-12 col-xs-18">
                                    <h1>Recent Upload</h1><hr>
                                    <a href="https://digilib.uns.ac.id/dokumen/detail/58036/Penerapan-algoritme-ecdh-dengan-kompresi-huffman-pada-instant-message"><div align="justify">Penerapan algoritme ecdh dengan kompresi huffman pada instant message . . .</div></a>Penulis :  Revandra Y.a - M01 - Fak. MIPA<br><a href="https://digilib.uns.ac.id/dokumen/abstrak/58036/Penerapan-algoritme-ecdh-dengan-kompresi-huffman-pada-instant-message"><strong>[ Abstrak ]</strong></a><br><br><a href="https://digilib.uns.ac.id/dokumen/detail/58035/Hubungan-kondisi-indikator-nilai-tukar-riil-dan-IHSG-dalam-mendeteksi-krisis-keuangan-di-Indonesia-menggunakan-gabungan-model-volatilitas-dan-markov-switching"><div align="justify">Hubungan kondisi indikator nilai tukar riil dan IHSG dalam mendeteksi krisis keuangan di Indonesia menggunakan gabungan model volatilitas dan markov s . . .</div></a>Penulis : Ratri Oktaviani - M01 - Fak. MIPA<br><a href="https://digilib.uns.ac.id/dokumen/abstrak/58035/Hubungan-kondisi-indikator-nilai-tukar-riil-dan-IHSG-dalam-mendeteksi-krisis-keuangan-di-Indonesia-menggunakan-gabungan-model-volatilitas-dan-markov-switching"><strong>[ Abstrak ]</strong></a><br><br><a href="https://digilib.uns.ac.id/dokumen/detail/58033/Uji-LC50-96-limbah-cair-industri-tapioka-dan-pengaruhnya-terhadap-struktur-mikroanatomi-branchia-ikan-nila-oreochromis-niloticus"><div align="justify"> Uji LC50-96 limbah cair industri tapioka dan pengaruhnya terhadap struktur mikroanatomi branchia ikan nila (oreochromis niloticus) . . .</div></a>Penulis : Himmawan Ady Yogan Indarriyanto - M04 - Fak. MIPA<br><a href="https://digilib.uns.ac.id/dokumen/abstrak/58033/Uji-LC50-96-limbah-cair-industri-tapioka-dan-pengaruhnya-terhadap-struktur-mikroanatomi-branchia-ikan-nila-oreochromis-niloticus"><strong>[ Abstrak ]</strong></a><br><br><a href="https://digilib.uns.ac.id/dokumen/detail/58032/Prosiding-Seminar-Nasional-Kajian-Mutakhir-Bahasa-Sastra-dan-Budaya-Daerah-untuk-Membangun-Kebhinekatunggalikaan-Negara-Kesatuan-Republik-Indonesia"><div align="justify">Prosiding Seminar Nasional Kajian Mutakhir Bahasa, Sastra, dan Budaya Daerah untuk Membangun  Kebhinekatunggalikaan Negara Kesatuan Republik Indonesia . . .</div></a>Penulis : Teguh Supriyanto [ed.] - 197604212008121001 - Fak. Ilmu Budaya<br><a href="https://digilib.uns.ac.id/dokumen/abstrak/58032/Prosiding-Seminar-Nasional-Kajian-Mutakhir-Bahasa-Sastra-dan-Budaya-Daerah-untuk-Membangun-Kebhinekatunggalikaan-Negara-Kesatuan-Republik-Indonesia"><strong>[ Abstrak ]</strong></a><br><br><a href="https://digilib.uns.ac.id/dokumen/detail/58031/Proses-poisson-majemuk"><div align="justify">Proses poisson majemuk . . .</div></a>Penulis :  Chris Risen - M01 - Fak. MIPA<br><a href="https://digilib.uns.ac.id/dokumen/abstrak/58031/Proses-poisson-majemuk"><strong>[ Abstrak ]</strong></a><br><br>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--    ------------------------------ END OF MAIN PAGE  ---------------------------------------   -->

        <!--    ----------------------------------- FOOTER  --------------------------------------------   -->

        <section id="footer">
            <div id="container" style="width: 100%; margin: 0px auto;">
                <div class="col-md-12 col-xs-18" style="background-color: #FFD700; height:3px;">

                </div>
                <div class="col-md-12 col-xs-18" style="padding: 20px; color: #FFF;  background-color: #964B00; height: 80px; font-size: 28px; text-align: center;">
                    Kejaksaan Negeri Sleman</font>
                </div>
                <div class="col-md-12 col-xs-18" style="background-color: #FFD700; height: 3px;">

                </div>
                <div class="col-md-12 col-xs-18" style="background-color: #964B00; height: auto; color: #FFF; padding-bottom: 20px;">
                    <div class="row" style="padding: 20px 0px;">
                        <div class="col-md-4 col-xs-4">
                            <div class="head-foot">
                               
                            </div>
                            <div class="body-foot">
                                <ul style="list-style: none; margin: 0px; padding: 5px 10px;"></ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="head-foot">
                                
                            </div>
                            <div class="body-foot">
                                <ul style="list-style: none; margin: 0px; padding: 5px 10px;">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="head-foot">
                                
                            </div>
                            <div class="body-foot">
                                <ul style="list-style: none; margin: 0px; padding: 5px 10px;">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-18">
                            <div class="" style="font-weight: normal; font-size: 14px; text-align: center; border-top: 1px solid #CCC; padding-top: 10px;">
                                &copy; 2017 <a href="http://pustaka.uns.ac.id/index.php" target="_blank"><font color="#FFF">Perpustakaan Kejaksaan Negeri Sleman</font> </a>
                                <br>
                                Jl. Parasamya No.6, Tridadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta
							</div>
                        </div>
                    </div>
                </div>
            </div>        </section>

        <!--    ------------------------------------- END OF FOOTER ---------------------------------------   -->
		
    </body>
</html>