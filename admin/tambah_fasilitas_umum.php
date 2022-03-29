<div style="min-height: 100vh !important;">
    <?php
if(isset($_POST['tambah'])) {
    
 $nama_fasilitas_hotel = $_POST['nama_fasilitas_hotel'];
 $desikripsi_fasilitas_hotel = $_POST['desikripsi_fasilitas_hotel'];
 $foto_fasilitas_hotel = $_POST['foto_fasilitas_hotel'];
 $direktori = 'img/';
 $dirgambar = $direktori. basename($_FILES['foto_fasilitas_hotel']['name']);
 $namagambar= basename($_FILES['foto_fasilitas_hotel']['name']);
 
 if(move_uploaded_file($_FILES['foto_fasilitas_hotel']['tmp_name'], $dirgambar)){
        $sql = mysqli_query($kon, "INSERT INTO fasilitas_hotel VALUES ('','$nama_fasilitas_hotel','$namagambar','$desikripsi_fasilitas_hotel')");
        
        if($sql){
            $pesan = '<div class="alert alert-success">Berhasil tambah fasilitas !</div>';
            echo "<script>
            window.location.href='?menu=fasilitas_umum';
            </script>";
        } else {
            $pesan = '<div class="alert alert-danger">Gagal ! Terjadi Kesalahan !</div>';
        
        }
    }
 }
?>
    <h2 class="text-center" style="margin-top: 90px;">Tambah Fasilitas Umum</h2>
    <div class="container border col-md-7 d-flex justify-content-center mt-4 mb-5 ">
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex py-4 justify-content-center row g-3">
            <div class="form-floating mb-1 col-md-8">
                <?php echo $pesan;?>
            </div>
            <div class="form-floating mb-1 col-md-8">
                <input type="text" class="form-control" id="floatingInput" name="nama_fasilitas_hotel"
                    placeholder="Nama Kamar">
                <label for="floatingInput"> Nama Fasilitas</label>
            </div>
            <div class="form-floating mb-1 col-md-8">
                <textarea class="form-control" id="floatingInput" name="desikripsi_fasilitas_hotel"
                    placeholder="Deskripsi"></textarea>
                <label for="floatingInput"> Deskripsi Fasilitas</label>
            </div>
            <div class="mb-1 col-md-8">
                <input type="file" class="form-control" id="floatingInput" name="foto_fasilitas_hotel"
                    placeholder="Jumlah">
            </div>
            <div class="form-floating mb-2 col-md-8">
                <button type="submit" name="tambah" class="btn btn-primary text-center p-2"
                    style="width: 150px; float: right;">Tambah</button>
            </div>
        </form>
    </div>
    <!-- AKHIR CHEKIN DAN CHEKOUT -->
</div>