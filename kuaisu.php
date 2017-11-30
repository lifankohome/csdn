<?php
/**
 * Created by PhpStorm.
 * User: lifanko  lee
 * Date: 2017/11/30
 * Time: 15:12
 * @param $arr
 * @return array
 */
function quickSort($arr)
{
    //先判断是否需要继续进行
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    //选择第一个元素作为基准
    $base_num = $arr[0];
    //遍历除了标尺外的所有元素,按照大小关系放入两个数组内
    //初始化两个数组
    $left_array = array();  //小于基准的
    $right_array = array();  //大于基准的
    for ($i = 1; $i < $length; $i++) {
        if ($base_num > $arr[$i]) {
            //放入左边数组
            $left_array[] = $arr[$i];
        } else {
            //放入右边
            $right_array[] = $arr[$i];
        }
    }
    //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
    $left_array = quickSort($left_array);
    $right_array = quickSort($right_array);
    //合并
    return array_merge($left_array, array($base_num), $right_array);
}

$arr = array(48, 12, 61, 3, 5, 19, 32, 7);

print_r($arr);

print_r(quickSort($arr));