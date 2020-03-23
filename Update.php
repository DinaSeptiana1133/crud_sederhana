 <?php 
include "Koneksi.php"; 
$kode_mapel=$_GET['kode_mapel']; 
$query=mysqli_query($koneksi, "select * from tb_10 where kode_mapel='$kode_mapel'"); 
?> 
<form action="Simpan.php" method="post"> 
<table border="1"> 
<?php 
while($row=mysqli_fetch_array($query)){ 
?> 
 <input type="hidden" name="kode_mapel" value="<?php echo $kode_mapel;?>"/> 
 <tr> 
 <td>kode_mapel</td><td><input type="text" name="kode_mapel" value="<?php echo $row['kode_mapel'];?>" /></td> 
 </tr> 
 <tr> 
 <td>nama_mapel</td> 
<td><textarea cols="20" rows="5" name="nama_mapel"><?php echo $row['nama_mapel'];?></textarea></td> 
 </tr> 
 <tr><td>jml_jam</td><td><input type="text" name="jml_jam" value="<?php echo $row['jml_jam'];?>" /></td> 
 </tr> 
 </tr> 
 <tr><td>keterangan</td><td><input type="text" name="keterangan" value="<?php echo $row['keterangan'];?>" /></td> 
 </tr> 
 <tr><td><input type="submit" value="Simpan" name="simpan" /></td> 
 </tr> 
 <?php 
} 
?> 
</table> 
</form> 