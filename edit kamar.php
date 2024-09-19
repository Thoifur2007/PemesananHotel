<?php
include "koneksi.php";
$id_kamar=$_GET['id'];
$sql= "select * from kamarhotel where id_kamar=$id_kamar";
$hasil = $db ->query($sql);
$data = mysqli_fetch_assoc($hasil);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="proseskamar.php" method="POST">
    <h1 class="text-center">edit kamar</h1> 
    <input type="hidden" name="id" value="<?php echo $data['id_kamar'] ?>">
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="jeniskamar"value="<?php echo $data['jeniskamar'] ?>">
  <label for="floatingInput">jeniskamar</label>
</div>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="hargakamar"value="<?php echo $data['hargakamar'] ?>">
  
  <label for="floatingInput">hargakamar</label>
</div>
<div class="form-floating">    
  <input type="text" class="form-control" id="floatingPassword" placeholder="Password"name="keterangan"value="<?php echo $data['keterangan'] ?>">
  <label for="floatingPassword">keterangan</label>
  <button class="btn btn-outline-success" type="submit" name="submit">ubah data</button>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>