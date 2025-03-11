<?php

$monTableau = [];
$N = 5;

for ($i = 1; $i <= $N; $i = $i + 1) {
    for ($j=1; $j <= $i ; $j++) { 
      if ($j == 1) {
        $monTableau[$i][$j] = 1;
      } elseif ($j == $i) {
        $monTableau[$i][$j] = 1;
      } else {
        $monTableau[$i][$j] = $monTableau[$i - 1][$j -1] + $monTableau[$i-1][$j];
      }
      echo($monTableau[$i][$j]);
    }
    echo("\n");
}


