
## A Propos
StarGram est un réseau social réalisé avec laravel et basé sur instagram

## Framework Utilisé 

* **Laravel**
est un framework d'application Web avec une syntaxe expressive et élégante. Nous pensons que le développement doit être une expérience agréable et créative pour être vraiment épanouissante.
* **Bootstrap 3.3.7**

## Exigences du serveur
* PHP >= 7.3
* OpenSSL PHP Extension
* PDO PHP Extension
* NodeJS

## Contributeurs
* [Seta-Art](https://github.com/Seta-art)
* [Tatani Herman](https://github.com/Tatani-Herman)
* [Ngan Joseph](https://github.com/ngan-joseph)

## Comment l'Utiliser
* Cloner le projet avec la commande **git clone** ou directement sur github
* Créer le fichier **.env** à la racine du répertoire et y coller le contenu du fichier **.env.example**
*  Dans le fichier **.env** configurer le service de mail. Les informations sont disponibles sur [mailtrap.io](https://mailtrap.io)
Il s'agit notamment de changer les inforamtions suivantes:
```python
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
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
## Fonctionnalités
<table>
    <tr>
        <th>Fonctionnalités</th>
        <th> Description</th>
    </tr>
    <tr>
        <th>Création et Gestion d'un profil</th>
        <td> L'application permet de créer un profil avec un nom d'utilisateur unique mais égaalement prend en charge l'édition du profil et des informations de l'utilisateur ainsi que de sa photo de profil</td>
    </tr>
    <tr>
        <th>Création et Gestion des  posts ou publications</th>
        <td> Cette application permet de créer des posts et aussi de les afficher selon l'historique de publication</td>
    </tr>
    <tr>
        <th>Système d'Abonnnement</th>
        <td> On peut s'abonner ou se désabonner à un profil avec actualisation des indices representants le nombre de followers et de following d'un utilisateur</td>
    </tr>
    <tr>
        <th>Messagerie</th>
        <td> Notre application envoie un mail de bienvenue au moment de l'inscription de l'utilisateur</td>
    </tr>
    <tr>
        <th>Système de Cache</th>
        <td> Tout comme la verssion connue d'Instgram, StarGram prends en charge le sytème de cache dans le but de gérer la fréquence d'utilisation de certaines informations et de les conserver au niveau du navigateur ce qui rends les requêtes beaucoup plus rapides</td>
    </tr>
   </table>

### Quelques Screenshots d'utilisation du projet:
## Licence
Le framework Laravel est un logiciel open source sous licence [MIT license](https://opensource.org/licenses/MIT).
