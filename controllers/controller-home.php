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