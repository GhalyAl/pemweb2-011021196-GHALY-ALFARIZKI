<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>
<form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
<legend>Form Nilai Ujian</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM</label>
  <div class="col-md-4">
  <input id="nim" name="nim" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="matakuliah">Pilih MK</label>
  <div class="col-md-4">
    <select id="matakuliah" name="matakuliah" class="form-control">
      <option value="Data Warehouse">Data Warehouse</option>
      <option value="Pemrograman Web Lanjut">Pemrograman Web Lanjut</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai">Nilai</label>
  <div class="col-md-4">
  <input id="nilai" name="nilai" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-4">
    <button id="simpan" name="simpan" class="btn btn-success">Simpan</button>
  </div>
</div>
</fieldset>
</form>

<?php
require_once 'class_nilai.php'; 
error_reporting(E_ALL & ~E_NOTICE);

$mahasiswa = new NilaiMahasiswa($_POST['nim'], $_POST['matakuliah'], $_POST['nilai']);
if(isset($_POST["simpan"])){
  echo "<hr>";
  echo "NIM :" .$nim = $_POST['nim'];
  echo "<br/>Mata Kuliah :" .$matakuliah = $_POST['matakuliah'];
  echo "<br/>Nilai :" .$nilai = $_POST['nilai'];
  echo "<br/>Hasil Ujian :" .$mahasiswa->grade();
  echo "<br/>Grade :" .$mahasiswa->hasil();
}
 ?>

    <hr>
</div>
</body>

</html>