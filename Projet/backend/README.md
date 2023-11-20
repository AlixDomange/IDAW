Avant d'utiliser le site, il faut éxécuter le fichier backend/init_db.php pour créer la base de données.

Pour se connecter sur le site, il est préférable d'utiliser le login 'alixdomange' avec le mot de passe 'mdp1 ', pour accéder au compte avec le plus de données.

On accède au site par le fichier frontend/index.php
Il est possible de créer un compte ou de se connecter avec un compte existant.

Après connexion, la page index.php?page=profil affiche les informations de l'utilisateur.

index.php?page=aliments affiche la liste des aliments qui récupère tous les éléments de la table aliments avec un méthode GET.

On peut modifier (méthode PUT) ou supprimer (méthode DELETE) un aliment en cliquant sur celui-ci. On peut aussi ajouter un aliment à son journal avec une méthode POST.

On peut visualiser tous nos aliments consommés dans index.php?page=journal, avec une méthode GET qui récupère tous les éléments de la table journal.
On peut modifier un élément du journal (méthode PUT) ou le supprimer (méthode DELETE), en cliquant sur l'aliment.

La page index.php?page=statistique affiche les statistiques de l'utilisateur, c'est-à-dire chaque quantité de proteines, sel... consommées pour une date donnée, avec la comparaison aux apports nutritionnels recommandés.

Eléments à améliorer :

Problème avec la base de données où le champ "calories" aurait du apparaître.

Problème avec l'affichage des statistiques de l'utilisateur : les quantités consommées pour chaque jour affichent NULL même si un aliment a été consommé à cette date.