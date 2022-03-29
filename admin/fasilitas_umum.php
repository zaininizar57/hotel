<div class="container" style="margin-top: 90px;">
    <h1 class="text-center my-4">Fasilitas Umum</h1>
    <a href="?menu=tambah_fasilitas_umum" class="btn btn-primary btn-md">Tambah Fasilitas Umum</a>
    <?php
 $sql = "SELECT * FROM fasilitas_hotel";
 $query = mysqli_query($kon, $sql);
 while ( $row = mysqli_fetch_assoc($query)) {
 ?>
    <hr>
    <div class="row kamar mb-3">
        <div class="col-md-4">
            <img src="img/<?= $row['foto_fasilitas_hotel'] ?>" class="img-fluid rounded img-thumbnail" />
        </div>
        <div class="col-md">
            <h2><a href="#"><?= $row['nama_fasilitas_hotel'] ?></a></h2>
            <p><?= $row['deskripsi_fasilitas_hotel'] ?></p>
        </div>
    </div>
    <?php } ?>
    <hr>
</div>