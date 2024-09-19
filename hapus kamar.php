<?php
include "koneksi.php";
if (isset($_POST['hapus'])){
    $id = $_POST['id_kamar'];
    $sql = "delete from kamarhotel where id_kamar=$id";
    $hasil = $db ->query($sql);
    if ($hasil) {
        // header("location:dashboard.php");
        echo "<script>
        alert ('hapus data sukses');
        document.location='data kamar.php';
        </script>";
    } else{
        echo "<script>
        alert ('hapus data gagal');
        document.location='data kamar.php';
        </script>";
    }
}
?>