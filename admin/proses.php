if(isset($_POST['edit'])) {

$sql = "SELECT * FROM kamar WHERE id_kamar='$id_kamar' ";
$query = mysqli_query($kon,$sql);
$row=mysqli_fetch_assoc($query);
$id_kamar = $_POST['id'];
$nama_kamar = $_POST['nama_kamar'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$deskripsi = $_POST['deskripsi'];
$gambarlama = 'img/'.$row['foto_kamar'];
$direktori = 'img/';
$dirgambar = $direktori. basename($_FILES['gambar']['name']);
$namagambar= basename($_FILES['gambar']['name']);

if ($namagambar=='') {
$cek2 = mysqli_query($kon, "UPDATE kamar SET
nama_kamar='$nama_kamar',jumlah_kamar='$jumlah', harga_kamar='$harga',
deskripsi_kamar='$deskripsi' WHERE id_kamar='$id_kamar'");
if ($cek2) {
echo "<script>
alert('Berhasil diubah tanpa ubah gambar !');
window.location.href = '?menu=admin';
</script>";
}
}elseif (!empty($namagambar)) {
unlink($gambarlama);
move_uploaded_file($_FILES['gambar']['tmp_name'], $dirgambar);
$cek2 = mysqli_query($kon, "UPDATE kamar SET
nama_kamar='$nama_kamar',foto_kamar='$namagambar',jumlah_kamar='$jumlah',
harga_kamar='$harga', deskripsi_kamar='$deskripsi' WHERE id_kamar='$id_kamar'");
if ($cek2) {
echo "<script>
alert('Berhasil diubah dengan sekaligus ganti gambar !');
window.location.href = '?menu=admin';
</script>";
}
}
}
?>