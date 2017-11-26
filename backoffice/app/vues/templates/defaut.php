<?php

/*
 * ./app/vues/templates/admin/defaut.php
 * TEMPLATE GENERAL
 * Zones dynamiques :
 *      - zoneTitre
 *      - zoneContenu
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../app/vues/templates/partials/head.php'; ?>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include '../app/vues/templates/partials/navigation.php'; ?>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <?php echo $zoneContenu; ?>
      </div>
      <!-- /container -->

    <!-- Scripts -->
        <?php include '../app/vues/templates/partials/scripts.php'; ?>
  </body>
</html>
