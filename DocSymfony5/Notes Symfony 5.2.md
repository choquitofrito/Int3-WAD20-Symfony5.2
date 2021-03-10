- [1. Configuration de base : Composer, Git, XDebug, Visual Studio](#1-configuration-de-base--composer-git-xdebug-visual-studio)
- [2. Installation des outils de base de Symfony](#2-installation-des-outils-de-base-de-symfony)
- [3. Création d'un projet de base (squelette)](#3-création-dun-projet-de-base-squelette)
- [4. Routing](#4-routing)
  - [4.1. Les bases du routing](#41-les-bases-du-routing)
  - [4.2. Création d'un controller de base et des routes](#42-création-dun-controller-de-base-et-des-routes)
      - [Exercices : création des actions](#exercices--création-des-actions)
    - [4.2.1. Les routes contenant de paramètres](#421-les-routes-contenant-de-paramètres)
      - [Exercices : création d'actions contenant de paramètres](#exercices--création-dactions-contenant-de-paramètres)
    - [4.2.2. Les contraintes dans les routes](#422-les-contraintes-dans-les-routes)
      - [Exercices : création de contraintes dans les paramètres des routes](#exercices--création-de-contraintes-dans-les-paramètres-des-routes)
    - [4.2.3. Les valeurs par défaut](#423-les-valeurs-par-défaut)
      - [Exercices : utilisation de valeurs par défaut](#exercices--utilisation-de-valeurs-par-défaut)
    - [4.2.4. Paramètres optionnels](#424-paramètres-optionnels)
    - [4.2.5. Les valeurs alternatives pour les paramètres](#425-les-valeurs-alternatives-pour-les-paramètres)
- [5. Controllers](#5-controllers)
  - [5.1. Création d'un controller sans assistant](#51-création-dun-controller-sans-assistant)
      - [Exercices : création de Controllers](#exercices--création-de-controllers)
  - [5.2. Création d'un controller avec l'assistant](#52-création-dun-controller-avec-lassistant)
      - [Exercices : utilisation de paramètres](#exercices--utilisation-de-paramètres)
  - [5.3. L'objet Response](#53-lobjet-response)
  - [5.4. L'objet Request](#54-lobjet-request)
  - [5.5. Types de réponses d'un controller: render, redirect, redirectToRoute et forward](#55-types-de-réponses-dun-controller-render-redirect-redirecttoroute-et-forward)
    - [5.5.1. Redirect](#551-redirect)
    - [5.5.2. RedirectToRoute](#552-redirecttoroute)
    - [5.5.3. Forward](#553-forward)
    - [5.5.4. Render](#554-render)
- [6. Les Vues. Le moteur de templates TWIG](#6-les-vues-le-moteur-de-templates-twig)
  - [6.1. Création d'un template Twig](#61-création-dun-template-twig)
      - [Exercices : création d'une action et un template](#exercices--création-dune-action-et-un-template)
  - [6.2. Les variables TWIG](#62-les-variables-twig)
      - [Exercices : création de vues](#exercices--création-de-vues)
  - [6.3. Les conditions](#63-les-conditions)
      - [Exercices : conditions IF dans Twig](#exercices--conditions-if-dans-twig)
  - [6.4. Les boucles](#64-les-boucles)
      - [Exercices : communication Controller-Vue](#exercices--communication-controller-vue)
  - [6.5. Les filtres](#65-les-filtres)
  - [6.6. Héritage de templates en TWIG (I)](#66-héritage-de-templates-en-twig-i)
      - [Exercices : création de master pages](#exercices--création-de-master-pages)
  - [6.7. Héritage de Templates en TWIG (II)](#67-héritage-de-templates-en-twig-ii)
      - [Exercices : création de Master Pages](#exercices--création-de-master-pages-1)
  - [6.8. Vider un bloc hérité d'un template](#68-vider-un-bloc-hérité-dun-template)
  - [6.9. Incruster le rendu d'une autre action du controller une vue ('vue partielle')](#69-incruster-le-rendu-dune-autre-action-du-controller-une-vue-vue-partielle)
      - [Exercices : incruster une action du controller dans une section de la vue](#exercices--incruster-une-action-du-controller-dans-une-section-de-la-vue)
  - [6.10. Faire appel à une action depuis la vue](#610-faire-appel-à-une-action-depuis-la-vue)
      - [Exercices: création de liens dans la vue (vers des actions)](#exercices-création-de-liens-dans-la-vue-vers-des-actions)
- [7. Gestion basique d'erreurs dans la réponse du serveur](#7-gestion-basique-derreurs-dans-la-réponse-du-serveur)
  - [7.1. Créer une vue pour chaque erreur à gérer en utilisant les conventions de Symfony](#71-créer-une-vue-pour-chaque-erreur-à-gérer-en-utilisant-les-conventions-de-symfony)
      - [Exercices : traitement d'erreurs](#exercices--traitement-derreurs)
  - [7.2. Modifier la réponse http du serveur](#72-modifier-la-réponse-http-du-serveur)
  - [7.3. Lancer une exception](#73-lancer-une-exception)
- [8. Les environnements de développement et production](#8-les-environnements-de-développement-et-production)
  - [8.1. La base des environnements de travail](#81-la-base-des-environnements-de-travail)
- [8.2. Les fichiers .env et .env.local](#82-les-fichiers-env-et-envlocal)
- [9. Le Web Profiler](#9-le-web-profiler)
  - [9.1. Afficher le contenu des variables avec dump](#91-afficher-le-contenu-des-variables-avec-dump)
- [10. Les Services](#10-les-services)
  - [10.1. Concept de Service](#101-concept-de-service)
  - [10.2. Utilisations des services inclus dans Symfony](#102-utilisations-des-services-inclus-dans-symfony)
      - [Exercices : utilisation de Services](#exercices--utilisation-de-services)
  - [10.3. Création de nos propres services](#103-création-de-nos-propres-services)
      - [Exercices : création de services](#exercices--création-de-services)
  - [10.4. Injecter les services dans le controller](#104-injecter-les-services-dans-le-controller)
  - [10.5. Injection de paramètres dans le service (I)](#105-injection-de-paramètres-dans-le-service-i)
  - [10.6. Utiliser un service dans un autre service](#106-utiliser-un-service-dans-un-autre-service)
  - [10.7. Injection de paramètres dans le service (II)](#107-injection-de-paramètres-dans-le-service-ii)
- [11. Le Modèle](#11-le-modèle)
  - [11.1. Présentation de Doctrine](#111-présentation-de-doctrine)
  - [11.2. Installation de Doctrine dans un projet](#112-installation-de-doctrine-dans-un-projet)
  - [11.3. Installation de Doctrine. Création de la BD](#113-installation-de-doctrine-création-de-la-bd)
  - [11.4. Création des entités et mise à jour de la BD](#114-création-des-entités-et-mise-à-jour-de-la-bd)
  - [11.5. Rajouter/effacer des propriétés d'une entité](#115-rajoutereffacer-des-propriétés-dune-entité)
      - [Exercices : création et manipulation des entités](#exercices--création-et-manipulation-des-entités)
  - [11.6. Le modèle : les relations](#116-le-modèle--les-relations)
    - [11.6.1. Relation Many-To-One](#1161-relation-many-to-one)
    - [11.6.2. Explication du code généré par l'assistant](#1162-explication-du-code-généré-par-lassistant)
      - [Exercices : création d'entités et de rélations](#exercices--création-dentités-et-de-rélations)
    - [11.6.3. Relation Many-To-Many](#1163-relation-many-to-many)
      - [Exercices : création d'une rélation de plusieurs à plusieurs](#exercices--création-dune-rélation-de-plusieurs-à-plusieurs)
    - [11.6.4. Relation One-To-One](#1164-relation-one-to-one)
    - [11.6.5. Relation reflexive (self-association)](#1165-relation-reflexive-self-association)
      - [a) Relation reflexive d'un à plusieurs](#a-relation-reflexive-dun-à-plusieurs)
      - [b) Relation récursive de plusieurs à plusieurs](#b-relation-récursive-de-plusieurs-à-plusieurs)
- [12. Le modèle : accès à la BD avec Doctrine](#12-le-modèle--accès-à-la-bd-avec-doctrine)
  - [12.1. SELECT](#121-select)
    - [12.1.1. SELECT: findOneBy](#1211-select-findoneby)
    - [12.1.2. SELECT: findBy](#1212-select-findby)
    - [12.1.3. SELECT: find](#1213-select-find)
    - [12.1.4. SELECT: findAll](#1214-select-findall)
      - [Exercices : utilisation du CRUD (select)](#exercices--utilisation-du-crud-select)
  - [12.2. INSERT et UPDATE](#122-insert-et-update)
    - [12.2.1. INSERT](#1221-insert)
    - [12.2.2. UPDATE](#1222-update)
    - [12.2.3. DELETE](#1223-delete)
      - [Exercices: utilisation du CRUD (insert, delete)](#exercices-utilisation-du-crud-insert-delete)
- [13. Le modèle : Persistance](#13-le-modèle--persistance)
- [14. Le Modèle : Transitivité en Cascade](#14-le-modèle--transitivité-en-cascade)
      - [Exercices : actions en cascade](#exercices--actions-en-cascade)
- [15. Le Modèle : Encapsulation](#15-le-modèle--encapsulation)
- [16. Le Modèle : Héritage de classes](#16-le-modèle--héritage-de-classes)
  - [16.1. Single Table Inheritance](#161-single-table-inheritance)
  - [16.2. Class Table Inheritance](#162-class-table-inheritance)
- [17. Fixtures pour remplir la BD](#17-fixtures-pour-remplir-la-bd)
      - [Exercices :](#exercices-)
- [18. Accès à la BD avec DQL](#18-accès-à-la-bd-avec-dql)
  - [18.1. SELECT](#181-select)
    - [18.1.1. Requête qui renvoi un array d'arrays](#1811-requête-qui-renvoi-un-array-darrays)
    - [18.1.2. Requête qui renvoi un array d'objets](#1812-requête-qui-renvoi-un-array-dobjets)
  - [18.2. Regular Joins et Fetch Joins](#182-regular-joins-et-fetch-joins)
    - [18.2.1. Regular Join](#1821-regular-join)
    - [18.2.2. Fetch Join](#1822-fetch-join)
    - [18.3. Fonctions Year, Month et Day](#183-fonctions-year-month-et-day)
  - [18.4. UPDATE](#184-update)
      - [Exercices DQL](#exercices-dql)
- [19. Accès à la BD avec DQL en utilisant les classes Repositoires](#19-accès-à-la-bd-avec-dql-en-utilisant-les-classes-repositoires)
      - [Exercices :](#exercices--1)
- [20. Accès à la BD avec Query Builder](#20-accès-à-la-bd-avec-query-builder)
- [TILL HERE](#till-here)
- [Formulaires en Symfony](#formulaires-en-symfony)
  - [Création d'un formulaire indépendant](#création-dun-formulaire-indépendant)
  - [Création une classe de formulaire](#création-une-classe-de-formulaire)
  - [Création d'un formulaire associé à une entité existante](#création-dun-formulaire-associé-à-une-entité-existante)
  - [Types des champs du formulaire](#types-des-champs-du-formulaire)
      - [Exercice : créez l'action et la vue nécessaires pour afficher ce formulaire!](#exercice--créez-laction-et-la-vue-nécessaires-pour-afficher-ce-formulaire)
  - [Propriétés des champs du formulaire](#propriétés-des-champs-du-formulaire)
  - [Méthode et Action](#méthode-et-action)
  - [Boutons dans les formulaires (bonnes pratiques)](#boutons-dans-les-formulaires-bonnes-pratiques)
      - [Exercice : Créez des boutons de submit dans les vues qui rendent les formulaires des exemples précédents](#exercice--créez-des-boutons-de-submit-dans-les-vues-qui-rendent-les-formulaires-des-exemples-précédents)
    - [{#section-4 .ListParagraph}](#section-4-listparagraph)
  - [Rendu du formulaire dans la vue](#rendu-du-formulaire-dans-la-vue)
  - [Résumé : création et personnalisation de base d'un formulaire](#résumé--création-et-personnalisation-de-base-dun-formulaire)
<br>

# 1. Configuration de base : Composer, Git, XDebug, Visual Studio

-   Installez **Composer**

- Installez **Git**

- Installez **XDebug** (voir guide)

- Installez **Visual Studio Code**

Puis, installez ces extensions :

  [Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)

  [PHP NameSpace
        Resolver](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver)

<br>

# 2. Installation des outils de base de Symfony 

-   Téléchargez le fichier **d'installation** de Symfony :

<https://symfony.com/download>

Quand vous le lancez, l'exécutable **symfony.exe** sera installé dans un dossier spécifié par vous-même. **Ce fichier exécutable permet de lancer un certain ensemble d'actions concernant le framework** (ex : créer un projet Symfony, lancer un serveur propre...).

Cette installation ne crée pas de projets, c'est juste pour installer le fichier symfony.exe et le mettre dans le PATH.

<br>

# 3. Création d'un projet de base (squelette)

Créons notre premier projet Symfony!

Allez dans votre dossier htdocs (ou un autre dossier de votre choix) et 

- Créez un projet squelette:  

```console
symfony new --full Projet1Symfony5
```

Cette ligne créera un dossier contenant la structure d'un projet de base Symfony.

**Note** : si vous ne voulez pas installer **symfony.exe** vous pouvez toujours créer vos projets en utilisant composer directement

```console
composer create-project symfony/website-skeleton Projet1Symfony5
```


- Lancez le **serveur web interne** de Symfony depuis la console **et dans le dossier du projet** pour tester son bon fonctionnement (on utilisera ce serveur au lieu d'Apache dans la phase de dev). Allez dans le dossier de votre projet et tapez :

````console
cd Projet1Symfony5
symfony server:start
```` 


- Testez le bon fonctionnement du serveur en regardant les messages sur la console et en tapant l'adresse suivante dans le navigateur : http://localhost:8000/

- Ouvrez le dossier de ce projet en Visual Studio et créez un fichiero de workspace.

<br>

<br>



# 4. Routing

**Objectif** : comprendre l'utilité et le fonctionnement de base des routes dans un framework (Symfony) et être capable de créer des routes
vers les actions des controllers

Maintenant qu'on a une application vide et que le serveur interne fonctionne, on peut créer un controller et une action (pas de vues ni de modèles pour le moment!). Mais d'abord on doit comprendre un minimum sur le fonctionnement du **routing** dans Symfony (valable pour tous les autres frameworks!)

## 4.1. Les bases du routing


Une **route** nous **sert à accéder à une ressource** de l'application
(une action, une page, une image). Pour accéder aux ressources d'une
application web de base **nous sommes habitués à saisir une page PHP
dans l**'**URL** (avec de paramètres, éventuellement) **qui corresponde
à un fichier qui existe dans le serveur**.

**Exemples :**

Adresses standards vers de pages .php:

http://localhost/appAgenda/pages/afficherContacts.php

http://localhost/videoClub/films/rechercherFilm.php?nom=Alien&genre=Scifi&tutu=blablabla

Dans de vraies applications nous devons créer des URLs plus simples, pas seulement pour soigner l'esthétique
mais aussi pour faciliter la saisie et pour la sécurité du site. En général nous voulons taper une
URL sur le navigateur et charger un fichier qui ne corresponde pas
forcement au chemin qu'on tape sur l'URL.

**Exemple :** pour charger la page

http://netflox.localhost/recherche.php?prix=5000&category=four

Nous voulons juste taper :

http://netflox.localhost/recherche/5000/4

Pour ce faire, on utilise une technique qui s'appelle **réécriture
d'URL**.

**Nous allons définir toutes les routes d'un projet nous-mêmes**. Une route
indiquera la correspondance entre ce qu'on tape dans le navigateur et
le code qui sera lancé (dans notre cas une **action d'un controller**, car on utilise le **MVC**) .

Les routes sont définies **dans le code des controllers** (une route pour chaque action). Pour définir une route de Symfony nous pouvons utiliser quatre systèmes :
**annotations, attributs de PHP8, YAML ou  XML**

Suivant les bonnes pratiques de Symfony on
utilisera les **attributs de PHP8** (https://stitcher.io/blog/attributes-in-php-8) ou les **annotations**

Les annotations existent dans plein de langages et spécifient des informations extra **(meta-data)** pour de classes, méthodes, variables etc...

À partir de PHP8 on peut exprimer ces mêmes meta-données en utilisant des **attributs**.

On doit connaitre ces deux systèmes (annotations et attributs) car dans plein de tutos et documentation on verra encore les annotations.

Les attributs font partie de PHP8, mais pour utiliser les annotations il faut installer un module dans le projet. Lancez :

        composer require annotations

Tous les deux vont nous servir à la même chose!

<br>

## 4.2. Création d'un controller de base et des routes

Nous allons créer maintenant un **controller** à la main (expliqué en détail dans les sections qui suivent) contenant une route créée avec **des attributs PHP** :

Créez le fichier **ExemplesRoutingController.php** dans le dossier *src/Controller* du projet

```php
<?php

namespace App\Controller;

// classe de laquelle on doit hériter pour que notre classe soit un controller
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// classe pour créer une Réponse à envoyer au client
use Symfony\Component\HttpFoundation\Response;
// classe qui nous permet de créer de routes
use Symfony\Component\Routing\Annotation\Route;

// notre classe hérite de AbstractController pour être un controller
class ExemplesRoutingController extends AbstractController
{
    // voici la route sous la forme d'attribut PHP8
    
    #[Route('/exemples/routing/accueil')]
    public function afficherMessageAccueil ()
    {
        // la façon la plus simple (pas la seule!) d'envoyer un contenu au client: créer un objet Response et envoyer du HTML dans le constructeur
        return new Response(
            '<html><body>Je suis une action du controller ExemplesRoutingController.</body></html>'
        );
    } 

}



```
La ligne:
 

        #[Route('/exemples/routing/accueil')]

qui crée la correspondance entre
ce qu'on tape dans l'url :

http://projet1symfony.localhost/exemples/routing/accueil

et l'action à lancer (la méthode qui se trouve juste après
l'annotation)

**afficherMessageAccueil**

Une route indiquera alors une **action à lancer (méthode d'une classe)
qui se trouve dans un controller (la classe, dans un fichier .php)**

**Note:** on a choisit d'inclure le nom du controller dans la route. Ce n'est pas obligatoire, la route précéndate aurait pu être :

    #[Route('/louloulou/accueil')]

Mais le fait d'inclure le nom du controller est souvent une bonne manière de faciliter la lecture du code.


Vous pouvez afficher toutes les routes de votre projet en tapant dans la
console cette ligne :

```console
php bin/console debug:route
``` 

L'outil **bin/console** vous permet de générer des bases de données à
partir des entités, d'obtenir information du debugging et de plein
d'autres opérations

Tel que l'on a dit, dans les exemples successifs la route
contiendra souvent le nom de l'action. Le camel-case sera transformé selon
le critère ci-dessous :

```php
public function monAction1() 
```
devient:

```php
"/exemples/routing/mon/action1"
```

Dans le controller ci-dessus on a juste envoyé du code HTML directement
au client en utilisant l'objet **Response**, sans passer par une vue. Mais cette méthode est impossible d'utiliser si on veut créer toute une page
HTML... on ne va pas mettre tout le code HTML dans l'action du controller car on ne respecterait pas la séparation du MVC! La solution est de créer une **vue** qui s'en charge du rendu de la page.

Un action d'un un controller a souvent une vue associé. On étudiera les vues plus tard.

La structure complète du controller, ainsi que l'objet **Response**,
seront expliqués aussi plus tard, il faut juste savoir que Response nous
sert à envoyer une réponse directement au navigateur **sans passer par
une vue**.


#### Exercices : création des actions

1.  Créez une nouvelle action monAction1 qui affiche le message "Ce controller est en charge du répertoire de l'application et je suis juste une action à l'intérieur"

2.  Créez une nouvelle action monAction2 qui affiche la date actuelle. Le path pour la route peut (ou pas) correspondre au nom de l'action, c'est à vous de choisir selon les circonstances et votre critère

<br>

### 4.2.1. Les routes contenant de paramètres
<br>

**Objectif** : créer une action qui puisse accéder aux paramètres
envoyés dans l'URL de la même façon qu'on fait en utilisant $_GET
dans un code PHP normal

Nous avons déjà mentionné que, grâce à la réécriture des URLs nous
n'utiliserons plus le format habituel de passage de paramètres dans
l'URL :

http://netflox.localhost/recherche.php?prix=5000&category=four

Les routes contenant de paramètres auront ce format à partir de maintenant :

<http://netflox.localhost/recherche/5000/four>

On va configurer de routes pour pouvoir accéder facilement à ces
paramètres.

En général le format de routes sera :

**serveur/action/valeurParam1/valeurParam2/...**

Voici un autre exemple :

[http://jamazon.com/produits/add/**5000**/galaxy-s25](http://jamazon.localhost/produits/add/5000/galaxy-s25)

Cette ligne appelle l'action **add** du controller **produits** et lui
envoie les valeurs des deux variables. Voici un exemple pratique.


**Exemple :** Rajoutons à notre controller une action "afficherContact" qui reçoit un prénom et le nom d'une profession

http://localhost:8000/exemples/afficher/contact/Marie/formatrice

et affiche un message de "Je suis Marie et je suis formatrice". 

L'action doit obtenir les valeurs reçues dans l'URL en
utilisant un nouvel objet: **Request** (au lieu de l'array `$_GET` ou `$_POST` qu'on utilise normalement en PHP)


**Procédure :**

1.  **Créez une route** qui permette à l'action de recevoir deux
    paramètres

```php
#[Route("/exemples/afficher/contact/{prenom}/{profession}")]
```

2.  **Créez l'action** afficherAction dans le controller **Exemples**. 
 

Importez d'abord l'objet **Request**:
```php
use Symfony\Component\HttpFoundation\Request;
```

puis créez le code de l'action 


```php
public function afficherContact(Request $objetRequest)
{
    // on obtient les valeurs des paramètres de l'url grâce à la méthode "get" de l'objet Request
    $lePrenom = $objetRequest->get("prenom");
    $laProfession = $objetRequest->get("profession");
    return new Response("<br>Je suis " . $lePrenom . ", " . $laProfession);
}
```

3. Dans ce cas nous n'avons pas une vue, on renvoi la réponse HTML
directement au client en utilisant l'objet Response

4. **Lancez l'action** en tapant l'URL

[http://projet1symfony.localhost/exemples/afficher/Marie/formatrice](http://projet1symfony.localhost/agenda/afficher/Marie/formatrice)

<br>

#### Exercices : création d'actions contenant de paramètres

1.  Créez une nouvelle action afficheTVAC qui reçoit un prix et affiche le prix TVAC 

2.  Créez une autre action qui reçoit trois valeurs et affiche la moyenne 

<br>

### 4.2.2. Les contraintes dans les routes 
<br>

Nous pouvons limiter les caractères qui peuvent apparaitre dans les
paramètres d'une route (pour limiter la saisie dans la barre d'adresse
du navigateur, par exemple).

**Exemple :** dans l'action suivant nous voulons forcer le paramètre
**âge** à contenir uniquement un ou plusieurs caractères uniquement
numériques et pas de lettres

```php
#[Route("/exemples/routing/bienvenue/age/{age}",requirements:['age'=>'\d+'])]
public function bienvenueAge (Request $objRequest){
    return new Response ("Bienvenue au site, vous avez ".$objRequest->get ("age")." ans");
    
}
```
On a utilisé la balise **requirements** et on rajoute une expression
régulière (ici **\d+**). Si vous voulez commencer à créer des
expressions régulières pour vos propres routes, vous pouvez utiliser ce
résumé :

<http://jkorpela.fi/perl/regexp.html>

Nous pouvons aussi choisir un autre format ou on n'utilisera pas la
balise **requirements**. On rajouter l'expression régulière dans de
balises **<>** :

```php
#[Route("/exemples/routing/bienvenue/age/{age<\d+>}")]
public function bienvenueAge (Request $objRequest){
    return new Response ("Bienvenue au site, vous avez ".$objRequest->get ("age")." ans");    
}
```

Si vous ne respectez le format, Symfony affichera **une erreur de route
introuvable**. Pour le moment nous sommes en mode de **développement
(dev)** et Symfony nous montrera l'erreur dans le **Symfony Profiler**
(outil de Symfony pour faciliter le debugging, expliqué plus tard).
Quand on changera au mode **production (prod)** on verra juste un simple
message d'erreur 404 -- page introuvable.

#### Exercices : création de contraintes dans les paramètres des routes

En utilisant la documentation sur les expressions régulières :

1.  Créez une action "afficheVille" qui reçoit le nom d'une ville. Le
    nom doit contenir uniquement de lettres ou de chiffres mais pas
    d'autres caractères (voir $, %, ^ etc...)

2.  Modifiez l'action précédant pour que le paramètre "ville" puis
    avoir une taille maximale de 15 caractères

3.  Créez une action de votre choix contenant de restrictions pour
    le/les paramètres

### 4.2.3. Les valeurs par défaut

Nous pouvons facilement établir une valeur par défaut pour nos
paramètres en rajoutant **?** et puis la valeur dans l'annotation.

**Exemple :** donner une valeur par défaut au paramètre TVA de l'action
qui calcule la TVA

```php
#[Route ("/exemples/routing/affiche/prix/defaut/tvac/{prix}/{tauxTVA?21}")]
public function affichePrixDefautTvac(Request $objetRequest)
{
    $prix = $objetRequest->get("prix");
    $tauxTVA = $objetRequest->get("tauxTVA");
    return new Response("<br>Le produit coûte ".$prix. " euros, ".($prix * (1 + $tauxTVA / 100)). " TVAC");

}  
```

#### Exercices : utilisation de valeurs par défaut

Créez une action "afficheMessage" qui affiche un message un certain
nombre de fois à l'utilisateur. Le message est reçu dans l'url, ainsi
que le nombre de fois. Si le nombre de fois n'est pas indiqué,
l'action l'affichera 10 fois. Le paramètre qui contienne le nombre de
fois doit être numérique

Pour avoir plus information sur la gestion de routes, allez sur la
documentation de Symfony :

<https://symfony.com/doc/current/routing.html>

### 4.2.4. Paramètres optionnels

Vous pouvez créer une route contenant des paramètres optionnels. Il **suffit de rajouter '?' après le nom du paramètre**.

**Exemple** :

```php
#[Route ("/exemples/routing/affiche/prix/opt/tvac/{prix}/{tauxTVA?}")]
public function afficheOptPrixTaux (Request $objetRequest){
    $prix = $objetRequest->get ("prix");
    $tauxTVA = $objetRequest->get ("tauxTVA");
    if (!isset($tauxTVA)){
        $tauxTVA = 21;
    }
    return new Response ("Prix TVAC : " . $prix * (1+$tauxTVA/100));
}
```
<br>

### 4.2.5. Les valeurs alternatives pour les paramètres

Vous pouvez obliger à un paramètre à avoir une valeur parmi un ensemble de valeurs de votre choix en utilisant l'opérateur OR dans la route.

**Exemple**: le paramètre "disponibilité" peut prendre trois valeur (et en plus il est optionnel !)

```php
#[Route ("/exemples/routing/affiche/disponibilite/{disponibilite<oui|non|en attente>?}")]
public function afficheDisponibilite(Request $objRequest)
{
    return new Response("Le produit est " . $objRequest->get("disponibilite"));
}
```
<br>


# 5. Controllers 

## 5.1. Création d'un controller sans assistant

<br>

**1**.  **Créez la classe vide du controller dans le Namespace App\Controller**

**Exemple** : **ContactsController**. La classe doit se trouver dans un fichier ContactsController.php. Utilisez le
NameSpace qui lui correspond (App\Controller par défaut)

```php
<?php
namespace App\Controller;

class ContactsController extends AbstractController{

// ici les actions

}
```
<br>

**2**.  **Importez la classe AbstractController car votre controller
    héritera cette classe (extends)**. Si vous allez utiliser les
    classes **Response** et **Request** importez-les aussi. Importez la
    classe **Annotations** pour pouvoir créer les routes

```php
<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// pour pouvoir utiliser de routes, même si on n'utilise pas des annotations mais de paramètres PHP
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController{

// ici les actions

}
```
<br>

**3**.  **Créez les actions de votre choix dans le controller (dans la classe)**

```php
public function afficherTous (){
    $noms = ['Lucy', 'Juan', 'Salima', 'Mar', 'Lupita',
    'Marie'];
    $strNoms = implode (",", $noms);
    return new Response ($strNoms);
}
```

**4**.  Rajoutez une route pour chaque action que vous venez de créer (avec de paramètres PHP8 ou avec des annotations)

```php
// paramètres PHP8
#[Route ("/contacts/afficher/tous")]
```

```php
// annotations
/**
 * @Route ("/contacts/afficher/tous")
 */
```


**5**.  **Lancez une action**

<http://localhost:8000/contacts/afficherTous>

Le code final du controller sera :

```php
<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactsController extends AbstractController
{

    // ici les actions
    #[Route("/contacts/afficher/tous")]
    public function afficherTous()
    {
        $noms = [
            'Lucy', 'Juan', 'Salima', 'Mar', 'Lupita',
            'Marie'
        ];
        $strNoms = implode(",", $noms);
        return new Response($strNoms);
    }
}
```

#### Exercices : création de Controllers

Créez un controller **Exercice1Controller**. Créez deux actions pour ce controller. Utilisez de paramètres dans au moins une des actions

<br>


## 5.2. Création d'un controller avec l'assistant

Vous pouvez utiliser la commande


```console
php bin/console make:controller <nom du nouveau controller>
```

pour générer automatiquement le squelette d'un controller. Symfony génère le fichier du controller, une action route ainsi qu'une vue associée. Testez-le par vous-mêmes.

#### Exercices : utilisation de paramètres

Créez un controller **Exercice2Controller**. Créez deux actions pour ce controller. Utilisez de paramètres dans au moins une des actions

<br>

## 5.3. L'objet Response

Dans les exemples précédents, les actions **gêneraient** **un contenu
HTML manuellement et l'envoyaient au navigateur en utilisant un objet
de la classe Response**

Un objet **Response** contient toutes les propriétés et les méthodes
pour **définir la réponse au client** (en plus du contenu HTML), mais
ici on va se concentrer sur les plus basiques et indispensables :

-   Le **content** (contenu envoyé au client : un **code HTML**, un
    **contenu JSON**...) et

-   Les **headers** (entêtes http pour indiquer, entre autre, le type de
    réponse qu'on envoie au client -- **HTML, JSON**...). Voici un
    exemple dans une action :

**Exemple** : création d'une action qui utilise l'objet Response (ExemplesReponsesController.php)

N'oubliez pas de rajouter la route !!

```php
#[Route ("/contacts/message/response")]

public function messageResponse(){
    $contenu = "<h1>Je vais être le contenu d'un objet
    Response</h1>";
    $reponse = new Response ();
    $reponse->setExpires(new \DateTime('2025/3/8'));
    $reponse->headers->set ('Content-Type','text/html');
    $reponse->setContent($contenu);
    return $reponse;
}
```
<br>

## 5.4. L'objet Request

Quand on fait appel à une action du controller on est en train de
**faire une requête au controller** (rien à voir avec les requêtes de BD
!). Les informations concernant cette requête (ex : les valeurs des
paramètres dans la URL) sont accessibles via l'objet **Request**.

L'objet **Request** nous permet d'accéder aux variables super-globales
telles que **`$_POST`**, **`$_GET`**, **`$_SERVER`** , **`$_FILES`**.
Regardez cette documentation pour savoir comment accéder à chaque
variable :

<https://symfony.com/doc/current/components/http_foundation.html>

Pour qu'une action puisse accéder à l'objet Request **on doit
juste rajouter un paramètre du type Request dans la signature de
l'action (injecter l'objet Request)**.

On doit importer la classe : 
```php
use Symfony\Component\HttpFoundation\Request;
```


**Exemple** : Utilisation de l'objet Request

Créez l'action suivante dans le controller ContactsController (rajoutez
la route !) et lancez-la dans le navigateur

```php
// L'objet Request rajouté dans la signature de l'action contiendra les données
// de la requête faite au serveur. En ce qui nous concerne maintenant,il 
// contiendra les valeurs des paramètres de l'URL.

#[Route("/contacts/message/request/{prenom}/{profession}")]
public function messageRequest(Request $objetRequest)
{
    echo "Je suis dans le controller, action 'afficher'";
    // on obtient les valeurs des paramètres de l'url,
    // on fait appel à la méthode get de l'objet Request
    $lePrenom = $objetRequest->get("prenom");
    $laProfession = $objetRequest->get("profession");
    return new Response("<br>Le prénom dans l'URL est:" . $lePrenom . "<br>La profession dans l'URL est:" . $laProfession);
}
```

Par la suite on verra comment créer de vues qui reçoivent de données
depuis le controller.

<br>

## 5.5. Types de réponses d'un controller: render, redirect, redirectToRoute et forward

Une action dans un controller peut générer du HTML, JSON, XML, le
téléchargement d'un fichier, une redirection vers une autre action, une
erreur 404 ou plein d'autres résultats : tout dépend de nos besoins.
Parmi les actions principales on a :

**render** permet d'afficher une vue

**redirect** permet de rediriger le navigateur vers une autre adresse,
sans ou avec de paramètres

**redirectToRoute** permet de lancer une action mais en utilisant le nom
(**name**) d'une route. On va voir des exemples dans ce chapitre

**forward** permet de déléguer l'action (pas d'erreur http)

Note : Pour comprendre le fonctionnement de ces réponses, on va créer
des actions dans un nouveau controller ExemplesReponsesController

### 5.5.1. Redirect

La méthode redirect nous permet d'appeler une autre action dans un
autre controller ou rediriger vers une autre adresse web

**Exemple :** redirection vers une autre adresse avec de paramètres

```php
// cette action reçoit un titre de film et réalise une redirection vers imdb
// pour chercher le film

#[Route ("/exemples/reponses/exemple/redirect/{titreFilm}")]
public function exempleRedirect(Request $req)
{
    $titreFilm = $req->get("titreFilm");
    $url = "http://www.imdb.com/find?ref_=nv_sr_fn&q=".$titreFilm;
    // maintenant redirige vers un site externe
    return $this->redirect($url);

}
```

### 5.5.2. RedirectToRoute

Pareil que "Redirect" mais au lieu de spécifier la route complète on
utilisera sa propriété **name**. Nous pouvons envoyer de paramètres à la
nouvelle route.

**Exemple** : Redirection vers une nouvelle route sans paramètres

```php
// Cette action est juste un exemple qui montre comment une action peut
// rediriger vers une autre en utilisant la propriété "name"

#[Route ("/exemples/reponses/redirection/avec/name")]
public function redirectionAvecName(Request $req)
{
    // faire quoi qui ce soit ici....
    // et rediriger après vers une autre route en lui envoyant de paramètres
    return $this->redirectToRoute("spaghettiCarbonara");
}

#[Route ("/exemples/reponses/action/avec/name",name:"spaghettiCarbonara")]
public function actionAvecName(Request $req)
{
    return new Response("Je suis une action qui a été appelée par une autre, je porte un nom");
}
```

<br>

**Exemple** : Redirection vers une nouvelle route avec de paramètres (l'action cible reçoit les paramètres dans l'URL)

```php
// Cette action redirige vers une autre en utilisant la propriété "name" de la 
// deuxième et en lui envoyant de paramètres sous la forme d`array 

#[Route ("/exemples/reponses/redirection/avec/name/params")]
public function redirectionAvecNameParams(Request $req)
{
    // faire quoi qui ce soit ici....
    // et rediriger après vers une autre route
    return $this->redirectToRoute("spaghettiBolognese",
    ['type'=>'bio',
    'prix'=>'10']);
}

#[Route("/exemples/reponses/action/avec/name/params/{type}/{prix}",name:"spaghettiBolognese")]
public function actionAvecNameParams(Request $req)
{
    $type = $req->get("type");
    $prix = $req->get("prix");
    return new Response("Je suis une action qui a été appelée par
    une "
    . "autre, je porte un nom et je reçoit des valeurs: ".$type."
    ".$prix);
}
```

### 5.5.3. Forward

Forward nous permet d'appeler une autre action **d'un autre controller**

**Exemple** : Appel à une autre action d'un autre controller

Ici on a créé l'action "forwardExemple" (n'oubliez pas la route !)
dans le controller

```php
// utilisation de forward pour appeler une action du controller ContactsController

#[Route ("/exemples/reponses/forward/exemple")]
public function forwardExemple()
{
    return $this->forward(
    'App\Controller\ContactsController:afficherTous',
    ['prix' => 400,'tauxTva' => 10]
    );
}
```

### 5.5.4. Render

La méthode **render** prend le nom de la vue (.twig) et optionnellement
une variable contenant de données. L'idée est de passer de données du
controller à la vue.

Par exemple : le controller accède à une BD, obtient un array ou des
objets contenant les données d'un tableau et l'envoie à la vue pour
qu'elle puisse les afficher.

On va étudier cette méthode dans la section qui suit.

<br>


# 6. Les Vues. Le moteur de templates TWIG

En Symfony nous pourrions générer les vues en utilisant du HTML et PHP pur, mais l'utilisation de TWIG comme **moteur de templates** nous facilitera beaucoup la tâche. **Un moteur de templates sert à générer les vues (HTML + JS) à partir d'un fichier de base (template).** On part du principe que tout ce qui concerne la présentation (les vues) se trouvera
dans les templates (jamais dans le controller et encore moins dans le modèle!).

Le moteur TWIG est un **composant** de Symfony mais on pourrait l'utiliser dans n'importe quel projet ailleurs.

Les principaux avantages de TWIG sont :

1.  Il **masque le langage de programmation** des vues : il n'y a pas du PHP dans les templates !

2.  Il fournit une **bonne interface avec les contrôleurs** (ex: recevoir et envoyer des structures de données)

3.  Il nous permet de créer des **hiérarchies de templates** (en détail plus tard, mais on peut déjà mentionner que c'est très utile pour créer une master page)

4.  On peut le lier avec modèle en utilisant **Doctrine** (en détail plus tard)

5.  On peut utiliser un squelette twig **avec d'autres langages de programmation** (ex : python)

Quand on lance la méthode **render** depuis un controller, Symfony parcourt le fichier **.twig** correspondant et génére un objet **Response** à partir de ce fichier. Cet objet génère le HTML+JS qui sera renvoyé au serveur.

Attention : les fichiers .twig utilisent la notation snake case. Ex: Le template pour une action mangeonsDuChocolat sera un fichier portant le
nom mangeons_du_chocolat.html.twig

Notes de base sur Twig :

<https://twig.symfony.com/doc/3.x/>

La documentation complete sur les vues en Symfony se trouve ici :

<https://symfony.com/doc/current/templates.html>

<br>

## 6.1. Création d'un template Twig

On va créer un template Twig qui generera notre vue. Le template reçoit un tableau qui a été créé dans le controller et l'affichera. Normalement le controller accédera à une base de données, mais pour simplifier notre exemple on crée juste un tableau. Faisons un exemple en partant de zéro:

1.  **Créez un controller** ExemplesTwigController
```console
    php bin/console make:controller ExemplesTwig
```
L'assistant créera le fichier du controller dans
src/Controller, ainsi qu'un dossier exemples_twig dans le dossier **Templates**. Ce dossier contiendra toutes les templates twig liées aux
actions de ce controller. Par défaut il y aura déjà une action **index** et un template **index.html.twig**

Vous pouvez faire appel à cette action pour afficher la vue en tapant la route dans le navigateur :

    http://localhost:8000/exemples/twig

car la route définie dans l'action est :

```php
#[Route('/exemples/twig', name: 'exemples_twig')]
```


2.  Créez une **action** exemple1 dans ce controller. Dans l'action
    vous devez indiquer à Symfony de renvoyer au navigateur le rendu de
    la vue qu'on va créer :

```php
#[Route ('/exemples/twig/exemple1',name:'exemple1Twig')]
public function exemple1 (){
    return $this->render ('exemples_twig/exemple_1.html.twig');
}
```

1.  Créez le **template twig** : templates/<nom_du_controller>/<nom_du_template>

Ici il s'agit de **templates/exemples_twig/exemple_1.html.twig**
Attention à la tansformation vers snake case!

Le nom du fichier du template sera le nom spécifié dans l'appel à render du controller


```twig
{% extends 'base.html.twig' %}
{% block body %}
Bonjour! je suis un template!
{% endblock %}
```

Conservez cette structure de blocs dans vos twigs et remplissez à chaque fois le contenu du block body. On étudiera plus tard comment utiliser les blocs pour enrichir la structure d'un template twig. Lancez la page juste pour tester si tout est en ordre, puis continuez la lecture.

#### Exercices : création d'une action et un template

Créez une deuxième action afficheclient et un template qui affiche "vive la Belgique"

<br>

## 6.2. Les variables TWIG


Twig peut utiliser des **variables**, ce qui nous permet d'accéder d'une façon très simple aux données envoyéés au template par le controller. Pour accéder u **vaable** nous devons utiliser cette notation :

```twig
{{ nom }}
```
Pour accéder aux propriétés d'un **objet** on utilisera cette notation :

```twig
{{ client.nom }}
```
Ces variables proviennent du controller. Voyons un exemple. Créez cette action dans le controller :

```php
#[Route('/exemples/twig/affiche/ville', name: 'afficheVille')]
public function afficheVille()
{
    // nous créons une structure de données
    $vars = [
        'nom' => 'Bruxelles',
        'population' => 1500000,
        'client' => 'Belgique'
    ];
    // render reçoit l'array associatif et renvoie l'objet Response
    // on accédera à cette array depuis la vue
    return $this->render(
        'exemples_twig/affiche_ville.html.twig',
        $vars
    );
}
```
<b

Nouvenons de rajouter un paramètre à l'appel **render**. Cela nous permet d'envoyer de valeurs à la vue. Le format est **d'un array associatif dont les clés deviennent de variables** accessibles dans le twig. Ici on l'a appelé $vars mais le nom n'a aucune importance.

On va utiliser maintenant ces variables dans le template twig. **Notez que pour accéder aux variables on a juste utilisé les clés de l'array**


```twig
{% extends 'base.html.twig' %}

{% block body %}

Le nom de la ville est:
{{ nom }}
La population est:
{{ population }}
Cette ville se trouve dans ce client:
{{ client }}

{% endblock %}
```
Faites appel à l'action et observez le résultat.

Nous avons envoyé un array associatif dans le controller. Si on a juste une valeur simple à envoyer c'est encore plus simple :

``hp
re $ts->render ('exemples_twig/blablabla.html.twig',
['cinema'=> 'Aventura']);
```
et on accède dans le template twig:
```twig
{{ cinema }}
```

Si on veut envoyer un array indexé il faudra lui "donner" une clé pour qu'il soit accessible dans le fichier twig. Par exemple :

```php
$lesStagiaires = ['Lucie','Salima','Doris'];
```

Render enverra un array associatif contenant **une clé** dont le contenu est l'array complet :

```php
$vars = ['lesStagiaires' => $lesStagiaires ]
```
Dans le fichier twig on pourra accéder en utilisant la notation normale
d'array :

```twig
{{ lesStagiaires[0] }}
{{ lesStagiaires[1] }}
{{ lesStagiaires[2] }}
```
Pour les objets **c'est exactement la même chose mais on utilisera la
notation de "."** dans le fichier twig pour pouvoir accéder ses
propriétés (pas la flèche de PHP!)

Pour les objets **c'est exactement la même chose mais on utilisera la
notation de "."** dans le fichier twig pour pouvoir accéder ses
propriétés (pas la flèche de PHP!)

#### Exercices : création de vues

1.  Créez une nouvelle action afficheTvacTwig qui reçoit une valeur d'un prix dans l'URL et une valeur de TVA et calcule le prix Tvac. Créez un twig qui affiche "Le prix TVAC est xxx"

2.  Créez une nouvelle version de l'exercice précédent qui puisse
    afficher "Le prix xxxx euros avec le taux de TVA de xxxx % est x
    xxx"

3.  Créez une nouvelle action qui affiche un array de trois villes
    belges. Les villes sont fixées et se trouvent dans la vue, ne sont
    pas envoyées par le controller à la vue

4.  Créez une nouvelle version de l'exercice précédent où la liste de
    villes est envoyée depuis le controller à la vue dans un array

5.  Créez une nouvelle version de l'exercice 4. Cette fois l'action
    reçoit la langue d'affichage dans l'URL (FR ou NL). Le choix de la langue se fait grâce à un paramètre reçu par l'action.

6.  Affichez la date actuelle dans la vue. Utilisez la classe DateTime
    et envoyez l'objet à la vue. Dans la vue, utilisez la méthode
    **format** de la classe DateTime pour afficher la date proprement

<br>

## 6.3. Les conditions

Le langage de TWIG inclut aussi les **conditions**. Voici un exemple:

```twig
{% if age > 18 and age < 60 %}
<p>Pas de réduction</p>
{% endif %}
```

Voici la documentation pour avoir plus de détails :

<https://twig.symfony.com/doc/2.x/tags/if.html>

#### Exercices : conditions IF dans Twig

1)  Créez une action qui reçoit un prix dans l'URL. Créez une action qui reçoit le prix et le multiplie fois deux. Vérifiez dans la vue (pas dans le controller) que le prix ne dépasse pas 100 euros en utilisant une condition

<br>

## 6.4. Les boucles

Nous pouvons aussi créer **de boucles du type "foreach" sur des éléments Iterables** (**arrays**, par exemple). Son utilisation est
assez simple :

1.  Créez l'élément à parcourir dans une action et renvoyez-le à la vue

2.  Utilisez la syntaxe **for - in** dans la vue pour parcourir l'élément

La syntaxe est très simple: 
```twig
{% for cle, valeur in tableau %}
voici la clé: {{ cle }}
<br>
voici la valeur: {{ valeur }}
<br>
{% endfor %}
```


**Exemple** : création d'un array dans le controller et affichage dans la vue en utilisant une boucle

1.  Voici l'action. On a créé un array associatif

```php
#[Route("/exemples/twig/boucles/exemple1")]
public function exemple1 (){
    $vars = [
        'ville' => ['nom' => 'Bruxelles',
                    'population' => 1500000,
                    'client' => 'Belgique']
    ];

    return $this->render ('exemples_twig_boucles/exemple_1.html.twig', $vars);

}
```

2.  Voici le contenu de la vue

``wig
L données dans l'array sont :
<table>
{% for cle, valeur in ville %}
<tr><td>{{ cle }}</td><td>{{ valeur }}</td></tr>
{% endfor %}
</table>
```

Si nous avons besoin de **parcourir un objet on doit le transformer en
array**. Cette conversion crée un array associatif dont les **clés**
sont les **propriétés de l'objet** et les **valeurs** sont les
**valeurs de ces propriétés**. Voici un exemple :

**Exemple** : parcourir un objet avec une boucle dans la vue

Nous créons un objet Film et on le renvoie à la vue. Nous devons convertir cet objet en array :

```php
#[Route("/exemples/twig/boucles/exemple2")]
public function exemple2 (){
    // les objets ne sont pas itérables mais les arrays oui,
    // on peut faire une conversion en utilisant le mot (array)
    $l1 = new Film ("Blade Runner", "Ridley Scott");
    // attention: on force la conversion d'objet en array.
    // cette conversion crée un array associatif dont les clés 
    // sont les propriétés de l'objet et les valeurs sont 
    // les valeurs de ces propriétés
    $vars = [ 'film' => (array)$l1];
    return $this->render ('exemples_twig_boucles/exemple_2.html.twig', $vars);
}

```

Pour lancer ce code la classe livre doit exister (juste pour cet
exemple, créez la classe juste après la classe du controller :

```php
// une classe ne devra jamais être ici, c'est juste pour l'exemple!!
class Film 
{
    public $titre;
    public $auteur;

    function __construct($titre, $auteur) {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }
}

```

#### Exercices : communication Controller-Vue

1)  Créez une nouvelle action contenant un array d'objets (Films).
    Envoyez-le à la vue et affichez le contenu de chaque Film dans un
    tableau HTML

<br>

## 6.5. Les filtres

Un filtre est une action sur une variable : mettre la variable
en majuscules, enlever les espaces dans une variable string, enlever les caractères spéciaux, renvoyer la taille d'un string ou un array...

La syntaxe des filtres est :

```twig
{{ variable | filtre }}
```
Cette expression renvoie le résultat d'appliquer le filtre à la
variable, par exemple :
```twig
{{ titre | lower }}
```
Affichera le titre en minuscules. Vous pouvez une liste **de filtres**
[ici](https://twig.symfony.com/doc/2.x/filters/index.html)

Voici un exemple de vue qu'utilise de filtres.

**Exemple 1** : action qui renvoie un array, vue qu'utilise un filtre pour mettre en majuscules la première lettre de chaque propriété de l'array

```php
#[Route("/exemples/twig/filtres/exemple1",name:"exemples_twig_filtres1")]
public function exemple1()
{
    
    $ville = ['nom' => 'Bruxelles',
            'population' => 1500000,
            'client' => 'Belgique'
    ];

    return $this->render('exemples_twig_filtres/exemple_1.html.twig', [
        'controller_name' => 'ExemplesTwigFiltresController',
        'ville' => $ville
    ]);
}
```
Voici le template
``wig
{extends 'base.html.twig' %}

{% block body %}
{% if ville | length > 1 %}
Le tableau n'est pas vide
{% endif %}
<table>
    {% for cle, valeur in ville %}
    <!-- capitalize renvoie la variable en majuscules -->
    <tr>
        <td>{{ cle | capitalize }}</td>
        <td>{{ valeur }}</td>
    </tr>
    {% endfor %}
</table>
{% endblock %}
```

**Exemple 2** : Action qui renvoie un array à la vue. Utilisation du filtre "join". Rien ne change dans l'action, on change juste le template.

Le filtre "join" crée une chaine de caractères contenant tous les
éléments d'un array séparés par un "séparateur" choisi par
nous-mêmes. Voici un exemple où on enchaine les filtres "join" et
"upper" :

```twig
{% extends 'base.html.twig' %}
{% block body %}
{% if ville | length > 1 %}
Le tableau n'est pas vide, voici son contenu
{{ ville | join (" - ") | upper }}
{% endif %}
{% endblock %}
```

**Exercice 1:**  

Créez une action qui reçoit un nom et l'envoie à la vue. Dans la vue, faites le traitement suivant:

Si le nom contient la suite de lettres 'van ', affichez "`nom` est possiblement néerlandais". <br>
Si le nom finit pas la suite de lettres 'ska' ou 'ski' affichez un message: "`nom` est possiblement un nom de famille polonais!".<br> 
Si le nom finit la suite de lettres 'ani' ou 'oni', affichez "`nom` est possiblement italien".<br> 
Autrement, affichez "On ne sait pas vraiment d'òu il vient le nom <nom>"

Utilisez la doc! :

https://twig.symfony.com/doc/3.x/

(opérateur **in**, filtre **slice** en utilisant la notation **[]** - testez avec des indexes négatifs 'à la Python' pour obtenir les derniers caractères d'un string)

**Exercice 2**:

Créez une nouvelle version de l'exercice 1 où la vue reçoit un array de noms et traite chaque nom


<br>

## 6.6. Héritage de templates en TWIG (I)

Pour les sites qui contiennent un ensemble de pages qui partagent le
même contenu (ex: header, nav et footer) le moteur de TWIG possède un
**système d'héritage** qui nous permet de créer une sorte de master
page qui contiendra des blocs variables.

**Exemple** : création d'un squelette de master page et inclusion du contenu dans sa section principale (main)

1. Créez un **template twig contenant le squelette d'une master page** : **master_page_1.html.twig**

```twig
<html>
<head></head>
<body>
    <header>
        <h1>Voici le header de la page</h1>
    </header>
    <main>
	  <!-- on indique que un bloc "contenuPrincipal" sera incrusté ici-->
        {% block contenuPrincipal %}{% endblock %}
    </main>
    <footer>
        <nav>
            <ul>
                <li>Option footer 1</li>
                <li>Option footer 2</li>
            </ul>
        </nav>
    </footer>
</body>
</html>
```

2.  **Créez deux templates pour les contenus** (ex:
    *contenu_1_master_page_1.html.twig* et
    *contenu_2_master_page_1.html.twig*) **qui héritent** de
    *master_page_1.html.twig* **en utilisant extends**. Délimitez le
    contenu de votre vue par les directives block .

*contenu_1_master_page_1.html.twig*

```twig
{% extends "exemples_twig_heritage/master_page_1.html.twig" %}

{% block contenuPrincipal %}
Je voudrais manger de champignons dans le contenu 1 !
{% endblock %}
```

*contenu_2_master_page_1.html.twig*

```twig
{% extends "exemples_twig_heritage/master_page_1.html.twig " %}

{% block contenuPrincipal %}
Je voudrais manger de carottes dans le contenu 2 !
{% endblock %}
```

3.  Créez **les actions** (et les **routes**) qui rendront cette vue et
    lancez chacune dans votre navigateur. Vous observerez que le contenu
    de cette vue sera incrusté dans la page.

```php
#[Route("/exemples/twig/heritage/contenu1/master/page1")]
public function contenu1MasterPage1()
{
    return $this->render('exemples_twig_heritage/contenu_1_master_page_1.html.twig');
}

#[Route("/exemples/twig/heritage/contenu2/master/page1")]
public function contenu2MasterPage1()
{
    return $this->render('exemples_twig_heritage/contenu_2_master_page_1.html.twig');
}
```

**Important** : **extends** doit être **la première balise** d'un template

#### Exercices : création de master pages

Codez une nouvelle 'vue' (template) qui hérite de la master page précédente. Cette nouvelle vue reçoit un array contenant les infos d'un livre et les affiche dans la section "contenuPrincipal"

<br>


## 6.7. Héritage de Templates en TWIG (II)

Nous pouvons simplifier encore la structure de la page si on utilise la
directive **include**, qui nous permet d'inclure le contenu d'autres
fichiers twigs où on le souhaite.

Voici un exemple :

**Exemple** : simplification de la master page en utilisant include pour importer le header et le footer

1.  **Creéz une nouvelle master page master_page_2.html.twig**

```twig
<html>
<head>
<body>
    <header>
        {% include "exemples_twig_heritage/header.html.twig" %}
    </header>
    <main>
        {% block contenuPrincipal %}{% endblock %}
    </main>
    <footer>
        {% include "exemples_twig_heritage/footer.html.twig" %}
    </footer>
</body>
</html>
```

2.  Créez les twigs **header.html.twig** et **footer.html.twig** dans le
    dossier de la master page

**header.html.twig :**
```twig
<h1>Je suis le header</h1>
```
**footer.html.twig**
```twig
<nav>
    <ul>
        <li>Option footer 1</li>
        <li>Option footer 2</li>
    </ul>
</nav>

```

3.  Créez **les actions et les routes**

```php
#[Route("/exemples/twig/heritage/contenu1/master/page2")]
public function contenu1MasterPage2()
{
    return $this->render('exemples_twig_heritage/contenu_1_master_page_2.html.twig');
}

#[Route("/exemples/twig/heritage/contenu2/master/page2")]
public function contenu2MasterPage2()
{
    return $this->render('exemples_twig_heritage/contenu_2_master_page_2.html.twig');
}
```


Notez que les includes ne doivent pas servir uniquement à la création d'une master page. Nous pouvons utiliser cet outil dans n'importe quelle fichier twig. Cela nous permet d'inclure des fragments de la page qui se trouvent dans d'autres fichiers et qui deviennent ainsi partageables par toutes les vues (ex: vues partielles)

#### Exercices : création de Master Pages

Créez une master page en utilisant twig. La master page contiendra une barre de navigation contenant trois liens. Chaque lien appelle une action d'un controller

Aidez-vous de cette documentation :

<https://symfony.com/doc/current/templates.html#linking-to-pages>

<br>

## 6.8. Vider un bloc hérité d'un template


Dans certaines pages il se peut qu'on hérite d'un template qui contienne une section qui ne nous intéresse pas (ex : la barre de navigation du contenu du site dans une page de login, par exemple). La solution à ce problème est simple : on doit déclarer le bloc dans notre page et le laisser vide.

**Exemple** : on hérite un menu d'un template base qu'on ne souhaite pas avoir dans notre template login

Il suffira d'inclure (dans la page qui hérite le template)

```twig
{% block menu %}{% endblock %}
```

Et le block sera vide. Si on ne mentionne pas le block, il sera hérité de la master page et aura son contenu (si, eventuellement, il y a un contenu dans la master page)

<br>

## 6.9. Incruster le rendu d'une autre action du controller une vue ('vue partielle')

Considérez le cas générique d'un site où plusieurs vues qui, en plus de
son propre contenu, contiennent une section (un div, par exemple). Considérez qu'on veut charger dans cette section le contenu d'une BD (ex : latest news, dernières offres, information dernière minute etc...).

**Exemple** : Vue1 et Vue 2 ont une section dynamique commune (le code est dans *ExempleControllerDansVueController.php*, actions *afficheVue1* et *afficheVue2*)

![vue 1](./images/i001.png)
![vue 2](./images/i002.png)


**Le code pour charger le contenu de cette section dans chacune de ces
pages devra alors se répéter dans chaque action du controller, ce qui
casse le principe du DRY.** On pourrait se dire d'utiliser **include**,
mais le problème est que le contenu doit être généré par une action, il
ne suffit pas d'inclure un autre template !

On peut résoudre ce problème assez facilement : on peut **incruster (embed) l'appel d'un controller dans chaque template et créer une seule action**. Cette action (*genererContenuDynamique*) n'a pas de route car elle sera uniquement utilisée depuis les templates.

On aura alors :

-   Une **action pour générer chaque template**

-   Une **action sans route pour générer le contenu de la section commune**

-   Un **appel à cette action dans chaque template** là où on veut réaliser le rendu (**embed** le controller)

L'appel au controller depuis la vue se fait de cette manière :

```twig
<div id='container2'>
{#on incruste l'action du controller ici#}
    {{ render (controller (
        'App\\Controller\\ExempleControllerDansVueEmbedController::sectionNouvellesDynamique',{ 'nombreNouvelles':3 }
        ))
    }}  
</div>
```
Observez que si on utilise la syntaxe "\\", on doit échapper les back slash. On peut aussi envoyer de paramètres à l'action (si besoin).

Vous avez un exemple fonctionnel et commenté dans **ExempleControllerDansVueEmbedController.php** et les templates associés.

#### Exercices : incruster une action du controller dans une section de la vue

Créez un nouveau controller.

Créez un site contenant deux pages. Dans les deux pages on doit avoir une section commune qui affiche une blague aléatoire sur Chuck Norris.

Utilisez cette api : https://api.chucknorris.io/

Pour faire appel à une API depuis Symfony, installez le client http :

```php
composer require symfony/http-client
```

Si l'API n'a pas d'authentification, il suffit d'utiliser la syntaxe qui suit.

```php
$client = HttpClient::create();

$response = $client->request ('GET',
'https://api.chucknorris.io/jokes/random');
```

Pour savoir plus sur l'appels aux Apis dans Symfony :

<https://symfony.com/doc/current/components/http_client.html#making-requests>

Regardez aussi la section "Processing réponses". Utilisez **dump** pour vérifier ce que vous obtenez.

<br>


## 6.10. Faire appel à une action depuis la vue

Vous pouvez créer de liens pour faire appel à une action d'un
controller dans votre template Twig en utilisant la méthode **path**, sans ou avec de paramètres. Cette méthode créera la URL (vous pouvez la visualiser dans le code HTML de la page). Elle utilise le **name** de la route pour générer le chemin. 

Vous avez un exemple pratique dans **Projet1Symfony5**, controller **ExemplesParamsTwigToController**, où un
template fait appel à un autre en lui envoyant un paramètre.

Le fonctionnement est simple :

1.  Sans paramètres :

```twig
<a href="{{ path ('action2_recoit_params') }}">lien vers action 2 sans params</a>
```
2.  Avec de paramètres (tel que l'exemple dans le projet) :
```twig
<a href="{{ path ('action2_recoit_params',{nom: 'Luca',ville: 'Rome'}) }}">lien vers action 2 avec params</a>
```

#### Exercices: création de liens dans la vue (vers des actions)

Créez un template qui contient une mini-nav avec trois liens href. Chaque lien fera appel à une action du controller.


<br>

# 7. Gestion basique d'erreurs dans la réponse du serveur

Pour gérer proprement les erreurs dans une application Web nous avons plusieurs possibilités :

-   **Modifier la réponse HTTP** du serveur (ex: envoyer une réponse de 404 - Not Found quand on le souhaite, même si la page existe)

-  Créer de vues personnalisées pour les erreurs de base (500, 404 etc...) en utilisant les conventions de Symfony


-   **Lancer une exception** du système ou une personnalisée

<br>

## 7.1. Créer une vue pour chaque erreur à gérer en utilisant les conventions de Symfony

Cette méthode s'applique dans l'environnement de **prod**, car dans l'environnement de **dev** le Symfony Profiler est activé. Changez alors **dev** en **prod** dans le fichier **.env**. Une fois le changement est fait :

1.  Créez cette **structure de dossiers** dans le dossier **templates**


![](./images/i003.png)


1.  Créez **une vue pour chaque erreur à gérer** (.html.twig) suivant la convention **errorXXX.html.twig dans le dossier Exception** (ex: error500.html.twig)

2.  Créez le **contenu personnalisé de la vue** pour chaque erreur que
    vous voulez traiter

<br>

**Exemple** : gestion de l'erreur 500

Voici un exemple de gestion de l'erreur 500. L'action **exempleActionProvoqueErreur** du controller **ExemplesErreursController** provoque une erreur 500 :

```php
#[Route("/exemple/action/provoque/erreur")]
public function exempleActionProvoqueErreur()
{
    // Decommentez la ligne suivante pour provoquer l'erreur:
    // blablabla   
}
```



Créez alors un fichier **erreur500.html.twig** dans le dossier
**Exception** contenant un texte (par exemple : "Erreur interne !"). Relancez l'action pour que le nouveau message d'erreur s'affiche. Si vous obtenez l'erreur original au lieu de la vue que vous avez créé, nettoyez la cache depuis la console et relancez l'action. Pour nettoyer la cache

```console
php bin/console cache:clear
```

#### Exercices : traitement d'erreurs

Traitez l'erreur 404 en utilisant ce système

<br>

## 7.2. Modifier la réponse http du serveur

Voici un exemple de comment envoyer un code d'erreur au navigateur en modifiant la réponse HTTP: 


```php
#[Route("/erreurs/erreur/pas/trouve")]
// réponse HTTP modifiée : dans cet exemple, on renvoie au navigateur une réponse "404: NOT FOUND"
// si la variable de session "login" n'existe pas. 
// De-commentez la ligne du "set"
// pour établir sa valeur une première fois,
// puis commentez la ligne, fermez le navigateur et  
// et relancez la page
public function erreurPasTrouveAction(Request $req)
{
    $session = $req->getSession();
    
    // $session->set("login", "Marie");
    $reponse = new Response();
    
    if ($session->get("login") == null) {
        $reponse->setStatusCode(Response::HTTP_NOT_FOUND);
        $reponse->setContent("Page non trouvée!");
        // autre exemple:
        // $reponse->setStatusCode(Response::HTTP_BAD_GATEWAY);
    } else {
        $reponse->setContent("Bienvenu " . $session->get("login"));
    }
    
    return ($reponse);
}

```
<br>

## 7.3. Lancer une exception

Au lieu de rediriger vers une autre page du site on peut carrément lancer une exception. C'est à nous de voir qu'est-ce que nous convient selon les besoins du projet.


```php
#[Route("/erreurs/erreur/pas/trouve/avec/exception")]
public function errorPasTrouveAvecExceptionAction(Request $req)
{
    $session = $req->getSession();
    // on lance cette ligne une seule fois, puis commentez-la et relancez le navigateur et l'action");
    // $session->set ("login","Lola");
    $reponse = new Response();
    if ($session->get("login")==null) {
        throw $this->createNotFoundException("Non trouvée");
    } 
    else {
        $reponse->setContent("Hello " . $session->get("login"));
    }
    return ($reponse);
}

```

<br>


# 8. Les environnements de développement et production


## 8.1. La base des environnements de travail

Dans un projet Symfony nous pouvons choisir **l'environnement de travail**. Les choix possibles sont **prod, dev** et **test**. Tant Symfony comme les "packages" de tiers contient de fichiers de configuration qui déterminent son comportement selon le mode de travail.

Ces fichiers varient selon le mode de travail qu'on choisit.

Si nous choisissons le mode **dev** (par défaut) Symfony chargera le
module **web_profiler,** qui facilite le debugging de l'application en
affichant plein d'information sur notre application (entre autre les
erreurs de toute sorte : typographie, connexion de bases de données,
pages introuvable...). En mode **prod** le web profiler ne sera pas
chargé car nous ne voulons pas donner au client plus d'informations que
nécessaire (ex : le nom de la base de données).

Nous pouvons aussi avoir de modules (packages) de tiers ou faites par
nous-mêmes dont la configuration change selon nous soyons dans le mode
**dev**, **prod** ou **test** :

<br>

![](./images/i004.png)

<br>
<br>

Observez que nous avons, par exemple, trois fichiers de configuration pour **monolog** (génération de messages de logging dans le serveur).

Les logs seront générés d'une façon différente selon le mode où on se
trouve. Il y a d'autres packages qui sont désactivés dans un mode et
actives dans d'autres.

(La localisation de ces fichiers est définie dans src/kernel.php)

**Vous pouvez changer d'environnement en modifiant le fichier *.env* qui se trouve dans la racine du projet (APP_ENV peut être prod, dev ou test)**

```php
###> symfony/framework-bundle ###
APP_ENV=dev
```

Le **kernel** de Symfony - code qui est en charge de recevoir les requêtes de l'utilisateur et envoyer une réponse au navigateur - agira d'une façon ou l'autre selon la valeur de APP_ENV. **Le kernel chargera tous les services** qui correspondent au mode choisi, ainsi que
leur **configuration** (qui varie entre dev, prod et test).

Dans la page index.php on peut observer la manière dont le kernel est créé.

Dans le fichier **config/bundles.php** vous pouvez voir quels sont les
services disponibles pour chaque mode.

<br>

# 8.2. Les fichiers .env et .env.local

<br>

Par défaut Symfony lit le contenu du fichier **.env**. **Si vous
utilisez un système de versions (GIT) ce fichier sera pris en compte**.
Si on veut développer localement (avec les paramètres de BD locaux et
tout le reste de la configuration) on a l'option de créer un fichier
**.env.local**. Ce fichier peut être un copie modifiée du fichier
**.env** où, par exemple, on choisit la valeur **dev** pour
**APP_DEV**.

Ce fichier:

-   Est prioritaire sur le fichier **.env** mais ...

-   **est ignoré par GIT** (voir git.ignore dans le projet)

Ce mécanisme nous permet de travailler avec une configuration
particulière en local qui ne sera pas copié dans le serveur de
production (car uniquement **.env** se trouvera dans le serveur).

Vous pouvez utiliser aussi :

```console
composer install --no-dev --optimize-autoloader
```

qui effacera les packages qui ne sont pas nécessaires en production.

Si vous voulez mettre un projet en production, créez un fichier
**env.local** avec les paramètres sensibles **dans le serveur**. On ne veut pas que notre fichier **.env** contenant le mot de pass de la bd soit posté dans github!

<br>

# 9. Le Web Profiler

Comme nous avons mentionné ci-dessus, le **web profiler est un outil de debugging** de Symfony. Si vous activez le mode **dev** et vous chargez une page, la barre du debugger du **web** **profiler** sera affichée **en bas de la fenêtre du navigateur** :

![](./images/i005.png)

<br>
<br>

Le profiler vous permet d'afficher beaucoup d'information concernant la requête qui a été faite au serveur. 
Pour que le profiler soit visible
on doit envoyer une page complète HTML depuis le controller. Il ne suffit de faire "return Response". 
Le twig devra hériter du template de base ou avoir ses propres balises html et body.

## 9.1. Afficher le contenu des variables avec dump

Vous pouvez afficher le contenu des variables dans les vues et les
controllers grâce à la fonction **dump**.

Exemple :

**dump ($livre)**

Cette fonction affiche le contenu complet de la variable d'une façon très complète. Utilisez-la au lieu de **var_dump** à partir de
maintenant.

![](/images/i006.png)


<br>
<br>

# 10. Les Services

## 10.1. Concept de Service

Une **application WEB utilise une énorme quantité d'objets** pour réaliser plein de fonctionnalités : connecter à une BD, envoyer un mail, connecter avec une API à un autre site, écrire/lire de fichiers dans le disque, etc...

Certains parmi ces objets seront définis par nous (en créant de classes), certains se trouvent déjà dans la structure du framework et d'autres seront importés dans le projet.

Très **souvent on veut accéder à un de ces objets (qui réalise une certaine fonctionnalité) depuis de différents lieus dans notre projet**.

On veut, par exemple, connecter à une BD depuis plein d'actions qui ne se trouvent même pas dans le même controller. Cela implique qu'on devrait avoir une sorte de structure de "includes" ou de "autoload"
qui nous permettent de réaliser ces actions  facilement.

Symfony (et plein d'autres frameworks) **fournit un système qui nous permet d'accéder facilement à ces objets qu'on utilise dans plusieurs emplacements de notre projet** : **le** **Service Container**.

En fait, un objet qui sera utilisé de manière générale depuis n'importe quelle localisation dans notre projet portera le nom de **Service**.

Pour cette raison, On va parler du "service mailer", du "service logger", du "service DB" ou du "service maps".

<br>

## 10.2. Utilisations des services inclus dans Symfony

**Symfony** **contient plein de services** **par défaut** même si pour le moment nous ne les avons pas vraiment utilisés (au moins consciemment!). Allez dans la console (dans le dossier de votre projet actuel) pour afficher tous les services actifs ainsi que la description de leur
fonctionnalité :

```console
php bin/console debug:autowiring | more
```

(**Note** : la commande **"| more"** de la console permet d'arrêter l'affichage à chaque page.
Ça n'a rien à voir avec Symfony, c'est un vieil outil de la console. Tapez sur enter pour continuer à afficher le reste de services)

Nous pouvons utiliser ces services ainsi que rajouter nos propres
services (nous devons faire le code, bien sûr !)

La documentation sur les services et leur utilisation se trouve ici :

<https://symfony.com/doc/current/service_container.html>

Pour passer à la pratique, utilisons déjà un des services fournis par Symfony. Commençons par utiliser un service qui nous permet de créer de fichiers de **logs.**

**Exemple** : Utilisation du service **Logger** dans un controller

1.  **Créez un controller** *ExemplesServicesController* avec l'assistant

2.  **Rajoutez une action** **utiliseLogger** (ignorez ou effacez l'action index et sa vue)

3.  **Dans le prototype de l'action, rajoutez un paramètre de la classe LoggerInterface** (n'oubliez pas le use). 
Ceci **indique au Service Container** qu'il doit **injecter un objet Logger dans notre action** (rappelez-vous de l'injection de dépendances !!) pour qu'il soit utilisable à l'intérieur

4.  **Utilisez normalement le service.** Il n'y a pas besoin de créer une instance, car on la reçoit en paramètre ! Ici on montre deux exemples de base: info et error

Voici le code final de la classe controller :

```php
class ExemplesServicesController extends AbstractController
{   
    #[Route ("/exemples/services/utilise/logger")]
    public function utiliseLogger(LoggerInterface $monLogger){
        $monLogger->info ("On utilise le logger, c'est super!");
        $monLogger->error ("Hey! une erreur fake s'est produite!");
        return new Response ("J'ai fait mon boulot de logger!");      
    }   
    
    #[Route ("/exemples/services/utilise/session")]
    public function utiliseSession(SessionInterface $maSession){
        // stocker dans la session
        $maSession->set ("panier", ["oranges"=>3,
                                    "pommes"=>2,
                                    "citrons"=>1]);
        // obtenir de la session
        $panier = $maSession->get ("panier");
        
        // si on veut afficher la variable sans charger la vue
        // dump ($panier);
        // die();      
        // rendre la vue et lui envoyer la valeur obtenue de la session
        return $this->render ("exemples_services/utilise_session.html.twig", ['panier' => $panier]);
        
        // plus d'info sur les sessions ici
        // comme service : https://symfony.com/doc/current/controller.html#session-intro
        // comme objet: https://symfony.com/doc/current/components/http_foundation/sessions.html
    }
    
}

```
Pour vérifier que le log a été effectué, ouvrez le fichier
*/var/log/dev.log* de votre projet

On aurait pu rajouter d'autres services si on avait eu besoin dans le prototype de l'action. Il suffit de les séparer par virgules. Cette "magie" est réalisée grâce au système de **autowire** de Symfony, dont la configuration se trouve dans **config/services.yaml**

Si vous avez besoin de réaliser du logging dans votre application, vous avez plus d'info sur le sujet ici :

<https://symfony.com/doc/current/logging.html>

#### Exercices : utilisation de Services

Symfony contient un service qui nous permet de gérer la session, **SessionInterface**. Appliquez la même procédure que dans l'exemple précédant pour l'obtenir. Dans votre action, créez une variable de session et affichez sa valeur. Le mécanisme de base de la session est simple : pour créer une variable de session on utilise la méthode **set (clé, valeur)** et pour la lire on utilise la méthode **get (clé)** de l'objet Session

## 10.3. Création de nos propres services

<br>
Nous avons mentionné **qu'on peut transformer nos propres objets en services**. Pour ce faire, on doit juste créer notre classe dans le dossier **/src/Services** (à créer s'il n'existe pas encore) et suivre la même procédure que dans les exemples précédents.

**Exemple** : Nous voulons un service permettant d'obtenir toutes les permutations possibles des éléments d'un array de noms (permutations = combinaisons où l'ordre compte)

1.  **Créez le dossier** **/src/Services** (s'il n'existe pas déjà)
    qui contiendra tous nos services

2.  **Créez le service : la classe qui réalise la fonctionnalité à l'intérieur de ce dossier**

Voici un code possible, où la méthode *permutations* reçoit un array et
renvoie un autre contenant le résultat :

```php
<?php
namespace App\Services;

class Statistiques {
    // calcule toutes les permutations possibles de valeurs d'un array
        /**
         * 
         * @param type $items
         * @param type $perms
         * @return type array (toutes les permutations - combinaisons 
         * ou l'ordre compte)
         */
        function permutations($items, $perms = array( )) {
            if (empty($items)) {
                $return = array($perms);
            }  else {
                $return = array();
                for ($i = count($items) - 1; $i >= 0; --$i) {
                     $newitems = $items;
                     $newperms = $perms;
                 list($foo) = array_splice($newitems, $i, 1);
                     array_unshift($newperms, $foo);
                     $return = array_merge($return, $this->permutations($newitems, $newperms));
                 }
            }
            return $return;
        }
}
```


3.  Créez **une action dans un controller** (ici *ExemplesPropreService*)
    pour utiliser votre service, tel qu'on a fait dans les sections
    précédentes. Symfony le reconnaitra directement !

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Services\Statistiques;


// src/Controller/ExemplesPropreServiceController
class ExemplesPropreServiceController extends AbstractController
{
    #[Route("/exemples/propre/service/utilise/statistiques")]
    public function utiliseStatistiques(Statistiques $mesStats)
    {
        $arrayNoms = ['Lucas', 'Jean', 'Norah'];
        $permutationsNoms = $mesStats->permutations($arrayNoms);
        return $this->render('exemples_propre_service/utilise_statistiques.html.twig', ['permutationsNoms' => $permutationsNoms]);
    }
}
```
#### Exercices : création de services

Créez à partir de zéro un service qui dit Bonjour. Le service portera le nom *BonjourSimple*. Créez une action pour montrer son fonctionnement

<br>

## 10.4. Injecter les services dans le controller

Nous pouvons injecter de services directement dans le controller en
utilisant son constructeur. Voici un exemple équivalent au code
précédant.

**Exemple** : injection d'un service dans le constructeur

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Services\Statistiques;

// src/Controller/ExemplesPropreServiceInjectionController.php
class ExemplesPropreServiceInjectionController extends AbstractController
{
        private $mesStats;
        
        // on injecte le service diréctement dans le constructeur du controller
        public function __construct (Statistiques $mesStats){
            $this->mesStats = $mesStats;
        }

        #[Route ("/exemples/propre/service/injection/utilise/statistiques"]        
        public function utiliseStatistiques (){
            
            $arrayNoms = ['Lisa','Jean','Norah'];
            $permutationsNoms = $this->mesStats->permutations($arrayNoms);
            return $this->render ('exemples_propre_service_injection/utilise_statistiques.html.twig', ['permutationsNoms'=> $permutationsNoms]);
        }
}
```

Cette méthode devient indispensable quand **on veut utiliser un service
dans un autre service, car la seule méthode où on pourra l'injecter
sera dans le constructeur !** On montre un exemple ci-dessous de ce cas
de figure. 

<br>

## 10.5. Injection de paramètres dans le service (I)

Nous pouvons rajouter de paramètres aux services en utilisant
*services.yaml*. Dans ce fichier on configure la manière dont les
services deviendront accessibles dans nos controllers.

**Exemple** : un service Bonjour qui affiche "bonjour à tous" dans la langue parametrée dans services.yaml

D'abord on doit créer le service. Si on veut que le service soit
paramétré **on rajoute un paramètre dans le constructeur** **et on le
stocke dans une propriété** (on peut avoir autant de paramètres qu'on
veut) :


```php
<?php

namespace App\Services;

class Bonjour
{
    public function __construct(string $langue)
    {
        $this->langue = $langue;
    }
    // service contenant un paramètre
    public function obtenirMessage()
    {
        // array fake... juste pour essayer le service
        $messages = [
            'fr' => 'Bonjour à tous!!',
            'en' => 'Hello everybody!!'
        ];
        // on obtient le paramètre du propre service
        $langue = $this->langue;
        return ($messages[$langue]);
    }
}
```


On doit définir le parametre dans **config/services.yaml** :

```php
    # add more service definitions when explicit configuration is needed
    # please note that last definitions always *replace* previous ones
    App\Services\Bonjour:
        arguments:
            $langue: 'fr'
```

Finalement on peut utiliser le service dans un controller. Ici on a
injecté le service dans le controller en suivant la méthode de la
section précédente :

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Services\Bonjour;

// src/Controller/ExemplesServicesParamsController.php
class ExemplesServicesParamsController extends AbstractController
{   
    private $bonjour;
    
    // on utilise la méthode d'injection du service dans le controller
    public function __construct (Bonjour $bonjour){
        $this->bonjour = $bonjour;       
    }
    
    #[Route ("/exemples/propre/service/params")]
    public function utiliseBonjour(){
        return new Response ($this->bonjour->obtenirMessage());
        
    }
}
```

Si on veut qu'un paramètre soit utilisé par tous les services on a qu'a le rajouter à la section ***parameters*** qui se trouve tout en haut du fichier *services.yaml*

<br>


## 10.6. Utiliser un service dans un autre service

Si nous voulons utiliser un service dans un autre service on peut uniquement les injecter dans le constructeur (on ne peut pas injecter l'objet Logger dans une autre méthode, tel que "permutations"). **Si on veut utiliser un service dans un autre on est obligé de les injecter dans le constructeur. Ce n'est pas possible de les injecter dans une autre méthode.** C'est uniquement dans le controller où on peut injecter les services dans n'importe quelle méthode.

**Exemple :** utiliser Logger dans le service Statistiques

```php
<?php
// src/Services/StatistiquesLog.php
namespace App\Services;

use Psr\Log\LoggerInterface;

class StatistiquesLog {
   
    private $logger;
    
    function __construct (LoggerInterface $logger){
        $this->logger = $logger;
    }
        
    function permutations($items, $perms = array( )) {
        if (empty($items)) {
            $res = array($perms);
        }  else {
            $res = array();
            for ($i = count($items) - 1; $i >= 0; --$i) {
                 $newitems = $items;
                 $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
                 array_unshift($newperms, $foo);
                 $res = array_merge($res, $this->permutations($newitems, $newperms));
             }
        }
        // on utilise le service de log
        $this->logger->info ("De permutations ont été calculées");
        return $res;
    }
}
```
Controller:

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Services\StatistiquesLog;


// src/Controller/ExemplesServiceUtiliseService.php
class ExemplesServiceUtiliseService extends AbstractController
{
    private $mesStats;
    // Le service StatistiquesLog utilise Logger
    public function __construct(StatistiquesLog $mesStats)
    {
        $this->mesStats = $mesStats;
    }

    #[Route("/exemples/propre/service/utilise/service")]
    public function utiliseStatistiques()
    {
        $arrayNoms = ['Lucas', 'Jean', 'Norah'];
        // calculera les permutations et créera une ligne de log
        $permutationsNoms = $this->mesStats->permutations($arrayNoms);

        return $this->render('exemples_service_utilise_service/utilise_statistiques.html.twig', ['permutationsNoms' => $permutationsNoms]);
    }
}
```

<br>

## 10.7. Injection de paramètres dans le service (II)


Dans certains cas **nous utilisons un service dans un autre et le premier doit être paramétré**.

**Exemple :** rajouter l'envoi d'un mail dans notre service de Statistiques

Le service StatistiquesLogMail envoie un mail en plus de créer une ligne
de log quand on fait appel à la fonction de permutations.

Installez d'abord le module SwiftMailer (service de mail qu'on configura plus tard) :

```console
composer require symfony/swiftmailer-bundle
```

Dans ce cas, le service a besoin d'un ou plusieurs paramètres pour être configuré (ici on va considérer le paramètre **$adresse** le destinataire du mail qui sera, par défaut, "yoyo@touloulou.com")

Voici notre service, qui inclut maintenant l'envoi d'un mail. On a dû injecter le Mailer dans le constructeur et on a décidé d'envoyer l'adresse mail en paramètre.

```php
<?php

// src/Services/StatistiquesLogMail.php
namespace App\Services;

use Psr\Log\LoggerInterface;
use Swift_Mailer;

class StatistiquesLogMail {
   
    private $logger;
    private $mailer;
    private $adresse;
    
    function __construct (LoggerInterface $logger, Swift_Mailer $mailer, $adresse){
        $this->logger = $logger;
        $this->mailer = $mailer;
        $this->adresse = $adresse;
    }
        
    function permutations($items, $perms = array( )) {
        if (empty($items)) {
            $res = array($perms);
        }  else {
            $res = array();
            for ($i = count($items) - 1; $i >= 0; --$i) {
                 $newitems = $items;
                 $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
                 array_unshift($newperms, $foo);
                 $res = array_merge($res, $this->permutations($newitems, $newperms));
             }
        }
        // on utilise le service de log
        $this->logger->info ("De permutations ont été calculées");
        // on envoie un mail
        $message = (new \Swift_Message)
                ->setTo ($this->adresse);
        // on doit envoyer ici le mail après avoir configuré le service
        // https://symfony.com/doc/current/email.html#configuration
        // dump ($message);
        // die();
        return $res;
    }
}

```

mais **cette solution ne suffit pas**. Inclure le paramètre parmi les
paramètres du constructeur provoque cette erreur :

![](./images/i007.png)

<br><br>

**C'est tout à fait logique, car quand on fait appel à notre service
depuis le controller on n'indique pas ce paramètre extra.** **Le
service principal est juste injecté dans le constructeur sans
paramètres** :

<br>

```php
<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Services\StatistiquesLogMail;
use App\Services\BonjourService;

// /src/controller/ExemplesPropreServiceInjectionParamsController.php
class ExemplesPropreServiceInjectionParamsController extends AbstractController
{
        private $mesStats;
        // on injecte le service diréctement dans le constructeur du controller
        // sans paramètres!
        public function __construct (StatistiquesLogMail $mesStats){
            $this->mesStats = $mesStats;
        }
        #[Route ("/exemples/propre/service/injection/utilise/statistiques/log/mail")]
        public function utiliseStatistiquesLogMail (){
            $arrayNoms = ['Lucas','Jean','Norah'];
            $permutationsNoms = $this->mesStats->permutations($arrayNoms);
            return $this->render ('exemples_propre_service_injection_params/utilise_statistiques_log_mail.html.twig', ['permutationsNoms'=> $permutationsNoms]);
        }
}
```


**Comment fixer alors l'adresse du mail si on ne peut pas l'envoyer en
paramètre au service lors sa création ?**

Nous allons configurer de paramètres particulières de nos services dans
le fichier **services.yaml** :

```php
# add more service definitions when explicit configuration is needed
# please note that last definitions always *replace* previous ones
    App\Services\StatistiquesLogMail:
       arguments: 
           $adresse: "yoyo@gmail.com"
```
**Le paramètre doit porter le même nom que celui qu'on a rajouté dans
le constructeur, autrement on obtient une erreur.**

Si on voulait **changer l'adresse** on peut toujours créer de méthodes pour ce faire dans notre service, **rien nous empêche de créer une méthode pour ce faire dans notre service**. On vient d'arranger le problème d'avoir la valeur lors la création du service. En plus, le code reste plus propre car les paramètres de tous nos services seront centralisés dans **services.yaml**

<br>

# 11. Le Modèle


Dans une application web, les classes qui contiennent les données de l'application s'appellent **entités** (les classes de notre diagramme de classes) et on doit les définir.

Normalement une entité serait définie à la main dans un fichier contenant une classe (ex: entité Personne -> classe Personne). On doit créer, en plus, une classe Repository pour gérér la persistence de l'entité dans la BD. Ça implique qu'on doit créer deux fichiers pour chaque classe du diagramme... un grand boulot!. Mais on peut se simplifier énormement la vie en utilisant un ORM...

<br>

## 11.1. Présentation de Doctrine

Pour créer le modèle de notre application web on va utiliser un ensemble de librairies de PHP qui portent le nom de  **Doctrine**. Doctrine est constitué d'un **ORM** (Objet Relational Mapping) et d'un **DBAL** (Database Abstraction Layer).

Le **DBAL** est un ensemble de librairies basées sur PDO qui facilite l'accès à la BD, tant à sa structure comme aux données.

**Doctrine** permet de créer une **correspondance entre les classes** de notre application (*domaine des objets*) et **les tableaux d'une BD** (*domaine de la BD*)

On peut créer les entités fácilement avec un assistant et puis lancer la création automatique de la BD.

**Exemple**: nous avons une classe *Evenement* dans notre diagramme. On utilisera l'assistant de Doctrine (console) pour créer l'entité *Evenement*. Doctrine crée :

1. le code de l'entité 
2. le repository
3. le tableau de la BD où on stockera les données de cette entité. 
 
**En gros, un "objet" du domaine des objets sera stocké comme une ligne dans le tableau.**

La classe *Evenement* sera représentée dans la BD avec un tableau *evenement*. On pourra utiliser une méthode *select()*  (repo) qui nous renverra chaque ligne du tableau *evenements* sous la forme d'un objet *Evenement* (une *entité*) et pas sous la forme d'un array. 

On ne doit plus faire de requêtes à la main "SELECT * FROM ...." dans les requêtes les plus habituelles **CRUD** de base).

Pour le reste de requêtes (GROUP BY, JOIN, etc...) on créera des méthodes dans la classe Repository de l'entité.

**Documentation de Doctrine :
<https://symfony.com/doc/current/doctrine.html>**


Une fois crée le code des entités et le schéma de la BD, nous pouvons accéder à la BD depuis (en géneral depuis le controller) en utilisant un objet gestionnaire de Doctrine (**entity manager**). 

Tel qu'on a déjà mentionné, Doctrine fournit les méthodes pour pouvoir **obtenir les données de la BD sous forme d'objets** (au lieu d'arrays associatifs) et **stocker des objets dans la BD** (qui seront stockés sous la forme d'un enregistrement, une ligne dans un tableau). La conversion est automatique.

<br>

## 11.2. Installation de Doctrine dans un projet

Nous allons créer un nouveau projet pour apprendre à utiliser Doctrine et les modèles en général:

``` console
symfony new --full ProjetModelSymfony
```

Dans ce projet, rajoutez les librairies de Doctrine: 
```console
composer require symfony/orm-pack
```

``` console
composer require --dev symfony/maker-bundle
```

Créez un controller **ExemplesModele** vous-mêmes et une action de bienvenue. 

Documentation de Doctrine liée à Symfony :

<https://symfony.com/doc/current/doctrine.html>

<http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/working-with-objects.html>

<br>

## 11.3. Installation de Doctrine. Création de la BD

1.  **Rajoutez** les librairies de **Doctrine** à votre projet

```console
composer require symfony/orm-pack
composer require symfony/maker-bundle --dev
```
(Le maker bundle sert à générer du code)

2.  **Adaptez les paramètres de la BD** dans **le fichier .env** (racine du projet) à votre serveur et nom de base de données

```console
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
```
Notre base de données portera le nom **bibliotheque**, alors on obtient:

```console
DATABASE_URL=mysql://root:@127.0.0.1:3306/bibliotheque
```

3. Allumez le serveur de BD (MySQL dans notre cas) et **créez la BD**


```console
php bin/console doctrine:database:create
```
Vous pouvez vérifier en utilisant **phpmyadmin** ou **mysql en console** que la BD a été créé proprement.

Si vous engagez les services d'un hébergeur vous devez configurer la BD selon ces paramètres.


<br>

## 11.4. Création des entités et mise à jour de la BD

La BD est faite. On doit implementer maintenant le diagramme de classes : les Entities.

Nous allons créer une Entity pour chaque classe dans le diagramme de classes, et puis créer les rélations (associations ou héritage toujours) entre elles.

**Note**: Dans certains cas il peut y avoir de classes qui restent uniquement dans le domaine des objets : on ne crée pas un tableau dans la BD car on n'a pas besoin de stocker ses données dans la BD.

On va créer une première entité et générer son code.

1.  **Lancez l'assistant de création d'entités :**

```console
php bin/console make:entity
```
L'assistant nous demandera le **nom de l'entité** (*Livre*) et **ses propriétés** (*titre, prix, description, datePublication*). D'abord il demande pour le nom de la propriété et puis pour le type. Les types de base (affichables en tapant "?") sont *string (255), decimal (8,2), text, datetime.* Pour certains types il nous demande aussi la taille.

L'assistant créera les fichiers **/Entity/Livre.php** (la classe entité!) et **/Repository/LivreRepository.php** (dévinez :D). **Si vous ratez la création de l'entité** sortez de l'assistant (CTRL-C), effacez les fichiers
**/Entity/Livre.php** et **/Repository/LivreRepository.php** et recommencez.


**Note:** On apprendra à editer les entités dans la section 11.4 pour éviter de devoir recommencer à chaque fois qu'on se trompe, mais pour le moment recommencer est la meilleure option


Ouvrez le fichier Livre.php et observez qu'il s'agit d'une classe normale qui représente un livre et qui **contient des annotations qui décrivent certains de caractéristiques des champs**. **Ces annotations seront utilisées par Doctrine pour générer automatiquement la base de données selon les types de notre choix**. Pour plus d'information sur les types de doctrine, allez sur :

<http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/types.html>

L'assistant est juste un outil pour nous faciliter la tâche mais vous pouvez très bien créer/éditer les fichiers par vous-mêmes (rajouter/effacer des champs)

<br>

2.  **Réalisez la migration de la BD** (pour faire correspondre les entités avec la BD)

La BD est actuellement vide. Nous voulons que Doctrine crée un tableau **livre** à partir de notre entité **Livre**. 

De manière plus générale, **nous voulons que Doctrine mette à jour la BD pour qu'elle reflète les changements dans nos entités** **(nom des entités, types des champs, relations, etc...). Ces mises à jours, assez habituelles dans un projet, s'appellent migrations.**. Les migrations incluent souvent de données, pas uniquement la structure de la BD.

Nous allons réaliser cette procédure en deux étapes très simples :

- **Créer ou mettre à jour un historique de migrations** (tableau dans
    la BD) et un fichier qui contient le code pour mettre à jour la BD
    (dans src/Migrations)

```console
php bin/console make:migration
```

  -  **Mettre à jour la BD en lançant ce code** (ceci créera déjà notre
    tableau "Livre")

```console
php bin/console doctrine:migration:migrate
```
**Note :** Si vous le souhaitez, vous pouvez aussi créez les entités par
vous-mêmes à la main, ou utiliser d'autres systèmes de notations au
lieu des annotations tel que XML

<https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html>

<br>

## 11.5. Rajouter/effacer des propriétés d'une entité

Nous pouvons modifier nos entités facilement. Nous pouvons éditer le fichier à notre aise ou lancer à nouveau make:entity si on veut juste rajouter de nouvelles propriétés. Si on édite le fichier de l'entité (ici Livre.php) **à la main, on doit absolument créer les getters, setters et annotations pour les nouvelles propriétés**.

Cette commande créera les getters et les setters pour nous:

```console
php bin/console make:entity ---regenerate
```

Indiquez à Symfony le nom de l'entité avec son namespace: (ex : **App\Entity\Livre)**

Dans tous les cas vous devez toujours **migrer la BD** en lançant les
deux commandes déjà mentionnées :

```console
php bin/console make:migration
```

```console
php bin/console doctrine:migrations:migrate
```


**Cette action crée les classes Repository si elles n'existent pas**
(appuyez sur Enter quand on vous demande un namespace et Symfony créera
tous les Repository )


**Si on efface une propriété il ne faut pas oublier d'effacer aussi ses
get et set, Symfony ne le fera pas automatiquement**

On peut utiliser aussi la commande :

```console
php bin/console make:entity --overwrite
```

si on veut recréer tous les getters et les setters pour toutes les
propriétés!

<br>

#### Exercices : création et manipulation des entités

1)  Créez une nouvelle propriété *isbn* et migrez la BD

2)  Créez une nouvelle propriété *dateEdition* et migrez la BD.
    Supprimez-le et assurez-vous que la BD est toujours cohérente avec votre code

3)  Créez l'entité Client (nom, prenom, email) et Exemplaire (état)

4)  Créez l'entité Auteur (nom, nationalite)

<br>

## 11.6. Le modèle : les relations 

Nous sommes capables maintenant de générer les tableaux qui
correspondent à nos entités. Cette section est consacrée à
l'implémentation des relations d'un schéma.

Vous trouverez les exemples décrits ci-dessous dans les projets
**ProjetModelSymfony** et **ProjetRelationsSymfony** (regardez le code
des entités !)

Documentation:
<https://symfony.com/doc/current/doctrine/associations.html>


### 11.6.1. Relation Many-To-One

Considérons ce schéma Merise (MCD - base de données relationnelles) :

![](./images/many-to-one%20Merise.png)

![](./images/many-to-one%20UML.png)

Qui équivaut à ce schéma UML (POO) :

<br>

La transformation de ce modèle nous donne, si on la réalise à la main :

-   **Un tableau Livre dans la BD** qui ne change pas + un tableau
    Exemplaire qui contient une colonne id (qu'on va appeler
    *livre_id* pour faciliter la lecture)

-   **Dans le code** : 
    -   Une classe Livre contenant **un array** d'Exemplaires 
    -   Une classe Exemplaire qui contient un objet Livre
  
        (toujours en considérant que l'association est bidirectionnelle)

**Nous pouvons créer le code et modifier la BD à la main mais Doctrine va le faire pour nous**. 

**Exemple :**

Implémenter la partie correspondante aux associations dans le code des entités et créer les relations dans la BD

**Procédure :**

1.  **Rajoutez une propriété Many-to-One dans l'entité correspondante en utilisant l'assistant** (ici c'est l'entité *Exemplaire*)

```console
php bin/console make:entity Exemplaire
```

La propriété portera le nom **livre** est du type **relation**, **ManyToOne.**
Dans ce cas, la propriété s'appellera **livre** et sera un objet de la classe Livre. 

On souhaite en plus rajouter une propriété et de méthodes dans Livre pour pouvoir obtenir les Exemplaires. On doit créer une association **bidirectionnelle** (pas seulement pouvoir obtenir le Livre qui correspond à un exemplaire mais aussi tous les exemplaires d'un livre !). 

On crée alors une propriété **exemplaires** et sera une collection qui contient tous les exemplaires d'un livre.
<br>

```console
C:\xampp\htdocs\Int3-WAD20-Symfony5.2\ProjetModelSymfony>php bin/console make:entity Exemplaire  

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > livre

 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Livre

What type of relationship is this?
 ------------ ----------------------------------------------------------------------- 
  Type         Description
 ------------ -----------------------------------------------------------------------
  ManyToOne    Each Exemplaire relates to (has) one Livre.
               Each Livre can relate to (can have) many Exemplaire objects

  OneToMany    Each Exemplaire can relate to (can have) many Livre objects.
               Each Livre relates to (has) one Exemplaire

  ManyToMany   Each Exemplaire can relate to (can have) many Livre objects.
               Each Livre can also relate to (can also have) many Exemplaire objects  

  OneToOne     Each Exemplaire relates to (has) exactly one Livre.
               Each Livre also relates to (has) exactly one Exemplaire.
 ------------ ----------------------------------------------------------------------- 

 Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > ManyToOne

 Is the Exemplaire.livre property allowed to be null (nullable)? (yes/no) [yes]:
 > no

 Do you want to add a new property to Livre so that you can access/update Exemplaire objects from it - e.g. $livre->getExemplaires()? (yes/no) [yes]:
 > 

 A new property will also be added to the Livre class so that you can access the related Exemplaire objects from it.

 New field name inside Livre [exemplaires]:
 >

 Do you want to activate orphanRemoval on your relationship?
 A Exemplaire is "orphaned" when it is removed from its related Livre.
 e.g. $livre->removeExemplaire($exemplaire)

 NOTE: If a Exemplaire may *change* from one Livre to another, answer "no".

 Do you want to automatically delete orphaned App\Entity\Exemplaire objects (orphanRemoval)? (yes/no) [no]:
 >

 updated: src/Entity/Exemplaire.php
 updated: src/Entity/Livre.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 >



  Success!


 Next: When you're ready, create a migration with php bin/console make:migration
```
C'est fait ! Nos entités sont mises à jour (explication dans la section suivante)

**Migrez** la BD pour que les relations soient créées dans la BD

```console
php bin/console make:migration
```
```console
php bin/console doctrine:migrations:migrate
```

**Vérifiez** que la BD a été mise à jour

Observez les changements dans le/les tableaux !

<br>

### 11.6.2. Explication du code généré par l'assistant

Les opérations réalisées ont généré ce code dans les entités
*Exemplaire* et *Livre*. Dans **Exemplaire.php** :

```php
.
.
.
    /**
     * @ORM\ManyToOne(targetEntity=Livre::class, inversedBy="exemplaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livre;
.
.
.
    public function getLivre(): ?Livre
    {
        return $this->livre;
    }

    public function setLivre(?Livre $livre): self
    {
        $this->livre = $livre;

        return $this;
    }

```


<br>

**Note importante** : ce code est la seule chose qui change dans la classe originale. Si vous **avez fait des erreurs** pendant la création des associations avec l'assistant, vous devez **effacer ces lignes et recommencez la création** des associations (pas créer les entités depuis zéro !)

**On a créé une association bidirectionnelle de Many-to-One.** Observez que dans Livre il y aura une collection d'exemplaires et que dans Exemplaire aura un objet Livre. **Doctrine a généré** :

-   Les **annotations** pour indiquer le type d'association entre les deux classes (on utilise *inversedBy* du côté *plusieurs* et *mappedBy* du coté *un*)

-   Les **méthodes** get et set pour accéder aux objets des deux côtés de l'association. Dans le cas de la collection, de méthodes pour rajouter un élément à la collection et pour l'effacer de la collection.

    Notez que Doctrine efface la "s" quand il crée les méthodes !
    Notre propriété s'appelle **exemplaires** mais les méthodes crées
    s'appellent par exemple removeExemplaire au lieu de
    removeExemplaires !

Observez aussi que **les méthodes spécifient les types de retour**.
**Collection** est une interface de PHP qui assure que les objets qui
l'implémentent soient Countables, Transversables et qu'on puisse les
encoder en JSON avec json_encode.

**self** est une manière d'accéder au nom de la classe (ça aurait pu
être remplacé par le nom de la classe dans chaque cas où il apparait
dans le code)

**Le code est généré, ainsi que les tableaux et les relations**

Dans la base de données il y aura une colonne *livre_id* dans
Exemplaire. Le tableau Livre par contre ne changera pas car on ne peut
pas mettre une collection d'exemplaires dans une BD relationnelle ! ;)

<br>

#### Exercices : création d'entités et de rélations

1)  On va considérer qu'un Client de la bibliothèque a une Adresse (rue, numero, codePostal, ville, client) et qu'une adresse peut correspondre à plusieurs clients (ex: co-habitants dans un appart) 

Créez la classe Client pour représenter les clients et la classe Adresse pour représenter l'adresse de chaque client. Implémentez-la en utilisant Doctrine tel qu'on vient de faire

2)  Implementez ce diagramme si vous êtes brave!

![](./images/diagramme-relations1.png)

3 Pren des exemples du cours d'UML et implémentez les entités avec Doctrine dans un nouveau projet. Si vous êtes en train de planifier un projet pour vous, prenez plusieurs entités de votre schéma et implémentez-les avec Doctrine. Implementez les associations aussi

<br>

### 11.6.3. Relation Many-To-Many

Considérons ce schéma Merise (MCD - base de données relationnelles) :

![](./images/many-to-many%20Merise.png)

Qui équivaut à ce schéma UML (POO) :

![](./images/many-to-many%20UML.png)

Nous sommes dans une association de plusieurs à plusieurs qui contient
d'attributs d'association. Symfony a son propre mécanisme pour
implementer ces associations (<many-to-many>), toutefois on n'utilisera pas ce mécanisme **parce qu'il ne permet pas d'inclure d'attributs dans l'association !**

Mais la solution est simple : on peut transformer l'association dans
deux associations de one-to-many :

![](/images/many-to-many-transform.png)

#### Exercices : création d'une rélation de plusieurs à plusieurs

Implémentez vous-même ce modèle dans **ProjetModeleSymfony** pour avoir la relation entre les Clients et les Exemplaires !

Si vous êtes toujours intéressé à implémenter une association de plusieurs à plusieurs **sans attributs**, suivez les exemples de la documentation de Doctrine :

<https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#many-to-many-bidirectional>

Voici un exemple :

Considérons qu'on a juste besoin de connaitre qui sont les clients qui ont emprunté un exemplaire et vice-versa. Nous aurions ce schéma :

![](images/clients-exemplaires.png)

**Important :**

Nous allons créer un **nouveau projet**  qui contiendra uniquement des exemples des rélations moins habituelles que le *One-To-Many (= Many-toOne)*, *Many-to-Many* et *One-to-one** qui se trouveront dans **ProjetModelSymfony**. 

**L'utilisation de ce projet un exemple/exercice sera toujours indiquée à l'avance**

Créez maintenant le projet **ProjetRelationsSymfony**, configurez la connexion vers une autre BD (ex: '**relations**'), rajoutez Doctrine lancez la création de la BD:

```console
symfony new --full ProjetRelationsSymfony

(créez le projet VS)

(changez le fichier .env)
DATABASE_URL=mysql://root:@127.0.0.1:3306/relations

php bin/console doctrine:database:create
``` 

1.  Créez les entités *Client* et *Exemplaire* **dans ProjetRelationsSymfony** 

2.  Créez une proprieté du type *relation* et choissisez **Many-to-many**

```console
C:\xampp\htdocs\Int3-WAD20-Symfony5.2\ProjetRelationsSymfony>php bin/console make:entity

 Class name of the entity to create or update (e.g. VictoriousPizza):
 > Client

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > emprunts

 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Exemplaire

What type of relationship is this?
 ------------ ------------------------------------------------------------------------ 
  Type         Description                                                             
 ------------ ------------------------------------------------------------------------ 
  ManyToOne    Each Client relates to (has) one Exemplaire.
               Each Exemplaire can relate to (can have) many Client objects

  OneToMany    Each Client can relate to (can have) many Exemplaire objects.
               Each Exemplaire relates to (has) one Client

  ManyToMany   Each Client can relate to (can have) many Exemplaire objects.
               Each Exemplaire can also relate to (can also have) many Client objects  

  OneToOne     Each Client relates to (has) exactly one Exemplaire.
               Each Exemplaire also relates to (has) exactly one Client.
 ------------ ------------------------------------------------------------------------

 Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > ManyToMany

 Do you want to add a new property to Exemplaire so that you can access/update Client objects from it - e.g. $exemplaire->getClients()? (yes/no) [yes]:
 > yes

 A new property will also be added to the Exemplaire class so that you can access the related Client objects from it.

 New field name inside Exemplaire [clients]:
 > emprunteurs

 updated: src/Entity/Client.php
 updated: src/Entity/Exemplaire.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 >


 
  Success! 
 

 Next: When you're ready, create a migration with php bin/console make:migration 
```

Créez et lancez une migration. Observez les changements dans le code des entités ainsi que dans le schéma de la BD: Doctrine crée un nouveau tableau mais il n'y a pas moyen de rajouter des attributs dans la rélation (ne pensez même pas à le faire directement dans phpMyAdmin!!!)

<br>


### 11.6.4. Relation One-To-One 

Ce type de relation est moins fréquent, mais si vous avez besoin
de les réaliser la documentation se trouve ici :

<https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#one-to-many-bidirectional>

**L'implémentation en soi est facile. Voici un exemple :**

Considérez qu'un client peut avoir un avatar (un fichier d'image) et qu'un avatar appartient à un seul client. On ne veut pas stocker les fichiers dans le tableau client, on veut carrément une autre entité.

Dans **ProjetModelSymfony** :

1.  Créez l'entité *Avatar* (contenant juste un lien type string)

2.  Suivez la même procédure que pour les relations Many-to-One mais choisissez One-To-One vers Client


```console
 Class name of the entity to create or update (e.g. VictoriousGnome):
 > Avatar

 created: src/Entity/Avatar.php
 created: src/Repository/AvatarRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > lien

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 >

 Can this field be null in the database (nullable) (yes/no) [no]:
 >

 updated: src/Entity/Avatar.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > utilisateur      

 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Client

What type of relationship is this?
 ------------ -------------------------------------------------------------------- 
  Type         Description                                                         
 ------------ --------------------------------------------------------------------
  ManyToOne    Each Avatar relates to (has) one Client.
               Each Client can relate to (can have) many Avatar objects

  OneToMany    Each Avatar can relate to (can have) many Client objects.
               Each Client relates to (has) one Avatar

  ManyToMany   Each Avatar can relate to (can have) many Client objects.
               Each Client can also relate to (can also have) many Avatar objects

  OneToOne     Each Avatar relates to (has) exactly one Client.
               Each Client also relates to (has) exactly one Avatar.
 ------------ --------------------------------------------------------------------

 Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > OneToOne

 Is the Avatar.utilisateur property allowed to be null (nullable)? (yes/no) [yes]:
 >

 Do you want to add a new property to Client so that you can access/update Avatar objects from it - e.g. $client->getAvatar()? (yes/no) [no]:
 > yes

 A new property will also be added to the Client class so that you can access the related Avatar object from it.

 New field name inside Client [avatar]:
 > avatar

 updated: src/Entity/Avatar.php
 updated: src/Entity/Client.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 >


 
  Success! 
 

 Next: When you're ready, create a migration with php bin/console make:migration```

```
Faites la migration et observez les changements dans le code des entités ainsi que dans le schéma de la BD:

<br>


![](images/one-to-one-avatar.png)

L'utilisateur_id est lié (FK) à l'id du client
<br>

<br>

### 11.6.5. Relation reflexive (self-association)

#### a) Relation reflexive d'un à plusieurs

Nous pouvons aussi implémenter une entité qui a une référence à
soi-même. L'exemple le plus typique est celui des parents-enfants ou
chef-employé. On peut modéliser ce cas en utilisant une relation
one-to-many dans la même entité.

Considérons un magasin qui organise les produits en catégories. Une catégorie peut avoir des sous-catégories mais une sous-catégorie appartient uniquement à une catégorie.

<br>

![](images/relation-reflexive-one-to-many.png)
<br>

Dans **ProjetRelationsSymfony**:

1.  Créez l'entité *Categorie*

2.  Créez une propriété **sousCategories** du type relation (OneToMany). La propriété complementaire sera **categorieParent**

```console
C:\xampp\htdocs\Int3-WAD20-Symfony5.2\ProjetRelationsSymfony>php bin/console make:entity

 Class name of the entity to create or update (e.g. BraveKangaroo):
 > Categorie

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > sousCategorie

 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Categorie

What type of relationship is this?
 ------------ -------------------------------------------------------------------------- 
  Type         Description
 ------------ --------------------------------------------------------------------------
  ManyToOne    Each Categorie relates to (has) one Categorie.
               Each Categorie can relate to (can have) many Categorie objects

  OneToMany    Each Categorie can relate to (can have) many Categorie objects.
               Each Categorie relates to (has) one Categorie

  ManyToMany   Each Categorie can relate to (can have) many Categorie objects.
               Each Categorie can also relate to (can also have) many Categorie objects  

  OneToOne     Each Categorie relates to (has) exactly one Categorie.
               Each Categorie also relates to (has) exactly one Categorie.
 ------------ -------------------------------------------------------------------------- 

 Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > OneToMany

 A new property will also be added to the Categorie class so that you can access and set the related Categorie object from it.

 New field name inside Categorie [categorie]:
 > categorieParent

 Is the Categorie.categorieParent property allowed to be null (nullable)? (yes/no) [yes]:
 > 

 updated: src/Entity/Categorie.php
 ``` 

Créez et lancez la migration, observerz le schéma de la BD:

<br>

![](images/relation-reflexive-BD.png)

Ici, le categorie_parent_id est lié avec l'id de la Categorie 

On obtient un seul tableau dans la BD et un champ extra qui indique la relation (à cause du one-to-many).

Dans le code PHP (Habitant.php) on obtient deux listes, une pour les sous-catégories et une autre pour les catégories-parent. Aucun tableau extra sera généré.

<br>

#### b) Relation récursive de plusieurs à plusieurs


Si la relation est de **plusieurs à plusieurs sans attributs** (ex. : une Personne supervise plusieurs Personnes et elle est à son tour Supervisé par d'autres Personnes), on peut utiliser une **relation many-to-many** (si on n'a pas d'attributs dans la relation.

![](images/relation-reflexive-many-to-many.PNG)

Dans **ProjetRelationsSymfony**:

1.  Créez l'entité *Employe*

2.  Créez une propriété **supervises** (attention au pluriel) du type relation (ManyToMany). La propriété complementaire sera
    **superviseurs**


Créez et lancez la migration. Observez le résultat dans le code et dans la BD :

<br>

![](images/relation-reflexive-many-to-many-BD.PNG)

<br>




**Si la relation avait eu des attributs**, on aurait créé deux entités (Personne et Supervision) nous-mêmes et on aurait appliqué la méthode de many-to-one.

Voici un exemple (on rajoute le suffixe MMA pour ne pas écraser les autres entités).

![](images/relation-reflexive-many-to-many-attributes-UML.PNG)


Dans **ProjetRelationsSymfony**:

1.  Créez l'entité *PersonneMMA* (nom, prenom)

2.  Créez l'entité *SupervisionMMA* (role)

3.  Créez une propriété dans **PersonneMMA** du type relation qui porte le nom **supervisionsSuperviseur** (les supervisions où la Personne est le superviseur. Attention au pluriel qui ne se trouve pas dans l'UML). La propriété complementaire sera
**superviseur** et pointe vers **SupervisionMMA** (OneToMany).  

1.  Créez une nouvelle propriété dans **PersonneMMA** du type relation qui porte le nom **supervisionsSupervisees** (les supervisions où la Personne est supervisé par quelqu'un d'autre. Attention aux pluriels) et pointe vers **SupervisionMMA** (OneToMany). La propriété complementaire sera **supervisee** (la Personne)
   
2.  Observez le code et le schéma généré:

<br>

![](images/relation-reflexive-many-to-many-attributes.png)



Sur les associations récursives :

<http://www.tomjewett.com/dbdesign/dbdesign.php?page=recursive.php>


<br>


# 12. Le modèle : accès à la BD avec Doctrine

Pour pouvoir réaliser un CRUD de base dans la BD nous pouvons utiliser les **méthodes de base de Doctrine** associés à notre Entité. Quand on crée une entité, sa classe **Repository** est créée aussi (ex : Client.php et ClientRepository.php sont générées).

Cette classe contient **de méthodes capables de réaliser de requêtes héritées de DoctrineORMEntityRepository**.

Documentation: <https://symfony.com/doc/3.3/doctrine.html>

## 12.1. SELECT

Créez à la main quelques enregistrements dans la base de données (Bibliotheque, table Livres) car nous allons réaliser quelques requêtes de sélection. 

(ou importez le fichier *ProjetModelSymfony\src\Entity\sql*)

Par défaut il existe les méthodes suivantes (héritées) :

-   **findOneBy** : cherche des objets avec un filtre, renvoie seulement  le premier objet qui atteint les conditions

-   **findBy** : pareil que findOneBy mais renvoie tous les objets qui atteignent les conditions du filtre. findBy renvoie **toujours un array** même si il y a qu'un objet qui atteing le filtre

-   **find** : sélection par id. Renvoie un seul objet

-   **findAll** : renvoie un array d'objets contenant tous les éléments du
    tableau

Voici un exemple d'utilisation de chaque méthode (actions dans le
controller). Créez vous-mêmes les vues et les routes.

### 12.1.1. SELECT: findOneBy


```php
#[Route ("/exemples/modele/exemple/find/one/by")]
public function exempleFindOneBy()
{
    // obtenir le entity manager
    $em = $this->getDoctrine()->getManager();
    // obtenir le repository
    $rep = $em->getRepository(Livre::class);

    // on obtient l'objet, le filtre est envoyé sous la forme d'un array
    // (on peut rajouter de clés qui provoqueront an AND)
    $livre = $rep->findOneBy(['titre' => 'Life and Fate',
                                    'prix' => 20]);

    // on stocke le résultat dans un array associatif 
    // pour l'envoyer à la vue comme d'habitude
    $vars = ['unLivre' => $livre];

    // on renvoie l'objet à la vue, rien ne change ici
    return $this->render("exemples_modele/exemple_find_one_by.html.twig", $vars);
}
```

L'objet $em est un objet de la classe EntityManager. Le ***entity
manager* gère le CRUD des entités** dans la BD. Tel qu'on l'a
mentionné ci-dessus, l'objet repository (ici $rep) possède de méthodes
qui nous facilitent ce CRUD. Par défaut nous disposons de l'ensemble de
méthodes de base mentionné mais **on peut rajouter d'autres méthodes
dans nos repository pour réaliser des requêtes plus complexes**.


### 12.1.2. SELECT: findBy 

```php
    // SELECT: findBy (chercher par un ou plusieurs champs, filtre array)
    #[Route ("exemples/modele/exemple/find/by")]
    public function exempleFindBy()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Livre::class);

        // notez que findBy renverra toujours un array même s'il trouve 
        // qu'un objet
        $livres = $rep->findBy(['prix'=>20]);
        $vars = ['livres' => $livres];
        return $this->render("exemples_modele/exemple_find_by.html.twig", $vars);
    }
```
### 12.1.3. SELECT: find

```php
    // SELECT: find (chercher par id)
    #[Route ("exemples/modele/exemple/find")]
    public function exempleFind()
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Livre::class);

        $livre = $rep->find(1);
        $vars = ['unLivre' => $livre];
        return $this->render("exemples_modele/exemple_find.html.twig", $vars);
    }
```
### 12.1.4. SELECT: findAll 

```php 
// SELECT: findAll (chercher par un ou plusieurs champs, filtre array)
#[Route ("exemples/modele/exemple/find/all")]
public function exempleFindAll()
{
    $em = $this->getDoctrine()->getManager();
    $rep = $em->getRepository(Livre::class);

    // notez que findBy renverra toujours un array même s'il trouve 
    // qu'un objet
    $livres = $rep->findAll();
    $vars = ['livres' => $livres];

    return $this->render("exemples_modele/exemple_find_all.html.twig", $vars);
}
```

Pour accéder à un objet dans la vue, utilisez la syntaxe "."

**{{ livre.titre }}**

#### Exercices : utilisation du CRUD (select)

1) Obtenez les données d'un livre en utilisant findOneBy et affichez-les dans une vue

2)  Créez une méthode qui obtient la liste de tous les clients
    (remplissez la BD d'abord ;))

3)  Créez une méthode qui obtient tous les clients qui s'appellent Marie Dupont

4)  Créez une méthode qui obtient le client qui porte l'id numéro 3 dans la BD (ou aun autre existant)

<br>

## 12.2. INSERT et UPDATE

Quand on crée un objet (ex : Livre) il n'a aucune relation avec la BD:
il est dans les **domaine des objets**. Si on lance la méthode
**persist** sur cet objet, **l'objet sera lié au domaine de la BD** 
mais aucune requête sera lancée pour le moment, l'objet ne sera pas
encore dans la BD. Nous pouvons alors :

1.  Créer un objet

2.  Lancer **persist** pour lier l'objet avec la BD (on ne modifie pas
    la BD encore!)

3.  Modifier le contenu de l'objet

4.  Lancer **flush** pour l'enregistrer/mettre à jour dans la BD

L'opération **flush applique dans la BD les changements qu'on a
réalisés dans le domaine des objets** (ex : obtenir un livre de la BD,
le modifier dans le domaine des objets et le réenregistrer dans la BD).

Les méthodes **persist** et **flush** n'appartiennent pas à la classe
Repository, ils font partie du Entity Manager de Doctrine. On discutera
ces deux méthodes dans un contexte plus global (unité de travail) dans
la section "Persistence" plus bas dans ce tutoriel.

Voyons quelques exemples d'insertion et mise à jour à continuation.

<br>

### 12.2.1. INSERT


```php
#[Route ("exemples/modele/exemple/insert")]
public function exempleInsert()
{
    $em = $this->getDoctrine()->getManager();
    // créer l'objet
    $livre = new Livre();
    $livre->setTitre("Guerre et paix");
    $livre->setDatePublication(new \DateTime("1865-1-1"));
    $livre->setPrix(20);
    $livre->setDescription(" l’histoire de la Russie à l’époque de Napoléon Ier, notamment la campagne de Russie en 1812. Léon Tolstoï y développe une théorie fataliste de l’histoire, où le libre arbitre n’a qu’une importance mineure et où tous les événements n’obéissent qu’à un déterminisme historique inéluctable. ");
    $livre->setIsbn("2131231123");
    // lier l'objet avec la BD
    $em->persist($livre);
    // écrire l'objet dans la BD
    $em->flush();

    return $this->render("exemples_modele/exemple_insert.html.twig");
}
```

### 12.2.2. UPDATE

```php
#[Route ("exemples/modele/exemple/update")]
public function exempleUpdate()
{
    $em = $this->getDoctrine()->getManager();
    // on obtient d'abord un livre
    $unLivre = $em->getRepository(Livre::class)->findOneBy(array("titre" => "Life and fate"));
    
    $unLivre->setTitre("Toto est content"); 
    // pas besoin de persist 
    // quand on obtient un objet de la BD
    // $em->persist ($unLivre); 
    $em->flush();
    return $this->render("exemples_modele/exemple_update.html.twig");
}
```


### 12.2.3. DELETE

```php
#[Route ("exemples/modele/exemple/delete")]
public function exempleDelete()
{
    $em = $this->getDoctrine()->getManager();
    $unLivre = $em->getRepository(Livre::class)->findOneBy(array("titre" => "Toto est content"));
    // pas besoin de persist
    // quand on obtient un objet de la BD il se trouvera déjà dans la unit of work 
    // $em->persist ($unLivre); 
    $em->remove($unLivre);
    $em->flush();
    return $this->render("exemples_modele/exemple_delete.html.twig");
}
```

<br>

#### Exercices: utilisation du CRUD (insert, delete) 


1.  Créez une méthode qui efface un client de la BD

2.  Créez une méthode qui insère deux Livres

3.  Pour nous faciliter la création des entités et ne pas devoir
    affecter les propriétés avec les méthodes Set, modifiez les
    constructeurs de vos entités pour qu'il puissent recevoir un array
    contenant les paramètres pour construire chaque entité. Créez une
    méthode hydrate pour chaque entité. Cette méthode sera appelée si le
    constructeur reçoit un array de couples propriété-valeur (voir le
    cours d'hydratation).


<br>

# 13. Le modèle : Persistance

Les actions qu'on réalise sur les entités (modification, mise à
jour...) sont regroupées par Doctrine dans une **unité de travail (Unit of Work)**. Quand on fait un select de la BD, les entités obtenues seront aussi incluses dans l'unité de travail.

L'unité de travail contient l'état d'un ensemble des entités, en plus de  réaliser de requêtes à la BD. Elle est en charge de maintenir la **cohérence entre le modèle et la BD**

Documentation :

<http://doctrine-orm.readthedocs.io/en/latest/reference/unitofwork.html>

<br>

**L'unité de travail fonctionne de la manière suivante** :

-   La méthode **persist** ($objet) **rajoute une entité à l'unité de
    travail** (si elle n'y était pas présente déjà).

    Ex : quand on vient de créer un Livre avec **new.**

    L'entité devient "gérée" (**"managed"**)

-   Quand **on fait un select de la BD, les entités obtenues se trouvent directement dans l'unité** **de** **travail** et on n'a pas besoin de faire **persist**. Par contre, si on crée une entité juste avec new, elle fera partie de l'unité de travail uniquement quand on lancera **persist** pour la mettre dans l'unités de travail

-   Si on veut **enlever les entités de l'unité de travail** et les rendre indépendantes, on utilise **clear**. L'unité de travail sera vidée. Les objets deviennent indépendants de l'entity manager et les modifications n'auront pas d'effet sur la BD même si on lance **flush**

-   **persist** rajoute une entité à l'unité de travail et rend cette instance "gérée" (c'est-à-dire que les futures mises à jour de l'entité seront suivies et la BD sera modifié quand on fera **flush**).

-   **refresh** recharge le contenu de l'entité de la BD. Si on obtient une entité de la BD et on la modifie, en lançant refresh l'entité sera à nouveau lue de la BD

-   Chaque fois qu'on appelle **flush**, Doctrine vérifie l'unité de travail et synchronise les objets avec la BD (change la BD en fonction du contenu des objets qui se trouvent dans l'unité de travail).

```php
// REFRESH

#[Route ("/exemples/modele/exemple/refresh")]
public function exempleRefresh()
{
    $em = $this->getDoctrine()->getManager();
    $unLivre = $em->getRepository(Livre::class)->findOneBy(array("titre" => "Guerre et paix"));
    // on modifie le Livre obtenu de la BD
    $unLivre->setTitre("La vie est belle");
    // on affiche le livre après la modification (domaine objets)
    dump ($unLivre);

    // recharge le livre de la BD, il y aura le titre original
    $em->refresh($unLivre);

    // de-commentez cette ligne pour vérifier que l'objet a à nouveau le titre original
    dd( $unLivre); // dd est dump and die!

    $em->persist($unLivre);
    // rien ne change dans la BD
    $em->flush();
    return $this->render("exemples_modele/exemple_refresh.html.twig");
}
```

```php
// CLEAR

#[Route ("/exemples/modele/exemple/clear")]
public function exempleClear()
{
    $em = $this->getDoctrine()->getManager();
    $livre = $em->getRepository(Livre::class)->findOneBy(array("titre" => "Moby Dick"));
    $livre->setTitre("Totorito");
    $em->clear();
    // ce flush ne fera rien, les entités on été enlevées de l'unité du travail
    $em->flush();

    return $this->render("exemples_modele/exemple_clear.html.twig");
}

```

<br>

# 14. Le Modèle : Transitivité en Cascade 

Quand nous avons des associations entre les entités, nous avons la possibilité d'indiquer à Symfony **de propager l'opération réalisé sur une entité en cascade sur les entités associées**.

**Exemple** : on efface un livre et on provoque l'effacement de tous ses exemplaires en cascade

On travaillera sur un nouveau controller: **ExempleCascadeController**.


Nous avons plusieurs possibilités :

**cascade-persist** : Si on a une entité qui contient de références à d'autres entités, et nous modifions/rajoutons ces dernières, nous allons devoir faire uniquement **persist** sur la première et Doctrine fera persist sur toutes les entités associées.

Exemple : nous obtenons un Livre auquel on rajoute des exemplaires. Si nous faisons **persist** sur le Livre, l'opération sera transmise en cascade à tous les exemplaires. Autrement on devrait lancer **persist** sur chaque exemplaire.

**cascade-remove** : Si on efface une entité, l'effacement sera propagé en cascade.

Si l'entité n'a pas eu un **persist**, elle n'est pas effacée de la BD mais ses entités associées le seront.

Si on a enlevé l'entité de l'unité de travail (clear), remove enverra une exception.

**cascade-refresh** : pareil que la précédente mais pour **refresh**


**cascade-all** : Implique toutes les opérations précédentes. Peut
dégrader la performance.


<br>

**Exemple** : Réalisation d'un **INSERT** des objets d'une relation One-to-Many sans cascade-persist

Observez cet exemple où on crée un Livre et plusieurs Exemplaires, et on stocke le tout dans la BD (créez un nouveau controller *ExemplesCascadeController* et importez les classes Livre et Exemplaires) :

```php
#[Route("/exemples/cascade/exemple/sans/encapsulation")]
public function exempleSansEncapsulation (){
    
    $em = $this->getDoctrine()->getManager();
    // on crée un livre
    $livre = new Livre();
    $livre->setTitre("Confesión de un asesino");
    $livre->setPrix (20);
    $livre->setDescription("Roman");
    $livre->setDatePublication(new \DateTime("1968:10:10 00:00:00"));
    // on crée deux exemplaires de ce Livre
    $exemplaire1 = new Exemplaire();
    $exemplaire1->setEtat("tache de chocolat");
    $exemplaire2 = new Exemplaire();
    $exemplaire2->setEtat("très vieux");
    $livre->addExemplaire($exemplaire1);
    $livre->addExemplaire($exemplaire2);

    // Observez que l'exemplaire fait référence à son livre 
    // grâce au code généré par l'assistant dans "addExemplaire"
    // car on a choisi de créer une association bidirectionnelle!
    // dump ($exemplaire1->getLivre());
    // die();
    
    // nous n'avons pas besoin d'indiquer nous-mêmes qui est 
    // le livre de chaque exemplaire! 
    // $exemplaire1->setLivre($livre);   // pas besoin
    // $exemplaire2->setLivre($livre);   // pas besoin

    // $em->persist ($exemplaire1);
    // $em->persist ($exemplaire2);
    
    $em->persist($livre);
    $em->flush();

    return $this->render ("exemples_cascade/exemple_sans_encapsulation.html.twig");
}
```

Normalement le code devrait insérer un Livre et deux Exemplaires dans la
BD, et puis mettre à jour la clé étrangère (livre_id) de chaque
exemplaire.

Mais si vous le lancez-vous obtenez :

![](images/error-cascade.png)

Symfony remarque qu'on n'a pas fait **persist** des objets associés au Livre (les Exemplaires du Livre qu'on vient de créer). Pour que le mécanisme fonctionne, nous avons deux possibilités :

-   Lancer **persist** pour les exemplaires avant de lancer le persist
    du Livre (pas pratique, long à écrire)

```php
    $em->persist($exemplaire1);
    $em->persist($exemplaire2);
    $em->persist($livre);
    .
    .
    .
```

-   Spécifier que **la persistance doit se réaliser en cascade** dans l'annotation de l'association **(fichier de l'entité). Modifiez le fichier de l'entité Livre.php**

```php
/**
  * @ORM\OneToMany(targetEntity=Exemplaire::class, mappedBy="livre",cascade={"persist"})
  */
private $exemplaires;
```

**IMPORTANT** : Observez que les deux côtes de la relation sont mises à
jour dans la méthode **addExemplaire** :

1.  **L'exemplaire est rajouté à la liste d'exemplaires dans Livre**

2.  **La propriété Livre est affecté dans l'objet exemplaire. Cela permet que quand on réalisera la migration dans la BD, le livre_id sera mis à jour sans devoir le faire à la main !**


<br>

#### Exercices : actions en cascade

1.  Effacez un livre et provoquez que les exemplaires soient effacés automatiquement. Modifiez la configuration de cascade pour que l'opération soit réalisée correctement (exerciceCascadeRemove)

2.  Créez une méthode qui rajoute deux clients et une adresse. Faites bien attention au sens de cette association (côté Many et côté One). Modifiez les attributs de cascade dans l'entité nécessaire pour pouvoir exécuter le persist

3.  Créez une méthode qui cherche un client dans la BD et puis l'efface, y incluses toutes ses adresses

<br>

# 15. Le Modèle : Encapsulation 


Le code de l'exemple précédant crée un Livre, puis crée deux
exemplaires et pour finir stocke le tout dans la BD.

**La méthode utilisée fonctionne mais on peut l'améliorer** :

Pour le moment on doit toujours créer les objets Livre et Exemplaire dans l'action principale. On doit alors **connaitre l'existence et importer toutes ces classes dans le controller !**

On peut aller plus loin en utilisant le concept d'**encapsulation**. L'encapsulation es un principe de la programmation orienté objet qui, entre autre, propose de **cacher la visibilité des objets ou des parties d'un objet**. Dans ce cas on veut permettre au développeur de rajouter des exemplaires sans que le controller aie besoin de connaitre l'existence de la classe Exemplaire.

Le mécanisme est très simple : **au lieu de créer l'objet** exemplaire **dans l'action du controller et l'envoyer à la méthode qui le rajoute** **au livre** (addExemplaire dans Livre), **on créera** l'exemplaire **à l'intérieur d'une nouvelle méthode de Livre**. Cette méthode du livre sera **appelée depuis l'action, qui l'enverra les données nécessaires pour créer l'objet** exemplaire **mais pas l'objet en soi**. Voici un exemple, observez les différences avec l'exemple précédant :

Nouvelle méthode **dans Livre.php** :

```php
// rajouté pour permettre l'encapsulation (section dans le notes)
public function addExemplaireNoClass($etat, $emplacement)
{
    $exemplaire = new \App\Entity\Exemplaire();
    $exemplaire->setEtat($etat);
    $this->addExemplaire($exemplaire);
}
```
Nous n'avons plus besoin de la classe Exemplaire dans l'action principale et en plus son code sera simplifié :


```php
class ExemplesEncapsulationController extends AbstractController
{
    /**
     * @Route("/exemples/encapsulation/rajouter/livre/exemplaires/encapsulation")
     */
    public function rajouterLivreExemplairesEncapsulation()
    {
        $em = $this->getDoctrine()->getManager();
        // on crée un livre
        $livre = new Livre();
        $livre->setTitre("Currucucu Paloma");
        $livre->setPrix(20);
        $livre->setDescription("Roman");
        $livre->setDatePublication(new \DateTime("1968:10:10 00:00:00"));
        $livre->setIsbn("321423142134");

        // on ne crée pas ici les exemplaires. On envoie les données 
        // necessaires pour créer les objets Exemplaire à la nouvelle méthode
        // de l'entité Livre
        // Cette méthode mettra à jour les deux côtés de la relation
        // car elle fait appel à addExemplaire
        $livre->addExemplaireNoClass("tache de chocolat", "15A");
        $livre->addExemplaireNoClass("très vieux", "13B");

        $em->persist($livre);
        $em->flush();
        return $this->render("exemples_encapsulation/rajouter_livre_exemplaires_encapsulation.html.twig");
    }
}
```
Comparez ce code avec celui de "rajouterSansEncapsulation"...

<br>

# 16. Le Modèle : Héritage de classes 


Nous allons utilisez le projet **ProjetRelationsSymfony** pour illustrer l'héritage.
<br>

**Exemple** : Les clients et les auteurs d'une application sont tous de personnes. Implementons ce modèle en code et dans la BD

<br>

![](./images/heritage1.png)


Nous pouvons approcher ce problème de deux formes différentes :

1.  **Single Table Inheritance** : On crée un seul tableau contenant les propriétés des trois entités. Dans le code il y a trois entités mais dans la BD il y a qu'une. Pour savoir si une ligne dans le tableau correspond à une entité ou une autre on rajoutera une **colonne discriminator** qui indiquera le type de la ligne. Simple, rapide et sans jointures.

2.  **Class Table Inheritance** : On crée un tableau pour chaque entité.  Plus lourd, pas toujours stable. Chaque query, même les très simples, demanderont la réalisation d'une jointure.

<br>

## 16.1. Single Table Inheritance

L'héritage de table unique (Single Table inheritance) est une stratégie de mappage d'héritage dans laquelle **toutes les classes d'une hiérarchie sont mappées vers une seule table de base de données**. Afin de distinguer quelle ligne du tableau représente quel type dans la hiérarchie, une colonne dite "discriminator" est utilisée.

1)  **Créez les entités** enfants et parent : ClientH, AuteurH et PersonneH

2)  Créez un héritage entre les filles et la classe mère. (ici, rajoutez l'héritage dans la définition des classes filles)

```php
class AuteurH extends PersonneH {...}
class ClientH extends PersonneH {...}
```


3)  **Rajoutez les annotations** **InheritanceType,
DiscriminatorColumn** et **DiscriminatorMap** à la classe **parent**

**InheritanceType** indique le type d'héritage. Ici c'est Single Table
**DiscriminatorColumn** indique le nom de la colonne qui contiendra la valeur qui nous indique à quelle classe fille correspond la ligne (ici "auteurH" ou "clientH")
**DiscriminatorMap** indique les valeurs concretes de la colonne indiquée dans DiscriminatorColumn

```php
// n'oubliez pas d'importer ces annotations
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;

/**
 * @ORM\Entity(repositoryClass=PersonneHRepository::class)
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr",type="string")
 * @DiscriminatorMap({"personneH"="PersonneH","auteurH"="AuteurH","clientH"="ClientH"})]
 */
```



1)  **Migrez la BD** et observez le résultat dans la BD
<br>

![](./images/heritage2.png)

Bien que nous avons trois entités au total, la méthode de **Single Table crée une seule table** contenant une colonne (discr) qui indiquera à quelle classe fille correspond  l'enregistrement dans la BD (dans notre cas le colonne contient "AuteurH" ou "ClientH")

Les **régles** à suivre sont :

-   @InheritanceType et @DiscriminatorColumn doivent être spécifiés dans la classe base de de la hiérarchie des entités mappées

-   @DiscriminatorMap indique le type d'une ligne. Ici, une valeur de **discr** indique *AuteurH* ou *ClientH* 

On peut maintenant faire le CRUD de nos entités ...

**Exemple** : insérer un Client et un Auteur dans la base de de données

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientH;
use App\Entity\AuteurH;
use Symfony\Component\HttpFoundation\Response;


class ExemplesHeritageController extends AbstractController
{
    /**
     * @Route("/exemples/heritage/inserer/client/auteur")
     */
    public function insererClientAuteur(){
        $em = $this->getDoctrine()->getManager();

      
        // créer l'objet
        $client = new ClientH();
        $client->setNom("López");
        $client->setPrenom("Jean");
        $client->setEmail ("jean.lopez@lala.de");
        $client->setNumero(200);
        $auteur = new AuteurH();
        $auteur->setNom("Lucas");
        $auteur->setPrenom("George");
        $auteur->setNationalite("USA");
        
        // lier les objets avec la BD
        $em->persist($client);
        $em->persist($auteur);
        
        // écrire les objets dans la BD
        $em->flush();
        return new Response ("Ok, objets insérés");
    }
}

```

Nous devons uniquement créer un Client et l'insérer, Doctrine remplira tant le tableau parent avec la colonne discriminateur ! Les valeurs qui ne concernent pas chaque entité respective seront *NULL* (logique...)

<br>

## 16.2. Class Table Inheritance

Nous n'allons pas developper cette méthode maintenant mais vous avez la documentation ici :

<https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/inheritance-mapping.html#class-table-inheritance>


# 17. Fixtures pour remplir la BD

Doctrine fournit un outil qui nous permet **d'encoder de données dans la base de données d'une façon semi-automatique**, ce qui est très utile pendant les périodes de développement et de test de l'application.

Le fonctionnement est simple : **si on veut encoder de données pour une classe d'entité** existante (ex : Livres) on **demande à Doctrine de créer une class Fixture** (ex : LivresFixtures) qui contient au moins une **méthode load**. Dans cette méthode (à remplir par nous) **contiendra le code qui insère** les données dans la BD. Puis on appelle cette fonction et les données seront stockés dans la BD.

Ce système a plusieurs avantages :

-   On peut appeler la méthode génératrice autant de fois qu'on veut

-   Le code qui crée les données de la BD se trouve localisé

-   On peut générer les données pour toutes les entités du projet avec une seule commande (si on a créé la Fixture pour chaque entité, bien sûr).

Toute la documentation sur les fixtures se trouve ici :

<https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html>

mais on va développer un exemple simple et associé à une classe d'entité qui nous servira plus tard.

**Exemple** : Création d'une fixture 

On va créer et lancer une fixture pour l'entité **Client** dans le projet **ProjetModelSymfony**. Si l'entité n'existe pas, créez la d'abord (client: nom et lienImage). Suivez cette procédure :

1.  Installez le **support** pour les **fixtures**

```console
composer require --dev doctrine/doctrine-fixtures-bundle
```

2.  **Créez la classe fixture** (nom: ClientFixture)

```php
php bin/console make:fixture
```

3.  **Editez** la function **load** pour qu'elle stocke des Clients

```php
<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;

class ClientFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 10; $i++) {
            $client = new Client();
            $client->setNom("Dupont " + $i);
            $client->setPrenom("Sarah " + $i);
            $manager->persist($client);
        }

        $manager->flush();
    }
}
```

4. **Lancez** les fixtures

```console
php bin/console doctrine:fixtures:load --append
```

**--append** permet de lancer la fixture sans effacer les données existantes dans les tableaux. Si vous l'enlevez-vous effacerez la totalité du contenu de votre BD (Symfony vous previent quand-même)

Ici on a qu'une fixture mais on pourrait avoir plein.

1.  Vérifiez que les données sont insérées dans la BD

**Note**: si vous voulez générer de valeurs plus "réalistes" vous
pouvez utiliser la librairie Faker.

#### Exercices :

1.  Créez une classe Fixture qui permette de rajouter automatiquement
    des objets d'une classe de votre choix

<br>


# 18. Accès à la BD avec DQL

Nous avons vu comment réaliser de requêtes CRUD simples, mais dans un projet réel nous allons devoir lancer de requêtes assez plus complexes, tels que de regroupements (GROUP BY), de jointures de tableaux (JOIN) ou
même de sous-requêtes.

Pour ce faire, on peut utiliser :

1.  Du **SQL pur en PHP** (tel qu'on a fait jusqu'à maintenant)

2.  **DQL**: Doctrine Query Language, similaire à SQL

3.  **QueryBuilder**: une API qui nous permet de créer la requête en
    utilisant uniquement la POO

On va nous concentrer sur les méthodes 2 et 3. Dans cette section
concrètement on va étudier la méthode numéro 2: DQL.

**Documentation de DQL:**

<http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/dql-doctrine-query-language.html>

Tous les exemples et exercices se trouvent dans **ProjetDQLSymfony**. Créez votre propre projet et la BD (bibliothequeDQL)

**DQL utilise des objets, pas de tableaux**. Nos requêtes doivent être basées sur notre modèle de classes. Ça implique qu'on ne peut pas, par exemple, faire une jointure de deux tableaux qui n'ont pas de relation
dans le modèle de classes.

Nous pouvons réaliser des requêtes de SELECT, UPDATE et DELETE. Pour les INSERTS on doit utiliser la méthode déjà expliquée de persistance (créer l'objet, le rendre persistant et le stocker dans la BD en lançant
flush).

Passons aux exemples d'utilisation pour mieux comprendre.

## 18.1. SELECT

### 18.1.1. Requête qui renvoi un array d'arrays

```php
#[Route ("/exemples/dql/exemple/select/array/arrays")]
public function exempleSelectArrayArrays (){
    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery ("SELECT livre.titre, livre.prix FROM App\Entity\Livre livre ".
                            "WHERE livre.prix>15");
    $resultat = $query->getResult();
    $vars = ['livres'=> $resultat];
    return $this->render ("exemples_dql/exemple_select_array_arrays.html.twig", $vars);
}
```
-   "livre" est un **alias** pour la classe Livre. Toutes **les entités de cette classe qui satisfont la requête seront incluses** dans le résultat de la requête.

-  **FROM** est toujours **suivi du nom d'une entité** (pas 'tableau'!). On doit écrire le chemin complet

-   **Les expressions** telles que *livre.titre* indiquent le "chemin" qui **permet d'atteindre des objets et de propriétés** dans la requête

        Ex: livre.exemplaires, exemplaire.etat

![](./images/dql-arrayarrays.png)


### 18.1.2. Requête qui renvoi un array d'objets

```php
// SELECT des Livres complets en DQL, 
// on obtient un array d'objets! 

#[Route ("/exemples/dql/exemple/select/array/objets")]
public function exempleSelectArrayObjets (){
    $em = $this->getDoctrine()->getManager();
    // avec cette requête on obtient un array d'objets
    $query = $em->createQuery ('SELECT livre FROM App\Entity\Livre livre WHERE livre.prix >15');
    $resultat = $query->getResult();
    $vars = ['livres'=> $resultat];
    return $this->render ("exemples_dql/exemple_select_array_objets.html.twig", $vars);   
}
```

<br>

## 18.2. Regular Joins et Fetch Joins

Nous pouvons naviguer dans la hiérarchie d'objets de Doctrine tel qu'on l'a fait jusqu'à maintenant...

**Exemple** : obtenir un entité Livre de la BD et, une fois on l'a dans une variable, obtenir les Exemplaires de ce Livre pour après obtenir les Emprunts.

Tel qu'on a déjà vérifié, Doctrine utilise une technique qui porte le nom de **lazy-loading**. Pour résumer son fonctionnement : **si une entité** (ex. : Livre) **est associée à d'entités d'une autre classe** (ex. : Exemplaires dans Livre), **Doctrine réalisera les requêtes à la BD uniquement quand on accédera au contenu de ces dernières entités en PHP** (accéder aux exemplaires du Livre pour les afficher, par exemple).
Autrement l'objet (ou liste d'objets) contenu dans l'entité (ex. : Exemplaires dans Livre) apparaitra vide (ou contenant un id, mais jamais complet)

Ce comportement est très logique car si à chaque fois qu'on accède à une entité on doit charger toutes ses entités associés la surcharge du système peut être énorme (ex. : obtenir un Livre et devoir charger tous ses Exemplaires, Emprunts, Clients etc...)

Quand on utilise du DQL contenant de jointures nous allons avoir deux possibilités : faire la requête pour qu'elle utilise le lazy-loading ou forcer la charge des entités associées.

Voyons les deux cas de figure :

### 18.2.1. Regular Join 

Ici, la collection d'exemplaires sera vide

```php
// Regular Join
#[Route ("/exemples/dql/exemple/regular/join")]
public function exempleRegularJoin(){
    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery ('SELECT livre FROM App\Entity\Livre livre JOIN '
            . 'livre.exemplaires exemplaires');
    $resultats = $query->getResult();
    // observez que les exemplaires sont vides
    $resultat = $query->getResult();
    // observez que les exemplaires sont remplis dans le dump de la vue
    $vars = ['livres'=> $resultat];
    return $this->render ("exemples_dql/exemple_regular_join.html.twig", $vars);
    
}
```


![](./images/dql-regularjoin.png)

### 18.2.2. Fetch Join 

Ici, la collection d'Exemplaires remplie. 

```php
    // Fetch Join
    #[Route ("/exemples/dql/exemple/fetch/join")]
    public function exempleFetchJoin(){
        $em = $this->getDoctrine()->getManager();
        // On rajoute l'entité qui est en rélation (exemplaires) dans le SELECT
        $query = $em->createQuery ('SELECT livre, exemplaires FROM App\Entity\Livre livre '
                . 'JOIN livre.exemplaires exemplaires');
        $resultat = $query->getResult();
        // observez que les exemplaires sont remplis dans le dump de la vue
        $vars = ['livres'=> $resultat];
        return $this->render ("exemples_dql/exemple_fetch_join.html.twig", $vars);
    }

```
![](./images/dql-fetchjoin.png)


### 18.3. Fonctions Year, Month et Day

Ces fonctions n'existent pas par défaut dans DQL. La meilleure solution est de rajouter un bundle

<https://github.com/beberlei/DoctrineExtensions>


```console
composer require beberlei/DoctrineExtensions
```

Il faut rajouter les fonctions dans la config de doctrine
**config/packages/doctrine.yaml :**



```yml
    orm:
        auto_generate_proxy_classes: true
        naming_strategy: doctrine.orm.naming_strategy.underscore_number_aware
        auto_mapping: true
        mappings:
            App:
                is_bundle: false
                type: annotation
                dir: '%kernel.project_dir%/src/Entity'
                prefix: 'App\Entity'
                alias: App
        dql:
            string_functions:
                DAY: DoctrineExtensions\Query\Mysql\Day
                MONTH: DoctrineExtensions\Query\Mysql\Month
                YEAR: DoctrineExtensions\Query\Mysql\Year

```
Pour l'utiliser c'est très simple :

```php
$em->createQuery("SELECT MONTH(c.dateConcours) AS mois, 
YEAR(c.dateConcours) AS annee FROM AppEntityConcours c");
```

![](./images/dql-dates.png)


## 18.4. UPDATE

Exemple de UPDATE en DQL : réduire le prix d'un livre

```php
// UPDATE
#[Route ("/exemples/dql/exemple/update/{titre}")]
public function exempleUpdate (Request $req){

    $em = $this->getDoctrine()->getManager();
    $titre = $req->get('titre');

    $query = $em->createQuery ('UPDATE App\Entity\Livre l SET l.prix = l.prix - :montant WHERE l.titre = :titre');

    // pour simplifier on fixe ici le montant à déduire 
    $montant = 0.5; 
    
    $query->setParameter ('montant',$montant);
    $query->setParameter ('titre',$titre);
    $query->execute(); // pas getResult!
    return $this->render ("exemples_dql/exemple_update.html.twig"); 

}
```


**Important :** Les instructions DQL UPDATE sont **portées directement dans une simple instruction UPDATE de la BD**. Ça implique que **les entités qui sont déjà chargées dans le contexte de persistance (UOW) ne seront PAS synchronisées** avec le nouvel état de la base de données mise à jour.
Dans certains cas, quand vous utilisez du DQL il est recommandé d'appeler la méthode **clear** du EntityManager pour d'extraire les nouvelles instances de toute entité affectée.


#### Exercices DQL

En utilisant DQL :

1)  Obtenez les clients

2)  Obtenez les emprunts (isolés)

3)  Obtenez les emprunts de tous les clients (seulement le nom du client
    et les dates de retour)

4)  Obtenez l'état de tous les emprunts de tous les clients (affichez
    le nom, prénom du client ainsi que l'état de l'exemplaire)

5)  Obtenez la liste de livres empruntés par tous les clients : nom du
    client, prénom du client et titre du livre

6)  Obtenez la liste des livres empruntés par un client de votre choix :
    nom du client, prénom du client et titre du livre

7)  Obtenez la liste de livres qui coutent plus qu'une valeur reçue en
    paramètre dans l'URL

8)  Obtenez tous les livres qui contient un texte dans le titre reçu
    comme paramètre dans l'URL

9)  Obtenez tous les emprunts réalisés pendant la prémiere quinzaine de mars de 2021 en utilisant DQL. On veut afficher le titre du livre, la date de l'emprunt et le nom et le prénom du client

10) **Exercez-vous** en réalisant toute sorte de requêtes, essayez les possibilités de Doctrine :

<https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/dql-doctrine-query-language.html>

11) **Extra** : Créez de vues pour afficher convenablement tous ces résultats. Vous allez mieux comprendre coment parcourir les structures de données

<br>


# 19. Accès à la BD avec DQL en utilisant les classes Repositoires


Tel qu'on a déjà mentionné dans la section "Selection", quand on crée une entité sa classe Repository est créée aussi. Cette classe contient les méthodes par défaut qu'on a déjà utilisés (find, findBy, findOneBy,
etc...). On va maintenant rajouter **de méthodes faits par nous capables de réaliser de requêtes plus complexes**.

Le but est de simplifier les actions du controller qui, au lieu de devoir contenir la logique de requêtes complexes, appelleront aux actions des repositoires.

**Exemple** : Créez une méthode dans la classe Repository de Livre et l'utiliser depuis une action du controller (au lieu d'utiliser DQL depuis le controller lui-même)

1.  **Créez la méthode du repository pour nous faciliter la tâche**

```php
// DQL: obtenir les livres entre deux prix 
public function livresEntreDeuxPrixDQL($pmin, $pmax)
{
    $em = $this->getEntityManager();
    // avec cette requête on obtient un array
    $query = $em->createQuery('SELECT livre FROM App\Entity\Livre livre WHERE livre.prix >= :pmin AND ' .
        'livre.prix <= :pmax');
    $query->setParameter('pmin', $pmin);
    $query->setParameter('pmax', $pmax);
    $resultat = $query->getResult();
    // cette méthode renvoie le résultat de la requête
    return $resultat;
}
```
-   La méthode renvoie le résultat de la requête, pas de vue bien évidemment

-   **Pour obtenir l'Entity Manager dans les classes Repository** on
    utilise

    **$this->getEntityManager()**. Nous ne sommes pas dans le
    controller !



2.  **Utilisez la méthode depuis le controller**

Observez qu'il n'y a pratiquement rien à faire dans l'action...

```php
    #[Route ("/exemples/dql/repositories/utilise/repo/livres/entre/deux/prix/{prixMin}/{prixMax}")]
    function utiliseRepoLivresEntreDeuxPrix (Request $req){
    
        $prixMin = $req->get("prixMin");
        $prixMax = $req->get("prixMax");
        
        $em = $this->getDoctrine()->getManager();
        $livresRepo = $em->getRepository(Livre::class);
        $livres = $livresRepo->livresEntreDeuxPrixDQL($prixMin, $prixMax);
        dump ($livres);
        die();
        
        // return new Response .....
    }
```

#### Exercices : 
(pas résolus)

1.  Faites une action où vous créez une adresse et plusieurs clients. Le
    tout sera stocké dans la BD

2.  Rajoutez une adresse à un client existant

3.  Créez une méthode qui utilise DQL dans la classe Repository de
    l'entité Adresse pour vous faciliter la tâche d'obtenir les
    adresses d'une certaine ville

<br>

# 20. Accès à la BD avec Query Builder


**Query Builder est une API qui permet de générer des requêtes de séléction complexes qui renvoient des objets** (requêtes de regroupement, jointures, sous-requêtes...) et pas juste des arrays. En fait Query Builder est un générateur de DQL pour faciliter la création
de requêtes, mais DQL est préféré.

On pourra réaliser les fonctions de DQL mais en utilisant une notation complètement orientée objet (avec ses avantages et ses inconvénients)

Un Objet **QueryBuilder est accéssible depuis une classe**
**Repository**.

QueryBuilder fournit beaucoup de méthodes qu'on peut combiner selon nos besoins concrètes :

https://www.doctrine-project.org/projects/doctrine-orm/en/2.8/reference/query-builder.html


```php
<?php
class QueryBuilder
{
    // Example - $qb->select('u')
    // Example - $qb->select(array('u', 'p'))
    // Example - $qb->select($qb->expr()->select('u', 'p'))
    public function select($select = null);

    // addSelect does not override previous calls to select
    //
    // Example - $qb->select('u');
    //              ->addSelect('p.area_code');
    public function addSelect($select = null);

    // Example - $qb->delete('User', 'u')
    public function delete($delete = null, $alias = null);

    // Example - $qb->update('Group', 'g')
    public function update($update = null, $alias = null);

    // Example - $qb->set('u.firstName', $qb->expr()->literal('Arnold'))
    // Example - $qb->set('u.numChilds', 'u.numChilds + ?1')
    // Example - $qb->set('u.numChilds', $qb->expr()->sum('u.numChilds', '?1'))
    public function set($key, $value);

    // Example - $qb->from('Phonenumber', 'p')
    // Example - $qb->from('Phonenumber', 'p', 'p.id')
    public function from($from, $alias, $indexBy = null);

    // Example - $qb->join('u.Group', 'g', Expr\Join::WITH, $qb->expr()->eq('u.status_id', '?1'))
    // Example - $qb->join('u.Group', 'g', 'WITH', 'u.status = ?1')
    // Example - $qb->join('u.Group', 'g', 'WITH', 'u.status = ?1', 'g.id')
    public function join($join, $alias, $conditionType = null, $condition = null, $indexBy = null);

    // Example - $qb->innerJoin('u.Group', 'g', Expr\Join::WITH, $qb->expr()->eq('u.status_id', '?1'))
    // Example - $qb->innerJoin('u.Group', 'g', 'WITH', 'u.status = ?1')
    // Example - $qb->innerJoin('u.Group', 'g', 'WITH', 'u.status = ?1', 'g.id')
    public function innerJoin($join, $alias, $conditionType = null, $condition = null, $indexBy = null);

    // Example - $qb->leftJoin('u.Phonenumbers', 'p', Expr\Join::WITH, $qb->expr()->eq('p.area_code', 55))
    // Example - $qb->leftJoin('u.Phonenumbers', 'p', 'WITH', 'p.area_code = 55')
    // Example - $qb->leftJoin('u.Phonenumbers', 'p', 'WITH', 'p.area_code = 55', 'p.id')
    public function leftJoin($join, $alias, $conditionType = null, $condition = null, $indexBy = null);

    // NOTE: ->where() overrides all previously set conditions
    //
    // Example - $qb->where('u.firstName = ?1', $qb->expr()->eq('u.surname', '?2'))
    // Example - $qb->where($qb->expr()->andX($qb->expr()->eq('u.firstName', '?1'), $qb->expr()->eq('u.surname', '?2')))
    // Example - $qb->where('u.firstName = ?1 AND u.surname = ?2')
    public function where($where);

    // NOTE: ->andWhere() can be used directly, without any ->where() before
    //
    // Example - $qb->andWhere($qb->expr()->orX($qb->expr()->lte('u.age', 40), 'u.numChild = 0'))
    public function andWhere($where);

    // Example - $qb->orWhere($qb->expr()->between('u.id', 1, 10));
    public function orWhere($where);

    // NOTE: -> groupBy() overrides all previously set grouping conditions
    //
    // Example - $qb->groupBy('u.id')
    public function groupBy($groupBy);

    // Example - $qb->addGroupBy('g.name')
    public function addGroupBy($groupBy);

    // NOTE: -> having() overrides all previously set having conditions
    //
    // Example - $qb->having('u.salary >= ?1')
    // Example - $qb->having($qb->expr()->gte('u.salary', '?1'))
    public function having($having);

    // Example - $qb->andHaving($qb->expr()->gt($qb->expr()->count('u.numChild'), 0))
    public function andHaving($having);

    // Example - $qb->orHaving($qb->expr()->lte('g.managerLevel', '100'))
    public function orHaving($having);

    // NOTE: -> orderBy() overrides all previously set ordering conditions
    //
    // Example - $qb->orderBy('u.surname', 'DESC')
    public function orderBy($sort, $order = null);

    // Example - $qb->addOrderBy('u.firstName')
    public function addOrderBy($sort, $order = null); // Default $order = 'ASC'
}
```

La documentation de QueryBuilder se trouve ici :

[http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/query-builder.html#](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/query-builder.html)

<https://www.doctrine-project.org/projects/doctrine-orm/en/2.7/reference/query-builder.html>

À continuation on va réaliser un exemple pratique, on commencera par une requête simple.

Créez un controller portant le nom **UtiliseQueryBuilderController**

**Exemple** : utiliser QueryBuilder pour construire une requête capable d'obtenir le nombre de Livres dont le prix se trouve entre un minimum et un maximum

1.  **Créez la méthode du repositoire** (LivreRepository.php) **capable de realiser la requête avec Query Builder**

```php
// QUERYBUILDER: obtenir les livres entre deux prix
// obtenir les livres entre deux prix, version QueryBuilder
public function getEntreDeuxPrix($min, $max)
{
    $qb = $this->createQueryBuilder("u"); // u est un nom générique
    $query = $qb->select('u')
        ->where('u.prix >= :min')
        ->andWhere('u.prix <= :max')
        ->setParameter('min', $min)
        ->setParameter('max', $max)
        ->getQuery();
    $res = $query->getResult();
    //var_dump ($res);

    return $res;
}
```

Notez que l'API nous permet de réaliser l'ensemble de la requête sans utiliser ni du SQL pur ni du DQL. Sachez quand-même que QueryBuilder utilise le langage DQL comme langage sous-jacent.

1.  **Créez une action dans le controller qu'utilise cette méthode** et envoyez la réponse au client (new Response) pour qu'il l'affiche

```php
#[Route ("/exemples/query/builder/utilise/repo/livres/entre/deux/prix/{prixMin}/{prixMax}")]
public function utiliseRepoLivresEntreDeuxPrix (Request $req){

    $prixMin = $req->get("prixMin");
    $prixMax = $req->get("prixMax");
    
    $em = $this->getDoctrine()->getManager();
    $livresRepo = $em->getRepository(Livre::class);
    $livres = $livresRepo->livresEntreDeuxPrixDQL($prixMin, $prixMax);
    dump ($livres);
    die();
    
    // return new Response .....
}    
```


**Exemple** : obtenir un Client dont on connait l'email de la BD avec QueryBuilder

1.  Créez la méthode getByEmail dans le repositoire de l'entité Client (ClientRepository.php) :

```php
    // QUERYBUILDER: obtenir les clients par mail, version QueryBuilder
    public function getParEmail ($email){
        $qb = $this->createQueryBuilder("u");
        $query = $qb->select('u')
                    ->where ('u.email = :email')
                    ->setParameter('email', $email)
                    ->getQuery();
        $resultat = $query->getSingleResult();
        return $resultat;
    }
```


1.  **Créez une action dans le controller qu'utilise cette méthode** 

```php
#[Route ("/exemples/query/builder/trouver/client/par/mail/{email}")]
public function trouverClientParMail(Request $req){
    $em = $this->getDoctrine()->getManager();
    $rep = $em->getRepository(Client::class);
    // on fait appel à la méthode du Repository
    $objetClient = $rep->getParEmail($req->get ("email"));
    // on affiche les données du Client, on a obtenu un objet
    dump ($objetClient);
    die ();
    // return new Response .....
}
```
**Note** : vous pouvez toujours afficher le SQL crée par queryBuilder en utilisant de méthodes de cette classe. Par exemple :

```php
dd ($repo->createQueryBuilder('g')->getQuery()->getSql())
```
ou
```php
$qb = $this->createQueryBuilder("u");
$query = $qb->select('u')
->where ('u.email = :email')
->setParameter('email', $email)
->getQuery();
dd($query->getSql());
```

# TILL HERE


Formulaires en Symfony
======================

Un formulaire est un ensemble d'éléments HTML dont leur contenu est
envoyé au serveur (**action**) en exécutant un **submit**. Le serveur
reçoit une requête **POST** qui contient les contenus des éléments du
formulaire. En PHP, ces contenus sont accessibles à partir de la
variable $_POST.

En Symfony nous avons deux options pour créer un formulaire :

1.  Créer un formulaire HTML indépendant et obtenir les données dans une
    action du controller avec l'objet Request

2.  Créer un formulaire qui est associé à une classe du modèle. Quand on
    fait submit on obtient une entité dans le controller

    Exemple : Si on crée un formulaire pour insérer un Client, il sera
    associé à l'entité Client

On va mieux comprendre avec des exemple pratique.

Création d'un formulaire indépendant
------------------------------------

Vous pouvez créer un formulaire HTML dans votre twig sans aucun
problème. Pour obtenir les données du formulaire dans une action vous
allez utiliser l'objet **Request**.

Pour accéder au contenu du form vous allez utiliser l'objet Request :

<https://symfony.com/doc/current/components/http_foundation.html#accessing-request-data>

Vous avez des exemples dans le projet ProjetFormulairesSymfony5,
controller ExemplesFormulaireController.

Création une classe de formulaire 
----------------------------------

Si vous voulez que vos formulaires aient une correspondance directe avec
vos entités (ex : un formulaire Evenement que dans le controller est
directement transformé en objet Evenement, sans passer par **query** ni
**request**), vous devez créer une classe qui represente ce formulaire.

Si on a une classe formulaire pour une entité, quand on fait submit on
obtient une entité dans le controller qu'on pourra, par exemple, insérer
directement dans une BD

Nous allons faire un exemple :

Créez d'abord un **nouveau projet** (ex : projetFormulaires) contenant
un controller (ex : **FormulairesController**). Rajoutez une entité
Aeroport (nom, code) et créez la BD (ex: formulairesbd) et saisissez
quelques données.

**Exemple** : création d'une classe de formulaire 

On va créer un formulaire pour l'entité Aeroport qui contiendra deux
champs de texte (nom et code). Le bouton de submit sera rajouté à
posteriori.

1.  Rajoutez les **classes** qui gèrent les **formulaires** en Symfony
    **dans le projet** (cette action doit se faire une seule fois para
    projet!)

    composer require symfony/form

2.  **Créez le dossier src/Form et un fichier qui contiendra la classe
    qui définira le formulaire** (pour l'entité Aeroport on crée le
    fichier Aeroport**Type**.php)

Cette définition est une classe, une représentation abstraite de notre
formulaire, mais il n'y a pas du HTML à l'intérieur.

Voici le code :

<?php

namespace AppForm;

use SymfonyComponentFormAbstractType;

use SymfonyComponentFormFormBuilderInterface;

use SymfonyComponentFormExtensionCoreTypeTextType;

class AeroportType extends AbstractType {

public function buildForm (FormBuilderInterface $builder,
**array** $options){

$builder->add ('nom', TextType::class)

->add ('code', TextType::class);

}

}

La classe qui représente le formulaire doit hériter de **AbstractType**,
et possède une méthode **buildForm** qui est en charge de générer
l'objet formulaire. Cette méthode reçoit un objet qui implémente la
classe FormBuilderInterface (il est injecté par Symfony, nous ne créons
pas cet objet par nous-mêmes), en plus d'un array d'options qui nous
permettrait de personnaliser le formulaire.

En général, vous allez utiliser la méthode **add** de cet objet pour
rajouter les champs du formulaire. Vous devez, pour chaque champ,
indiquer le **name** (premier paramètre) ainsi que le **type**. Symfony
possède un vaste nombre de types déjà définis qui correspondent aux type
HTML, mais on peut en plus définir nos propres types pour atteindre un
niveau de complexité assez élevé.

Voici la liste de types inclus dans Symfony :

<https://symfony.com/doc/current/reference/forms/types.html>

Étudiez par vous-mêmes les types et son fonctionnement, dans ce cours
c'est impossible de les parcourir tous vu le temps dont on dispose.

3.  **Dans une nouvelle action, créez une instance du formulaire** en
    utilisant la méthode **createForm** du controller.

Dans cette action on utilisera la méthode **createForm** pour créer une
instance du formulaire (on indique le type qu'on vient de définir).
Puis on utilise la méthode **createView** pour générer le code HTML qui
sera envoyé à la vue. Voici le code :

namespace AppController;

use
SymfonyBundleFrameworkBundleControllerAbstractController;

use SymfonyComponentRoutingAnnotationRoute;

// la classe du Formulaire

use AppFormAeroportType;

class ExemplesFormulairesController extends AbstractController

{

#[Route ("/exemples/formulaires/exemple/aeroport");]

public function exempleAeroport (){

// on crée le formulaire du type souhaité

$formulaireAeroport = $this->createForm (AeroportType::class);

// on envoie un objet FormView à la vue pour qu'elle puisse

// faire le rendu, pas le formulaire en soi

$vars = ['unFormulaire'=>$formulaireAeroport->createView()];

return $this->render
('/exemples_formulaires/exemple_aeroport.html.twig',$vars);

}

}

4.  **Créez la vue et appelez la fonction** **form** **de twig** en lui
    envoyant l'objet **FormView** qu'on vient de recevoir du
    controller

Il y a plusieurs manières de rendre le formulaire :

<https://symfony.com/doc/current/forms.html#rendering-the-form>

On peut rendre le formulaire complète ou par parties, en utilisant un
thème (Bootstrap, Foundation, etc...) ou pas.

{{ form_start (unFormulaire) }}

{{ form_widget (unFormulaire) }}

{{ form_end (unFormulaire)}}

form_start et form_end générent les balises du début et fin du
formulaire et form_widget génère tous les contrôles.

Création d'un formulaire associé à une entité existante
--------------------------------------------------------

Vous pouvez créer un formulaire pré-rempli avec les données d'une
entité. Pour ce faire, il suffit de créer l'entité avant et l'envoyer
comme deuxième paramètre à la méthode **createForm**. Voici un exemple :

#[Route ("/exemples/formulaires/exemple/aeroport/rempli");]

public function exempleAeroportRempli (){

$unAeroport = new Aeroport ();

$unAeroport->setNom("Sevilla Santa Justa");

$unAeroport->setCode("SVQ");

// etc....

// on crée le formulaire du type souhaité

$formulaireAeroport = $this->createForm (AeroportType::class,
**$unAeroport**);

// on envoie un objet FormView à la vue pour qu'elle puisse

// faire le rendu, pas le formulaire en soi

$vars = ['unFormulaire' => $formulaireAeroport->createView()];

return $this->render
('/exemples_formulaires/exemple_aeroport.html.twig',$vars);

}

Types des champs du formulaire
------------------------------

On va modifier le formulaire en rajoutant le type de chaque widget.
Rajoutez les proprietés **dateMiseEnService, heureMiseEnService** et
**description** dans l'entité et dans le formulaire (n'oubliez pas les
use). Faites aussi la migration !

public function buildForm(FormBuilderInterface $builder,
**array** $options)

{

$builder->add('code', TextType::class)

->add('nom', TextType::class)

->add('dateMiseEnService', DateType::class)

->add('heureMiseEnService', TimeType::class)

->add('description', TextareaType::class)

}

Nous n'allons pas rajouter un bouton de submit dans la classe du
formulaire **car ce n'est pas une bonne pratique.**

Affichez à nouveau la vue et observez le résultat :

![](media/image32.png){width="2.201388888888889in"
height="1.6921128608923885in"}

#### Exercice : créez l'action et la vue nécessaires pour afficher ce formulaire! 

Propriétés des champs du formulaire
-----------------------------------

Chaque type de données correspond à une classe qui hérite de la classe
**FormType**. Chaque champ d'un formulaire à un **objet (widget)
associé qui générera son code HTML (selon son type).** Chaque champ a
**un ensemble de propriétés HTML héritées de ses parents** (ex:
"label" ou "placeholder") **ainsi qu'un ensemble d'options**
**propres** (ex: "preferred_choices" pour le type LanguageType).

**Exemple** : rajout des options dans les champs du formulaire 

On va créer un formulaire plus personnalisé que le précédent pour
l'entité Livre. Rajoutez les entités Exemplaire et Livre (vous pouvez
les copier d'un autre projet, mais effacez les relations avec les
autres entités tel que Categorie). Pour Livre, rajoutez les champs
**nombrePages**, **langue** et **format**

**Créez un formulaire** basé sur Livre (prenez comme exemple celui de
l'entité Aeroport) et **rajoutez les types pour chaque champ** qui
puissent vous convenir le plus.

**Toutes les informations nécessaires sur les types se trouvent ici :**

<https://symfony.com/doc/current/reference/forms/types.html>

Voici le code d'exemple:

public function buildForm(FormBuilderInterface $builder,
**array** $options)

{

$builder->add('ISBN', TextType::class)

->add('titre', TextareaType::class)

->add('prix', MoneyType::class)

->add('description', TextareaType::class)

->add('datePublication', DateType::class,[

'label' => 'Date de publication'

])

->add('nombrePages', IntegerType::class, [

'label' => 'Nombre de pages',

'required' => **false**

])

->add('langue', LanguageType::class, [

'label' => 'Langue du livre',

'preferred_choices' => ['es','fr','it']

])

->add ('format', ChoiceType::class, [

'choices' => [

'eBook' => 'ebook',

'papier' => 'papier'

],

// les combinaisons de ces paramètres détermineront le type de

// liste de choix : liste, liste déroulante, checkbox ou

// radiobuttons

'expanded' => **false**,

'multiple' => **true**

]);

}

Avant de créer une action pour générer ce formulaire on va rajouter la
méthode et l'action dans la section suivante.

Méthode et Action
-----------------

Pour finir le formulaire, on peut spécifier l'action à réaliser pour le
submit (même avant créer le bouton) ainsi que la méthode (GET ou POST).
Nous avons deux possibilités :

1)  Définir l'action **dans la classe du formulaire**. C'est facile
    mais on ne pourra utiliser le formulaire pour exécuter d'autres
    actions !

    **Important :** Cette méthode est à éviter mais elle facilite la
    compréhension des bonnes pratiques

public function buildForm(FormBuilderInterface $builder,
**array** $options)

{

$builder->add('ISBN', TextType::class)

->add('titre', TextareaType::class)

->add('prix', MoneyType::class)

->add('description', TextareaType::class)

->add('datePublication', DateType::class,[

'label' => 'Date de publication'

])

->add('nombrePages', IntegerType::class, [

'label' => 'Nombre de pages',

'required' => **false**

])

->add('langue', LanguageType::class, [

'label' => 'Langue du livre',

'preferred_choices' => ['es','fr','it']

])

->add ('format', ChoiceType::class, [

'choices' => [

'eBook' => 'ebook',

'papier' => 'papier'

],

// les combinaisons de ces paramètres détermineront le type de

// liste de choix : liste, liste déroulante, checkbox ou

// radiobuttons

'expanded' => **false**,

'multiple' => **false**

])

**->setMethod('POST')**

**->setAction('traitementFormulaireLivre');;**

}

**
**

2)  **Définir l'action et la méthode dans le controller** lors de la
    création de l'objet formulaire. Cette option est **plus souple**
    car elle nous permet de réutiliser le formulaire pour lancer
    d'autres actions :

**Dans la classe du formulaire il n'y a pas d'action ni de méthode :**

class LivreType extends AbstractType {

public function buildForm(FormBuilderInterface $builder,
**array** $options)

{

$builder->add('ISBN', TextType::class)

->add('titre', TextareaType::class)

->add('prix', MoneyType::class)

->add('description', TextareaType::class)

->add('datePublication', DateType::class,[

'label' => 'Date de publication'

])

->add('nombrePages', IntegerType::class, [

'label' => 'Nombre de pages',

'required' => **false**

])

->add('langue', LanguageType::class, [

'label' => 'Langue du livre',

'preferred_choices' => ['es','fr','it']

])

->add ('format', ChoiceType::class, [

'choices' => [

'eBook' => 'ebook',

'papier' => 'papier'

],

'expanded' => **false**,

'multiple' => **true**

])

}

}

#[Route ("/exemples/formulaires/exemple/livre");]

public function exempleLivre (){

$livre = new Livre();

$formulaireLivre = $this->createForm (LivreType::class, $livre,
**array**(

**'action' => $this->generateUrl("rajouter_livre"), // name de
la route!**

// si on n'utilise pas le name d'une route

// 'action' => "/exemples/formulaires/livre/rajouter",

**'method' => 'POST'**

));

$vars = ['unFormulaire'=>$formulaireLivre->createView()];

return $this->render
('/exemples_formulaires/exemple_livre.html.twig',$vars);

}

Nous utiliserons un array de paramètres et la méthode **generateUrl**
pour générer le code HTML qui correspond à une route qui porte un
"name". Si la route n'a pas de "name" on peut juste mettre un path,
mais c'est moins souple car la modification d'un path dans le routing
impliquera modifier une par une toutes les appels à cette action.

Voici le code complet du controller, ici on a une route avec "name"
(rajouter_livre) :

<?php

namespace AppController;

use
SymfonyBundleFrameworkBundleControllerAbstractController;

use SymfonyComponentRoutingAnnotationRoute;

// les entités de base

use AppEntityAeroport;

use AppEntityLivre;

// les classes des Formulaires

use AppFormAeroportType;

use AppFormLivreType;

class ExemplesFormulairesController extends AbstractController

{

#[Route ("/exemples/formulaires/exemple/aeroport");]

public function exempleAeroport (){

// on crée le formulaire du type souhaité

$formulaireAeroport = $this->createForm (AeroportType::class);

// on envoie un objet FormView à la vue pour qu'elle puisse

// faire le rendu, pas le formulaire en soi

$vars = ['unFormulaire'=>$formulaireAeroport->createView()];

return $this->render
('/exemples_formulaires/exemple_aeroport.html.twig',$vars);

}

#[Route ("/exemples/formulaires/exemple/livre");]

public function exempleLivre (){

$livre = new Livre();

$formulaireLivre = $this->createForm (LivreType::class, $livre,
**array**(

'action' => $this->generateUrl("rajouter_livre"), // name de la
route!

// si on n'utilise pas le name d'une route

// 'action' => "/exemples/formulaires/livre/rajouter",

'method' => 'POST'

));

$vars = ['unFormulaire'=>$formulaireLivre->createView()];

return $this->render
('/exemples_formulaires/exemple_livre.html.twig',$vars);

}

}

Boutons dans les formulaires (bonnes pratiques)
-----------------------------------------------

Si on veut reutiliser un même formulaire pour réaliser plusieurs actions
(ex : mettre à jour un livre ou rajouter un livre) on ne doit pas créer
les boutons dans la classe du formulaire mais dans la vue
correspondante. Si on le crée dans la classe on sera coincés car
l'étiquette du bouton sera fixée (on casse le principe de réutilisation
du code!).

On ne doit pas non plus rajouter le bouton dans le controller car on
serait en train de mélanger présentation (ex : la classe du bouton) avec
la logique (on casse le principe de "separation of concerns"!).

La **meilleure option est de créer le bouton de submit en HTML dans la
vue**. Voici un exemple :

{{ form_start (formulaireLivre) }}

{{ form_widget (formulaireLivre) }}

<input type="submit" class="btn" value="Envoyer" />

{{ form_end (formulaireLivre) }}

Cette méthode nous permet de reutiliser le formulaire pour plein
d'actions, on devra juste créer les boutons dans chaque vue.

#### Exercice : Créez des boutons de submit dans les vues qui rendent les formulaires des exemples précédents

###   {#section-4 .ListParagraph}

Rendu du formulaire dans la vue
-------------------------------

Au moment de générer un formulaire dans un fichier twig on peut utiliser
:

**{{ form (formulaireAeroport) }}**

Pour rendre la totalité du formulaire d'un coup. Mais on peut
controller plus la génération du formulaire en utilisant :

**{{ form_start (nomDuFormulaire) }}**

Rend la balise de début du formulaire, y compris l'attribut enctype
correct lors de l'utilisation des téléchargements de fichiers.

**{{ form_widget (nomChampFormulaire) }}**

Rend un champ, ce qui inclut l'élément du champ lui-même, une étiquette
et tous les messages d'erreur de validation pour le champ (si on a
défini de validations)

**{{ form_end (nomDuFormulaire) }}**

Rend l'étiquette de fin du formulaire et tous les champs qui n'ont pas
encore été rendus, dans le cas où vous avez rendu chaque champ
vous-même. Ceci est utile pour ne pas devoir rendre à la main les champs
cachés.

**Exemple :**

{{ form_start (formulaireAeroport) }}

{{ form_widget (formulaireAeroport.nom) }}

{{ form_widget (formulaireAeroport.description) }}

{{ form_end (formulaireAeroport) }}

**Si vous ne voulez pas afficher un champ d'un formulaire c'est
simple** : effacez la ligne **form_widget** qui correspond à ce champ

{{ form_end(form, **{'render_rest': false}**) }}

. Le controller recevra alors une valeur **null** pour ce champ de
l'entité associée.

Par défaut Symfony rend les champs qui ne sont pas spécifies Pour éviter
le rendu automatique du reste de champs il faut rajouter :

Résumé : création et personnalisation de base d'un formulaire
--------------------------------------------------------------

Pour créer un formulaire et le traiter :

1.  Créez le **squelette** du formulaire (la **classe**)

2.  Dans cette classe, **rajoutez les champs ("widgets") et leurs
    types** selon vos besoins (TextType, ChoiceType, etc...).
    Personnalisez le widget avec des **propriétés** (taille, required,
    etc...)

3.  **Rajouter les boutons de submit dans la vue qui affiche ce
    formulaire**

4.  **Définissez le nom de l'action qui affichera et traitera ce
    formulaire, ainsi que la méthode (GET, POST)**

5.  Créez une **action qui génère et traite le formulaire**

**
**

