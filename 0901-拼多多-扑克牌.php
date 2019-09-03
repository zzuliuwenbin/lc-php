<?php
$s = 0;
fscanf(STDIN,"%d",$s);
for($i=0;$i<$s;$i++){
    $xm = "";
    $xb = "";
    fscanf(STDIN,"%s",$xm);
    fscanf(STDIN,"%s",$xb);
    $result = array();
    dg($xm,"","",$xb,$result);
    echo "{\n";
    sort($result);
    for ($j = 0; $j < count($result); $j++) {
        echo $result[$j]."\n";
    }
    echo "}\n";
}

//剩余的字符串,操作序列,操作的结果,小白的牌,符合条件的结果
function dg($sy,$cz,$jg,$xb,&$result) {
    if($sy==""){//
        if($jg == $xb){
            array_push($result,$cz);
        }
    }else{
        //三种操作，三个递归
        //删除左侧，d
        dg(substr($sy,1),$cz."d ",$jg,$xb,$result);
        //移动到左侧，l
        dg(substr($sy,1),$cz."l ",substr($sy,0,1).$jg,$xb,$result);
        //移动到右侧，r
        dg(substr($sy,1),$cz."r ",$jg.substr($sy,0,1),$xb,$result);
    }
}