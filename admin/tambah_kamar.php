<?php
if(isset($_POST['tambah'])) {
 $nama_kamar = $_POST['nama_kamar'];
 $harga = $_POST['harga'];
 $jumlah = $_POST['jumlah'];
 $deskripsi = $_POST['deskripsi'];
 $gambar = $_POST['gambar'];
 $direktori = 'img/';
 $dirgambar = $direktori. basename($_FILES['gambar']['name']);
 $namagambar= basename($_FILES['gambar']['name']);
 if(move_uploaded_file($_FILES['gambar']['tmp_name'], $dirgambar)){
 $sql = mysqli_query($kon, "INSERT INTO kamar VALUES
(NULL,'$nama_kamar','$namagambar','$jumlah','$harga','$deskripsi')");
 if($sql){
 $pesan = '<div class="alert alert-success">Berhasil tambah kamar !</div>';
 echo "<script>
 window.location.href='?menu=admin';
 </script>";
 } else {
 $pesan = '<div class="alert alert-danger">Gagal ! Terjadi Kesalahan !</div>';
 }
 }
 }
?>
<!-- AWAL CHEKIN DAN CHEKOUT -->
<h2 class="text-center" style="margin-top: 90px;">Tambah Kamar</h2>
<div class="container col-md-7 d-flex justify-content-center mt-4 mb-5 ">
    <form action="" method="POST" enctype="multipart/form-data" class="d-flex justify-contentcenter row g-3">
        <div class="form-floating mb-1 col-md-8">
            <?php echo $pesan;?>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <input type="text" class="form-control" id="floatingInput" name="nama_kamar" placeholder="Nama Kamar">
            <label for="floatingInput"> Nama Kamar</label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <input type="text" class="form-control" id="floatingInput" name="harga" placeholder="Harga">
            <label for="floatingInput"> Harga</label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <input type="text" class="form-control" id="floatingInput" name="jumlah" placeholder="Jumlah">
            <label for="floatingInput"> Jumlah</label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <textarea class="form-control" id="floatingInput" name="deskripsi" placeholder="Deskripsi"></textarea>
            <label for="floatingInput"> Deskripsi</label>
        </div>
        <div class="form-floating mb-1 col-md-8">
            <input type="file" class="form-control" id="floatingInput" name="gambar" placeholder="Jumlah">
        </div>
        <div class="form-floating mb-2 col-md-8">
            <button type="submit" name="tambah" class="btn btn-primary text-center p-2"
                style="width: 150px; float: right;">Kirim</button>
        </div>
    </form>
</div>
<!-- AKHIR CHEKIN DAN CHEKOUT -->