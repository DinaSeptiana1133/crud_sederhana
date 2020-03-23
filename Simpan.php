<?php 
include "Koneksi.php"; 
$kode_mapel=$_POST['kode_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$jml_jam=$_POST['jml_jam'];
$keterangan=$_POST['keterangan'];
$query=mysqli_query($koneksi, "update tb_10 set kode_mapel='$kode_mapel', nama_mapel='$nama_mapel', jml_jam='$jml_jam', keterangan='$keterangan' where kode_mapel='$kode_mapel'"); 
if($query){ 
 echo "Berhasil update data ke database "; 
 ?><a href="Tabel.php">Lihat data di Tabel</a><?php 
}else{ 
 echo "Gagal update data"; 
 echo mysqli_error(); 
} 
?>