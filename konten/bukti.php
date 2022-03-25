<div id="bukti" style="min-height: 100%;">
    <div class="card">
        <div class="card-header">
            Bukti Pemesanan
        </div>
        <div class="card-body">
            <nav class="navbar navbar-expand-lg navbar-light bg-white pt-4">
                <div class="container pt-5">
                    <a href="?menu=beranda"><img src="img/logo.png" class="rounded-circle" width="120"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle
navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            <h3 class="text-end text-primary">Hotel Hebat</h3>
                            <h5 class="text-end">Rao Selatan, Pasaman, Indonesia </h5>
                            <h5 class="text-end">Pos: 26353 Fax (123) 456-789</h5>
                            <h5 class="text-end">hotelhebat@gmail.com</h5>
                        </span>
                    </div>
                </div>
            </nav>
            <div class="container">
                <hr>
            </div>
            <div class="container">
                <div class="px-5">
                    <ul>
                        <li>Tgl CheckIn : <?= $_GET['chekin'] ?></li>
                        <li>Tgl CheckIn : <?= $_GET['chekout'] ?></li>
                        <li>Tgl CheckIn : <?= $_GET['jmlkamar'] ?></li>
                    </ul>
                    <ul>
                        <li>Tgl CheckIn : <?= $_GET['nama_pemesan'] ?></li>
                        <li>Tgl CheckIn : <?= $_GET['nomor_hp'] ?></li>
                        <li>Tgl CheckIn : <?= $_GET['nama_tamu'] ?></li>
                    </ul>
                    <a href="?menu=print&&chekin=<?= $_GET['chekin'] ?>&&chekout=<?= $_GET['chekout'] ?>&&jmlkamar=<?= $_GET['jmlkamar'] ?>&&nama_pemesan=<?= $_GET['nama_pemesan'] ?>&&nomor_hp=<?= $_GET['nomor_hp'] ?>&&nama_tamu=<?= $_GET['nama_tamu'] ?>&&id_kamar=<?= $_GET['id_kamar'] ?>"
                        class="btn btn-primary">Cetak</a>
                </div>

            </div>
            <div class="container">
                <hr>
            </div>
        </div>
    </div>
</div>