<?php

// 整数声明
$a = 1234; // 十进制数
$b = 0123; // 八进制数 (等于十进制 83)
//$c = 0o123; // 八进制数 (PHP 8.1.0 起)
$d = 0x1A; // 十六进制数 (等于十进制 26)
$e = 0b11111111; // 二进制数字 (等于十进制 255)
$f = 1_234_567; // 整型数值 (PHP 7.4.0 以后)

// 整数溢出
$large_number = 50000000000000000000;
var_dump($large_number);         // double(5.0E+19)
var_dump(PHP_INT_MAX + 1);       // 32-bit system: double(2147483648)
// 64-bit system: double(9.2233720368548E+18)

// 整数除法
var_dump(25 / 7); // double(3.5714285714286)
var_dump((int)(25 / 7)); // int(3)
var_dump(intdiv(25, 7)); // int(3)
var_dump(round(25 / 7));  // double(4)
