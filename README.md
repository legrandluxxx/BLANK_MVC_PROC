# Framework MVC procédural vierge avec Backoffice.
## Pour démarrer :
### La partie publique
1.  Modifier les paramètres : ./public/app/config/parametres.php
2.  Mettez en place votre template :
*   ./public/app/vues/templates/default.php
*   Fractionnez votre code en partials
*   Intégrez les zones dynamiques (à initialiser dans les paramètres)
3.  Modifier votre route par défaut :
*   ./public/www/.htaccess
*   ./public/app/routeur.php
*   ./public/app/routeurs/public.php
*   Appelez le bon contrôleur et la bonne action
4.  Créez votre contrôleur et votre action
*   Faites appel éventuellement au modèle
*   Définissez vos zones dynamiques (avec un tampon seulement si vous y intégrez une vue)


### La Backoffice
1.  Modifiez le menu principal pour la gestion de vos tables
2.  Mettez en place vos routes :
*   ./backoffice/www/.htaccess
*   ./backoffice/app/routeur.php
*   ./backoffice/app/routeurs/xxx.php
3.  Continuez vos développements de manière classique
