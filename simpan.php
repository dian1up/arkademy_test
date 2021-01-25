<?php
require 'database/koneksi.php';
$gaji=$_POST['gaji'];
$work=$_POST['work'];
$nama=$_POST['nama'];
if($gaji=="10.000.000"){
  $gaji="1";
}
else{
  $gaji="2";
}

if($work=="Frontend Dev"){
  $work="1";
}
else{
  $work="2";
}
$query=mysqli_query($koneksi,"SELECT COUNT(`id`) as total FROM name WHERE id");
$aSensor = mysqli_fetch_array($query);
$id=$aSensor['total']+1;

mysqli_query($koneksi,"INSERT INTO name(name, id_work, id_salary)VALUES('$nama','$work','$gaji')");
header('Location:index.php');
?>
