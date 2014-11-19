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

    static public $compress = false;

    //是否开启压缩
    function pr($str)
    {
        if (self::$compress == false) {
            echo $str . "\n";
        } else {
            echo $str;
        }
    }

    function css($css)
    {
        foreach ($css as $val) {
            $this->pr('<link rel="stylesheet" href="' . $val . '">');
        }
    }

    function js($js)
    {
        foreach ($js as $val) {
            $this->pr('<script src="' . $val . '"></script>');
        }
    }

    function header($title, $css = array(), $js = array(), $meta = array())
    {
        $this->pr("<!DOCTYPE html>");
        $this->pr('<html lang="zh-cn">');
        $this->pr('<head>');

        $this->pr('<meta charset="utf-8">');
        $this->pr('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
        $this->pr('<meta name="viewport" content="width=device-width, initial-scale=1">');
        $this->pr('<title>' . $title . '</title>');
        $this->css($css);
        $this->js($js);
        $this->pr('</head>');
        $this->pr('<body>');
    }

    /*
     *标签
     */
    function h1($content = '', $attr = array())
    {
        echo '<h1';
        $this->attr($attr);
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
    function end($sum = 1)
    {
        for ($i = $sum; $i > 0; $i--) {
            $this->pr(array_pop($this->end));
        }
    }

    /*
     * html尾部代码生成函数
     * js array 样式表
     */
    function footer($js = array())
    {
        $this->js($js);
        $this->pr('</body>');
        $this->pr('</html>');
    }
}