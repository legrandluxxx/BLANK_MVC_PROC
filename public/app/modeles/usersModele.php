<?php

/*
 * ./app/modeles/usersModele.php
 * Modèle pour les users
 */

namespace Modeles\User;

  /**
   * Retourne un enregistrement sur base de son pseudo et de son mdp
   * @param  PDO    $connexion
   * @param  string $pseudo
   * @param  string $mdp
   * @return ARRAY un user
   */
    function findOneByPseudoMdp(\PDO $connexion, string $pseudo, string $mdp){
        $sql = "SELECT *
                FROM users
                WHERE pseudo = :pseudo
                  AND mdp    = :mdp;";
        $rs = $connexion->prepare($sql);
        $rs->bindValue(':pseudo', $pseudo, \PDO::PARAM_STR);
        $rs->bindValue(':mdp', $mdp, \PDO::PARAM_STR);
        $rs->execute();

        return $rs->fetch(\PDO::FETCH_ASSOC);
    }
