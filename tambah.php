<h1 align="center"> Input Biodata Jurusan </h1>
<fieldset style="width: 50%; margin: auto;">
 	<legend>Form Input Biodata Jurusan</legend>

 	<form action="simpan.php" method="post">
 	<p>
 		Jurusan<br />
 		<input type="text" name="jurusan" required />
	 </p>
 	 <p>
 		<input type="submit" value="simpan" />
 		<input type="reset" value="reset" onclick="return confirm('hapus data yang telah diinput?')">
 		</p>
 	</form>
 </fieldset>
 <br />
 <center><a href="lihatdata.php">&Lt; Tabel Biodata</a></center>
 