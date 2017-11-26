<?php
/*
 * ./app/controleurs/usersControleur.php
 * Contrôleur des users
 */

namespace Controleurs\Users;
use Modeles\User;

  /**
   * Affichage du formulaire de connexion
   * @param  integer $error Code de l'erreur
   * @return [type]
   */
      function loginFormAction(int $error = 0){
          GLOBAL $zoneTitre, $zoneContenu;
          $zonetitre = "Connexion";
          ob_start();
            include '../app/vues/users/loginForm.php';
          $zoneContenu = ob_get_clean();
      }

  /**
   * Traitement du formulaire et redirections
   * @param  PDO    $connexion
   * @param  string $pseudo
   * @param  string $mdp
   * @return [type]
   */
      function loginSubmitAction(\PDO $connexion, string $pseudo, string $mdp){
          include_once '../app/modeles/usersModele.php';
          $user = User\findOneByPseudoMdp($connexion, $pseudo, $mdp);
          if ($user):
              // Je lui donne son badge
              $_SESSION[USER] = $user;
              header('location: ' . ROOTADMIN);
          else:
              header('location: ' . ROOT .'login/error/1');
          endif;
      }
