<?php 
$data = <<<STRING
The capital of bangladesh is dhaka
The capital of afganistan is kabul
The capital of bhutan is thimpu
The capital of maldives is male
The capital of srilanka is colombo
STRING;

$pattern = '/The capital of ([\w]+) is ([\w]+)/';
preg_match_all($pattern, $data, $matches);
//print_r($matches);
//echo preg_replace($pattern, 'The capital of {..$1..} = {..$2..}', $data);
echo preg_replace_callback($pattern, 'replacer', $data);

function replacer($match){
    return 'The capital of <strong>'.strtoupper($match[1]).'</strong> = '.strtoupper($match[2]);
}