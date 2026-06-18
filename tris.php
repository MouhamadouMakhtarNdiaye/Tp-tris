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
        for ($j = 0 ; $j < $n-1-$i; $j++ ){
            $compt= $compt+1;
            if ($tab[$j]>$tab[$j +1]){
                $tmp = $tab[$j];
                $tab[$j] = $tab[$j+1];
                $tab[$j+1] = $tmp;
            }
        }
    }
    return $compt;
}


function triBullesChrono ( $tab ) {
    $td = microtime(true);
    triBulles($tab);
    $tf = microtime(true);
    return round(($tf - $td)*1000 , 2);
}
function triSelection ( $tab ) {
    $n = count ( $tab );
    for ($i = 0; $i < $n - 1; $i ++) {
    $indiceMin = $i;
        for ($j = $i + 1; $j < $n; $j ++) {
            if ( $tab [$j] < $tab [ $indiceMin ]) {
                $indiceMin = $j;
            }
        }
        if ( $indiceMin !== $i) {
            $temp = $tab [$i ];
            $tab [$i] = $tab [ $indiceMin ];
            $tab [ $indiceMin ] = $temp ;
        }
    }
    return $tab;
}

function triSelectionCompte ( $tab ) {
    $n = count ( $tab );
    $compt = 0;
    for ($i = 0; $i < $n - 1; $i ++) {
    $indiceMin = $i;
        for ($j = $i + 1; $j < $n; $j ++) {
            $compt= $compt+1;
            if ( $tab [$j] < $tab [ $indiceMin ]) {
                $indiceMin = $j;
            }
        }
        if ( $indiceMin !== $i) {
            $compt= $compt+1;
            $temp = $tab [$i ];
            $tab [$i] = $tab [ $indiceMin ];
            $tab [ $indiceMin ] = $temp ;
        }
    }
    return $compt;
}

function triSelectChrono ( $tab ) {
    $td = microtime(true);
    triSelection($tab);
    $tf = microtime(true);
    return round(($tf - $td)*1000 , 2);
}

function triInsertion ( $tab ) {
    $n = count ( $tab );
    for ($i = 1; $i < $n; $i ++) {
        $cle = $tab [$i ];
        $j = $i - 1;
        while ($j >= 0 && $tab [$j] > $cle ) {
            $tab[$j+1] = $tab[$j];
            $j--;
        }
        $tab [$j + 1] = $cle ;
    }   
    return $tab ;
}


function triInsersionCompte ( $tab ) {
    $n = count ( $tab );
    $compt = 0;
    $n = count ( $tab );
    for ($i = 1; $i < $n; $i ++) {
        $cle = $tab [$i ];
        $j = $i - 1;
        while ($j >= 0 && $tab [$j] > $cle ) {
            $compt = $compt +1;
            $tab[$j+1 ] = $tab[$j];
            $j--;
        }
        $compt = $compt +1;
        $tab [$j + 1] = $cle ;
    } 
    return $compt ;
}  
    


function triInsertChrono ( $tab ) {
    $td = microtime(true);
    triSelection($tab);
    $tf = microtime(true);
    return round(($tf - $td)*1000 , 2);
}
