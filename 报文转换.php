<?php

$input = fgets(STDIN);
$arr = explode(" ", trim($input));
$result = "";
for($i=1;$i<count($arr);$i++){
    $c = $arr[$i];
    if($c=="A"){
        $result = $result."12 34 ";
    }else if($c=="B"){
        $result = $result."AB CD ";
    }else{
        $result = $result.$c." ";
    }
}
echo count(explode(" ",$result))." ".trim($result);