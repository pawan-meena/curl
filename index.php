<?php
//curl_init();
//curl_setopt();
//curl_exec();
//curl_close();

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://vishal.webhostingindia.racing/php_scripts/curl/index.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$arr=array('name'=>'Vishal');
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
$result=curl_exec($ch);
print_r($result);
curl_close($ch);

/*$url="https://i.pinimg.com/originals/fd/d0/56/fdd056cabe7b66c234e26480b0e791fc.jpg";
$image="image.jpg";

$fimage=fopen($image,'w+');
$ch=curl_init($url);
curl_setopt($ch,CURLOPT_FILE,$fimage);
curl_setopt($ch,CURLOPT_TIMEOUT,1000);
curl_exec($ch);
curl_close($ch);
fclose($fimage);*/
?>