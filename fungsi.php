<?php

function bilanghai(){
    echo "halo";
}
function hari($hari){
    echo "hari ini hari" .$hari. '<br/>';
}
function tambah($a, $b){
    $total = $a + $b;
    echo $total;
}


bilanghai();
hari("Selasa");
tambah (5, 3);