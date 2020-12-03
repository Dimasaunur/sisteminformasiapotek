

<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Sewa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../css/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../css/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../css/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../css/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../css/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../css/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php?user=<?php echo $user; ?>" role="button">
                        <i class="fas fa-sign-out-alt">Keluar</i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="www.instagram.com/milleanoadsnt" class="brand-link">
                <img src="../dist/img/jepara.jpg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Sewa Lapangan</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="dashboard.php?user=<?php echo $user; ?>" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    DashBoard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sewa.php?user=<?php echo $user; ?>" class=" nav-link">
                                <i class="nav-icon fas fa-info"></i>
                                <p>
                                    Data Sewa Pelanggan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="logout.php?user=<?php echo $user; ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i></i>
                                <p>
                                    keluar
                                </p>
                            </a>
                        </li>

                        <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Sewa lapangan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="sewa.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Sewa Lapangan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="input.php" class="btn btn-primary">Tambah Data Baru</a>

                                    <form action="sewa.php" method="get" class="float-right d-none d-sm-inline-block">
                                        <input type="text" name="cari">
                                        <input type="submit" value="Cari">
                                    </form>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Nomer Handphone</th>
                                                <th>Kode Pembayaran</th>
                                                <th>Lapangan</th>
                                                <th>Jenis Lapangan</th> 
                                                <th>Jam</th>                                               
                                                <th>Tanggal</th>
                                                <th>Kode Booking</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('../db_login/db_login.php');

                                            if (isset($_GET['cari'])) {
                                                $cari = $_GET['cari'];
                                                $data = mysqli_query($mysqli, "SELECT A.id_pelanggan, A.nama, A.telp, B.id_pembayaran, B.lapangan, B.jns_lapangan, B.jam, B.tanggal, C.id_booking, C.bukti FROM pelanggan A INNER JOIN transaksi B ON A.id_pelanggan = B.id_pelanggan INNER JOIN boking C ON C.id_pembayaran = C.id_booking where pelanggan like '%" . $cari . "%'");
                                            
                                            } else {

                                                $data = mysqli_query($mysqli, "SELECT A.id_pelanggan, A.nama, A.telp, B.id_pembayaran, B.lapangan, B.jns_lapangan, B.jam, B.tanggal, C.id_booking, C.bukti FROM pelanggan A INNER JOIN transaksi B ON A.id_pelanggan = B.id_pelanggan INNER JOIN boking C ON C.id_pembayaran = C.id_booking");
                                            }
                                            while ($user_data = mysqli_fetch_array($data)) {

                                                echo "<tr>";
                                                echo "<td>" . $user_data['id_pelanggan'] . "</td>";
                                                echo "<td>" . $user_data['nama'] . "</td>";
                                                echo "<td>" . $user_data['telp'] . "</td>";
                                                echo "<td>" . $user_data['id_pembayaran'] . "</td>";
                                                echo "<td>" . $user_data['lapangan'] . "</td>";
                                                echo "<td>" . $user_data['jns_lapangan'] . "</td>";
                                                echo "<td>" . $user_data['jam'] . "</td>";
                                                echo "<td>" . $user_data['tanggal'] . "</td>";
                                                echo "<td>" . $user_data['id_booking'] . "</td>";
                                                echo "<td>" . $user_data['bukti'] . "</td>";
                                            ?>
                                                <td align='center'><a href="edit_sewa.php?id_pelanggan=<?php echo $user_data['id_pelanggan']; ?>">Edit</a></td>
                                                <td align='center'><a href="delete_sewa.php?id_pelanggan=<?php echo $user_data['id_pelanggan']; ?>">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>


            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    </div>

    <!-- jQuery -->
    <script src="../css/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../css/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../css/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../css/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../css/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../css/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../css/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../css/plugins/moment/moment.min.js"></script>
    <script src="../css/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../css/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../css/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../css/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../css/dist/js/demo.js"></script>

    <script src="../css/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../css/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../css/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../css/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../css/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../css/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../css/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


</body>

</html>