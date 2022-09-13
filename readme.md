## Utilisation en local

Pour installer le projet sur votre machine, vous devez le cloner depuis le dépôt Github en utilisant la commande
<br/>
  `https://github.com/Brunod32/ecfDecembre22.git`
<br/>
  Rendez vous dans le dossier dans lequel vous avez cloner le projet en tapant
<br/>
  `cd ecfdecembre22` 
<br/>
  Installer toutes les dépendances 
<br/> 
 `composer install`  
<br/>
  Créez la base de données avec
<br/>
  `php bin/console doctrine:database:create`  
<br/>
  Faites la migration avec 
<br/>
 `php bin/console make:migration`  
 puis `php bin/console doctrine:migrations:migrate`  
<br/>
  Lancez le serveur Symfony 
<br/>
  `symfony serve`  