<?php
$array = [-2,1,2,-3,-2,-4,5,7,-1,45,61,33,-1,-5,-6,4,4,4,-66];
$res_minus = [];
$res_plus = [];

for ($i=0;$i<count($array);$i++){
    $first = $array[$i];
    $second = $array[$i+1];
    $third = $array[$i+2];

    if ($first<0 && $second<0 && $third<0) {
        for ($k = $i; $k <= $i + 2; $k++) {
            $res_minus[] = $array[$k];
        }
    }

    if ($first>0 && $second>0 && $third>0){
        for ($h = $i; $h <= $i + 2; $h++) {
            $res_plus[] = $array[$h];
        }
    }
}
echo "</br>";
print_r($res_minus);
echo "</br>";
print_r($res_plus);
