<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $id_kamar=$_POST['id'];
    $jeniskamar=$_POST['jeniskamar'];
    $hargakamar=$_POST['hargakamar'];
    $keterangan=$_POST['keterangan'];

    $sql="UPDATE `kamarhotel` SET `jeniskamar` = '$jeniskamar', `hargakamar` = '$hargakamar', `keterangan` = '$keterangan' WHERE `id_kamar` = $id_kamar ";
    $edit= $db -> query($sql);
    if ($edit) {
        // header("location: dashboard.php");
        echo "<script>
        alert ('ubah data sukses');
        document.location='data kamar.php';
        </script>";
    }else {
        echo "gagal" ;  
    }
}
?>