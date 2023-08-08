<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMP YPMII</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/icon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url() . 'theme/images/logo-home.jpg' ?>"></a>
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
    <!--============================= BANNER SLIDES =============================-->
    <section>
        <?php
        $slider_status = "On";
        if ($slider_status === "On") :
        ?>
            <div class="slider_img layout_two">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php foreach ($images->result() as $key => $row) : ?>
                            <li data-target="#carousel" data-slide-to="<?php echo $key; ?>" <?php if ($key === 0) echo 'class="active"'; ?>></li>
                        <?php endforeach; ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($images->result() as $key => $row) : ?>
                            <div class="carousel-item <?php if ($key === 0) echo 'active'; ?>">
                                <img class="d-block" src="<?php echo base_url() . 'assets/images/' . $row->slider_gambar; ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <!--//END BANNER SLIDES -->

    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Selamat Datang di Website SMP YPMII</h2>
                    <p style="text-align: justify;">
                        Kami dengan gembira menyambut Anda di halaman resmi SMP YPMII.
                        Website ini merupakan sumber informasi lengkap tentang kegiatan sekolah, ekstrakurikuler, dan berita terbaru dari sekolah kami.
                        Kami berharap website ini dapat menjadi saluran komunikasi yang efektif antara sekolah, siswa, orang tua, dan masyarakat luas.
                    </p>
                    <p style="text-align: justify;">
                        Jangan ragu untuk menghubungi kami melalui formulir kontak yang tersedia jika Anda memiliki pertanyaan atau membutuhkan informasi tambahan.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url() . 'theme/images/logo.png' ?>" class="img-fluid about-img" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->

    <!--============================= OUR COURSES =============================-->
    <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Artikel Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="courses_box mb-4">
                            <div class="course-img-wrap">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="courses-img">
                            </div>
                            <!-- // end .course-img-wrap -->
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="course-box-content">
                                <h3 style="text-align:center;"><?php echo $row->tulisan_judul; ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div> <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default btn-courses">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->

    <!--============================= EVENTS =============================-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-img2">
                        <?php foreach ($pengumuman->result() as $row) : ?>
                            <div class="row">
                                <div class="col-sm-3"> <img src="<?php echo base_url() . 'theme/images/announcement-icon.png' ?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                                <div class="col-sm-9">
                                    <h3><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                                    <span><?php echo $row->tanggal; ?></span>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                                    <hr class="event_line">
                                </div><!-- // end .col-sm-7 -->
                            </div><!-- // end .row -->
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($agenda->result() as $row) : ?>
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p><?php echo date("d", strtotime($row->agenda_mulai)); ?></p>
                                        <span><?php echo date("M. y", strtotime($row->agenda_mulai)); ?></span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                                    <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                    <hr class="event_line">
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->

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