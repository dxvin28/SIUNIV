<?php

include '../connect.php';

$kode = $_POST ['kode'];
$id_dosen = $_POST['id_dosen'];
$nama_matkul = $_POST ['nama_matkul'];
$sks = $_POST ['sks'];
$semester = $_POST ['semester'];

$query = "UPDATE matakuliah SET nama_matkul= '$nama_matkul', 
                                sks = '$sks', 
                                semester = $semester, 
                                id_dosen = $id_dosen 
          WHERE kode = '$kode'";

$result = mys<?php

include '../connect.php';

$id_dosen = $_POST['id_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$telp = $_POST['telp'];

$query = "UPDATE dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE id_dosen = $id_dosen";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil update data <br>";
}else{
    echo "Gagal update data <br>";
}
echo "<a href='read.php>Lihat Data</a>";
?>qli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num > 0 )
{
    echo "Berhasil Ubah data <br>";
}
else{
    echo "Gagal Ubah Data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";
?>