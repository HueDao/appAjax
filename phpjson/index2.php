<?php
$a1 = '["H\u00e0 N\u1ed9i","H\u1ed3 Ch\u00ed Minh","\u0110\u00e0 N\u1eb5ng"]';
$a2 = '{"name":"\u0110\u00e0o Th\u1ecb Hu\u00ea","age":22,"location":"H\u00e0 N\u1ed9i"}';
$phpStr = json_decode($a1);
echo '<pre>';
print_r($phpStr);
echo '</pre>';

$phpStr2 = json_decode($a2);
echo '<pre>';
print_r($phpStr2);
echo '</pre>';