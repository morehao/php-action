<?php
$x = "Hello world!";
echo "$x\n";
$y = 'Hello world!';
echo "$y\n";
// 字符串长度
echo strlen($x), "\n";
// 字符串中的单词个数
echo str_word_count($x), "\n";
// 字符串反转
echo strrev($x), "\n";
// 字符串检索
echo strpos($x, "world"), "\n";
// 替换字符串的文本
echo str_replace("world", "Kitty", $x), "\n";
