<?php
/*
 * ./app/controleurs/usersControleur.php
 * Contrôleur backoffice des users
 */

namespace Controleurs\Users;
use Modeles\User;

  /**
   * Détails d'un enregistrement
   * @return [type]
   */
    function detailsAction(){
        GLOBAL $zoneContenu, $zoneTitre;
        $zoneTitre = "Dashboard - " . ucfirst($_SESSION[USER]['pseudo']);
        ob_start();
          include '../app/vues/users/details.php';
        $zoneContenu = ob_get_clean();
    }
