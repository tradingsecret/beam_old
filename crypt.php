<?php

$arr = [
    0x33, 0x3d, 0xbf, 0x7b, 0x3, 0xbe, 0xda,
    0x86, 0x72, 0xe6, 0xc6, 0xa7, 0x2, 0x7d,
    0x1f, 0xdc, 0x68, 0xd0, 0x59, 0x56, 0x90,
    0x44, 0xfb, 0xc5, 0x92, 0x75, 0xb4, 0x2f,
    0x68, 0x6c, 0x4f, 0x75
];


$chars = array_map("chr", $arr);
$bin = join($chars);
$hex = bin2hex($bin);

echo $hex . "\n";


$hex2 = hex2bin('333dbf7b03beda8672e6c6a7027d1fdc68d059569044fbc59275b42f686c4f75');

$chars = array_map("ord", str_split($hex2));
$chars = array_map("dechex", $chars);
$chars = array_map(function($code) {
   return  "0x" . $code;
}, $chars);

echo implode(", ", $chars) . "\n";


//333dbf7b03beda8672e6c6a7027d1fdc68d059569044fbc59275b42f686c4f75
