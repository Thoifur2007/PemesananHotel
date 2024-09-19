x<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $jeniskamar=$_POST['jeniskamar'];
    $harga=$_POST['hargakamar'];
    $keterangan=$_POST['keterangan'];

    $sql = "insert into kamarhotel (jeniskamar, hargakamar, keterangan) values ('$jeniskamar','$harga','$keterangan')";
    if ($db ->query($sql)) {
    // header("location: dashboard.php");
    echo "<script>
    alert ('tambah data sukses');
    document.location='data kamar.php';
    </script>";
}else {
  echo "<script>
  alert ('tambah data gagal');
  document.location='data kamar.php';
  </script>";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST">
    <h1 class="text-center">tambahkan Kamar</h1>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="jeniskamar">
  <label for="floatingInput">jeniskamar</label>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="hargakamar">
  <label for="floatingInput">hargakamar</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="keterangan">
  <label for="floatingInput">keterangan</label>
  <br>
  <button class="btn btn-success" type="submit" name="submit">submit</button>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>