<?php

$c = $f = $k = $r = 0;

function cek_data($data){
    if(isset($_GET[$data]) == true){
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}

function cel_conv($cel){
    // global = memanggil apapun dari luar fungsi
    global $c,$f,$k,$r;
    $c = $cel;
    $f = ($cel * 9/5) + 32;
    $k = $cel + 273.15;
    $r = $cel * 4/5;
}

function fare_conv($fare){
    // global = memanggil apapun dari luar fungsi
    global $c,$f,$k,$r;
    $c = $fare - 32 * (5/9);
    $f = $fare;
    $k = $fare + 459.67 * (5/9);
    $r = $fare - 32 * 4/9;
}

function kelvin_conv($kelvin){
    // global = memanggil apapun dari luar fungsi
    global $c,$f,$k,$r;
    $c = $kelvin - 273.15;
    $f = $kelvin - 273.15 * (9/5) + 32;
    $k = $kelvin;
    $r = $kelvin - 273.15 * 4/5;
}

function reamur_conv($reamur){
    // global = memanggil apapun dari luar fungsi
    global $c,$f,$k,$r;
    $c = $reamur * 5/4;
    $f = $c * (9/5);
    $k = $reamur;
    $r = $reamur - 273.15 * 4/5;
}


$dor = cek_data("dor");

if($dor == "celci"){
    cel_conv(cek_data("celcius")); 
}
elseif($dor == "fare"){
    fare_conv(cek_data("farenheit")); 
}
elseif($dor == "kelv"){
    kelvin_conv(cek_data("kelvin")); 
}
elseif($dor == "rea"){
    reamur_conv(cek_data("reamur")); 
}

?>