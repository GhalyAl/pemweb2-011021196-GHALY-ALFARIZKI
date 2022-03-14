<style>
  submit-button:hover span{
    background-color: grey;
  }
</style>
<body>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 class="text-center pt-3 font-weight-bold">FORM PENILAIAN</h1>
<form method="POST" autocomplete="off" action='libfungsi.php' style="margin-left:25%;margin-right:25%;">
  <div class="m-4 border border-primary p-4 rounded">
    <div class="form-group row">
      <label for="text" class="col-6 col-form-label">Nama Lengkap</label> 
      <div class="col-6">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-book"></i>
            </div>
          </div> 
          <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="select" class="col-6 col-form-label">Mata Kuliah</label> 
      <div class="col-6">
        <select id="select" name="matkul" class="custom-select" required="required">
          <option value="matkul">Pilh Mata Kuliah</option>
          <option value="Basis Data">Basis Data</option>
          <option value="DDP">DDP</option>
          <option value="PHP">PHP</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="text1" class="col-6 col-form-label">Nilai UTS</label> 
      <div class="col-6">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-adjust"></i>
            </div>
          </div> 
          <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS" type="text" class="form-control" required="required">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text2" class="col-6 col-form-label">Nilai UAS</label> 
      <div class="col-6">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-adjust"></i>
            </div>
          </div> 
          <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="text" class="form-control" required="required">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="text3" class="col-6 col-form-label">Nilai Tugas/Praktikum</label> 
      <div class="col-6">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-adjust"></i>
            </div>
          </div> 
          <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="text" class="form-control" required="required">
        </div>
      </div>
    </div> 
    <div class="form-group row">
      <div style="margin-left:52%;">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>