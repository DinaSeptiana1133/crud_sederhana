<html>
<head>
<title>Form</title>
</head>
<body>
<form action="Proses.php" method="post">
    <table>
    <tr>
        <td>Kode_mapel</td>
        <td><input type="text" name="kode_mapel" size="20"></td>
    </tr>
    <tr>
        <td>Nama_mapel</td>
        <td><textarea cols="20" rows="5" name="nama_mapel"></textarea></td>
    </tr>
    <tr>
        <td>Jml_jam</td>
        <td><input type="text" name="jml_jam" size="20"></td>
    </tr>
    <tr>
        <td> Keterangan </td>
        <td> <input type="text" name="keterangan"> </td>
    </tr>
    <tr>
        <td><input type="submit" name="proses" value="Proses"></td>
        <td><input type="reset" value="Batal"></td>
    </tr>
    </table>
</form>
</body>
</html>