<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Beranda | POMI </title>
    <meta content="gathering" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/pomi.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link href="assets/css/button-style.css" rel="stylesheet"> -->

</head>

<body>
<?php 
	session_start();
	if($_SESSION['login']!=true){
		header("location:./login.php");
	}
?>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/pomi.png" alt="">
                <span><img src="assets/img/logo.png" alt=""></span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#rundown">Agenda</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/pomi.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up"> Selamat Datang, <?php echo $_SESSION['id']; ?></h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Di Family Gathering POMI</h2> 
                            <div class="card barcode">
                                <!-- <img src="assets/img/qr-code.jpg" class="card-img-top" alt="..."> -->
                                <!-- QR CODE -->
                                <?php
                                    // Include the qrlib file
                                    include 'phpqrcode/qrlib.php';
                                    $text = "http://localhost/family-gathering-pomi/";
                                    
                                    // $path variable store the location where to 
                                    // store image and $file creates directory name
                                    // of the QR code file by using 'uniqid'
                                    // uniqid creates unique id based on microtime
                                    $path = 'images/';
                                    $id = $_SESSION['id'];
                                    // $file = $path.uniqid().".png";
                                    $file = $path.$id.".png";
                                    
                                    // $ecc stores error correction capability('L')
                                    $ecc = 'L';
                                    $pixel_Size =5;
                                    $frame_Size = 1;
                                    
                                    // Generates QR Code and Stores it in directory given
                                    QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size);
                                    
                                    // Displaying the stored QR code from directory
                                    echo "<center><img src='".$file."'></center>";
                                ?>
                                <!-- END QR CODE -->

                                <!-- <div class="card-body">
                                    <p class="card-text text-center">SCAN ME</p>
                                </div> -->
                            </div>  
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Mulai</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>Family Gathering - Employee Outbond</h2>
                            <hr>
                            <h3>Lokasi 1 &emsp;: Ketapang Indah Hotel</h3>
                            <h3>Lokasi 2 &emsp;: Illira Hotel</h3>
                            <hr>
                            <h3>Waktu </h3>
                            <h3>Batch 1 | Banyuwangi, 13-14 Agustus 2022</h3>
                            <hr>
                            <p>Mengingat rangkaian acara sudah dimulai sejak keberangkatan, menghimbau untuk seluruh peserta turut serta menaiki transportasi bus yang telah disediakan panitia demi kelancaran bersama.</p>
                            <p>Panitia tidak menyediakan kompensasi bagi peserta yang menggunakan kendaraan pribadi.</p>
                            <p>Seluruh peserta wajib mengikuti acara Employee Outbond sebagai salah satu syarat pengundian Grand Prize & Door Prize.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/poster.jpg" class="img-fluid" alt="">
                    </div>


                    

                </div>
            </div>

        </section>
        <!-- End About Section -->

        <!-- ======= Schedule Section ======= -->
        <section id="rundown" class="rundown">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Hari Ke-1</p>
                    <h2>13 Agustus 2022</h2>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-6 rundown-img" data-aos="zoom-out" data-aos-delay="200">
                            <img src="assets/img/destinasi/hotel-ketapang.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="rundownlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-1">
                                        Depart From Paiton to Hotel Banyuwangi (07.00-12.00 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-1" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Bagi peserta yang berangkat secara rombongan,wajib berkumpul di POH jam 07.00 WIB untuk berangkat bersama sama menggunakan moda transportasi Bus. <br><br>
                                        Sedangkan bagi peserta yang menggunakan mobil pribadi wajib sudah tiba dihotel maksimal pukul 13.00 WIB 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-2">
                                        Lunch & Check In (12.00-14.00 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-2" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Sebelum menuju hotel , peserta yang naik bus atau mobil pribadi akan diarahkan untuk makan siang terlebih dahulu ke Watu Dodol Restaurant. <br><br> 
                                        Setiap karyawan atau perwakilan dari keluarga karyawan yang sudah melakukan registrasi di resto , berkesempatan mengambil undian di fishbowl dengan hadiah berupa Voucher Belanja. <br><br>
                                        Setiba di hotel, peserta akan diarahkan untuk melakukan registrasi dengan scan barcode dan mendapatkan hampers.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-3">
                                        Employee Outbound + Fun Games for Kids (14.00-16.30 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-3" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Sesi ini semuanya dilakukan di Hotel Ketapang, bagi peserta yang stay di Hotel Illira, setelah check-in diarahkan menuju Hotel Ketapang. <br><br>
                                        Sebelum mengikuti outbound maupun games, dipastikan peserta sudah melakukan registrasi terlebih dahulu dan memiliki stampcard games. <br><br>
                                        Peserta diminta untuk mengikuti games yang ada di Hotel Ketapang dan mengumpulkan point sebanyak mungkin. <br><br>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-4">
                                        Free Time & Rest Time (16.30-18.30 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-4" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Peserta diberikan waktu luang untuk beristirahat sampai pukul 18.30 WIB.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-5">
                                        Gala Dinner (18.30-22.00 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-5" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Pada malam harinya, peserta dan keluarga akan menikmati moment gala dinner di area outdoor Hotel Ketapang.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-11">
                                        Rest Time (22.00 WIB - Selesai)
                                    </button>
                                </h2>
                                <div id="rundown2-content-11" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Peserta diberikan waktu untuk beristirahat, untuk mempersiapkan hari esok.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Rundown Section -->

        <!-- ======= Rundown Section ======= -->
        <section id="rundown" class="rundown">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Hari Ke-2</p>
                    <h2>14 Agustus 2022</h2>
                </header>

                <div class="row">

                    <div class="col-lg-6">

                        <!-- Rundown List 2-->
                        <div class="accordion accordion-flush" id="rundownlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-6">
                                        Breakfast (06.00 - 09.00 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-6" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Karyawan dan keluarga bisa menikmati sarapan pagi sambil istirahat sejenak untuk persiapan Perlombaan Agustusan dan Treasure HSunt 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-7">
                                        Family Games (Lomba Agustusan) + Treasure Hunt (09.00 - 11.30 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-7" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Tepat Pukul 09.00 WIB, peserta diarahkan kembali menuju area outdoor Hotel Ketapang untuk mengikuti game khas 17-an. Game bisa dimainkan oleh anak anak maupun bersama keluarga.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-8">
                                        Prepare Back To Paiton (11.30 - 12.00 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-8" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Maksimal jam 11.30 WIB seluruh kegiatan akan di closed. Agar peserta bisa prepare untuk checkout. 
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rundown2-content-9">
                                        Check Out Hotel & Back To Paiton (12.00 - 17.00 WIB)
                                    </button>
                                </h2>
                                <div id="rundown2-content-9" class="accordion-collapse collapse" data-bs-parent="#rundownlist2">
                                    <div class="accordion-body">
                                        Selesai checkout peserta akan mendapatkan lunch box dan paket oleh oleh khas Banyuwangi. Setelah itu perjalanan kembali ke Paiton.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-6 rundown-img" data-aos="zoom-out" data-aos-delay="200">
                            <img src="assets/img/destinasi/agustusan.jpg" class="img-fluid" alt="">
                        </div>
                    </div>


                </div>

            </div>

        </section>
        <!-- End Rundown Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Destinasi</p>
                    <!-- <h2>Portfolio</h2> -->
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Pegunungan</li>
                            <li data-filter=".filter-card">Pantai</li>
                            <li data-filter=".filter-web">Hutan</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/alas-purwo.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Alas Purwo</h4>
                                <p>Hutan</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/alas-purwo.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Alas Purwo"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/gWV6X1JVGwY" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Alas Purwo"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/baluran.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Baluran</h4>
                                <p>Hutan</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/baluran.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Alas Purwo"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/rN2y8Vy9xdE" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="Alas Purwo"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/de-djawatan-forest.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>De Djawatan Forest</h4>
                                <p>Hutan</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/de-djawatan-forest.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="De Djawatan Forest"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/-SF5rwv3mXg" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="De Djawatan Forest"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/gunung-ranti.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Gunung Ranti</h4>
                                <p>Pegunungan</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/gunung-ranti.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Gunung Ranti"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/udxb8oTUd1U" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="Gunung Ranti"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/kawah-ijen.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Kawah Ijen</h4>
                                <p>Pegunungan</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/kawah-ijen.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Kawah Ijen"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/ChHyAKyrMj4" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="Kawah Ijen"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/muncar.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pantai Muncar</h4>
                                <p>Pantai</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/muncar.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Pantai Muncar"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/FryubY0KZmo" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="Pantai Muncar"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/red-island.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Red Island</h4>
                                <p>Pantai</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/red-island.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Red Island"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/82sWWKkbDD8" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="Red Island"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/taman-gandrung.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Taman Gandrung</h4>
                                <p>Taman</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/taman-gandrung.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Taman Gandrung"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/5hnFdpeHFMk" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="Taman Gandrung"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/destinasi/villa-so-long.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Villa So Long</h4>
                                <p>Pantai</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/destinasi/villa-so-long.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Villa So Long"><i class="bi bi-plus"></i></a>
                                    <a href="https://youtu.be/8G_eG5YM0TQ" data-gallery="portfolioGallery" class="portfokio-lightbox"  title="Villa So Long"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <!-- <h2>Contact</h2> -->
                    <p>Kontak Kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Sentral Senayan II, 5th floor <br> Jl. Asia Afrika No. 8 <br> Jakarta 10270, Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telepon Kami</h3>
                                    <p>+62 (21) 5797 4524</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Kami</h3>
                                    <p>info@paitonenergy.com</p>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

                <!-- ======= Count Down Section ======= -->
                <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-3">
                        <div class="count-box">
                            <i class="bi bi-calendar-day"></i>
                            <div>
                                <span class="purecounter" id="days"></span>
                                <p>Hari</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="count-box">
                            <i class="bi bi-clock" style="color: #ee6c20;"></i>
                            <div>
                                <span class="purecounter" id="hours"></span>
                                <p>Jam</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="count-box">
                            <i class="bi bi-hourglass-split" style="color: #15be56;"></i>
                            <div>
                                <span class="purecounter" id="minutes"></span>
                                <p>Menit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="count-box">
                            <i class="bi bi-stopwatch" style="color: #bb0852;"></i>
                            <div>
                                <span class="purecounter" id="seconds"></span>
                                <p>Detik</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Count Down Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.php" class="logo d-flex align-items-center">
                            <img src="assets/img/pomi.png" alt="">
                            <span>Family Gathering POMI</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="https://www.instagram.com/pjb_ubjompaiton/" class="instagram"><i class="bi bi-instagram" target="blank"> </i>@Gathering</a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 footer-links">
                        <h4>Powered By</h4>
                        <div class="row  gy-4">
                            <div class="col-lg-3 col-md-2 col-12 col-12">
                                <img src="assets/img/logo-vendor/logo-vendor.png" alt="" class="f-logo">
                            </div>
                            <!-- <div class="col-lg-3 col-md-3 col-12 col-12">
                                <img src="assets/img/logo-vendor/pitoe-event.png" alt="" class="f-logo">
                            </div>
                            <div class="col-lg-3 col-md-2 col-12 col-12">
                                <img src="assets/img/logo-vendor/wrnet.png" alt="" class="f-logo">
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>WR.NET</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://instagram.com/wrnet.id">WR.NET</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Background Audio ======= -->
    <div class="audio-bg" style="display: scroll; position: fixed; right: 10px; bottom: 60px; width:50px">
        <audio hidden controls autoplay loop id="myAudio">
            <source src="assets/audio/bg-cinematic.mp3" type="audio/mpeg">
        </audio>
        <a href="#" onClick="playMyAudio()" class="btn btn-lg btn-primary"><i id="icon1" onclick="change('icon1')" class="bi bi-volume-up" style="color: white;" aria-hidden="true"></i></a>
    </div>

    <!-- End Background Audio -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/count-down.js"></script>     
    <script src="assets/js/qrcode.js"></script>
    <script src="assets/js/bg-audio.js"></script>

</body>

</html>