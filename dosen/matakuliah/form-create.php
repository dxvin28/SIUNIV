<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
<body>
  <h1>Tambah Data Kuliah</h1>
  <form action="create.php" method="post">
    Kode : <input type="text" name="kode"><br><br>
    Matakuliah : <input type="text" name="nama_matkul"><br><br>
    SKS : <input type="text" name="sks"><br><br>
    Semester : <input type="text" name="semester"><br><br>
    Dosen Pengajar : 
    <select name = "id_dosen" id="nama_dosen">
        <option value=".">>--PILIH SALAH SATU--</option>
    <?php
     while ($data = mysqli_fetch_assoc($result)) {
        ?>
    <option value= "<?php echo $data['id_dosen']; ?>">
     <?php echo $data['nama_dosen']; ?>
     </option>
     <?php
     }
     ?>
</select>
    <br>
    <input type="submit">

  </form>   
</body>
</html>