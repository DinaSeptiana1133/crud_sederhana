<?php
include "Koneksi.php";
$query =mysqli_query($koneksi,"select * from tb_10");
$jumlah=mysqli_num_rows($query);
echo "Jumlah data anda : ". $jumlah;
?>
<table border="1">
<tr>
    <th>kode_mapel</th>
    <th>nama_mapel</th>
    <th>jml_jam</th>
    <th>keterangan</th>
    <th> aksi </th>
</tr>
<?php
$c=0;
while ($row=mysqli_fetch_array($query)) {
?>
<tr>
    <td><?php echo $row['kode_mapel'];?></td>
    <td><?php echo $row['nama_mapel'];?></td>
    <td><?php echo $row['jml_jam'];?></td>
    <td><?php echo $row['keterangan'];?></td>
    <td>
    <a href="Delete.php?kode_mapel=<?php echo $row['kode_mapel']; ?>" onclick="return confirm ('Apakah anda yakin?')">Delete</a>
    <a href="Update.php?kode_mapel=<?php echo $row['kode_mapel']; ?>">Update</a>
    </td>
<?php
}
?>
</table><br>
<a href="Form.php">Input data form</a>