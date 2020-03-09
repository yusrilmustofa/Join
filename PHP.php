<?php
$NIS =$_POST['NIS'];
$NamaDepan =$_POST['NamaDepan'];
$NamaBelakang =$_POST['NamaBelakang'];
$TempatLahir =$_POST['TempatLahir'];
$TanggalLahir=$_POST['TanggalLahir'];
$Agama =$_POST['Agama'];
$JenisKelamin =$_POST['JenisKelamin'];
$Email =$_POST['Email'];
$Instagram =$_POST['Instagram'];
$Website =$_POST['Website'];
$Alamat =$_POST ['Alamat'];
$Jurusan =$_POST['Jurusan'];
$Kelas =$_POST['Kelas'];
$Username =$_POST['Username'];
$Password =$_POST['Password'];

if ($Username == $NamaDepan && $Password == $NamaBelakang) {
  echo "<b>Login Berhasil</b>";// code...
}else {

}
echo "<br>";
echo "NIS:".$NIS;
echo "<br>";
echo "Nama Depan:".$NamaDepan;
echo "<br>";
echo "Nama Belakang".$NamaBelakang;
echo "<br>";
echo "TempatLahir:".$TempatLahir;
echo "<br>";
echo "TanggalLahir:".$TanggalLahir;
echo "<br>";
echo "Agama:".$Agama;
echo "<br>";
echo "JenisKelamin:".$JenisKelamin;
echo "<br>";
echo "Email:".$Email;
echo "<br>";
echo "Instagram:".$Instagram;
echo "<br>";
echo "Website:".$Website;
echo "<br>";
echo "Alamat:".$Alamat;
echo "<br>";
echo "Jurusan:".$Jurusan;
echo "<br>";
echo "Kelas:".$Kelas;
echo "<br>";
 ?>
