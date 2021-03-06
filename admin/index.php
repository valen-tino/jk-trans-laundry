<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
}
?>
<?php include "include/header.php"; ?>
<?php include "include/navbar.php"; ?>

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h5 class="page-title">Halaman Utama</h5>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Halaman Utama</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p>Untuk Memulai, Silahkan Pilih Opsi di Sidebar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Total Data</h5><br>
                        <?php
                        include 'koneksi.php';
                        $data_barang = mysqli_query($con, "SELECT * FROM pakaian");

                        // menghitung data barang
                        $totaldata = mysqli_num_rows($data_barang);
                        ?>
                        <h3 class="font-light"><?php echo $totaldata; ?></h3>
                        <div class="mt-3 text-center">
                            <div id="earnings"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Total User</h5><br>
                        <?php
                        include 'koneksi.php';
                        $data_barang = mysqli_query($con, "SELECT * FROM user");
                        // menghitung data barang
                        $totaluser = mysqli_num_rows($data_barang);
                        ?>
                        <h3 class="font-light"><?php echo $totaluser; ?></h3>
                        <div class="mt-3 text-center">
                            <div id="earnings"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Jam Sekarang</h5><br>
                        <h3 class="font-light" id="time"></h3>
                        <div class="mt-3 text-center">
                            <div id="earnings"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <?php include "include/footer.php"; ?>