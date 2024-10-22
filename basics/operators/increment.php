<?php
/*
 * 自增和自减
 * */

// $a++，先返回再加1
$a = 5;
var_dump($a++); // int(6)
var_dump($a); // int(6)

// ++$b，先加1再返回
$b = 5;
var_dump(++$b); // int(6)
var_dump($b); // int(6)
