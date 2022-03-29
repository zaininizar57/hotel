<div class="container" style="margin-top: 90px;">
    <div class="row ">
        <div class="col-md-12">
            <div class="card mb-5 ">
                <div class="card-header">
                    <a href="?menu=tambah_kamar" class="btn btn-primary btn-md">Tambah</a>
                    <h5 style="float: right;">Fasilitas Kamar</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Kamar</th>
                                    <th>Fasilitas</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
 session_start();
 $sql = "SELECT * FROM kamar";
 $query = mysqli_query($kon, $sql);
 $no = 1;
 while ( $row = mysqli_fetch_assoc($query)) {
 ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td height="20%"><img src="img/<?php echo $row['foto_kamar'];?>"
                                            class="img-thumbnail" style="width: 100%"></td>
                                    <td width="15%"><?php echo $row['nama_kamar'];?></td>
                                    <td width="20%"><?php
 $sql1 = "SELECT * FROM kamar JOIN fasilitas_kamar ON
kamar.id_kamar=fasilitas_kamar.id_kamar ";
 $query1 = mysqli_query($kon, $sql1);
 while ( $row1 = mysqli_fetch_assoc($query1)) {
 ?>
                                        <?= $row1['nama_fasilitas_kamar'] ?><br>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $row['deskripsi_kamar'];?></td>
                                    <td width="10%">
                                        <a href="?menu=edit_kamar&ubah=<?php echo $row['id_kamar'];?>"
                                            class="btn btn-success btn-sm">U</a>
                                        <a href="?menu=admin&hapus=<?php echo $row['id_kamar'];?>" class="btn
btn-danger btn-sm" onClick="return confirm('Yakin ingin menghapus data ini ?');">H</a>
                                    </td>
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