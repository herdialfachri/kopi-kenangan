<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Owner Kopi DM</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('admin/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('admin/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo base_url('images/logokopi.png'); ?>" type="image/png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-smile-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin DM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard_admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Barang
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-arrow-down"></i>
                    <span>Pemasukan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pemasokan">Daftar Pemasukan</a>
                        <a class="collapse-item" href="/pemasokan/create">Tambah Pemasukan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-arrow-up"></i>
                    <span>Pengeluaran</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pengeluaran_admin">Daftar Pengeluaran</a>
                        <a class="collapse-item" href="#">Tambah Pengeluaran</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Barang Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDaftar" aria-expanded="true" aria-controls="collapseDaftar">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Daftar Barang</span>
                </a>
                <div id="collapseDaftar" class="collapse" aria-labelledby="headingBarang" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/barang">Daftar Barang</a>
                        <a class="collapse-item" href="#">Tambah Barang</a>
                        <a class="collapse-item" href="/barang/total">Total</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Relasi
            </div>

            <!-- Nav Item - Supplier Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupplier" aria-expanded="true" aria-controls="collapseSupplier">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Supplier</span>
                </a>
                <div id="collapseSupplier" class="collapse" aria-labelledby="headingSupplier" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/suppliers">Daftar Supplier</a>
                        <a class="collapse-item" href="/supplier/create">Tambah Supplier</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pelanggan Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePelanggan" aria-expanded="true" aria-controls="collapsePelanggan">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pelanggan</span>
                </a>
                <div id="collapsePelanggan" class="collapse" aria-labelledby="headingPelanggan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pelanggan">Daftar Pelanggan</a>
                        <a class="collapse-item" href="/pelanggan/create">Tambah Pelanggan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600">
                                    Hi, <?= session()->get('nama_pengguna'); ?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?= base_url('admin/img/undraw_profile.svg'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('/auth/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Barang</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Barang</h6>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('barang/store') ?>" method="post">
                                        <div class="form-group">
                                            <label for="kode_barang">Kode Barang</label>
                                            <input type="number" class="form-control" id="kode_barang" name="kode_barang" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_barang">Nama Barang</label>
                                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori_barang">Kategori Barang</label>
                                            <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_satuan">Harga Satuan</label>
                                            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="satuan">Satuan</label>
                                            <input type="text" class="form-control" id="satuan" name="satuan" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('admin/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('admin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('admin/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('admin/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('admin/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?= base_url('admin/js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>