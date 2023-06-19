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
// FONCTION POUR AFFICHER CHAQUE TYPE DE PRODUIT
function afficherAccueil($data)
{
    echo '<div class="row mx-0 rangee">';
    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            foreach ($sousvalue as $downkey => $downvaleur) {
                if (
                    $downvaleur['img'] == '../assets/img/accessoires/grip/grip6.webp'
                    or $downvaleur['img'] == '../assets/img/accessoires/roues/roues6.webp'
                    or $downvaleur['img'] == '../assets/img/accessoires/tool/tool6.webp'
                    or $downvaleur['img'] == '../assets/img/chapeaux/bonnet/bonnet2.webp'
                    or $downvaleur['img'] == '../assets/img/pantalon/jean/jean3.webp'
                    or $downvaleur['img'] == '../assets/img/planches/planche10.webp'
                    or $downvaleur['img'] == '../assets/img/planches/planche19.webp'
                    or $downvaleur['img'] == '../assets/img/shoes/shoes6.webp'
                    or $downvaleur['img'] == '../assets/img/hauts/sweat/sweat2.webp'
                ) {

                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            };
        };
    };
    echo '</div>';
};
//
function afficherNouveautes($data)
{
    echo '<div class="row mx-0 rangee">';
    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            foreach ($sousvalue as $downkey => $downvaleur) {
                if (
                    $downvaleur['img'] == '../assets/img/planches/planche20.webp'
                    or $downvaleur['img'] == '../assets/img/chapeaux/casquette/casquette5.webp'
                    or $downvaleur['img'] == '../assets/img/accessoires/roues/roues2.webp'
                    or $downvaleur['img'] == '../assets/img/planches/planche15.webp'
                    or $downvaleur['img'] == '../assets/img/shoes/shoes2.webp'
                    or $downvaleur['img'] == '../assets/img/hauts/tshirt/tshirt5.webp'
                ) {

                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            };
        };
    };
    echo '</div>';
};
// page accessoires 
function afficherAccessoires($data)
{
    echo '<div class="row mx-0 rangee">';
    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($key, 'accessoires') !== false) {

                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            };
        };
    };
    echo '</div>';
};
//page planches
function afficherPlanches($data)
{
    echo '<div class="row mx-0 rangee">';
    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($key, 'planches') !== false) {

                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            };
        };
    };
    echo '</div>';
};
// PAGE VETEMENTS
// Hauts
function showHauts($data)
{
    echo '<p class="soustitre">HAUTS</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($key, 'hauts') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Pantalons
function showPantalon($data)
{
    echo '<p class="soustitre">PANTALONS</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($key, 'pantalon') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Chaussures
function showShoes($data)
{
    echo '<p class="soustitre">CHAUSSURES</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($key, 'shoes') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Chapeaux
function showChapeaux($data)
{
    echo '<p class="soustitre">CHAPEAUX</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($key, 'chapeaux') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// PAGE ACCESSOIRES
// Wax
function showWax($data)
{
    echo '<p class="soustitre">WAX</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($souskey, 'wax') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Roulements
function showBearings($data)
{
    echo '<p class="soustitre">ROULEMENTS</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($souskey, 'bearings') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Grips
function showGrip($data)
{
    echo '<p class="soustitre">GRIPS</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($souskey, 'grip') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Roues
function showRoues($data)
{
    echo '<p class="soustitre">ROUES</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($souskey, 'roues') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Tools
function showTool($data)
{
    echo '<p class="soustitre">TOOLS</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($souskey, 'tool') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
// Trucks
function showTrucks($data)
{
    echo '<p class="soustitre">TRUCKS</p>';
    echo '<div class="row mx-0 rangee">';

    foreach ($data as $key => $value) {
        foreach ($value as $souskey => $sousvalue) {
            shuffle($sousvalue);

            foreach ($sousvalue as $downkey => $downvaleur) {
                if (strpos($souskey, 'trucks') !== false) {
                    echo '<div class="card col-md-6 col-sm-12 col-lg-4 my-3">';
                    echo '<img class="image card-img-top" src="' . $downvaleur['img'] . '">';
                    echo '<br>';
                    echo '<div class="card-body">';
                    echo '<p class="card-title">' . strtoupper($downvaleur['brand']) . '</p>';
                    echo '<p class="card-title">' . $downvaleur['name'] . '</p>';
                    echo '<br>';
                    echo '<p class="card-text">' . $downvaleur['price'] . '</p>';
                    echo '<a href="#" class="btn btn-primary">Découvrir</a>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        }
    }

    echo '</div>';
}
