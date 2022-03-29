<!-- AWAL CAROUSEL -->
<section class="mt-3" id="beranda">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                arialabel="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                arialabel="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
 $aktif="active";
 $sql = "SELECT * FROM fasilitas_hotel ORDER BY id_fasilitas_hotel DESC LIMIT 3";
 $hasil = mysqli_query($kon,$sql);
 while($row = mysqli_fetch_assoc($hasil)) {
 ?>
            <div class="carousel-item <?= $aktif ?>">
                <img src="img/<?= $row['foto_fasilitas_hotel'] ?>" style="width:100%; height: 510px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row["nama_fasilitas_hotel"] ?></h5>
                    <p><?= $row["deskripsi_fasilitas_hotel"] ?></p>
                </div>
            </div>
            <?php
 $aktif="";
 }
 ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bstarget="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bstarget="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- AKHIR CAROUSEL -->