<?php

function convert($str,$ky=''){
if($ky=='')return $str;
$ky=str_replace(chr(32),'',$ky);
if(strlen($ky)<8)exit('key error');
$kl=strlen($ky)<32?strlen($ky):32;
$k=array();for($i=0;$i<$kl;$i++){
$k[$i]=ord($ky{$i})&0x1F;}
$j=0;for($i=0;$i<strlen($str);$i++){
$e=ord($str{$i});
$str{$i}=$e&0xE0?chr($e^$k[$j]):chr($e);
$j++;$j=$j==$kl?0:$j;}
return $str;
}

$key='ClueLeve3'; 

$string1='@```@``` 9=&6;3 3';

$string2=convert($string1,$key);

$string3=convert($string2,$key);

echo '<span style="font-family:Courier">'."\n";
echo ''.$key.'<br>'."\n";
echo $string1.'<br>'."\n";
echo $string2.'<br>'."\n";

echo '</span>'."\n";
?>



