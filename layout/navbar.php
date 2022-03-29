<!-- NAVBAR AWAL -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="?menu=beranda" id="beranda"><img src="img/logo.png" class="rounded-circle"
                width="45"> Hotel Hebat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" arialabel="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <?php
 session_start();
 if(empty($_SESSION['username'] || $_SESSION['password'])){
 ?>
                <a class="nav-link active" href="?menu=kamar">Kamar</a>
                <a class="nav-link active" href="?menu=fasilitas_kamar">Fasilitas Kamar</a>
                <a class="nav-link active" href="?menu=fasilitas_umum">Fasilitas Umum</a>
                <a class="nav-link active" href="?menu=daftar">Daftar</a>
                <a class="nav-link active" href="?menu=form_masuk">Masuk</a>
                <?php }elseif($_SESSION['level']=='admin'){?>
                <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
                <!-- <div class="navbar-nav ms-auto"> -->
                <a class="nav-link active" href="?menu=admin">Admin</a>
                <a class="nav-link active" href="?menu=kamar">Kamar</a>
                <a class="nav-link active" href="?menu=fasilitas_kamar">Fasilitas Kamar</a>
                <a class="nav-link active" href="?menu=fasilitas_umum">Fasilitas Umum</a>
                <a class="nav-link active" href="?menu=keluar">Keluar</a>
                <?php }elseif($_SESSION['level']=='resepsionis'){?>
                <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
                <!-- <div class="navbar-nav ms-auto"> -->
                <a class="nav-link active" href="?menu=resepsionis">Resepsionis</a>
                <a class="nav-link active" href="?menu=re_fasilitas_kamar">Fasilitas Kamar</a>
                <a class="nav-link active" href="?menu=re_fasilitas_umum">Fasilitas Umum</a>
                <a class="nav-link active" href="?menu=keluar">Keluar</a>
                <?php } ?>
            </div>
        </div>

    </div>
    </div>
    </div>
</nav>
<!-- AKHIR NAVBAR -->