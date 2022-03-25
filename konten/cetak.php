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
        <div class="card p-4">
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
                <table style="width: 100%;">
                    <tr>
                        <td>Tgl CheckIn</td>
                        <td>: <?= $_GET['chekin'] ?></td>
                        <td>Tgl CheckOut</td>
                        <td>: <?= $_GET['chekout'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Kamar</td>
                        <td>: <?= $_GET['jmlkamar'] ?></td>
                        <td>Nama Pemesan</td>
                        <td>: <?= $_GET['nama_pemesan'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>: <?= $_GET['nama_pemesan'] ?></td>
                        <td>No Hp</td>
                        <td>: <?= $_GET['nomor_hp'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>: <?= $_GET['nama_pemesan'] ?></td>
                        <td>Nama Tamu/td>
                        <td>: <?= $_GET['nama_tamu'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>