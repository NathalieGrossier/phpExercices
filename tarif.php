<?php

$tarif = "";
$blacklist = "Vous n'êtes pas éligible auprès de notre assurance.";
do {
    $age = readline("Veuillez saisir votre age ");
} while ($age < 15 || $age > 100);


if ($age >= 15 && $age < 17) {
    echo ("vous etes dans la Catégorie conduite accompagnée . ");
}
// elseif ($age < 17 or $age > 100) {
//     echo ("Vous n'avez pas l'âge requis pour être assuré.");
// }
else {
    $tempDePermis = readline("Veuillez saisir votre temps de permis ");

    $Ancienneté = readline("Veuillez saisir votre ancienneté dans cette assurance ");

    $responsableDunAccident = readline("Veuillez saisir le nombre d'accident dont vous etes responsable ");
    if ($age < 25 && $tempDePermis < 2 && $responsableDunAccident == 0) {
        $tarif = "tarif rouge";
    }


    if ($age < 25 && $tempDePermis >= 2 && $responsableDunAccident == 0) {
        $tarif = "tarif orange";
    } elseif ($age < 25 && $tempDePermis >= 2 && $responsableDunAccident == 1) {
        $tarif = "tarif rouge";
    }

    if ($age > 25 && $tempDePermis < 2 && $responsableDunAccident == 0) {
        $tarif = "tarif orange";
    } elseif ($age > 25 && $tempDePermis < 2 && $responsableDunAccident == 1) {
        $tarif = "tarif rouge";
    }

    if ($age >= 25 && $tempDePermis >= 2 && $responsableDunAccident == 0) {
        $tarif = "tarif vert";
    } elseif ($age >= 25 && $tempDePermis >= 2 && $responsableDunAccident == 1) {
        $tarif = "tarif orange";
    } elseif ($age >= 25 && $tempDePermis >= 2 && $responsableDunAccident == 2) {
        $tarif = "tarif rouge";
    }


    if ($Ancienneté > 5 && $tarif == "tarif rouge") {
        $tarif = "tarif orange";
    } elseif ($Ancienneté > 5 && $tarif == "tarif orange") {
        $tarif = "tarif vert";
    } elseif ($Ancienneté > 5 && $tarif == "tarif vert") {
        $tarif = "tarif bleu";
    }

    if ($tarif == "tarif rouge" || $tarif == "tarif orange" || $tarif == "tarif vert" || $tarif == "tarif bleu") {
        echo ("Vous apartenez à la catégorie " . $tarif);
    } else {
        echo ($blacklist);
    }
}
