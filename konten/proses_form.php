<?php
 if (isset($_POST['konfirmasi'])) {
 $chekin2 = htmlspecialchars($_POST['chekin2']);
 $chekout2 = htmlspecialchars($_POST['chekout2']);
 $jmlkamar2 = htmlspecialchars($_POST['jmlkamar2']);
 $nama_pemesan = htmlspecialchars($_POST['nama_pemesan']);
 $email = htmlspecialchars($_POST['email']);
 $nomor_hp = htmlspecialchars($_POST['nomor_hp']);
 $nama_tamu = htmlspecialchars($_POST['nama_tamu']);
 $id_kamar = htmlspecialchars($_POST['id_kamar']);
 $status = 0;
 $date = date('Y-m-d h:i:s');
 $insert = "INSERT INTO pemesanan
VALUES('','$id_kamar','$chekin2','$chekout2','$jmlkamar2','$nama_pemesan','$email','$nomor_hp','
$nama_tamu','$status','$date')";
//  $input = mysqli_query($kon,$insert);

 if (true) {
 echo "<script>
        alert('Sukses Chekin, Silhkan Cetak Bukti Pemesanan ini !');
    </script>";

    header('Location: ?menu=cetak&&chekin=' . $chekin2 . '&&chekout=' . $chekout2 . '&&jmlkamar=' . $jmlkamar2 . '&&nama_pemesan=' . $nama_pemesan . '&&nomor_hp=' . $nomor_hp . '&&nama_tamu=' . $nama_tamu . '&&id_kamar=' . $id_kamar);

 }else{
    echo "<script>
        alert('Gagal Chekin, Mungkin ada yang salah !');
        window.location.href='?menu=beranda';
        </script>";
    }
 }
 ?>