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