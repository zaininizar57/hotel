<div class="container content">
    <h1 class="text-center my-4">Kamar</h1>
    <?php
 $sql = "SELECT * FROM kamar";
 $query = mysqli_query($kon, $sql);
 while ( $row = mysqli_fetch_assoc($query)) {
 ?>
    <hr>
    <div class="row kamar mb-3">
        <div class="col-md-4">
            <img src="img/<?= $row['foto_kamar'] ?>" class="img-fluid rounded img-thumbnail" />
        </div>
        <div class="col-md">
            <h2><a href="#"><?= $row['nama_kamar'] ?></a></h2>
            <p><?= $row['deskripsi_kamar'] ?></p>
            <p>
                Rp. <?= $row['harga_kamar'] ?> / malam
            </p>
        </div>
    </div>
    <?php } ?>
    <hr>
</div>