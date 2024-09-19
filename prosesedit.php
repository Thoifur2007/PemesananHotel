<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $id =$_POST['id'];
    $nama=$_POST['nama'];
    $username=$_POST['usernamee'];
    $password=$_POST['pass'];

    $sql="UPDATE `admin` SET `nama` = '$nama', `usernamee` = '$username', `pass` = '$password' WHERE `admin`.`id_admin` = $id ";
    $edit= $db -> query($sql);
    if ($edit) {
        // header("location: dashboard.php");
        echo "<script>
        alert ('ubah data sukses');
        document.location='data admin.php';
        </script>";
    }else {
        echo "<script>
        alert ('ubah data gagal');
        document.location='data admin.php';
        </script>";     
    }
}
?>