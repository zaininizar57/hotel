<div class="container">
    <div class="card" style="margin-top: 90px;">
        <div class="card-body">
            <div class="d-flex justify-content-between" id="navbarText">
                <a href="?menu=beranda"><img src="img/logo.png" class="rounded-circle mt-2 pt-1" width="120"></a>
                <span class="navbar-text text-end ">
                    <h2 class="text-end text-primary">Hotel Hebat</h2>
                    <h6 class="text-end">Rao Selatan, Pasaman, Indonesia </h6>
                    <h6 class="text-end">Pos 26353 Fax (123) 456-789</h6>
                    <h6 class="text-end">hotelhebat@gmail.com</h6>
                </span>
            </div>
            <hr class="mb-4">
            <div class="container mb-4">
                <h2 class="text-center text-primary"><u>INVOICE</u></h2>
            </div>
            <?php
 include 'konten/koneksi.php';
 $chekin = $_GET['chekin'];
 $chekout = $_GET['chekout'];
 $jmlkamar = $_GET['jmlkamar'];
 $nama_pemesan = $_GET['nama_pemesan'];
 $nomor_hp = $_GET['nomor_hp'];
 $nama_tamu = $_GET['nama_tamu'];
 $id_kamar = $_GET['id_kamar'];
 $jam = date('h:i:s');
 $sql = "SELECT * FROM kamar WHERE id_kamar='$id_kamar'";
 $query = mysqli_query($kon, $sql);
 $data = mysqli_fetch_assoc($query);
 $nama_kamar=$data['nama_kamar'];
?>
            <div class="table-responsive justify-content-center">
                <table class="table table-striped table-borderless ">
                    <tr>
                        <td style="width: 49%;">Chek-in</td>
                        <td>: <?= $chekin ?></td>
                    </tr>
                    <tr>
                        <td>Chek-Out </td>
                        <td>: <?= $chekout ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Kamar</td>
                        <td>: <?= $jmlkamar ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>: <?= $nama_pemesan ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Hp</td>
                        <td>: <?= $nomor_hp ?></td>
                    </tr>
                    <tr>
                        <td>Nama Tamu</td>
                        <td>: <?= $nama_tamu ?></td>
                    </tr>
                    <tr>
                        <td>Nama Kamar</td>
                        <td>: <?= $nama_kamar ?></td>
                    </tr>
                    <tr>
                        <td>Jam Chekin</td>
                        <td>: <?= $jam ?></td>
                    </tr>
                </table>
            </div>
            <a href="?menu=cetak&&chekin=<?= $chekin ?>&&chekout=<?= $chekout ?>&&jmlkamar=<?=
$jmlkamar ?>&&nama_pemesan=<?= $nama_pemesan ?>&&nomor_hp=<?= $nomor_hp
?>&&nama_tamu=<?= $nama_tamu ?>&&nama_kamar=<?= $nama_kamar ?>&&jam=<?= $jam ?>" class="btn btn-primary mb-3"
                target="_blank">Cetak</a>
            <i style="float: right;">Silahkan konfirmasi ke resepsionis, sebelum berlalu 2 jam dari waktu
                pemesanan ! </i>
        </div>
    </div>
    <br>
</div>