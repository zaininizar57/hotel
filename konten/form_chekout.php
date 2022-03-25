<?php
 if (isset($_POST['key'])) {
 $chekin = $_POST['chekin'];
 $chekout = $_POST['chekout'];
 $jmlkamar = $_POST['jmlkamar'];
 }
 ?>
<!-- AWAL CHEKIN DAN CHEKOUT -->

<br>
<br>
<div class="container">
    <div class="row my-4">
        <h2 class="text-center mt-4">Form Pemesanan</h2>
    </div>
    <form action="?menu=form" method="POST">
        <div class="row border bg-primary shadow">
            <div class="d-flex m-5 justify-content-center align-items-center">
                <div style="width: 250px;" class="input-group mx-2">
                    <input type="date" name="chekin2" value="<?= $chekin ?>" class="form-control shadow"
                        placeholder="Recipient's username" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                </div>
                <div style="width: 250px;" class="input-group mx-2">
                    <input type="date" name="chekout2" value="<?= $chekout?>" class="form-control shadow"
                        placeholder="Recipient's username" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                </div>
                <div style="width: 250px;" class="input-group mx-2">
                    <input type="number" class="form-control shadow" name="jmlkamar2" value="<?= $jmlkamar ?>"
                        placeholder="Jumlah Kamar" aria-label="Recipient's username" aria-describedby="button-addon2">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card py-5">
                <div class="card-body">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <label for="exampleInputPassword1" class="form-label">Nama Pemesan</label>
                        <input name="nama_pemesan" style="width: 80%" type="text" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" style="width: 80%" type="email" class="form-control"
                            id="exampleInputEmail1">
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                        <input style="width: 80%" name="nomor_hp" type="text" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <label for="exampleInputPassword1" class="form-label">Nama Tamu</label>
                        <input style="width: 80%" name="nama_tamu" type="text" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <label for="exampleInputPassword1" class="form-label">Tipe Kamar</label>
                        <select style="width: 80%" class="form-select" aria-label="Default select example">
                            <option selected>----Pilih----</option>
                            <?php
                                $sql = "SELECT * FROM kamar";
                                $query = mysqli_query($kon, $sql);
                                while ( $row = mysqli_fetch_assoc($query)) {
                            ?>
                            <option value="<?= $row['id_kamar'] ?>"><?= $row['nama_kamar'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button name="konfirmasi" type="submit" style="width: 200px"
                            class="btn btn-primary">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- AKHIR CHEKIN DAN CHEKOUT -->