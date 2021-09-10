<?php

$arr = [
    0xcf, 0x9c, 0xc2, 0xdf, 0x67, 0xa2, 0x24, 0x19,
    0x2d, 0x2f, 0x88, 0xda, 0x20, 0x20, 0x00, 0xac,
    0x94, 0xb9, 0x11, 0x45, 0x26, 0x51, 0x3a, 0x8f,
    0xc0, 0x7c, 0xd2, 0x58, 0xcd, 0x7e, 0x50, 0x70,
];


$chars = array_map("chr", $arr);
$bin = join($chars);
$hex = bin2hex($bin);

echo $hex . "\n";



$hex2 = hex2bin('e0a96dc5d18190af953218ccfcb99ed925b987d4b631026a4ed12fd2c3c5fa28');

$chars = array_map("ord", str_split($hex2));
$chars = array_map("dechex", $chars);
$chars = array_map(function($code) {
   return  "0x" . $code;
}, $chars);

echo implode(", ", $chars) . "\n";


//cf9cc2df67a224192d2f88da202000ac94b9114526513a8fc07cd258cd7e5070
