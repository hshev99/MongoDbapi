<?php
/**
 * Created by PhpStorm.
 * User: hshev99
 * Date: 2017/4/12
 * Time: 下午3:14
 */


/*
 * @content 展示PHP信息的函数
 * @author sufarui
 * @parent $a
 * **/
function get_php_info($a=0){
    phpinfo();exit();
}
get_php_info();