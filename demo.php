<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 14/10/24
 * Time: 下午2:20
 */
include 'without.class.php';

$html = new without();

$css = [
    "http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css",
    "http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"
];
$js = [
    "http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js",
    "http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"
];

$html->header('without', $css);

$html->h1("~~~h1~~~~", [
    "id" => "h1",
    "class" => "h",
]);

$html->end();

$html->footer($js);