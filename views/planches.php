<title>RAVAGE Skateshop | Planches</title>
<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
<p class="consulte">PLANCHES</p>
<?php
ob_start();
require_once "../controllers/controller-home.php";
ob_get_clean();
afficherPlanches($data);
?>
<?php include "components/footer.php" ?>