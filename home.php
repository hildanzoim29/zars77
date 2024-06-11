<h1 class="mt-4">Dashboard</h1>
<style>
    h1{
    color: white;
    }
</style>
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL Kategori
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori")); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Buku</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku")); ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Ulasan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan")); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user")); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">

        <tr>
            <td width="200">Nama</td>
            <td width="1">1</td>
            <td><?php echo $_SESSION['user']['nama']; ?></td>
        </tr>
        <tr>
            <td width="200">Level User</td>
            <td width="1">1</td>
            <td><?php echo $_SESSION['user']['level']; ?></td>
        </tr>
        <tr>
            <td width="200">Tanggal Login</td>
            <td width="1">1</td>
            <td><?php echo date('d-m-y') ?></td>
        </tr>

        </table>
    </div>
</div>