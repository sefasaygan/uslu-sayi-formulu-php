<?php
// üslü sayılarda çarpma işlemi formülü
// yapım:sefa sayğan
$sayi=2; // Gerçek sayıyı belirtir
$sayi2=4; // 2ci Gerçek sayıyı belirtir

$uslu=2; //Üslü sayıyı belirtir
$uslu2=2; // 2ci Üslü sayıyı belirtir

$islem=1; // işlemleri çarparak değişkende tutmayı sağlar
if($uslu==$uslu2){ //üslerin  eşitliği kontrolü
	$tabansayi=$sayi*$sayi2; // üsler eşitse 2 tabanlar çarpılır


for($i=0;$i<$uslu2;$i++){ //üslü sayı kadar döngü dönüşü olur
	$islem=$islem*$tabansayi; //sayıların üslü sayı kadar çarpılması
}
}else{
	$islem="Üsler eşit değil"; //tabanlar eşit değilse uyarı vermesi
}
echo $islem;
 
?>