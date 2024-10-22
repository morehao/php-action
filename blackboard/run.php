<?php

// 创建一个索引数组，每个元素都是一个关联数组
$indexedArray = [
    [
        'name' => 'John Doe',
        'config' => [
            'age' => 30
        ]
    ],
    // 你可以继续添加更多的元素，每个元素都遵循相同的结构
];

// 遍历索引数组，并为每个元素增加顶层的age字段，其值取自config中的age
foreach ($indexedArray as $key => $value) {
    $indexedArray[$key]['age'] = $value['config']['age'];
}

// 打印数组以检查其结构
var_dump($indexedArray);
print_r($indexedArray);
