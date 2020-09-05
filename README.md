
## A Propos
StarGram est un réseau social réalisé avec laravel et basé sur instagram

## Framework Utilisé 

* **Laravel**
Laravel est un framework d'application Web avec une syntaxe expressive et élégante. Nous pensons que le développement doit être une expérience agréable et créative pour être vraiment épanouissante.
* **Bootstrap 3.3.7**

## Exigences du serveur
* PHP >= 7.3
* OpenSSL PHP Extension
* PDO PHP Extension
* NodeJS

## Contributeurs
* Seta-Art
* Tatani Herman
* Ngan Joseph (linker)

## Comment l'Utiliser
* Cloner le projet avec la commande **git clone** ou directement sur github
* Créer le fichier **.env** à la racine du répertoire et y coller le contenu du fichier **.env.example**
*  Dans le fichier **.env** configurer le service de mail. Les informations sont disponibles sur mailtrap.io
Il s'agit notamment de changer les inforamtions suivantes:
```python
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
'MAIL_USERNAME' =null
"MAIL_PASSWORD" =null
MAIL_ENCRYPTION=null
```
* Exécuter les commandes suivantes à la racine du projet:  
```bash  
>>composer install

>>php artisan key:generate 

>>artisan storage:link

>>composer require intervention/image

>>composer require laravel/telescope

>>php artisan telescope: install

>>npm install

>>npm run watch 

>>php artisan migrate
``` 

## Licence
Le framework Laravel est un logiciel open source sous licence [MIT license](https://opensource.org/licenses/MIT).
