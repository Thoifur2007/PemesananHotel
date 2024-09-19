<?php
$hostname="localhost";
$username="root";
$password="";
$database_nama="db_hotel";
                           
$db = mysqli_connect($hostname,$username,$password,$database_nama);
    
if ($db -> connect_error){
    echo "koneksi gagal 1";
    die("eror");
}
// echo "koneksi berhasil"


?>