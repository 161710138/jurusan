<!DOCTYPE html>
<html>
<head>
    <title>Jurusan</title>
</head>
<body bgcolor="aqua">
    <?php
        include('koneksi.php');
        $id     = $_GET['id'];
        $jrs    = mysqli_query($koneksi,"SELECT * FROM jurusan WHERE id='$id'");
        $data   = mysqli_fetch_array($jrs);
        ?>
        <center><h3>Show Data Jurusan</h3></center>
        <fieldset style="width: 50%; margin: auto;">
        <legend> Form Show Biodata Jurusan</legend>
             <input type="hidden" name="id" value="<?php echo $data['id'];?>">
             <p>
                Jurusan<br />
                <input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan'];?>" readonly>
             </P>
            
             </p>
             </fieldset>
        
                 <br/><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>

</body>
</html>