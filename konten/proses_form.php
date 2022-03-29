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
 $input = mysqli_query($kon,$insert);

 if ($input) {
 echo "<script>
 alert('Sukses Chekin, Silhkan Cetak Bukti Pemesanan ini !');

window.location.href='?menu=struk&&chekin=$chekin2&&chekout=$chekout2&&jmlkamar=$jmlka
mar2&&nama_pemesan=$nama_pemesan&&nomor_hp=$nomor_hp&&nama_tamu=$nama_tamu
&&id_kamar=$id_kamar&&jam=$date';
 </script>";
 }else{
 echo "<script>
 alert('Gagal Chekin, Mungkin ada yang salah !');
 window.location.href='?menu=beranda';
 </script>";
 }
 } elseif(isset($_POST['masuk'])){
 $username = htmlspecialchars($_POST['username']);
 $password = htmlspecialchars($_POST['password']);
 $sql = mysqli_query($kon, "SELECT * FROM admin WHERE username='$username' AND
password=md5('$password')");
 $jumlah = mysqli_num_rows($sql);
 if($jumlah>0){
 session_start();
 $sesi = mysqli_fetch_assoc($sql);

 $_SESSION['username'] = $sesi['username'];
 $_SESSION['password'] = $sesi['password'];
 $_SESSION['nama'] = $sesi['nama'];
 $_SESSION['id'] = $sesi['id'];
 $_SESSION['level'] = $sesi['level'];
 if($sesi['level']=='admin'){
 echo"<script>
 alert('Sukses, Selamat datang dihalan admin !');
 window.location.href='?menu=admin';
 </script>";
 } elseif($sesi['level']=='resepsionis'){
 echo"<script>
 window.location.href='?menu=resepsionis';
 </script>";
 }
 } else {
 echo "<script>
 alert('Gagal, Mungkin ada yang salah !');
 window.location.href='?menu=form_masuk';
 </script>";
 }
 }
 ?>