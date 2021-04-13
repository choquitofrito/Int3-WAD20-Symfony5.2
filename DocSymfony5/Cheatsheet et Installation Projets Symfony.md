## Création d'un projet


- Création d'un projet
```console
symfony new --full Projet1Symfony5
```

## Serveur interne (on utilisera Apache)

- Lancer le serveur interne (depuis le dossier du projet)
```console
symfony server:start
```
ou
```console
symfony serve
```
Pour arreter le serveur, CTRL-C.

Si on ne le voit pas dans la console:
```console
symfony server:stop
```

## Controllers

- Pour créer un nouveau controller
```console
php bin/console make:controller <nom du nouveau controller>
``` 

Un fichier sera crée pour le controller, en plus d'un dossier et une vue dans *templates*

Si on va utiliser des annotations (et on le fera):
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
Pour créer une rélation: choisir *relation* dans le type de données de l'attribut et puis le type (OneToMany etc...). Guide pour plus d'info

Pour effacer une proprieté: 
- effacez la propriété partout dans le fichier de l'entité (définition de la classe, set, get et code d'initialisation dans le constructeur)
- effacez le repository (attention à ne pas perdre de méthodes créés par vous-mêmes)


## Utiliser Apache comme serveur de dev

```console
composer require symfony/apache-pack
```
Et puis suivre le chapitre du guide consacré à Apache

## Doctrine

- Installer l'ORM
```console
composer require symfony/orm-pack
composer require symfony/maker-bundle --dev
```
- Installer les Fixtures
```console
composer require --dev doctrine/doctrine-fixtures-bundle
```
- Obtenir un repo dans controller:

```php
$em = $this->getDoctrine()->getManager();
// obtenir le repository
$rep = $em->getRepository(Livre::class);
```
- Obtenir un repo dans les fixtures:

```php 
public function load(ObjectManager $manager)
    {
        $repPaciente = $manager->getRepository(Paciente::class);
        $pacientes = $repPaciente->findAll();
        .
        .
```


## Clonation et installation d'un projet qui existe dans github

1. **git clone/git pull** du repo
2. **Arrêter** tous les **serveurs** Symfony
3. Ouvrir une **console** **dans le dossier du projet**
  
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

    a) Remplir la BD en utilisant **Fixtures** (voir chapitre correspondant dans les notes)
    
    b) Deconseillé: remplir la BD avec un **fichier SQL** (qui doit contenit uniquement des INSERT)<br>
    


