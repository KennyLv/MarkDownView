<?php
include 'Parser.php';
$parser = new HyperDown\Parser;
$text = '输入你要转换的内容';
$html = $parser->makeHtml($text);
echo $html;
?>