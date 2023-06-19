<title>RAVAGE Skateshop | Accessoires</title>
<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
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
<?php include "components/footer.php" ?>