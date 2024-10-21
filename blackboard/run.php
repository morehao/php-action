<?php

function myTest() {
    static $b=0;
    echo "static b: $b\n";
    $b++;
}

myTest(); // 输出0
myTest(); // 输出1
myTest(); // 输出2
