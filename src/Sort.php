<?php
/**
 * 排序算法
 * Created by PhpStorm.
 * User: wetalou
 * Date: 2022/3/26
 * Time: 22:58
 */

namespace Wetalou\Sort;

/**
 * 冒泡排序
 * @param $arr
 * @return mixed
 */
function bubbleSort($arr)
{
    $len = count($arr);
    for ($i=0; $i<$len; $i++) {
        for ($j=0; $j<$len-$i; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}