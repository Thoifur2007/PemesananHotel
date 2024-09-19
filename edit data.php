<?php
include "koneksi.php";
$id=$_GET['id'];
$sql= "select * from admin where id_admin=$id";
$hasil = $db ->query($sql);
$data = mysqli_fetch_assoc($hasil);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="prosesedit.php" method="POST">
    <h1 class="text-center">edit data</h1> 
    <h3>username</h3>
    <input type="hidden" name="id" value="<?php echo $data['id_admin'] ?>">
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="nama"value="<?php echo $data['nama'] ?>">
  <label for="floatingInput">nama</label>
</div>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"name="usernamee"value="<?php echo $data['usernamee'] ?>">
  <label for="floatingInput">username</label>
</div>
<h3>password</h3>
<div class="form-floating">    
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password"name="pass"value="<?php echo $data['pass'] ?>">
  <label for="floatingPassword">Password</label>
  <button class="btn btn-outline-success" type="submit" name="submit">ubah data</button>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>