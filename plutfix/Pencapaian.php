<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <!--End Custom Css-->
</head>
<style>
  .nav-link, .dropdown-item{
    font-weight: bold;
  }
  .navbar-light .navbar-nav .nav-link {
    color: #6EC1E4;
}



.isi-konten p {
  margin: 0;
  /* text-indent: 2rem; */
  text-align: justify;
  line-height: 29px;
}
</style>
<body>
    <!--Header Start-->
    <header>
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container mt-2 mb-2">
				<a class="navbar-brand d-flex" href="./index.html">
                    <img src="img/plut.png" alt="" width="54" height="54" class="d-inline-block align-text-top">
                    <h5 class="ml-4 mr-3 nav-item mx-2"><strong>PLUT-KUMKM <br>KAB. Purworejo</strong></h5>
                </a>
                <!-- <a class="navbar-brand" href="#"></a>
                <img src="img/logo-web.png" alt="" width="192" height="64" class="d-inline-block"> -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="Tentangkami.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">Tentang Kami</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Sejarah.php">Sejarah Kami</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Visimisi.php">Visi & Misi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Pencapaian.php">Pencapaian</a></li>
                    </ul>
                        <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="Layanan.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="Kelembagaan.php">Bidang Kelembagaan</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="SDM.php">Bidang SDM </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="Pembiyaan.php">Bidang Pembiyaan</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="Pemasaran.php">Bidang Pemasaran</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="Produksi.php">Bidang Produksi</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="Ruanginfo.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Ruang Info
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="Artikel.php">Artikel, Berita & Pelatihan</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="Kalenderacara.php">Kalender Acara</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-2" aria-current="page" href="user.php">User</a>
                  </li>
                </ul>
            </div>
          </nav>
        <!--Navbar End-->
    </header>
    <!--Header End-->
	<style>
        #btn-back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
          }
    </style>
    <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
        <i class="">
            <div class="whatsapp-button">
                <a href="https://api.whatsapp.com/send?phone=6289513257271" onclick="return confirm('Anda akan berpindah ke WhatsApp?')" target="_blank" rel="noopener noreferrer">
                    <img src="img/wa.png" alt="WhatsApp" width="80" height="80">
                </a>
            </div>
        </i>
    </button>

    <script>
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
        scrollFunction();
        };

        function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
    <main id="main">
<!-- ======= About Section ======= -->
    <section id="about" class="container mt-5 mr-4 ml-4">
		<div class="container-fluid">
			<div class="container text-center">
				<h2 class="h1-responsive font-weight-bold text-center my-4">Pencapaian PLUT KUMKM Purworejo</h2>
				<figure class="figure">
					<img src="img/Peresmian_PLUT.jpg" height="400" class="d-inline-block align-top" alt="">
					<figcaption class="figure-caption">Wakil Bupati Purworejo Yuli Hastuti, SH dengan didampingi Kepala DKUKMP Gathot Suprapto, SH <br>menghadiri acara peresmian PLUT oleh Wakil Presiden RI</figcaption>
				</figure>
				
				<div class="container-fluid mb-5 mr-5 ml-5">
					<div class="container mb-4">
						<div class="row">
						<!-- Image -->
						<div class="col-lg-6 isi-konten">
							<p class="">Warta PLUT Purworejo. PLUT KUMKM merupakan program yang diselenggarakan oleh Kementerian koperasi dan UMKM dalam rangka memberikan jasa layanan konprehensif dan terpadu bagi pengembangan usaha KUMKM. PLUT KUMKM merupakan lembaga yang menyediakan jasa-jasa non financial untuk meningkatkan daya saing, produktivitas, nilai tambah dan kualitas kinerja KUMKM. Pusat Layanan Usaha Terpadu Koperasi Usaha Mikro kecil dan Menengah (PLUT KUMKM).</p>
							<p>Kabupaten Purworejo adalah satu dari sekian banyak PLUT KUMKM yang ada di indonesia dan terus memberikan yang terbaik dalam upaya untuk mewujudkan koperasi sehat dan UMKM naik kelas. PLUT KUMKM Kabupaten Purworejo memiliki luas lahan 3.960 m dengan luas bangunan sebesar 568 m. dengan dana yang bersumber dari APBN 2013. </p>
						</div>
						<!-- Text -->
						<div class="col-lg-6 isi-konten">
							
							<p class="">Berkedudukan di Jalan Soekarno-Hatta, Unit Rw.IV No. 92, Boro Kulon, Kec. Banyuurip, Kabupaten Purworejo, Jawa Tengah, 54171.</p>
							<div class="text-sm-center">
							<figure class="figure py-2 px-3">
								<img src="img/produksi.png" height="300" class="align-top" alt="">
								<figcaption class="figure-caption text-sm-center">Caption gambar</figcaption>
							</figure>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="col">
						<div class="text-center my-4 mb-5">
							<a href="#download" class="btn btn-success">Download PLUT Profile</a>
						</div>
					</div>

					<div class="col-lg-12" >
						<div class="text-center m-2">
							<img src="img/plut.png" width="50" class="rounded" alt="...">
							<img src="img/plut.png" width="50" class="rounded" alt="...">
						</div>
						<p class="my-4 text-black-50"><small>Situs Dibuat Dengan Kemitraan</small></p>	
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light py-3 text-black mt-5">
         <!-- Copyright -->
        <div class="text-center py-2">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Lutfi Dhani Permadi</a>
        </div>
            <!-- Copyright -->
    </footer>
        <!-- Footer -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>