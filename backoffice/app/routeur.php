<?php

/*
 * ./app/routeur.php
 * ROUTEUR PRINCIPAL
 * But :
 *      Charger le controleur et lancer l'action
 *      qui correspond à ce qui est demandé
 *      par l'internaute
 */

/*
  ROUTE PAR DEFAUT
  DASHBOARD du user
 */
    include_once '../app/controleurs/usersControleur.php';
    Controleurs\Users\detailsAction();
