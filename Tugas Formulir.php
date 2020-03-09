<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width , initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.js"></script>
    <style media="screen">
      body{
         Background:Linear-gradient(to right, cyan, red, black);

      }
      table {
          font: Sans Serif;
          font-size: 10;
        }
        div.box{
         display:inline-block;
         width:200px;
         float:left;
         border: 2px solid #ddd;   margin: lOpx;
         margin: lOpx;
       }
       .double{ border-style: double; border-width: 4px; border-color: #17202A; }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
    <form action="PHP.php" method="post" >
      <h1 align="center"><b> Formulir Pendaftaran Siswa SMK TELKOM</b></h1>
      <h1 align="center"><b> -----Angkatan ke 29-----</b></h1>
      <div>
        <img src="SMK.jpg" width="100" height="100" vspace="20" align="" alt="">
        <img src="YPT.jpg" width="100" height="100" vspace="20" align="right" alt="">
      </div>
      <table cellpadding="5">
        <tr>
          <hr>
          <td>NIS:</td>
          <td> <input type="number" name="NIS" value="" placeholder="NIS"></td>
        </tr>
        <tr>
          <td>Nama Depan:</td>
          <td> <input type="text" name="NamaDepan" value="" placeholder="Nama Depan"> </td>
        </tr>
        <tr>
          <td>Nama Belakang:</td>
          <td> <input type="text" name="NamaBelakang" value="" placeholder="Nama Belakang"> </td>
        </tr>
        <tr>
          <td>Tempat Lahir:</td>
          <td> <input type="text" name="TempatLahir" value="" placeholder="Tempat Lahir"> </td>
        </tr>
        <tr>
          <td>Tanggal Lahir:</td>
          <td> <input type="date" name="TanggalLahir" value=""> </td>
        </tr>
        <tr>
          <td>Agama:</td>
          <td> <input type="text" name="Agama" value="" placeholder="Agama"> </td>
        </tr>
        <tr>
          <td>Jenis Kelamin:</td>
          <td> <input type="radio" name="JenisKelamin" value="L">Pria  <input type="radio" name="JenisKelamin" value="P">Wanita  </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td> <input type="text" name="Email" value="" placeholder="@gmail.com"> </td>
        </tr>
        <tr>
          <td>Instagram:</td>
          <td> <input type="text" name="Instagram" value="" placeholder="Instagram"> </td>
        </tr>
        <tr>
          <td>Website:</td>
          <td> <input type="url" name="Website" value="" placeholder="https://"> </td>
        </tr>
        <tr>
          <td>Alamat:</td>
          <td> <textarea name="Alamat" rows="2" cols="20" placeholder="Alamat"></textarea> </td>
        </tr>
        <tr>
          <td>Jurusan:</td>
          <td> <select  name="Jurusan">
            <option value="">---Pilih Jurusan---</option>
            <option value="RPL">Rekayasa Perangkat Lunak</option>
            <option value="TKJ">Teknik Komputer Dan Jaringan</option>
          </select> </td>
        </tr>
        <tr>
          <td>Kelas:</td>
          <td> <select  name="Kelas">
            <option value="">---Pilih Kelas---</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select> </td>
        </tr>
        <tr>
          <hr>
          <td>Username:</td>
          <td> <input type="text" name="Username" value="" placeholder="ID"> </td>
        </tr>
        <tr>
          <td>Password</td>
          <td> <input type="password" name="Password" value="" placeholder="Password"> </td>
        </tr>
        <tr>
          <td>Pesan:</td>
          <td> <textarea name="Pesan" rows="2" cols="20"></textarea> </td>
        </tr>
        <tr>
          <td> <button type="submit" name="Submit" class="double">Submit</button> </td>
          <td> <button type="reset" name="Reset" class="double">Reset</button> </td>
        </tr>
      </table>
    </form>
    <a href="Praktikum 9.html"></a>
    </div>
   </div>
  </body>
</html>
