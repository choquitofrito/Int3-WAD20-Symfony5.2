## Création d'un projet


- Création d'un projet
```console
symfony new --full Projet1Symfony5
```

- Lancer le serveur interne (depuis le dossier du projet)
```console
symfony server:start
```
ou
```console
symfony serve
```

- Créer un nouveau controller
```console
php bin/console make:controller <nom du nouveau controller>
``` 

Un fichier sera crée pour le controller, en plus d'un dossier et une vue dans *templates*

Si on va utiliser des annotations:
```console
composer require annotations
```

## Entities

- Rajouter les librairies de Doctrine dans chaque nouveau projet
```console
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
```

- Creation/rajout d'attributs et de rélations dans les entités
```console
php bin/console make:entity
```
Pour créer une rélation: choisir *relation* dans le type de données de l'attribut


## Doctrine

- Installer 

composer require symfony/orm-pack
composer require symfony/maker-bundle --dev

- Fixtures

composer require --dev doctrine/doctrine-fixtures-bundle

- Obtenir un repo dans controller:

```php
$em = $this->getDoctrine()->getManager();
// obtenir le repository
$rep = $em->getRepository(Livre::class);
```


## Clonation et installation d'un projet

1. **git clone/git pull** du repo
2. **Arrêter** tous les **serveurs** Symfony
3. ouvrir une **console** **Dans le dossier du projet**
4.  
```console
composer install
```
5. **Démarrer le serveur** Symfony 
6. Configurer la bd dans **.env**
7. Créer la BD (si elle n'existe pas)
```console
php bin/console doctrine:database:create
```
8. Créer une migration et la lancer
```console
php bin/console make:migration
php bin/console doctrine:migration:migrate
```
9. Remplir la BD 

    a) Remplir la BD avec un **fichier SQL** (qui doit contenit uniquement des INSERT)<br>
    b) Remplir la BD en utilisant **Fixtures** (voir chapitre correspondant dans les notes)
    