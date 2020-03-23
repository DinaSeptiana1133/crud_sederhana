<?php
include "Koneksi.php";
$kode_mapel=$_POST['kode_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$jml_jam=$_POST['jml_jam'];
$keterangan=$_POST['keterangan'];
$query=mysqli_query($koneksi,"insert into tb_10 (kode_mapel,nama_mapel,jml_jam,keterangan) value('$kode_mapel','$nama_mapel','$jml_jam','$keterangan')");
if($query) {
    echo "Berhasil input data ke database";
?>
    <a href="Tabel.php">Lihat data di Tabel</a>
<?php
} else {
    echo "Gagal input data";
    echo mysqli_error();
}
?>