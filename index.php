<?php
 error_reporting(0);
 if ($_GET['menu']=='cetak') {
 include 'konten/cetak.php';
 }elseif ($_GET['menu']=='struk') {
 include "layout/header.php";
 include "layout/navbar.php";
 include 'konten/struk.php';
 include "layout/footer.php";
 }else{
 include "layout/header.php";
 include "layout/navbar.php";
 include "layout/konten.php";
 include "layout/footer.php";
 }
?>