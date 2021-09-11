<?php

$arr = [
    0x76, 0x99, 0x4f, 0xfd, 0x8b, 0xd5, 0xcd, 0xf6,
    0xc3, 0x26, 0x6c, 0x2c, 0xe6, 0x6d, 0x23, 0x5,
    0xf1, 0x1a, 0x3, 0xaf, 0xcc, 0x1d, 0xe4, 0x34,
    0xd8, 0xf5, 0xd5, 0x82, 0x73, 0x2f, 0xa0, 0xe3
];


$chars = array_map("chr", $arr);
$bin = join($chars);
$hex = bin2hex($bin);

echo $hex . "\n";


$hex2 = hex2bin('76994ffd8bd5cdf6c3266c2ce66d2305f11a03afcc1de434d8f5d582732fa0e3');

$chars = array_map("ord", str_split($hex2));
$chars = array_map("dechex", $chars);
$chars = array_map(function($code) {
   return  "0x" . $code;
}, $chars);

echo implode(", ", $chars) . "\n";


//cf9cc2df67a224192d2f88da202000ac94b9114526513a8fc07cd258cd7e5070
