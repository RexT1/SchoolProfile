<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | slider</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />



</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
        $this->load->view('admin/v_header');
        ?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">Menu Utama</li>
                    <li>
                        <a href="<?php echo base_url() . 'admin/dashboard' ?>">
                            <i class="fa fa-home"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/pengguna' ?>">
                            <i class="fa fa-users"></i> <span>Pengguna</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/about' ?>">
                            <i class="fa fa-book"></i> <span>About</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i>
                            <span>Konten</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List Konten</a></li>
                            <li><a href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Post Konten</a></li>
                            <li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i> Kategori Konten</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/agenda' ?>">
                            <i class="fa fa-calendar"></i> <span>Agenda</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/pengumuman' ?>">
                            <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li class="treeview active">
                        <a href="<?php echo base_url() . 'admin/slider' ?>">
                            <i class="fa fa-picture-o"></i> <span>Image Slide</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/galeri' ?>">
                            <i class="fa fa-camera"></i> <span>Photo</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/inbox' ?>">
                            <i class="fa fa-envelope"></i> <span>Inbox</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/komentar' ?>">
                            <i class="fa fa-comments"></i> <span>Komentar</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_comment; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'admin/login/logout' ?>">
                            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Image Slide
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() . 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Image Slide</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Image</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Author</th>
                                                <th style="text-align:right; width:100px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data->result_array() as $i) :
                                                $no++;
                                                $slider_id = $i['slider_id'];
                                                $slider_judul = $i['slider_judul'];
                                                $slider_tanggal = $i['tanggal'];
                                                $slider_author = $i['slider_author'];
                                                $slider_gambar = $i['slider_gambar'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $slider_id; ?></td>
                                                    <td><img src="<?php echo base_url() . 'assets/images/' . $slider_gambar; ?>" style="width:80px;"></td>
                                                    <td><?php echo $slider_judul; ?></td>
                                                    <td><?php echo $slider_tanggal; ?></td>
                                                    <td><?php echo $slider_author; ?></td>
                                                    <td style="text-align:right;">
                                                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $slider_id; ?>"><span class="fa fa-pencil"></span></a>
                                                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $slider_id; ?>"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2023 <a href="#">SMP YPMII Jakarta Timur</a>.</strong> All rights reserved.
        </footer>

        <!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Image</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/slider/simpan_slider' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Image</label>
                                <div class="col-sm-7">
                                    <input type="file" name="filefoto" required />
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal Edit Album-->
        <?php foreach ($data->result_array() as $i) :
            $slider_id = $i['slider_id'];
            $slider_judul = $i['slider_judul'];
            $slider_tanggal = $i['tanggal'];
            $slider_author = $i['slider_author'];
            $slider_gambar = $i['slider_gambar'];
        ?>

            <div class="modal fade" id="ModalEdit<?php echo $slider_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Photo</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url() . 'admin/slider/update_slider' ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $slider_id; ?>" />
                                <input type="hidden" value="<?php echo $slider_gambar; ?>" name="gambar">
                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="xjudul" class="form-control" value="<?php echo $slider_judul; ?>" id="inputUserName" placeholder="Judul" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Image</label>
                                    <div class="col-sm-7">
                                        <input type="file" name="filefoto" />
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!--Modal Edit Album-->

        <?php foreach ($data->result_array() as $i) :
            $slider_id = $i['slider_id'];
            $slider_judul = $i['slider_judul'];
            $slider_tanggal = $i['tanggal'];
            $slider_author = $i['slider_author'];
            $slider_gambar = $i['slider_gambar'];
        ?>
            <!--Modal Hapus Pengguna-->
            <div class="modal fade" id="ModalHapus<?php echo $slider_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Hapus Photo</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url() . 'admin/slider/hapus_slider' ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $slider_id; ?>" />
                                <input type="hidden" value="<?php echo $slider_gambar; ?>" name="gambar">
                                <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $slider_judul; ?></b> ?</p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>




        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
        <!-- page script -->
        <script>
            $(function() {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
        <?php if ($this->session->flashdata('msg') == 'error') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
            </script>

        <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Photo Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
            </script>
        <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Photo berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
            </script>
        <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Photo Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
            </script>
        <?php else : ?>

        <?php endif; ?>
</body>

</html>