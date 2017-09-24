<?php

$arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]; //示例数组

$length = count($arr); //数组长度

for ($i = 0; $i < $length; $i++) {
    echo json_encode($arr); //将数组转为json格式，方便查看
    echo " - " . $i . " - ";
    for ($j = $length - 1; $j > $i; $j--) {
        echo $j;
        if ($arr[$j] < $arr[$j - 1]) { //交换两个值；如果条件使用 > ，数组会从大到小排序
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j - 1];
            $arr[$j - 1] = $tmp;
        }
    }
    echo "<br>";
}
print_r($arr);

///////////////////////函数形式/////////////////////////
function maoPao($arr)
{
    $length = count($arr);

    for ($i = 0; $i < $length; $i++) {
        for ($j = $length - 1; $j > $i; $j--) {
            if ($arr[$j] < $arr[$j - 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
            }
        }
    }

    return $arr;
}
// print_r(maoPao([9,8,7,6,5,4,3,2,1,0]));