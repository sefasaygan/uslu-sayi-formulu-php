<?php
// üslü sayılarda toplama işlemi formülü
// yapım:sefa sayğan
$sayi=4; // Gerçek sayıyı belirtir
$sayi2=4; // 2ci Gerçek sayıyı belirtir

$uslu=1; //Üslü sayıyı belirtir
$uslu2=2; // 2ci Üslü sayıyı belirtir

$islem=1; // işlemleri çarparak değişkende tutmayı sağlar
if($sayi==$sayi2){ // tabanların eşitliği kontrolü
	$uslusayi=$uslu+$uslu2; // tabanlar eşitse 2 üslü toplanır


for($i=0;$i<$uslusayi;$i++){ //üslü sayının toplamı kadar döngü dönmesi
	$islem=$islem*$sayi; //sayıların üslü sayı kadar çarpılması
}
}else{
	$islem="Tabanlar eşit değil"; //tabanlar eşit değilse uyarı vermesi
}
echo $islem;
 
?>