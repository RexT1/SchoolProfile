<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Galeri Foto</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/icon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/magnific-popup.css' ?>">
    <!-- Image Hover CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/normalize.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/set2.css' ?>" />

    <!-- Masonry Gallery -->
    <link href="<?php echo base_url() . 'theme/css/animated-masonry-gallery.css' ?>" rel="stylesheet" type="text/css" />
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
    <section>
    </section>
    <!--//END HEADER -->

    <!--============================= Galeri =============================-->
    <div class="gallery-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="gallery-style">Galeri Foto</h2>
                    <hr style="border: 1px solid black;">
                </div>
            </div>
            <div class="row">
                <?php foreach ($all_galeri->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="admission_insruction">
                            <a href="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="image-link2">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="all img-fluid" alt="#" />
                                <br>
                            </a>
                            <p class="text-center mt-3"><span><?php echo $row->galeri_judul; ?></span></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <nav><?php echo $page; ?></nav>
            </div>
        </div>
    </div>
    <!--//End Gallery -->

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

    <script src="<?php echo base_url() . 'theme/js/jquery-ui-1.10.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/jquery.isotope.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/animated-masonry-gallery.js' ?>"></script>
    <!-- Magnific popup JS -->
    <script src="<?php echo base_url() . 'theme/js/jquery.magnific-popup.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>

</body>

</html>