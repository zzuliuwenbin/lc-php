<?php
$a = "";
$b = fgets(STDIN);//不会因为空格tab等空白字符而中断
echo $b;
$c = explode(" ", trim($b));
var_dump($c);

fscanf(STDIN,"%s",$a);//任何空白都会导致字符串输入中断
$d = explode(",", $a);
var_dump($d);