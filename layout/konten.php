<?php
error_reporting(0);
include 'konten/koneksi.php';

 if($_GET['menu']=='beranda' || $_GET['menu']==''){
    include "konten/carousel.php";
    include 'konten/form_chek.php';
    include 'konten/tentang.php';
 }elseif($_GET['menu']=='pesan_kamar'){
    include 'konten/form_chekout.php';
 }elseif($_GET['menu']=='form'){
    include 'konten/proses_form.php';
 }elseif($_GET['menu']=='cetak'){
    include 'konten/bukti.php';
 }elseif($_GET['menu']=='print'){
   include 'konten/cetak.php';
}
?>