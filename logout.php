<<?php 
session_start(); //digunakan untuk memulai session
session_destroy();
header('Location: index.php'); //jika berhasil maka akan dialihkan ke halaman index(login)
 ?>
