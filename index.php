<?php
require_once "tris.php";
$tab = [5, 3, 8, 1, 4];
$n = count($tab);

$trieB = triBulles ( $tab );
echo implode (', ', $trieB ). "\n";

$tailles = [100 , 500 , 1000 , 2000 , 5000 , 10000];

 foreach ( $tailles as $n) {
    $tab = range ($n , 1); // [n, n -1, ... , 2, 1] = cas defavorable
    $time = triBullesChrono ( $tab );
    $nbComp = triBullesCompte ( $tab );
    echo "n = $n : $nbComp comparaisons , $time ms\n";
 }


$tab = [5, 3, 8, 1, 4];
$trieS = triSelection ( $tab );
echo implode (', ', $trieS )."\n";

$tailles = [100 , 500 , 1000 , 2000 , 5000 , 10000];

 foreach ( $tailles as $n) {
    $tab = range ($n , 1); // [n, n -1, ... , 2, 1] = cas defavorable
    $times = triSelectChrono ( $tab );
    $nbCompS = triSelectionCompte ( $tab );
    echo "n = $n : $nbCompS comparaisons , $times ms\n";
 }

 $tab = [5, 3, 8, 1, 4];
$trieI = triInsertion ( $tab );
echo implode (', ', $trieI )."\n";

$tailles = [100 , 500 , 1000 , 2000 , 5000 , 10000];

 foreach ( $tailles as $n) {
    $tab = range ($n , 1); // [n, n -1, ... , 2, 1] = cas defavorable
    $times = triInsertChrono ( $tab );
    $nbCompS = triInsersionCompte ( $tab );
    echo "n = $n : $nbCompS comparaisons , $times ms\n";
 }