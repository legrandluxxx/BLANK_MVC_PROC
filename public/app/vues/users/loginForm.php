<?php
/*
  ./app/vues/auteurs/loginForm.php
  Formulaire de connexion au BackOffice
  Variables disponibles :
      - $error : INT
 */
 ?>
 <div class="card-panel">
   <div class="row">
     <?php
          switch($error):
            case 1:
                echo '<div class="bg-warning">Invalid pseudo or password !</div>';
                break;
            case 2:
                echo '<div class="bg-warning">HEEEEE LA ! PEUT PAS !!!!</div>';
                break;
          endswitch;
     ?>
     <form class="col-md-6 col-md-offset-3" action="login/submit" method="post">
       <h5>Connexion to the BackOffice</h5>
       <br>
       <div class="input-field">
         <i class="material-icons prefix">account_circle</i>
         <input id="pseudo" type="text" class="validate" name="pseudo">
         <label for="pseudo">Pseudo</label>
       </div>
       <div class="input-field">
         <i class="material-icons prefix">error</i>
         <input id="mdp" type="password" class="validate" name="mdp">
         <label for="mdp">Password</label>
       </div>
       <div class="text-center">
         <button type="submit" class="btn btn-info waves-effect waves-light">Connect</button>
       </div>
     </form>
   </div>
 </div>
