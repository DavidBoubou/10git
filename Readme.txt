Préambule: Le langage utiliser est symfony 4 l'applicatioin est en production.

commande :

1-Installer Symfony 4 , Composer et wampserver via les liens suivants:
http://www.wampserver.com/
https://getcomposer.org/download/
https://symfony.com/download

2-Télecharger le package 10gitallab.rar  


3-Démarer wampserver

4-Entrer dans le répertoire télécharger à partir de l'inivite de commande
	$cd 10Gitallab_project

*En l'absence de fixure il est conseillé de créer la base de données via la commande doctrine. 
	
	$php bin/console doctrine:database:create
	$php bin/console make:migration
	$php bin/console doctrine:migration:migrate

Remarque:
Pour utiliser votre BDD personnel modifier l'url de la BDD du fichier 10Gitallab_Test/.ENV
selon le format fournit en commentaire '#' ligne 29.

5-Lancer le project via la console de commande
 	$php bin/console server:run


-------------------------------- copyright 10gitalllab_test_DavidB   ----------------------------



