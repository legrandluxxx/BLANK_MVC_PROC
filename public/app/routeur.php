<?php

/*
 * ./app/routeur.php
 * ROUTEUR PRINCIPAL
 * But :
 *      Charger le controleur et lancer l'action
 *      qui correspond à ce qui est demandé
 *      par l'internaute
 */

  if (isset($_GET['login'])):
      include_once '../app/routeurs/login.php';
  else :
    // Autres routes publiques
      include_once '../app/routeurs/public.php';
  endif;
