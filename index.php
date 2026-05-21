<?php
require_once "tris.php";
$tab = [5, 3, 8, 1, 4];
$n = count($tab);

$trie = triBulles ( $tab );
echo implode (', ', $trie ). "\n";

$tailles = [10, 100 , 500 , 1000 , 2000 , 5000 , 10000];
 foreach ( $tailles as $n) {
    $tab = range ($n , 1); // [n, n -1, ... , 2, 1] = cas defavorable
    $time = triBullesChrono ( $tab );
    $nbComp = triBullesCompte ( $tab );
    echo "n = $n : $nbComp comparaisons , $time ms\n";
 }
