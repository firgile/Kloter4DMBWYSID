<?php
$kodebarang=[
"KD0023"=>"15000000","namaA"=>"Laptop asus ROG",
"C42212"=>"12000000","namaB"=>"iphone 12",
"D90312"=>"7000000","namaC"=>"Xiaomi Pocophone",
"HI2020"=>"15000000","namaD"=>"Playstation 5"
];
$promo=10/100;
?>
<!DOCTYPE html>
	<html>
		<head>
		<title></title>
		</head>
		<body>
		<p>item yang di beli</p>
		<br>
		<p>= = = = = = = = = = = = =</p>
		<p><?=$kodebarang["namaA"];?>| 2pcs | Rp <?=$bill1=$kodebarang["KD0023"]*2;?>
		<p><?=$kodebarang["namaD"];?>| 1pcs | Rp <?=$bill2=$kodebarang["HI2020"];?>
		<p>= = = = = = = = = = = = =</p>
		<p>Subtotal <?= $subtotal =$bill1+$bill2;?></p>
		<p>Diskon <?= $diskon = $subtotal*$promo ?></p>
		<p>= = = = = = = = = = = = =</p>
		<br>
		<p>Total Rp <?=$total =$subtotal-$diskon-500000 ?></p>
		</body>
	</html>