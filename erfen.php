<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9]; //示例数组

$left = 0; //左侧下标
$mid = 0; //中央下标
$right = count($arr); //右侧下标
$len = $right; //数组长度

$search = 9; //要查找的数字
$result = false;

while ($right - $left) { //确定循环结束条件，如果要查找的数字不在数组中，要在左右
    $mid = intval(($left + $right) / 2); //得到中央下标
    echo $left . " —— ";
    echo $mid;
    echo " —— " . $right . "<hr>";

    if ($mid >= $len) { //下标越界
        break;
    }
    if ($search < $arr[$mid]) { //要查找的数字在中央下标后面
        $right = $mid;
    } else if ($search > $arr[$mid]) { //要查找的数字在中央下标前面
        $left = $mid;
    } else { //第三种情况是相等，说明查找成功，结束循环
        $result = true;
        break;
    }
}
if ($result) {
    echo "Query OK: " . $mid;
} else {
    echo "Not Found: " . $search;
}

echo "<br>";

$left = 0; //左侧下标
$mid = 0; //中央下标
$right = count($arr); //右侧下标
$len = $right; //数组长度

$result = false;

while ($right >= $left) { //确定循环结束条件，如果要查找的数字不在数组中，要在左右
    $mid = intval(($left + $right) / 2); //得到中央下标
    echo $left . " —— ";
    echo $mid;
    echo " —— " . $right . "<hr>";

    if ($mid >= $len) { //下标越界
        break;
    }
    if ($search < $arr[$mid]) { //要查找的数字在中央下标后面
        $right = $mid - 1;
    } else if ($search > $arr[$mid]) { //要查找的数字在中央下标前面
        $left = $mid + 1;
    } else { //第三种情况是相等，说明查找成功，结束循环
        $result = true;
        break;
    }
}
if ($result) {
    echo "Query OK: " . $mid;
} else {
    echo "Not Found Num: " . $search;
}



