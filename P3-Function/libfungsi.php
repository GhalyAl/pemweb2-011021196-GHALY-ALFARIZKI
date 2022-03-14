<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container border border-success p-5" style="margin-top:8%;">
    <div class="m-5 border border-success p-4 rounded text-center">
        <!----- Cetak PHP ----->
        <?php
            if(isset($_POST['submit'])){
                $submit = $_POST['submit'];
                $nama = $_POST ['nama'];
                $matkul = $_POST ['matkul'];
                $nilai_uts = $_POST ['nilai_uts'];
                $nilai_uas = $_POST ['nilai_uas'];
                $nilai_tugas = $_POST ['nilai_tugas'];
                $nilai_akhir = ($nilai_tugas + $nilai_uas + $nilai_tugas) /3;


                echo "Nama Lengkap : $nama <br>";
                echo "Mata Kuliah : $matkul <br>";
                echo "Nilai UTS : $nilai_uts <br>";
                echo "Nilai UAS : $nilai_uas <br>";
                echo "Nilai Tugas : $nilai_tugas <br>";
                echo "Rata-Rata Nilai : $nilai_akhir <br>";

                if($nilai_akhir >=85 && $nilai_akhir <=100){
                    $grade = "A";
                } elseif($nilai_akhir >=70 && $nilai_akhir <=84){
                    $grade = "B";
                } elseif($nilai_akhir >=56 && $nilai_akhir <=69){
                    $grade = "C";
                } elseif($nilai_akhir >=36 && $nilai_akhir <=55){
                    $grade = "D";
                } else {
                    $grade = "E";
                }    
                echo "Grade: $grade <br>";

                switch ($grade){
                    case "A":
                        echo "Sangat Memuaskan";
                        break;
                    case "B":
                        echo "Memuaskan";
                        break;
                    case "C":
                        echo "Cukup";
                        break;
                    case "D":
                        echo "Kurang";
                        break;
                    case "E":
                        echo "Sangat Kurang";
                        break;
                    default;
                        echo "Tidak Ada";
                }

                function kelulusan ($nilai_akhir){
                    if ($nilai_akhir > 55){
                        return "<b>LULUS</b>";
                    }else {
                        return "<b>TIDAK LULUS</b>";
                    }
                }

                $hasil_akhir = kelulusan($nilai_akhir);
                echo "<br>DINYATAKAN " .$hasil_akhir;
            }
        ?>
    </div>
</div>