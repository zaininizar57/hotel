<?php
 if ($_GET['menu'] !== 'print') {
    include "layout/header.php";
    include "layout/konten.php";
    include "layout/footer.php";
 }else {
    include "layout/konten.php";
 }
?>