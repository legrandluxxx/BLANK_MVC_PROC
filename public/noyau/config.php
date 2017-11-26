<?php

/*
 * ./noyau/config.php
 * Paramètres du moteur MVC
 */

// Dossier racine public
  $root = explode('index.php', $_SERVER['PHP_SELF']);
  define('ROOT', 'http://'.$_SERVER['HTTP_HOST'].$root[0]);

// Dossier racine admin
    $root = explode('public', $_SERVER['PHP_SELF']);
    define('ROOTADMIN', 'http://'.$_SERVER['HTTP_HOST'].$root[0].'backoffice/www/');
