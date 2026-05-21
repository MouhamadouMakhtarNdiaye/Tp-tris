<?php
function triBulles ( $tab ) {
    $n = count ( $tab );
    for ($i = 0; $i < $n - 1; $i ++) {
        for ($j = 0; $j < $n - 1 - $i; $j ++) {
            if ( $tab [$j] > $tab [$j + 1]) {
                $temp = $tab [$j ];
                $tab [$j] = $tab [$j + 1];
                $tab [$j + 1] = $temp ;
            }
        }
    }
    return $tab ;
}

function triBullesCompte($tab){

    $n = count($tab);
    $compt = 0;
    for ($i =0 ; $i< $n-1; $i++){
        for ($j = 0 ; $j < $n-$i-1; $j++ ){
            $compt= $compt+1;
            if ($tab[$j]>$tab[$j +1]){
                $tmp = $tab[$j];
            $tab[$j] = $tab[$j+1];
            $tab[$j+1] = $tmp;
            $compt++;
            }
        }
    return $compt;
    }
}


function triBullesChrono ( $tab ) {
    $td = microtime(true);
    triBulles($tab);
    $tf = microtime(true);
    return round(($tf - $td)*1000 , 2);
}