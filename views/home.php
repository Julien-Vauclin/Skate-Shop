<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
<p class="consulte">LES NOUVEAUTÉS</p>
<?php
afficherNouveautes($data);
?>
<p class="consulte">ARTICLES LES PLUS CONSULTÉS</p>
<?php
afficherAccueil($data);
?>
<?php include "components/footer.php" ?>