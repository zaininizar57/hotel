<?php
include 'konten/koneksi.php';
if(empty($_SESSION['level'] =='admin' )) {
 if($_GET['menu']=='beranda' || $_GET['menu']==''){
 include "konten/carousel.php";
 include 'konten/form_chek.php';
 include 'konten/tentang.php';
 }elseif($_GET['menu']=='pesan_kamar'){
 include 'konten/form_chekout.php';
 }elseif($_GET['menu']=='form_daftar'){
 include 'konten/proses_form.php';
 }elseif($_GET['menu']=='kamar'){
 include "konten/carousel.php";
 include 'konten/kamar.php';
 }elseif($_GET['menu']=='fasilitas_umum'){
 include "konten/carousel.php";
 include 'konten/fasilitas_umum.php';
 }elseif($_GET['menu']=='daftar'){
 include "konten/carousel.php";
 include 'konten/form_chekout.php';
 }elseif($_GET['menu']=='form_masuk'){
 include 'konten/masuk.php';
 }elseif($_GET['menu']=='fasilitas_kamar'){
 include "konten/carousel.php";
 include 'konten/fasilitas_kamar.php';
 }elseif($_GET['menu']=='proses_masuk'){
 include 'konten/proses_form.php';
 }elseif($_GET['menu']=='admin'){
 echo "<script>
 window.location.href='?menu=beranda';
 </script>";
 }
}


if(!empty($_SESSION['level'] =='admin')) {
    if($_GET['menu']=='admin'){
        include 'admin/index.php';
    }elseif($_GET['menu']=='fasilitas_kamar'){
        include 'admin/fasilitas_kamar.php';
    }elseif($_GET['menu']=='fasilitas_umum'){
        include 'admin/fasilitas_umum.php';
    }elseif($_GET['menu']=='kamar'){
        include 'admin/kamar.php';
    }elseif($_GET['menu']=='tambah_kamar'){
        include 'admin/tambah_kamar.php';
    }elseif($_GET['menu']=='edit_kamar'){
        include 'admin/edit_kamar.php';
    }elseif($_GET['menu']=='proses_edit'){
        include 'admin/proses.php';
    }elseif($_GET['menu']=='' ||$_GET['menu']=='form_masuk'||$_GET['menu']=='beranda'||$_GET['menu']=='daftar'){
        echo "<script>
        window.location.href='?menu=admin';
        </script>";
    }elseif($_GET['menu']=='keluar'){
        session_start();
        session_destroy();
        echo "<script>
        window.location.href='?menu=beranda';
        </script>";
    }elseif($_GET['menu'] == 'tambah_fasilitas_umum'){
        include 'admin/tambah_fasilitas_umum.php';
    }
 }


 if(!empty($_SESSION['level'] =='resepsionis' )) {
 if($_GET['menu']=='resepsionis'){
 include 'admin/resepsionis.php';
 }elseif($_GET['menu']=='re_fasilitas_kamar'){
 include 'admin/fasilitas_kamar.php';
 }elseif($_GET['menu']=='re_fasilitas_umum'){
 include 'admin/fasilitas_umum.php';
 }elseif($_GET['menu']=='' ||$_GET['menu']=='form_masuk'
||$_GET['menu']=='beranda'||$_GET['menu']=='daftar'){
 echo "<script>
 window.location.href='?menu=resepsionis';
 </script>";
 }elseif($_GET['menu']=='keluar'){
 session_start();
 session_destroy();
 echo "<script>
 window.location.href='?menu=beranda';
 </script>";
 }
 }
?>