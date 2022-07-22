<h1>Pembagian Tanpa Operator Bagi</h1>
<?php 
	$angka1=20;
	$angka2=5;
	$hitung=0;
	$hasil=0;

	do{
    	$hasil=$angka1-$angka2;
 		$angka1=$hasil;
 		$hitung ++;
		}while ( $angka1 > 0 );

	echo "20 : 5 = $hitung";
?>

<!-- angka 1 akan terus di kurangi oleh angka kedua sampai hasil samadengan 0 atau mendekati 0 -->