<?php
$array = [-2,1,2,-3,-2,-4,5,7,-1,45,61,33,-1,-5,-6,4,4,4,-66];
$new_middle_plus = [];
$new_middle_minus = [];
$res_minus = [];
$res_plus = [];
$start=1;

switch ($start++){

    case 1:
        for ($i=0;$i<count($array);$i++){
            if ($array[$i]<0) {
                $b++;
                array_push($new_middle_minus, $array[$i]);
                if ($b == 3){
                    $res_minus = array_merge($res_minus,$new_middle_minus);
                    $value_minus = count($res_minus)/3;
                }
            }
            elseif ($array[$i]>0){
                $b = 0;
                $new_middle_minus = [];
            }
        }
        print_r($res_minus);
        echo "</br>";
        echo 'Количество отрицательных пар:'.$value_minus."</br>";

    case 2:
        for ($j=0;$j<count($array);$j++){
            if ($array[$j]>0) {
                $g++;
                array_push($new_middle_plus, $array[$j]);
                if ($g == 3){
                    $res_plus = array_merge($res_plus,$new_middle_plus);
                    $value_plus = count($res_plus)/3;
                }
            }
            elseif ($array[$j]<0){
                $g = 0;
                $new_middle_plus = [];
            }
        }
        print_r($res_plus);
        echo "</br>";
        echo 'Количество положительных пар:'.$value_plus."</br>";
        break;
}