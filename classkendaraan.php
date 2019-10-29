<?php
class kendaraan {
//mensetting propertise dengan private
private $merk;
private $harga;
private $jmlroda;
//membuat function kondisi mobil
function kondisi(){
if ($this->harga>10000000){
return "Mahal";
}else {
return "Murah";
}
}
}
//membuat object agar program bisa ditampilkan
$objMobil = new kendaraan();
//menseting nilai propertise didalam object
$objMobil->setmerk=("Avansa");
$objMobil->setharga=(15000000);
$objMobil->setjmlroda=(4);
//perintah untuk menampilkan program yang telah diseting
echo 'Merek Mobil adalah '.$objMobil->setmerk.'<br>';
echo 'Harga Mobil = '.$objMobil->setharga.'<br>';
echo 'Jumlah Rodanya = '.$objMobil->setjmlroda.'<br>';
//menampilkan function kondisi yang telah dibuat
echo 'Status Harga ='.$objMobil->Kondisi();
?>
