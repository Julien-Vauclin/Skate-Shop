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
<p class="consulte">ACCESSOIRES</p>
<?php
ob_start();
require_once "../controllers/controller-home.php";
ob_get_clean();
showWax($data);
showBearings($data);
showGrip($data);
showRoues($data);
showTool($data);
showTrucks($data);
?>
<!--footer-->
<?php include "components/footer.php" ?>
<!-- test -->