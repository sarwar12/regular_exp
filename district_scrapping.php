<?php 
$markup = file_get_contents('https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A7%87%E0%A6%B0_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A6%B0_%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A6%BF%E0%A6%95%E0%A6%BE');

$pattern = '/<a href="\/wiki\/[^>]+>([^<]+)<\/a>/';
echo preg_match_all($pattern, $markup, $matches);
echo "<pre> ";
//print_r($matches);
print_r(array_slice($matches[1],1,570));
echo "</pre>"; 