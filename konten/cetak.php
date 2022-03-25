<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Cetak Bukti</title>
    <style>
    ul li {
        list-style: none;
    }
    </style>
</head>

<body onload="print()">
    <div id="bukti" style="min-height: 100%;">
        <div class="card">
            <div class="card-header text-center">
                Bukti Pemesanan
            </div>
            <div class="d-flex justify-content-between px-5 py-4" style="width: 100vw;">
                <a href="?menu=beranda">
                    <img src="img/logo.png" class="rounded-circle" width="100" />
                </a>
                <span class="navbar-text">
                    <h3 class="text-end text-primary">Hotel Hebat</h3>
                    <h5 class="text-end">Rao Selatan, Pasaman, Indonesia </h5>
                    <h5 class="text-end">Pos: 26353 Fax (123) 456-789</h5>
                    <h5 class="text-end">hotelhebat@gmail.com</h5>
                </span>
            </div>
            <div class="px-5 d-flex justify-content-between">
                <ul>
                    <li>Tgl CheckIn : <?= $_GET['chekin'] ?></li>
                    <li>Tgl CheckOut : <?= $_GET['chekout'] ?></li>
                    <li>Jumlah Kamar : <?= $_GET['jmlkamar'] ?></li>
                </ul>
                <ul>
                    <li>Nama Pemesan : <?= $_GET['nama_pemesan'] ?></li>
                    <li>No Hp : <?= $_GET['nomor_hp'] ?></li>
                    <li>Nama Tamu : <?= $_GET['nama_tamu'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>