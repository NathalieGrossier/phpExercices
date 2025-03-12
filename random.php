<?php
$nbreR = rand(1, 100);
echo ($nbreR . "\n");
$tentative = 1;
$nbreU = 0;
echo "Bienvenue, vous avez 5 tentatives !\n";
$nbreU = readline("Veuillez saisir un nombre entre 1 et 100 : ");
echo "Il vous reste " . 5 - $tentative . " essai(s)\n";

while ($nbreU != $nbreR && $tentative < 5) {
    while ($nbreU < 1 or $nbreU > 100) {
        echo "Erreur, ce nombre n'est pas compris entre 1 et 100\n";
        $nbreU = readline("Veuillez saisir un nombre entre 1 et 100 : ");
    }
    $tentative = $tentative + 1;


    if ($nbreU < $nbreR) {
        $nbreU = readline("Veuillez saisir un nombre plus grand : ");
    } elseif ($nbreU > $nbreR) {
        $nbreU = readline("Veuillez saisir un nombre plus petit : ");
    }
    echo "Il vous reste " . 5 - $tentative . " essai(s)\n";
}

if ($nbreU == $nbreR) {
    echo "Félicitations, vous avez trouvé le bon numéro !!!!\n";
    echo "Nombre d'essai(s) : $tentative\n";
} else {
    echo "PERDU !!!!!!!!!!!";
}
