<div class="container" style="margin-top: 90px; margin-bottom: 300px;">
    <div class="row ">
        <div class="col-md-12">
            <div class="card mb-5 ">
                <div class="card-header">
                    <form class="d-flex justify-content-between">
                        <input class="form-control" type="date" placeholder="Search" name="tgl" arialabel="Search">
                        <input class="form-control" type="search" placeholder="Search" name="key" arialabel="Search">
                        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tamu</th>
                                    <th>Kamar</th>
                                    <th>Jumlah</th>
                                    <th>Pemesan</th>
                                    <th>Nomor Hp</th>
                                    <th>Masuk</th>
                                    <th>Keluar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
 session_start();
 if (isset($_POST['cari'])) {
 $key =$_POST['key'];
 $tgl =$_POST['tgl'];
 $sql = "SELECT * FROM pemesanan JOIN kamar ON
pemesanan.id_pemesanan=kamar.id_kamar WHERE nama_tamu LIKE '%$key%' OR nama_pemesan
LIKE '%$key%' OR no_hp LIKE '%$key%' OR tanggal_masuk LIKE '%$tgl%' OR tanggal_keluar LIKE
'%$tgl%' ";
 }
 $sql = "SELECT * FROM pemesanan JOIN kamar
ON pemesanan.id_pemesanan=kamar.id_kamar ";
 $query = mysqli_query($kon, $sql);
 $no = 1;
 while ( $row = mysqli_fetch_assoc($query)) {
 ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td height="20%"><?php echo $row['nama_tamu'];?></td>
                                    <td width="15%"><?php echo $row['nama_kamar'];?></td>
                                    <td width="10%"><?php echo $row['jumlah_kamar_dipesan'];?></td>
                                    <td><?php echo $row['nama_pemesan'];?></td>
                                    <td><?php echo $row['no_hp'];?></td>
                                    <td><?php echo $row['tanggal_masuk'];?></td>
                                    <td><?php echo $row['tanggal_keluar'];?></td>
                                </tr>
                                <?php
 $no++;
 }
 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>