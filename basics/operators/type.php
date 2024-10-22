<?php

class MyClass
{

}

class NotMyClass
{

}

$a = new MyClass();

var_dump($a instanceof MyClass); //输出bool(true)
var_dump($a instanceof NotMyClass); //bool(false)
