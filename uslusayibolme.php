<?php
// üslü sayılarda bölme işlemi formülü
// yapım:sefa sayğan
$sayi=2; // Gerçek sayıyı belirtir
$sayi2=2; // 2ci Gerçek sayıyı belirtir

$uslu=6; //Üslü sayıyı belirtir
$uslu2=2; // 2ci Üslü sayıyı belirtir

$islem=1; // işlemleri çarparak değişkende tutmayı sağlar
if($sayi==$sayi2){ //üslerin  eşitliği kontrolü
	$uslusayi=$uslu-$uslu2; // üsler eşitse 2 tabanlar çarpılır


for($i=0;$i<$uslusayi;$i++){ //üslü sayı kadar döngü dönüşü olur
	$islem=$islem*$sayi; //sayıların üslü sayı kadar çarpılması
}
}else{
	$islem="Tabanlar eşit değil"; //tabanlar eşit değilse uyarı vermesi
}
echo $islem;
?>