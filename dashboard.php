<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
    <script type="text/javascript">
        alert("Silahkan login terlebih dahulu!");
        window.location.assign("index.php");
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Peduli Diri Hafizh Hilman Asyhari</title>
    <link rel="shortcut icon" href="assets/dist/img/pedulidiri_hafizhhilmanasyharixiirpl2.jpeg">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard.php" class="brand-link">
                <img src="assets/dist/img/pedulidiri_hafizhhilmanasyharixiirpl2.jpeg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8"> 
                <span class="brand-text font-weight-light">Peduli Diri Hafizh Hilman Asyhari</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/dist/img/pasfotohafizhhilman.jpeg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="dashboard.php" class="d-block"><?php echo $_SESSION['nama_lengkap']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=tulis_catatan" class="nav-link">
                                <i class="nav-icon fas fa-pencil-alt"></i>
                                <p>Tulis catatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=riwayat_perjalanan" class="nav-link">
                                <i class="nav-icon fas fa-clone"></i>
                                <p>Riwayat perjalanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Catatan Perjalanan</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- isi content dinamis -->
                <?php
                if (!empty(@$_GET['page'])) {
                    switch (@$_GET['page']) {
                        case 'tulis_catatan':
                            include 'tulis_catatan.php';
                            break;
                        case 'riwayat_perjalanan':
                            include 'riwayat_perjalanan.php';
                            break;
                        default:
                            echo "<h3>Halaman tidak ditemukan!</h3>";
                            break;
                    }
                }
                ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">


        <div class='News-footer'>
<div class='news'>
<link rel="stylesheet" type="text/css" href="style/footer.css"></script>
<span id='news-head'><b>Berita</b></span>
</div>
<p class='N-text'>
<marquee direction='left'>
 <a class='t-link' href='#'>• Coronavirus pandemic is going to get worse and worse and worse: WHO chieft</a>
 <span>• ‘Everyone is lying’: Trump undercuts public health officials in fresh attacks</span>
 <span>• Tesla’s Elon Musk Nears $2.4 Billion Haul as Stock Keeps Soaring</span>
 <span>• SpaceX test-fires rocket for South Korean military satellite launch this week</span>
  </marquee>
</p>
</div>      

        


            <div class="float-right d-none d-sm-block">
            <span><a href="#">Project</a></span>
              <span><a href="#">Contact</a></span>
              <span><a href="#">Privacy & terms</a></span>
                <b>Teknik Komputer dan Informatika 2023</b>&nbsp; Peduli Diri Hafizh
            </div>
            <strong>Copyright &copy; <?php echo date("Y") ?> <a href="https://www.instagram.com/hafizhhasyhari/">Hafizh Hilman Asyhari</a>.<a href="https://www.instagram.com/rpl2gangs?igshid=YmMyMTA2M2Y=/"></strong> XII Rekayasa Perangkat Lunak 2.
        
  

        </footer>
        
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>