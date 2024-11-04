<?php
$koneksi=mysqli_connect("localhost","root","","admin");
//cek koneksi
if (mysqli_connect_error()) {
	echo "koneksi database gagal:" .mysqli_connect_error();
} else {
	echo "Database Berhasil Terhubung";
}

?>