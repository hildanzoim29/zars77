<h1 class="mt-4">KATEGORI BUKU</h1>
<style>
    h1{
    color: white;
    }
</style>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=crud/kategori/kategori_tambah" class="btn btn-primary">+ Tambah Data</a>
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <tr>
                        <th>NO</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM kategori");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['kategori']; ?></td>
                            <td>
                                <a href="?page=crud/kategori/kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-outline-info">Ubah</a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini');" href="?page=crud/kategori/kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-outline-danger">Hapus</a>
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