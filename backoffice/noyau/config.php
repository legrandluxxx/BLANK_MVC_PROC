<?php

/*
 * ./noyau/config.php
 * Paramètres du moteur MVC
 */

 // Dossier racine admin
   $root = explode('index.php', $_SERVER['PHP_SELF']);
   define('ROOT', 'http://'.$_SERVER['HTTP_HOST'].$root[0]);

 // Dossier racine public
     $root = explode('backoffice', $_SERVER['PHP_SELF']);
     define('ROOTPUBLIC', 'http://'.$_SERVER['HTTP_HOST'].$root[0].'public/www/');
