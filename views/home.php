<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
<!-- Carousel -->
<div class="row mx-0 justify-content-center slide">
    <div id="carouselExampleCaptions" class="carousel slide col-8">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner slide">
            <div class="carousel-item active">
                <img src="../assets/img/carousel/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mid90s</h5>
                    <p>L'humour glissant du casting de Mid90s.<br>Ne manquez pas cette vidéo !</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/carousel/slide2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Illegal Civ</h5>
                    <p>Retour sur la vie de Mikey Alfred, ses potes, et son entreprise</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/carousel/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>X-Games</h5>
                    <p>À (re)voir absolument !<br>La compétition de Pacifio Skateboard Vert de 2021</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--Fin carousel-->
<p class="consulte">ARTICLES LES PLUS CONSULTÉS</p>
<!-- Rangee 1 -->
<!-- <div class="row mx-0 rangee">
    <div class="card col-md-6 col-sm-12 col-lg-4">
        <img src="../assets/img/planches/planche1.webp" class="image card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Découvrir</a>
        </div>
    </div>
    <div class="card col-md-6 col-sm-12 col-lg-4">
        <img src="../assets/img/planches/planche2.webp" class="image card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Découvrir</a>
        </div>
    </div>
    <div class="card col-md-6 col-sm-12 col-lg-4">
        <img src="../assets/img/planches/planche3.webp" class="image card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Découvrir</a>
        </div>
    </div> -->
<!-- Rangee 2 -->
<!-- <div class="card col-md-6 card col-sm-12 col-lg-4">
        <img src="../assets/img/planches/planche4.webp" class="image card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Découvrir</a>
        </div>
    </div>
    <div class="card col-md-6 col-sm-12 col-lg-4">
        <img src="../assets/img/planches/planche5.webp" class="image card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Découvrir</a>
        </div>
    </div>
    <div class="card col-md-6 col-sm-12 col-lg-4">
        <img src="../assets/img/planches/planche6.webp" class="image card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Découvrir</a>
        </div>
    </div>
</div> -->
<!--fonction pour afficher images-->
<?php
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
?>
<!-- fin fonction pour afficher images -->
<!--fonction-->
<?php afficherAccueil($data) ?>
<!--footer-->
<?php include "components/footer.php" ?>
<!-- test -->