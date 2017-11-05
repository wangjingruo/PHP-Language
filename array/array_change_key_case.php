<?php

/**
 * array_change_key_case
 * 将数组中的所有键名修改为全大写或小写
 * @param array $data
 * @return array|false
 */
function test($data)
{
    return array_change_key_case($data, CASE_LOWER);
}

var_dump(test(['HEllo'=>1, 'WORld'=>2]));

// 运行结果
// php array_change_key_case.php
// array(2) {
//    ["hello"]=>
//    int(1)
//    ["world"]=>
//    int(2)
// }