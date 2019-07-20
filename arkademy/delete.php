<?php
require 'database/koneksi.php';
$id=$_GET['id'];
echo $id;
mysqli_query($koneksi,"DELETE FROM `name` WHERE `id`='$id'");
header('Location:index.php');
?>
