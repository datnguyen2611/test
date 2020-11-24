<?php

function Tong2So($arr, $n) 
{ 
    $first;  
    $second; 
      
    if ($arr[0] > $arr[1]) 
    { 
        $first = $arr[0]; 
        $second = $arr[1]; 
    } 
    else
    { 
        $first = $arr[1]; 
        $second = $arr[0]; 
    } 
  
    for ( $i = 2; $i<$n; $i ++) 
    {    
        if ($arr[$i] > $first) 
        { 
            $second = $first; 
            $first = $arr[$i]; 
        } 
        else if ($arr[$i] > $second and
                 $arr[$i] != $first) 
            $second = $arr[$i]; 
    } 
    return ($first + $second); 
} 
$arr = [14 ,26,30,10,40]; 
    $n = count($arr); 
    echo "Tong 2 so lon nhat la : " 
          , Tong2So($arr, $n);
