<?php
 if (isset($_POST['key'])) {
 $chekin = $_POST['chekin'];
 $chekout = $_POST['chekout'];
 $jmlkamar = $_POST['jmlkamar'];
 }
 ?>
<!-- AWAL CHEKIN DAN CHEKOUT -->
<section id="form-chekin" class="pt-3 mt-2">
    <h2 class="text-center">Formulir Pemesanan</h2>
    <div class="container d-flex justify-content-center mt-4 mb-5 ">
        <form action="?menu=form_daftar" method="POST" class="d-flex justify-content-center row g3">
            <div class="form-floating col-md-3 mb-1">
                <input type="date" class="form-control" name="chekin2" value="<?= $chekin ?>">
                <label for="floatingInput">Chek In</label>
            </div>
            <div class="form-floating col-md-3 mb-1">
                <input type="date" class="form-control" name="chekout2" value="<?= $chekout?>">
                <label for="floatingInput">Chek Out</label>
            </div>
            <div class="form-floating col-md-2 mb-1">
                <input type="number" class="form-control" name="jmlkamar2" value="<?= $jmlkamar ?>">
                <label for="floatingInput">Jumlah Kamar</label>
            </div>
            <div class="form-floating mb-1 col-md-8">
                <input type="text" class="form-control" id="floatingInput" name="nama_pemesan"
                    placeholder="Nama Pemesan">
                <label for="floatingInput"> Nama Pemesan</label>
            </div>
            <div class="form-floating mb-1 col-md-8">
                <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Alamat Email">
                <label for="floatingInput"> Alamat Email</label>
            </div>
            <div class="form-floating mb-1 col-md-8">
                <input type="text" class="form-control" id="floatingInput" name="nomor_hp"
                    placeholder="Nomor Handphone">
                <label for="floatingInput"> Nomor Handphone</label>
            </div>
            <div class="form-floating mb-1 col-md-8">
                <input type="text" class="form-control" id="floatingInput" name="nama_tamu" placeholder="Nama Tamu">
                <label for="floatingInput"> Nama Tamu</label>
            </div>
            <div class="form-floating mb-1 col-md-8">
                <select class="form-select" id="floatingSelect" name="id_kamar" aria-label="Floating label
select example">
                    <option selected>--------</option>
                    <?php
 $sql = "SELECT * FROM kamar";
 $query = mysqli_query($kon, $sql);
 while ( $row = mysqli_fetch_assoc($query)) {
 ?>
                    <option value="<?= $row['id_kamar'] ?>"><?= $row['nama_kamar'] ?></option>
                    <?php } ?>
                </select>
                <label for="floatingSelect">Nama Kamar</label>
            </div>
            <div class="form-floating mb-2 col-md-8">
                <button type="submit" name="konfirmasi" class="btn btn-primary text-center p2">Konfirmasi</button>
            </div>
        </form>
    </div>
</section>
<!-- AKHIR CHEKIN DAN CHEKOUT -->