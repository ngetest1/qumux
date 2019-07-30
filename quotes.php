#!/usr/bin/php
<?php
error_reporting(0);
require 'var.php';
echo $cln;
system("clear");
kkktp_banner();
@ini_set('output_buffering',0);
$data = array(''CLBK | Coding Lama Beres Kaga',)
$data2 = $data[array_rand($data)];
$data3 = explode(' | ', $data2);
//$ktp = base64_encode($data3[0]);
//$kk = base64_encode($data3[1]);
$ktp = $data3[0];
$kk = $data3[1];
//$data4 = array('KTP' => $ktp, 'NO_KK' => $kk);
//print(json_encode(array('src'=>'Hasil', 'result'=>$data4)));
echo "\e[97m Code By; Fathur ID - NTS7\n";
echo " Team;\e[92m Newbie Tersakiti Sec7 || www.nts-7.net\n\n";
echo "~ : ".$ktp."\n";
echo "~  : ".$kk."\n";
?>