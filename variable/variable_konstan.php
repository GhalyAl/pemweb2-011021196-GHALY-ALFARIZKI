<?php
// definisikan konstansta
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost')

$jari = 10;
	$luas = PHI * $jari * $jari;
	$kll = 2 * PHI * $jari;
	
	echo 'Luas Lingkaran dengan Jari ' . $jari . ' : ' . $luas;
	echo '<br/>Kelilingnya : ' . $kll; 
?>
<?php
	echo '<br/>Nama Databasenya : ' . DBNAME;
	echo '<br/>Lokasi Databasenya ' . DBSERVER;
?>