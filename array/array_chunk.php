<?php

/**
 * array_chunk — 将一个数组分割成多个
 * @param array $data
 * @param int $size
 */

function test($data, $size)
{
    return array_chunk($data, $size);
}

$dataArr = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];
var_dump(test($dataArr, 2));


// 运行结果
//php array_chunk.php
//array(4) {
//    [0]=>
//  array(2) {
//        [0]=>
//    string(1) "a"
//        [1]=>
//    string(1) "b"
//  }
//  [1]=>
//  array(2) {
//        [0]=>
//    string(1) "c"
//        [1]=>
//    string(1) "d"
//  }
//  [2]=>
//  array(2) {
//        [0]=>
//    string(1) "e"
//        [1]=>
//    string(1) "f"
//  }
//  [3]=>
//  array(1) {
//        [0]=>
//    string(1) "g"
//  }
//}
