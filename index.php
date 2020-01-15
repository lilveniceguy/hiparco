<?php
# $search es la acdena de busqueda

$o = 0;
$lim = 12;
$c = 2148;
$r = $c*12;
$search = -5000;
$arr = ['ar','ta','ge','ca','le','vi','li','es','sa','cap','ac','pi'];

if($search == $o){
    $res = $lim-1;
}else{
    if($search>25776 || $search<0){
        $ciclo = round(($search * 1)/$r, 0, PHP_ROUND_HALF_DOWN);
        $era = round($ciclo)+1;
        $erai = round($ciclo)*$r;
        $eraf = $erai+$r;
        $q = $search - $erai;
    }else{
        $q = $search;
    }
    
    $res = round(abs($q) / $c)-1;
    if($q>0){
        $res = ($lim-$res)-1;
    }    
}



echo $arr[$res];
