<?php

/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 14/10/24
 * Time: 下午2:20
 */
class without
{
    /*
     * html头部代码生成函数
     * title str 标题
     * css array 样式表
     */
    function header($title, $css = '')
    {
        echo "<!DOCTYPE html>";
        echo '<html lang="zh-cn">';
        echo '<head>';
        echo '<meta charset="utf-8">';
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
        echo '<title>' . $title . '</title>';
        if ($css != '') {
            foreach ($css as $val) {
                echo '<link rel="stylesheet" href="' . $val . '">';
            }
        }
        echo '</head>';
        echo '<body>';
    }

    /*
     * html尾部代码生成函数
     * js array 样式表
     */
    function footer($js = '')
    {
        if ($js != '') {
            foreach ($js as $val) {
                echo '<script src="' . $val . '"></script>';
            }
        }
        echo '</body>';
        echo '</html>';
    }
}