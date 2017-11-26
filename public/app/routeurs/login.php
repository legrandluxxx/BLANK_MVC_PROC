<?php

/*
 * ./app/routeurs/login.php
 * ROUTEUR DE CONNEXION
 * PREFIXE : $_GET['login']
 * DOSSIER DE TEMPLATE POUR CES ROUTES : ''
 */

// $template = '';

 switch ($_GET['login']):
    case 'form':
      /*
        ROUTE 2
        Formulaire de connexion au backoffice
        PATTERN : /?login=form
        CTRL : usersControleur
        ACTION: loginFormAction
      */
      include_once '../app/controleurs/usersControleur.php';
      Controleurs\Users\loginFormAction($_GET['error']);
      break;

    case 'submit':
      /*
        ROUTE 1
        Vérification des données du formulaire
        PATTERN : /?login=submit
        CTRL : usersControleur
        ACTION: loginSubmitAction
      */
      include_once '../app/controleurs/usersControleur.php';
      Controleurs\Users\loginSubmitAction($connexion, $_POST['pseudo'], $_POST['mdp']);
      break;
endswitch;
