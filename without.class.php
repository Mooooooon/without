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
    public $end;

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
     *标签
     */
    function h1($content = '', $attr = null)
    {
        echo '<h1';
        if ($attr != null) {
            $this->attr($attr);
        }
        echo '>';
        echo $content;
        $this->end[] = '</h1>';
    }

//输出标签属性
    function attr($attr)
    {
        foreach ($attr as $key => $value) {
            if (is_int($key)) {
                echo ' ' . $value;
            } else {
                echo ' ' . $key . '="' . $value . '"';
            }
        }
    }

//输出闭合标签
    function end()
    {
        echo array_pop($this->end);
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