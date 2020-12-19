<?php
$ceknilai=[20,50,65,70,80,80,30,55,75];
$jml_nilai= array_sum($ceknilai);
$count_nilai=count($ceknilai);
$nilai_rata2= $jml_nilai/$count_nilai;
$pembulatan = number_format($nilai_rata2, 1, '.', '');
foreach($ceknilai as $n){
echo "Nilai ",$n," =>";
if($n==65){
	echo " Lulus<br>";
}else if($n<=65){
	echo " Tidak Lulus<br>";
}else{
	echo " Lulus<br>";
}
}
echo "=======================================<br>";
echo "Nilai yang di Submit : ",$count_nilai;
echo "<br>";
echo "Jumlah Nilai : ",$jml_nilai;
echo "<br>";
echo "Nilai rata-rata : ",$pembulatan;
echo "<br>";
echo "Lulus : 5 ";
echo "<br>";
echo "Tidak Lulus : 4 ";
?>