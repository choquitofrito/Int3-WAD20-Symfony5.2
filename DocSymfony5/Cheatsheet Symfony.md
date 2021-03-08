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
