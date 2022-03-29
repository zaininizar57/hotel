<?php
 $id = $_GET['ubah'];
 $sql = "SELECT * FROM kamar WHERE id_kamar ='$id'";
 $query = mysqli_query($kon, $sql);
 $row = mysqli_fetch_assoc($query);
 ?>
<!-- AWAL CHEKIN DAN CHEKOUT -->
<h2 class="text-center" style="margin-top: 90px;">Ubah Kamar</h2>
<div class="container col-md-7 d-flex justify-content-center mt-3 mb-5 ">
    <form action="?menu=proses_edit" method="POST" enctype="multipart/form-data"
        class="dflex justify-content-center row g-3">
        <div class="form-floating mb-1 col-md-8">
            <?php echo $pesan;?>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?=
$row['id_kamar'] ?>">
            <input type="text" class="form-control" id="floatingInput" name="nama_kamar" value="<?=
$row['nama_kamar'] ?>">
            <label for="floatingInput"></label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <input type="text" class="form-control" id="floatingInput" name="harga" value="<?=
$row['harga_kamar'] ?>">
            <label for="floatingInput"></label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <input type="text" class="form-control" id="floatingInput" name="jumlah" value="<?=
$row['jumlah_kamar'] ?>">
            <label for="floatingInput"></label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <textarea class="form-control" id="floatingInput" name="deskripsi" style="height:
120px;"><?= $row['deskripsi_kamar'] ?></textarea>
            <label for="floatingInput"></label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <img src="img/<?= $row['foto_kamar'] ?>" class="img-fluid rounded img-thumbnail" style="width: 50%">
            <input type="file" class="form-control" id="floatingInput" name="gambar">
        </div>
        <div class="form-floating mb-2 col-md-8">
            <button type="submit" name="edit" class="btn btn-primary text-center p-2" style="width:
150px; float: right;">Kirim</button>
        </div>
    </form>
</div>
<!-- AKHIR CHEKIN DAN CHEKOUT -->