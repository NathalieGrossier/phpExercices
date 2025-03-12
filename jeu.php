<?php
// Traduction en PHP de l'algo + grand + petit
$nombreCoup = 0;
$rejouer = 'o';
do {
    $nombreGenere = rand(1, 100);
    var_dump($nombreGenere);
    $nombreSaisi = readline("choisis un nombre entre 1 et 100 : ");
    do {
        $textHelp = "veuillez entrer un nombre plus";
        if ($nombreSaisi > $nombreGenere) {
            $nombreSaisi = intval(readline($textHelp . " petit: "));
        } else if ($nombreSaisi < $nombreGenere) {
            $nombreSaisi = intval(readline($textHelp . " grand: "));
        }
        $nombreCoup++;
    } while ($nombreSaisi != $nombreGenere);
    echo ("Bravo vous avez trouvé le nombre " . $nombreGenere . " en " . $nombreCoup . " coup" . ($nombreCoup > 1 ? "s" : "") . PHP_EOL);
    $rejouer = readline("voulez-vous rejouer? (o/n) : ");
} while ($rejouer == 'o');
