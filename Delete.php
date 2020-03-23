<?php 
include "Koneksi.php"; 
$kode_mapel=$_GET['kode_mapel']; 
$query=mysqli_query($koneksi, "delete from tb_10 where kode_mapel='$kode_mapel'"); 
if($query){ 
    echo "<script> alert ('Data Berhasil Dihapus'); </script>"
 ?>
 <script language="javascript">document.location.href="Tabel.php";
 </script>
 <?php 
}else{ 
        echo "Gagal hapus Data";
}
?>