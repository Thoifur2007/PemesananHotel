<?php
include "koneksi.php";
if (isset($_POST['hapus'])){
    $id = $_POST['id_admin'];
    $sql = "delete from admin where id_admin=$id";
    $hasil = $db ->query($sql);
    if ($hasil) {
        // header("location:dashboard.php");
        echo "<script>
        alert ('hapus data sukses');
        document.location='data admin.php';
        </script>";
    } else{
        echo "<script>
        alert ('hapus data gagal');
        document.location='data admin.php';
        </script>";
    }
}
?>