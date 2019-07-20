<?php
require 'database/koneksi.php';
$gaji=$_POST['gaji'];
$work=$_POST['work'];
$nama=$_POST['name'];
$id=$_POST['id'];
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
echo $gaji;
echo $work;
echo $nama;
echo $id;
mysqli_query($koneksi,"UPDATE `name` SET `name`='$nama',`id_work`='$work',`id_salary`='$gaji' WHERE `id`='$id'");
header('Location:index.php');
?>
