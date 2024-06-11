<h1 class="mt-4">Peminjaman Buku</h1>
<style>
    h1{
    color: white;
    }
</style>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=crud/peminjaman/peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Id Buku Masuk</th>
                        <th>Id Buku</th>
                        <th>Buku</th>
                        <th>Tanggal Pengembalian</th>
                        <td>Aksi</td>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM buku_masuk LEFT JOIN user on user.id_user = buku_masuk.id_user LEFT JOIN buku on buku.id_buku = buku_masuk.id_buku WHERE buku_masuk.id_user=" . $_SESSION['user']['id_user']);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['id_BM']; ?></td>
                            <td><?php echo $data['id_buku']; ?></td>
                            <td><?php echo $data['Jumlah']; ?></td>
                            <td><?php echo $data['Jumlah']; ?></td>
                            <td>
                                <?php
                                if($data['status_peminjaman'] != 'dikembalikan') {
                                ?>
                                <a href="?page=crud/peminjaman/peminjaman_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">Ubah</a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini')" ; href="?page=crud/peminjaman/peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                                    <?php
                                    }
                                    ?>
                            </td>
                            
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>