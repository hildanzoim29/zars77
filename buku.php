<h1 class="mt-4">BUKU</h1>
<style>
    h1{
    color: white;
    }
</style>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=crud/buku/buku_tambah" class="btn btn-primary">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Nama Kategori</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query =mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['kategori'];?></td>
                        <td><?php echo $data['judul'];?></td>
                        <td><?php echo $data['penulis'];?></td>
                        <td><?php echo $data['penerbit'];?></td>
                        <td><?php echo $data['tahun_terbit'];?></td>
                        <td><?php echo $data['deskripsi'];?></td>
                        <td><?php echo $data['stok'];?></td>
                        <td>
                            <a href="?page=crud/buku/buku_ubah&&id=<?php echo $data['id_buku']; ?>" class="btn btn-outline-info">Ubah</a>
                            <a onclick="return confirm('Apakah anda yakin menghapus data ini')"; href="?page=crud/buku/buku_hapus&&id=<?php echo $data['id_buku']; ?>" class="btn btn-outline-danger">Hapus</a>
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
