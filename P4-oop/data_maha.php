<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="../include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://nightly.datatables.net/css/jquery.dataTables.min.css">


<body>

    <body>
<?php 
require_once 'class_maha.php';

    $mhs1 = new Mahasiswa ("02011", "Faiz Fikri");
    $mhs1->prodi = "TI";
    $mhs1->thn_angkatan=2012;
    $mhs1->ipk=3.8;

    $mhs2 = new Mahasiswa ("02012", "Alissa Khairunnisa");
    $mhs2->prodi = "TI";
    $mhs2->thn_angkatan=2012;
    $mhs2->ipk=3.9;

    $mhs3 = new Mahasiswa ( "01011", "Rosalie Naurah");
    $mhs3->prodi = "SI";
    $mhs3->thn_angkatan=2010;
    $mhs3->ipk=3.46;

    $mhs4 = new Mahasiswa ("01012", "Defgi Muhammad");
    $mhs4->prodi = "SI";
    $mhs4->thn_angkatan=2010;
    $mhs4->ipk=3.2;
  

$arr_mahasiswa = [$mhs1,$mhs2,$mhs3,$mhs4];

 ?>
<table id="example" class="display">
    <thead>
    <tr class="bg-primary">
        <th>No</th>
        <th>Nim</th>
        <th>Nama Lengkap</th>
        <th>Prodi</th>
        <th>Tahun Angkatan</th>
        <th>IPK</th>
        <th>Predikat</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $counter = 1;
    foreach ($arr_mahasiswa as $mhs){
        echo '<tr><td>'.$counter.'</td>'.
        '<td>'.$mhs->nim.'</td>'.
        '<td>'.$mhs->nama.'</td>'.
        '<td>'.$mhs->prodi.'</td>'.
        '<td>'.$mhs->thn_angkatan.'</td>'.
        '<td>'.$mhs->ipk.'</td>'.
        '<td>'.$mhs->predikat_ipk().'</td>'.
        '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:#158CBA;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#158CBA;"></span></td>';
        $counter++;
    }
    ?>
    
        </tbody>
    </table>
    <hr>
</div>
</body>

</script>
</html>