<!DOCTYPE html>
<html>
<head>
<body bgcolor="aqua">
<a href="lihatdata.php"></a>
  
    <h1>Data Jurusan</h1>

        <td><a href='tambah.php?id=$data[id]'>Tambah Data ></a></td>
		<br></br>

<table border="2">
<th>Nomor</th>
<th>Jurusan</th>
<th colspan="3">Opsi</th>
<?php
include('koneksi.php');
$ma = mysqli_query($koneksi,"SELECT * FROM jurusan");
$no =1;
foreach ($ma as $data) {
	echo "<tr>
	<td>$no</td>
	<td>".$data['jurusan']."</td>
	<td><a href= 'show.php?id=$data[id]'>Show</a></td>
	<td><a href= 'edit.php?id=$data[id]'>Edit</a></td>
	<td><a href= 'delete.php?id=$data[id]'>Delete</a></td>
	</tr>";
     $no++;
 }
	?>
	</center>
</table>
</body>
</html>
