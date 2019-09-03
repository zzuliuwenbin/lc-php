<?php
$str = "";
fscanf(STDIN,"%s",$str);
$arr1 = explode(";", $str);
$arr2 = explode(",", $arr1[0]);
$num = intval($arr1[1]);
$arrji = array();//基数
$arrou = array();//偶数
for($i=0;$i<count($arr2);$i++){
    if(intval($arr2[$i])%2==0){//偶数
        array_push($arrou,intval($arr2[$i]));
    }else{
        array_push($arrji,intval($arr2[$i]));
    }
}
rsort($arrji);
rsort($arrou);
$result = array();
if($num<=count($arrou)){
    for($i=0;$i<$num;$i++){
        $result[$i] = $arrou[$i];
    }
    echo implode(",", $result);
}else{
    $result = $arrou;
    $num = $num-count($arrou);
    for($i=0;$i<$num;$i++){
        array_push($result,$arrji[$i]);
    }
    echo implode(",", $result);
}