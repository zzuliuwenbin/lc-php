<?php
$n = 0;
$m = 0;
$k = 0;
fscanf(STDIN,"%d%d%d",$n,$m,$k);
$arr = array();
$p=0;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $m; $j++) {
        $arr[$p++] = $i*$j; 
    }
}
rsort($arr);
echo $arr[$k-1];