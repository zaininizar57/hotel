<div class="container mb-4" style="margin-top: 90px;">
    <div class="row pt-3">
        <?php
 $sql="SELECT * FROM kamar ORDER BY id_kamar ASC LIMIT 8";
 $hasil = mysqli_query($kon,$sql);
 while($row = mysqli_fetch_assoc($hasil)) {
 ?>
        <div class="col-md-4">
            <a class="card card-white text-decoration-none mb-4"
                href="?menu=edit_kamar&ubah=<?php echo $row['id_kamar'];?>">
                <div class="card-header text-center">
                    <?= $row["nama_kamar"] ?>
                </div>
                <div class="card-body p-1">
                    <img src="img/<?= $row["foto_kamar"] ?>" class="img-fluid rounded" />
                </div>
                <div class="card-footer text-center">
                    Rp. <?= $row['harga_kamar'] ?>
                </div>
            </a>
        </div>
        <?php
 }
 ?>
    </div>
</div>