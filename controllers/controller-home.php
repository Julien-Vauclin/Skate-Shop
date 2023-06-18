<?php

require "../models/data.php";

include "../views/home.php";

function generatePeople($data, $nb = 9)
{
}
// TEST
function card($data, $limit = 9)
{
    $limit = 9;
    $i = 1;
    foreach ($data as $tab) {
        if ($i > $limit) {
            break;
        }
        echo    '<div class="col-lg-3 col-sm-6 mx-5">';
        echo        '<div class="card rangeetop col-lg-3" style="width: 18rem;">';
        echo            '<img src="../assets/img/planches/planche' . $i++ . '.webp" alt="Une planche de skateboard">';
        echo                '<div class="card-body">';
        echo                    '<ul>';
        echo                        '<p class="card-text"><h3>' . $tab["phone"] . '</h3>';
        echo                        '<p class="card-text"><h3>' . $tab["email"] . '</h3>';
        echo                        '<p class="card-text"><h3>' . $tab["postalZip"] . '</h3>';
        echo                        '<p class="card-text"><h3>' . $tab["region"] . '</h3>';
        echo                    '</ul>';
        echo                '</div>';
        echo        '</div>';
        echo    '</div>';
    }
}
// FIN TEST
// Boucle affichage articles
include('../models/data.php');

// Parcourir les données dans la variable $data
foreach ($data as $category => $items) {
    echo '<h2>' . ucfirst($category) . '</h2>'; // Afficher le nom de la catégorie en majuscule

    foreach ($items as $subCategory => $subItems) {
        echo '<h3>' . ucfirst($subCategory) . '</h3>'; // Afficher le nom de la sous-catégorie en majuscule

        // Parcourir les éléments de la sous-catégorie
        foreach ($subItems as $item) {
            echo '<div>';
            echo '<p>' . $item['brand'] . '</p>';
            echo '<p>' . $item['name'] . '</p>';
            echo '<p>' . $item['price'] . '</p>';
            echo '</div>';
        }
    }
}
