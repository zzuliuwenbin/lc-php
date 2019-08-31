<?php
$a = "";
$b = fgets(STDIN);//不会因为空格tab等空白字符而中断,这个也会读入换行
echo $b;
$c = explode(" ", trim($b));//trim函数可以去除"\t"，"\n"，"\x0B" - 垂直制表符，"\r"，空格，当然也可以指定去除的字符
var_dump($c);

fscanf(STDIN,"%s",$a);//任何空白都会导致字符串输入中断
$d = explode(",", $a);
var_dump($d);