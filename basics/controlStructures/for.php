<?php

$list = array(
    array("name" => "Kalle", "salt" => 856412),
    array("name" => "Pierre", "salt" => 215863)
);

$listCount = count($list);
for ($i = 0; $i < $listCount; $i++) {
    $list[$i]["salt"] = rand(000000, 999999);
    var_dump($list[$i]);
}
