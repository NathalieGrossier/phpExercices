<?php

$tarif = " ";

$tarif = readline(" tarif ");

$Ancienneté = readline(" Veuillez saisir votre ancienneté dans cette assurance ");

if ($Ancienneté > 5 && $tarif == "tarifRouge") {
    $tarif = "tarifOrange";
} elseif ($Ancienneté > 5 && $tarif == "tarifOrange") {
    $tarif = "tarifVert";
} elseif ($Ancienneté > 5 && $tarif == "tarifVert") {
    $tarif = "tarifBleu";
}
echo (" vous apartenez a la catégorie " . $tarif);
