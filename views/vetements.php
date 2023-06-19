<title>RAVAGE Skateshop | Vêtements</title>
<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
<p class="consulte">VÊTEMENTS</p>
<?php
ob_start();
require_once "../controllers/controller-home.php";
ob_get_clean();
showHauts($data);
showPantalon($data);
showShoes($data);
showChapeaux($data);
?>
<?php include "components/footer.php" ?>