<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/icon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url() . 'theme/images/logo-dark.png' ?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                        <a class="dropdown-item" href="<?php echo site_url('kata_sambutan'); ?>">Kata Sambutan</a>
                                        <a class="dropdown-item" href="<?php echo site_url('about'); ?>">Tentang Sekolah</a>
                                        <a class="dropdown-item" href="<?php echo site_url('visi_misi'); ?>">Visi dan Misi</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog'); ?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Galeri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--//END HEADER -->

    <!--============================= WELCOME TITLE =============================-->
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <img src="<?php echo base_url() . 'theme/images/sekolah.png' ?>" class="img-fluid" alt="#">
            </div>
            <hr />
            <div class="col-md">
                <h2 style="text-align: center; margin: 0 auto; margin-bottom:20px;">Sejarah Berdirinya SMP YPMII Jakarta</h2>
                <br />
                <p style="text-align: justify;">
                    SMP YPMII Jakarta adalah Sekolah Menengah Pertama (SMP) Swasta yang berlokasi di Propinsi DKI Jakarta Kabupaten Jakarta
                    Timur dengan beralamat di Jl. Masjid II /17 A Kelurahan Rawa Bunga , Kecamatan Jatinegara Jakarta Timur.
                    Dengan kekokohan bangunan yang sampai saat ini berdiri , memberikan kenyamanan dalam proses belajar mengajar (KBM).
                    SMP YPMII berada di Lingkungan tengah tengah Masyarakat warga di wilayah Kelurahan Rawa Bunga.
                </p>
                <p style="text-align: justify;">
                    Sekolah SMP YPMII Jakarta ini dibangun sejak Tahun 1964. SMP YPMII Jakarta ini adalah salah satu sekolah yang tertua di wilayah Kelurahan Rawa Bunga.
                    keberadaan Sekolah SMP YPMII Jakarta di tengah-tengah masyarakat DKI Jakarta dan Sekitarnya diterima sebagai sekolah yang baik.
                    Semua ini merupakan bentuk kepercayaan sebagai sekolah yang diterima eksistensinya di tengah-tengah masyarakat.
                </p>
                <p style="text-align: justify;">
                    Sekolah SMP YPMII Jakarta terus melanjutkan perubahan pada tahun 2023 untuk kegiatan belajarnya.
                    Berkat bantuan dari masyarakat Sekolah dan sekitarnya, melalui Persatuan orang tua Murid (Komite Sekolah) dan Guru kegiatan sekolah semakin maju dan berkembang.
                    Sekolah mampu membangun sarana prasarana lain sesuai kebutuhan untuk kurikulum saat ini.
                </p>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->

    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="foot-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo base_url() . 'theme/images/logo-white.png' ?>" class="img-fluid" alt="footer_logo" style="max-width: 250px; height: auto;">
                        </a>
                        <p><?php echo date('Y'); ?> © copyright by <a>SMP YPMII</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p style="text-align: justify;">
                            <span>Alamat: </span> Jl. Masjid II No.17, RT.4/RW.4, Rw. Bunga, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13350
                            <br>
                            <span>Email: </span> smpypmii@gmail.com
                            <br>
                            <span>Phone: </span> 0896-9544-7715 / (021)8564018
                        </p>
                        <!-- <ul class="footer-social-icons">
                            <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <button id="btnBackToTop" onclick="scrollToTop()">
        <i class="fa fa-chevron-up"></i>
    </button>

    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>