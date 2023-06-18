<?php

require "../models/data.php";

include "../views/home.php";
// Boucle affichage articles
include('../models/data.php');

// Parcourir les données dans la variable $data
function afficherProduits($data)
{
    echo '<div class="row mx-0 rangee">';
    foreach ($data as $category => $items) {
        echo '<h2>' . ucfirst($category) . '</h2>'; // Afficher le nom de la catégorie en majuscule

        foreach ($items as $subCategory => $subItems) {
            echo '<h3>' . ucfirst($subCategory) . '</h3>'; // Afficher le nom de la sous-catégorie en majuscule

            // Parcourir les éléments de la sous-catégorie
            foreach ($subItems as $item) {
                echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                echo '<img class="image card-img-top" src="' . $item['img'] . '">';
                echo '<br>';
                echo '<div class="card-body">';
                echo '<p class="card-title">' . $item['brand'] . '</p>';
                echo '<p class="card-title">' . $item['name'] . '</p>';
                echo '<p class="card-text">' . $item['price'] . '</p>';
                echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                echo '</div>';
                echo '</div>';
                echo '<br>';
                echo '<br>';
            }
        }
    }
    echo '</div>';
}
function afficherAccueil($data)
{
    echo '<div class="row mx-0 rangee">';
    foreach ($data as $category => $items) {
        echo '<h2>' . ucfirst($category) . '</h2>'; // Afficher le nom de la catégorie en majuscule

        foreach ($items as $subCategory => $subItems) {
            echo '<h3>' . ucfirst($subCategory) . '</h3>'; // Afficher le nom de la sous-catégorie en majuscule

            // Parcourir les éléments de la sous-catégorie
            foreach ($subItems as $item) {
                echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                echo '<img class="image card-img-top" src="' . $item['img'] . '">';
                echo '<br>';
                echo '<div class="card-body">';
                echo '<p class="card-title">' . $item['brand'] . '</p>';
                echo '<p class="card-title">' . $item['name'] . '</p>';
                echo '<p class="card-text">' . $item['price'] . '</p>';
                echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                echo '</div>';
                echo '</div>';
                echo '<br>';
                echo '<br>';
            }
        }
    }
    echo '</div>';
}
// function afficherImages($limit = 3)
// {
//     // Inclure le fichier data.php
//     require_once '../models/data.php';

//     // Vérifier si les tableaux $data et $planches existent
//     if (isset($data) && is_array($data) && isset($data['planches']) && is_array($data['planches'])) {
//         echo '<div class="row mx-0 rangee">';
//         $i = 1;
//         foreach ($data['planches'] as $planche) {
//             if ($i > $limit) {
//                 break;
//             }
//             echo '<div class="card col-md-6 col-sm-12 col-lg-4">';
//             echo '<img src="../assets/img/planches/' . $planche["img"] . '" alt="' . $planche["brand"] . ' ' . $planche["name"] . '" class="image card-img-top">';
//             echo '<div class="card-body">';
//             echo '<h5 class="card-title">' . $planche["brand"] . ' ' . $planche["name"] . '</h5>';
//             echo '<p class="card-text">' . $planche["price"] . '</p>';
//             echo '<a href="#" class="btn btn-primary">Découvrir</a>';
//             echo '</div>';
//             echo '</div>';
//             $i++;
//         }
//         echo '</div>';
//     } else {
//         echo 'Aucune donnée disponible.';
//     }
// }
