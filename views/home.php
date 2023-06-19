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
                    <h5 class="titrecarousel">Mid90s</h5>
                    <p>L'humour glissant du casting de Mid90s.<br><a href="https://www.youtube.com/watch?v=lBhGRGUKSNI&ab_channel=TransworldSkateboarding">Ne manquez pas cette vidéo !</p>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/carousel/slide2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="titrecarousel">Illegal Civ</h5>
                    <p><a href="https://i-d.vice.com/en/article/9kpvyz/illegal-civilization-is-more-than-just-an-la-skate-crew-mikey-alfred-interview">Retour sur la vie de Mikey Alfred, ses potes, et son entreprise</a> </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/carousel/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="titrecarousel">X-Games</h5>
                    <p><a href="https://www.youtube.com/watch?v=M_5oD1RiuFg&ab_channel=XGames"> À (re)voir absolument !</a><br>La compétition de Pacifio Skateboard Vert de 2021</p>
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

<script>
    // Fonction pour faire défiler automatiquement les slides toutes les 7 secondes
    function autoScroll() {
        $('#carouselExampleCaptions').carousel('next');
    }
    setInterval(autoScroll, 7000);
</script>
<p class="consulte">LES NOUVEAUTÉS</p>
<?php
afficherNouveautes($data);
?>
<p class="consulte">ARTICLES LES PLUS CONSULTÉS</p>
<?php
afficherAccueil($data);
?>
<!--footer-->
<?php include "components/footer.php" ?>
<!-- test -->