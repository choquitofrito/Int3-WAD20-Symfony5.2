# 21. Formulaires en Symfony

Un formulaire est un ensemble d'éléments HTML dont leur contenu est envoyé au serveur (**action**) en exécutant un **submit**. Le serveur reçoit une requête **POST** qui contient les contenus des éléments du formulaire. En PHP, ces contenus sont accessibles à partir de la variable $_POST ou $_GET.

En Symfony nous avons plusieurs options pour créer un formulaire :

1.  Créer un **formulaire HTML indépendant** et obtenir les données dans une action du controller avec l'objet Request

2.  Créer **un formulaire qui est associé à une entité** du modèle. Quand on fait submit on obtient une entité dans le controller 

**Exemple :** Si on crée un formulaire pour insérer un Client, il sera associé à l'entité Client


3. Créer **un formulaire qui est associé à une entité du modèle mais auquel on rajoute/efface de champs**. Les champs manquants de l'entité auront la valeur null. Si le formulaire a de champs en trop, on pourra traiter ces infos de façon indépendante à la classe.

**Exemple :** On crée un formulaire pour insérer un Client et on rajoute un champ "Je suis d'accord avec les conditions du site"

On va mieux comprendre avec des exemple pratiques.

<br>

## 21.1. Création d'un formulaire indépendant

Vous pouvez créer un formulaire HTML dans votre twig sans aucun
problème. Pour obtenir les données du formulaire dans une action vous allez utiliser l'objet **Request** (pareil que quand on obtient les paramètres d'URL).

<https://symfony.com/doc/current/components/http_foundation.html#accessing-request-data>

Les exemples se trouveront dans  le projet **ProjetFormulairesSymfony**, controller **ExemplesFormulaireController** (La bd sera **formulairesbd**).

C'est très simple. 

1. **Créez le form dans le twig** :
   
```html
<form action="{{ path('traitement_form_simple_post') }}" method="POST">
    Nom:<input type="text" name="nom">
    Age:<input type="number" name="age">   
    <button type="submit">Envoyer POST</button> 
</form>
```
Vous devez juste générer le chemin de l'action qui reçoit le formulaire en utilisant **path** et le **name** de l'action.

2. **Obtenez les valeurs dans l'action** avec $req->**request->get('nom')** 

**Note**: pensez à **get** comme l'action d'obtenir, rien à voir avec $_GET ou $_POST!

Notez que le **name** de l'action est le *action* du Formulaire

```php
#[Route("/exemples/formulaires/exemple/independent/traitement/post", name: "traitement_form_simple_post")]
public function exempleIndependentTraitementPost(Request $req)
{
    // cette action traite un formulaire traditionnel POST et affiche le contenu dans une vue
    // On obtient l'objet Request
    // "request" contient le contenu du $_POST

    $nom = $req->request->get('nom'); // pas $req['nom'] ni $req->request['nom']
    $age = $req->request->get('age'); // pas $req['age'] ni $req->request['age']


    return $this->render(
        "/exemples_formulaires/exemple_independent_traitement_post.html.twig",
        [
            'nom' => $nom,
            'age' => $age
        ]
    );
}
```

Vous avez un autre exemple pour un formulaire GET juste après dans le code.


<br>


## 21.2. Création une classe de formulaire 

Si vous voulez qu'un formulaire soit lié à une entité (ex : un formulaire Evenement que dans le controller est directement transformé en objet Evenement, sans passer par **query** ni **request**), vous devez créer une classe qui represente ce formulaire.

Si on crée une classe formulaire pour une entité, quand on fait submit **on obtient directement une entité dans le controller qu'on pourra, par exemple, insérer directement dans une BD**

Nous allons faire un exemple, préparons le contexte :

Créez d'abord un **nouveau projet** (ex : **projetFormulaires**) contenant un controller (ex : **FormulairesController**). Créez une entité *Aeroport* (nom, code, dateMiseEnService, heureMiseEnService, description) et créez la BD (ex: formulairesbd) avec la migrations. Créez une fixture **AeroportFixture** pour avoir quelques données (voici une qui utilise Faker)

```php
<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use App\Entity\Aeroport;

class AeroportFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $aeroport = new Aeroport(['nom'=>$faker->city . " Airport",
                                    'code'=>$faker->postcode,
                                    'dateMiseEnService'=>$faker->dateTime,
                                    'heureMiseEnService'=>$faker->dateTime,
                                    'description'=>$faker->realText($faker->numberBetween(10,30))]);
            
            $manager->persist($aeroport);
        }
        $manager->flush();
    }
}

```

**Exemple** : création d'une classe de formulaire associé à une entité (Aeroport)

On va créer un formulaire pour l'entité Aeroport qui contiendra deux champs de texte (nom et code). Le bouton de submit sera rajouté à posteriori.

1.  Rajoutez les **classes** qui gèrent les **formulaires** en Symfony **dans le projet** (cette action doit se faire une seule fois para projet!)

```console
    composer require symfony/form
```

2.  **Créez le dossier src/Form et un fichier qui contiendra la classe qui définira le formulaire** (pour l'entité Aeroport on crée le fichier Aeroport**Type**.php)

Cette définition est une classe, une représentation abstraite de notre formulaire, mais il n'y a pas du HTML à l'intérieur.

Voici le code :

```php
<?php
namespace App\Form;

use App\Entity\Aeroport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// tous les types qu'on va utiliser
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AeroportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('code', TextType::class)
            ->add('dateMiseEnService', DateType::class)
            ->add('heureMiseEnService',TimeType::class)
            ->add('description',TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Aeroport::class,
        ]);
    }
}

```

La classe qui représente le formulaire doit hériter de **AbstractType**, et possède une méthode **buildForm** qui est en charge de générer l'objet formulaire. 

Cette méthode reçoit un objet qui implémente la classe FormBuilderInterface (il est injecté par Symfony, nous ne créons pas cet objet par nous-mêmes), en plus d'un array d'options qui nous permettrait de personnaliser le formulaire.

En général, vous allez utiliser la méthode **add** de cet objet pour rajouter les champs du formulaire. Vous devez, pour chaque champ, indiquer le **name** (premier paramètre) ainsi que le **type**. Symfony possède un vaste nombre de types déjà définis qui correspondent aux type HTML, mais on peut en plus définir nos propres types pour atteindre un niveau de complexité assez élevé.

Voici la liste de types inclus dans Symfony :

<https://symfony.com/doc/current/reference/forms/types.html>

Étudiez par vous-mêmes les types et son fonctionnement, dans ce cours c'est impossible de les parcourir tous vu le temps dont on dispose.

3.  **Dans une nouvelle action, créez une instance du formulaire** en utilisant la méthode **createForm** du controller.

Dans cette action on utilisera la méthode **createForm** pour créer une instance du formulaire (on indique le type qu'on vient de définir).

Puis on utilise la méthode **createView** pour générer le code HTML qui sera envoyé à la vue. Voici le code :

```php
    #[Route("/exemples/formulaires/exemple/aeroport")]
    public function exempleAeroport()
    {
        // on crée le formulaire du type souhaité
        $formulaireAeroport = $this->createForm(AeroportType::class);

        // on envoie un objet FormView à la vue pour qu'elle puisse 
        // faire le rendu, pas le formulaire en soi
        $vars = ['unFormulaire' => $formulaireAeroport->createView()];

        return $this->render('/exemples_formulaires/exemple_aeroport.html.twig', $vars);
    }
```




4.  **Créez la vue et appelez la fonction** **form** **de twig** en lui envoyant l'objet **FormView** qu'on vient de recevoir du controller.

Il y a plusieurs manières de rendre le formulaire :

<https://symfony.com/doc/current/forms.html#rendering-the-form>

On peut rendre le formulaire complète ou par parties, en utilisant un thème (Bootstrap, Foundation, etc...) ou pas, mais on fera ça plus tard en utilisant Encore (un module qui simplifie enormement l'inclusion de Webpack)

```twig
{{ form_start (unFormulaire) }}
{{ form_widget (unFormulaire) }}
{{ form_end (unFormulaire)}}
```

**form_start** et **form_end** générent les **balises** du début et fin du formulaire et **form_widget** génère tous les contrôles d'un coup. 

Il nous manque le **submit**, on le verra dans les sections suivantes.

Nous n'allons pas rajouter un bouton de submit dans la classe du
formulaire **car ce n'est pas une bonne pratique.**

## 21.3. Création d'un formulaire pré-rempli avec les données d'une entité

Vous pouvez créer un formulaire pré-rempli avec les données d'une
entité très facilement. Pour ce faire, il suffit de créer l'entité avant et l'envoyer comme deuxième paramètre à la méthode **createForm**. Voici un exemple :

```php
#[Route("/exemples/formulaires/exemple/aeroport/rempli")]
public function exempleAeroportRempli()
{
    $unAeroport = new Aeroport();
    $unAeroport->setNom("Sevilla Santa Justa");
    $unAeroport->setCode("SVQ");
    $unAeroport->setDescription ("Il fait toujours beau là bas");
    // etc....

    // on crée le formulaire du type souhaité
    $formulaireAeroport = $this->createForm(AeroportType::class, $unAeroport);

    // on envoie un objet FormView à la vue pour qu'elle puisse 
    // faire le rendu, pas le formulaire en soi
    $vars = ['unFormulaire' => $formulaireAeroport->createView()];

    return $this->render('/exemples_formulaires/exemple_aeroport.html.twig', $vars);
}
```



## 21.4. Action et Propriétés des champs du formulaire

Chaque type de données correspond à une classe qui hérite de la classe **FormType**. Chaque champ d'un formulaire à un **objet (widget) associé qui générera son code HTML (selon son type).** 

Chaque champ a **un ensemble de propriétés HTML héritées de ses parents** (ex: "label" ou "placeholder") **ainsi qu'un ensemble d'options propres au type** (ex: "preferred_choices" pour le type LanguageType).

<br>

**Exemple** : rajout des options dans les champs du formulaire 

On va créer un formulaire plus personnalisé que le précédent pour
l'entité Livre. Rajoutez les entités Exemplaire et Livre (vous pouvez les copier d'un autre projet, mais effacez les relations avec les autres entités tel que Categorie). 


Copiez dans ce projet toutes les entités et les repos de *ProjetModeleSymfony*. Dans l'entité Livre, rajoutez **nombrePages**, **langue** et **format** (eBook, papier).
Faites la migration.

1. **Créez un formulaire** (LivreType) basé sur Livre (prenez comme exemple celui de l'entité Aeroport) et **rajoutez les types pour chaque champ**. 

**Toutes les informations nécessaires sur les types se trouvent ici :**

<https://symfony.com/doc/current/reference/forms/types.html>


Avant de créer une action pour générer ce formulaire on va rajouter la méthode et l'action dans la section suivante.

2. **Méthode et Action**

Pour finir le formulaire, on peut spécifier l'action à réaliser pour le submit (même avant créer le bouton) ainsi que la méthode (GET ou POST). Nous avons deux possibilités :

a)  Définir l'action **dans la classe du formulaire** (LivreType.php). C'est facile mais on ne pourra utiliser le formulaire pour exécuter d'autres actions !

**Important :** Cette méthode est à éviter mais elle facilite la compréhension des bonnes pratiques

```php
.
.
.
->add ('format', ChoiceType::class, [
                        'choices' => [
                            'eBook' => 'ebook',
                            'papier' => 'papier'
                        ],
                        // les combinaisons de ces paramètres détermineront le type de
                        // liste de choix : liste, liste déroulante, checkbox ou
                        // radiobuttons
                        'expanded' => false,
                        'multiple' => false
                ])
->setMethod('POST')
->setAction('traitementFormulaireLivre');

}
```

b)  **Définir l'action et la méthode dans le controller** lors de la création de l'objet formulaire avec les options de **createForm**. Cette option est **plus souple** car elle nous permet de réutiliser le formulaire pour lancer d'autres actions :

**Dans la classe du formulaire il n'y a pas d'action ni de méthode :**

```php
#[Route("/exemples/formulaires/exemple/livre")]
public function exempleLivre()
{
    $livre = new Livre();
    $formulaireLivre = $this->createForm(LivreType::class, $livre, array(
        'action' => $this->generateUrl("rajouter_livre"), // name de la route!
        // si on n'utilise pas le name d'une route on doit l'écrire à la main... mauvaise idée
        // 'action' => "/exemples/formulaires/livre/rajouter", 
        'method' => 'POST'
    ));
    $vars = ['unFormulaire' => $formulaireLivre->createView()];


    return $this->render('/exemples_formulaires/exemple_livre.html.twig', $vars);
}
```

Nous utiliserons un array de paramètres et la méthode **generateUrl** pour générer le code HTML qui correspond à une route qui porte un "name". Si la route n'a pas de "name" on peut juste mettre un path, mais c'est moins souple car la modification d'un path dans le routing impliquera modifier une par une toutes les appels à cette action.



## 21.5. Boutons dans les formulaires (bonnes pratiques)

<br>

Si on veut réutiliser un même formulaire pour réaliser plusieurs actions (ex : mettre à jour un livre ou rajouter un livre) **on ne doit pas créer les boutons dans la classe du formulaire mais dans la vue où on génère le form**. Si on le crée dans la classe on sera coincés car l'étiquette du bouton sera fixée (on casse le principe de réutilisation du code!).

On ne doit pas non plus rajouter le bouton dans le controller car on serait en train de mélanger présentation (ex : la classe du bouton) avec la logique (on casse le principe de "separation of concerns"!).

La **meilleure option est de créer le bouton de submit en HTML dans la vue**. Voici un exemple :

```php
{{ form_start (formulaireLivre) }}
{{ form_widget (formulaireLivre) }}
<input type="submit" class="btn" value="Envoyer" />
{{ form_end (formulaireLivre) }}
```

Cette méthode nous permet de re-utiliser le formulaire pour plein
d'actions, on devra juste créer les boutons dans chaque vue.

#### Exercice : Créez des boutons de submit dans les vues qui rendent les formulaires des exemples précédents

<br>

## 21.6. Rendu du formulaire dans la vue


Au moment de générer un formulaire dans un fichier twig on peut utiliser
:

```twig
{{ form (nomDuFormulaire) }}
```

Pour rendre la totalité du formulaire d'un coup. Mais on peut
controller plus la génération du formulaire en utilisant :

```twig
{{ form_start (nomDuFormulaire) }}
```

Pour rendre la balise de début du formulaire, y compris l'attribut enctype correct lors de l'utilisation des téléchargements de fichiers.

```twig
{{ form_widget (nomChampFormulaire) }}
```

Pour rendre un champ, ce qui inclut: l'élément du champ lui-même, une étiquette et tous les messages d'erreur de validation pour le champ (si on a défini de validations, pas pour le moment)

```twig
{{ form_end (nomDuFormulaire) }}
```
Pour rendre l'étiquette de fin du formulaire et tous les champs qui n'ont pas encore été rendus, dans le cas où vous avez rendu chaque champ
vous-même. Ceci est utile pour ne pas devoir rendre à la main les champs
cachés.

<br>

**Exemple :**

```twig
{{ form_start (formulaireAeroport) }}
{{ form_widget (formulaireAeroport.nom) }}
{{ form_widget (formulaireAeroport.description) }}
{{ form_end (formulaireAeroport) }}
```

**Si vous ne voulez pas afficher un champ d'un formulaire c'est
simple** : effacez la ligne **form_widget** qui correspond à ce champ. Le controller recevra alors une valeur **null** pour ce champ de l'entité associée. 

Par défaut Symfony rend les champs qui ne sont pas spécifies Pour éviter le rendu automatique du reste de champs il faut rajouter :

```twig
{{ form_end(nomDuFormulaire, {'render_rest': false}) }}
```

<br>

## 21.7. Résumé : création et personnalisation de base d'un formulaire

Pour créer un formulaire et le traiter :

1.  Créez le **squelette** du formulaire (la **classe 'Type'**)

2.  Dans cette classe, **rajoutez les champs ("widgets") et leurs types** selon vos besoins (TextType, ChoiceType, etc...). Personnalisez le widget avec des **propriétés** (taille, required, etc...)

3.  **Rajoutez les boutons de submit dans la vue qui affiche ce formulaire**

4.  **Définissez le nom de l'action qui affichera et traitera ce formulaire, ainsi que la méthode (GET, POST)** dans le controller

5.  Créez une **action qui génère et traite le formulaire**

C'est tout!!! Les formulaires sont horribles mais il suffira de rajouter le style. Symfony facilite énormément l'utilisation de Webpack ou Foundation.

<br>

## 21.8. Traitement des données du formulaire 

Pour **recevoir et traiter** les données introduites dans un formulaire nous devons créer une action dans un controller. L'action traitera la requête (reçoit un objet **Request**).

Voici un exemple complet et son explication.


**Exemple** : Rendu et réception d'un formulaire 

N'ayez pas peur, l'explication se trouve dans le code et après le code.

```php
#[Route ("/exemples/formulaires/traitement/exemple/livre" name:"exemple_livre")]
    
// dans la même action on réalise le rendu et la réception 
public function exempleLivre (Request $req){
    // 1. Création d'une entité vide
    $livre = new Livre();
    // 2. Création du formulaire du type souhaité
    $formulaireLivre = $this->createForm (LivreType::class, $livre,
            ['action'=> $this->generateUrl ("exemple_livre"),
                'method'=>'POST']);
    
    
    // 3. Analyse de l'objet Request
    $formulaireLivre->handleRequest($req);
    
    // 4. Vérification: on vient d'un submit ou pas?
    
    // si oui, on traite le formulaire et on remplit l'entité
    if ($formulaireLivre->isSubmitted() && $formulaireLivre->isValid()){
        // Remplissage de l'entité avec les données du formulaire
        
        
        // $livre = $formulaireLivre->getData(); // pas besoin, le submit remplit l'entite
        
        // Rendu d'une vue où on affiche les données
        // Normalement on faire CRUD ici ou une autre opération...
        return $this->render ('/exemples_formulaires_traitement/traitement_formulaire_livre.html.twig',
                            ['livre'=> $livre]);
    }
    // si non, on doit juste faire le rendu du formulaire
    else {
        return $this->render ('/exemples_formulaires_traitement/affichage_formulaire_livre.html.twig',
                            ['formulaireLivre'=> $formulaireLivre->createView()]);
    }
}

```

Pour comprendre l'action on doit savoir qu'**elle peut être  appelée dans deux cas de figure** :

a)  Une première fois, **quand on tape l'action dans l'URL ou on redirige vers cette action**. Dans ce cas, le formulaire doit être **rendu (affiché dans la vue)**

b)  On **appelle cette même action en cliquant sur un bouton submit** et on doit traiter le contenu reçu (dans ce cas on va juste afficher un objet crée à partir du contenu du formulaire)

Dans les **deux cas de figure on crée une entité vide et un objet formulaire**. Pour savoir si on se trouve dans le cas a) ou b) à l'interieur de l'action on doit **vérifier l'objet Request**. 

Dans le cas a) l'objet sera vide car on n'a pas fait submit et dans le cas b) l'objet Request contiendra les données du formulaire. On devra remplir l'entité vide pour, par exemple, faire un CRUD

Pour analyser l'objet Request on utiliser la méthode **handleRequest**, auquel on envoie l'objet Request injecté dans l'action. Les méthodes **isSubmitted** et **isValid** nous indiquerons si le formulaire a été **submitted** (on a cliqué sur le bouton) et si les données du formulaire sont valides (en principe on recevra toujours **true** car on n'a fait
aucune règle de validation).

Normalement on aura au moins **deux templates** : un pour afficher le  formulaire et l'autre pour afficher le résultat du traitement du formulaire.

Voici le code qui implémente ce qu'on vient de décrire : le controller, les templates et la classe du formulaire.

1.  **Controller :**

L'action ci-dessus

2.  **Templates** (un pour afficher le formulaire et l'autre pour
    afficher le résultat du traitement)

```twig
{# affichage_formulaire_livre.html.twig #}
{{ form_start (formulaireLivre) }}
{{ form_widget (formulaireLivre) }}
<input type="submit" class="btn" value="Envoyer" />
{{ form_end (formulaireLivre) }}
```

```twig
{# traitement_formulaire_livre.html.twig #}
{{ dump (livre) }}
```


3.  **Classe du formulaire**

```php
<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class LivreType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('isbn', TextType::class)
                ->add('titre', TextareaType::class)
                ->add('prix', MoneyType::class)
                ->add('description', TextareaType::class)
                ->add('datePublication', DateType::class,[
                        'label' => 'Date de publication'
                ])
                ->add('nombrePages', IntegerType::class, [
                        'label' => 'Nombre de pages',
                        'required' => false
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
                        'expanded' => false,
                        'multiple' => false
                ]);
    }
}
```


**Résumé : Traitement de données d'un formulaire dans une action d'un controller**

1.  Créez une **entité vide**

2.  Créez **une instance du formulaire**

3.  Faites appel à **handleRequest pour traiter la requête** **et faire
    submit** du Form. HandleRequest fait appel au submit **si on a fait
    submit et l'entité « data » qu'on a envoyé dans la création du
    formulaire sera remplie**. On peut aussi obtenir les données du form
    avec **getData**.

    **On utilisera getData pour les champs du formulaire qui n'existent pas dans l'entité** (et dans le traitement des champs de certains types particuliers).

**Exemple** : formulaire pour Aeroport (nom, code) qui contient aussi un champ « description » qui n'appartient pas à l'entité *Aeroport*. Pour obtenir les données de la description dans le traitement du formulaire on utilise getData :

```php
$form->get('description')->getData();
```

Pour le reste on utilise un objet, l'entité Aeroport ($aeroport) qui sera remplie automatiquement dans le submit.

Une fois l'entité a été créé à partir des données on peut faire
n'importe quelle action (CRUD ou une autre).

Si on arrive à l'action sans avoir fait un submit (exemple : tapez l'URL de l'action dans le navigateur) ou les données ne sont pas valides (isSubmitted ou isValid renvoient faux), on doit juste envoyer le formulaire à la vue pour réaliser le rendu.


#### Exercice : 

Faites le code pour traiter un formulaire associé à l'entité Aeroport

<br>

## 21.9. Bonnes pratiques pour créer de formulaires en Symfony

1.  **Ne rajoutez de boutons aux formulaires dans les classes des
    formulaires ni dans les controllers**, mais dans les templates.

**Exemple** : Si vous créez un formulaire pour insérer un client dans la BD et vous créez un bouton "insérer" dans la classe du formulaire, ce formulaire ne pourra plus être utilisé pour par exemple mettre à jour le client... bien qu'il s'agit du même formulaire pour les deux actions ! Rajouter les boutons dans les controllers est aussi une mauvaise idée car vous allez mélanger logique et présentation ("vues"). Il nous reste alors que les rajouter dans les fichiers twigs (en HTML)

2.  Utilisez **une même action pour créer le formulaire et le traiter**

3.  Pour définir l'action et la méthode (différente, par exemple, pour un update et un delete), vous pouvez envoyer de paramètres à **form_start** dans le fichier twig

```twig
{{ form_start(form, {'action': path('rajouter'),'method': 'POST'})}}
```

**Attention :** Le **path** sera le **name** d'une route

<br>


## 21.10. Style de base pour les formulaires 

Vous pouvez appliquer du style aux formulaires en utilisant du CSS. Symfony inclut plusieurs templates. Plus d'information ici :

<https://symfony.com/doc/current/form/form_themes.html#symfony-builtin-forms>

Nous verrons plus sur le style dans la section de Webpack-Encore

<br>

## 21.11. Formulaires concernant plusieurs entités

Considérons que les Genres sont aussi des entités de la BD (un **Genre** ayant *nom* et *description*). Comment faire si on veut créer un formulaire pour insérer un livre et choisir au même temps son genre dans le formulaire ? Le genre est un objet (entité) !

La solution est **d'utiliser** **le** **type** **EntityType**, qui nous permettra **d'envoyer une entité** de notre choix **dans le formulaire**.

<https://symfony.com/doc/current/reference/forms/types/entity.html>

Créez une nouvelle entité Genre (contenant **nom** et **description**) et **une association d'un a plusieurs avec Livre** (on va considérer qu'un livre à juste un genre). **Ici on veut pouvoir envoyer une entité Genre pour pouvoir l'incruster dans l'entité Livre.**

Créons une classe de formulaire **LivreGenreType** à partir de
**LivreType** et faisons les modifications nécessaires (explication après le code) :

```php
<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

// la classe pour avoir une entité comme champ du formulaire
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Genre;
use App\Repository\GenreRepository;

class LivreGenreType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
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
                        'required' => false
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
                        'expanded' => false,
                        'multiple' => false
                ])
                ->add ('genre', EntityType::class, [
                    'class' => Genre::class,
                    /*'query_builder' => function (GenreRepository $er){
                        return $er->createQueryBuilder('u')->orderBy ('u.nom','DESC');
                    },
                    // on affiche ici les noms et les descriptions en majuscules,
                    // mais c'est à vous de choisir la façon de l'afficher
                    'choice_label' => function ($x){
                        return strtoupper($x->getNom() . "-". $x->getDescription());
                    }*/
                    'choice_label' => function (GenreRepository $g) {
                        return $g->findAll();
                    }
                ]);
    }
}
```


**Explication :**

1.  On rajoute un champ du type EntityType qui portera le nom du champ de l'association (ici *genre* dans *Livre*)

2.  On spécifie la classe de cet Entité (ici, *Genre*)

3.  Dans la clé **query_builder**, on crée une fonction qui, en
    utilisant un QueryBuilder, **renvoie** un ensemble d'objets
    *Genre* (voir la section consacrée au QueryBuilder)

4.  Chaque objet contenu dans la requête sera passé à fonction spécifiée dans **choice_label**. Le contenu renvoyé par cette fonction s'affichera comme option dans la liste déroulante.

Observez le code de **ExemplesFormulairesObjetsController**, action *exempleLivre*.

Voici le code des **templates** :

```twig
{# affichage_formulaire_livre.html.twig #}
{{ form_start (formulaireLivre) }}
{{ form_widget (formulaireLivre) }}
<input type="submit" class="btn" value="Envoyer" />
{{ form_end (formulaireLivre) }}
```

```twig
{# traitement_formulaire_livre.html.twig #}
{{ dump (livre) }}
```

<br>

## 21.12. (IN PROGRESS) Formulaire contenant une liste déroulante d'entités filtrées

**Note:**: réaliser cet exemple vous devez savoir créer d'abord un **User** en utilisant le système de sécurité de Symfony.


Considérez ce modèle :

![](./images/form-entites.png)

Un **User** qui joue dans de groupes de musique veut inscrire un de ses **GroupeMusique** à un concours.
Quand on affiche le formulaire **d'Inscription** on veut pouvoir choisir le **GroupeMusique** à inscrire dans le **Concours, mais on veut avoir uniquement les groupes qui ont été créés par cet User**. On doit créer la liste de **GroupeMusique** en filtrant par **User**.

On se trouve dans une situation similaire à celle de l'exemple précédant, mais la requête qui renvoie les entités de la liste (avant *Genre* et maintenant *GroupeMusique*) doit filtrer par *User*. 

**Mais on ne peut pas obtenir l'User dans le code du formulaire, car c'est un formulaire pour l'entité Inscription!**

Nous avons **deux solutions** :

a)  Envoyer l'User comme option (array associatif) pendant la création du formulaire (méthode **createForm**) quand on crée le formulaire dans le Controller. Cet array **$options** sera disponible dans la méthode **buildForm** de la classe formulaire.

b)  Enregistrer le formulaire comme Service dans **services.yaml**.

Créer un paramètre contenant le token de l'User et l'envoyer lors de la création du Formulaire

Cette solution est expliquée ici :

<https://stackoverflow.com/questions/38199882/filter-entitytype-by-owner-current-user>

Dans les deux cas, il faut adapter la requête (QueryBuilder) dans la création de la liste. Réalisons la première méthode (envoyer l'User dans la création du form).

On va réaliser un exemple.

**Exemple**:



1.  D'abord on crée une fixture capable de créer des users et de
    groupes et de les lier (**RajouterGroupesUsers**) :


class RajouterGroupesUsers extends Fixture



1.  Créez l'action du controller, qui envoie l'user dans la création du form

    /*

     * @Route("/exemple/filtre/form/user", name="exemple_filtre_form_user")

     */

    public function exempleFiltreFormUser(Request $request)
    }

4.  Créez votre form (InscriptionFiltreType) :



class InscriptionFiltreType extends AbstractType

{


}

Pour le tester, lancez les fixtures et **faites** **login** avec un parmi les users qui se trouvent dans la fixture **RajouterGroupesUsers.php** . Puis lancez l'action **exempleFiltreFormUser** du controller **ExempleFiltreFormUser**
(tapez-la dans l'url). La liste de groupes doit contenir uniquement les groupes auxquels l'user qui vient de faire login appartient.

<br>

## 21.13. Upload de fichiers en utilisant un formulaire

Dans cette section on propose une méthode pour pouvoir faire upload de fichiers du client au serveur en utilisant un formulaire crée par Symfony.

La documentation pour ce faire se trouve ici :

<https://symfony.com/doc/current/controller/upload_file.html>

Mais nous allons développer nos propres exemples.

<br>

### 21.13.1. Stockage dans le serveur d'une seule image pour chaque entité 

**Objectif :** Pouvoir faire upload d'une image pour chaque entité dans la BD.

On va créer une entité (Pays) et un formulaire qui nous permettra de faire upload d'une image associée à cette entité (une image pour chaque pays). Notre action stockera le nom du pays et le lien vers l'image dans la BD, ainsi que le fichier en soi dans un dossier du serveur.

**Procédure :**

1.  **Créez l'entité** (Pays, contenant le **nom** du pays et un champ **lienImage** pour stocker **le lien** de l'image. Les deux sont du type string)

**IMPORTANT: effacez la spécification des types (paramètres et retour) dans les méthodes set et get de lienImage**

Faites la migration.

2.  **Créez la classe du formulaire** pour cette entité (PaysType.php). Pour le champ **uneImage, choisissez FileType**, et rajoutez un bouton de submit.

```php
<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\FormBuilderInterface;

class PaysType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class)
                ->add('lienImage', FileType::class , array ('label'=>"Sélectionner l'image du pays"));
        
    }
}
```


4.  Créez **un fichier twig capable d'afficher ce formulaire**

```twig
{# affichage_formulaire upload.html.twig #}
{{ form_start (formulaire) }}
{{ form_widget (formulaire) }}
<input type="submit" class="btn" value="Envoyer" />
{{ form_end (formulaire) }}
```

5.  Créez **une action qui traite les données envoyées par le
    formulaire**

Cette action doit :

-   **Créer un objet formulaire** (PaysType) **associé à une entité
    vide** ($pays de la classe Pays)

-   **Gérer la requête :** HandleRequest remplira les propriétés de l'entité
  
-   **Vérifier que le formulaire a été envoyé** (isSubmitted) **et si les données sont valables** (isValid).

-   **Obtenir le fichier** (**objet UploadedFile**, pas un string) **de l'entité** associée au formulaire

    -   **Obtenir un nom de fichier unique** pour le stocker dans le serveur (si on utilise le nom original il pourrait y avoir plein de doublons !)

    -   **Stocker le fichier dans le serveur** sous le nom choisi

-   **Affecter la propriété contenant le fichier dans l'entité et lui donner le nom unique qu'on vient d'obtenir**

-   **Stocker l'objet dans la BD**


Voici le code de l'action :


```php
<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Pays;
use App\Form\PaysType;
use Symfony\Component\HttpFoundation\Response;

class ExemplesFormulaireUploadController extends AbstractController
{
    #[Route ("/exemples/formulaire/upload/exemple")]
    public function exemple (Request $request){
        // créer une nouvelle entité vide
        $pays = new Pays();
        // créer un formulaire associé à cette entité
        $formulairePays = $this->createForm (PaysType::class, $pays);
        // gérer la requête (et hydrater l'entité)
        $formulairePays->handleRequest($request);
        // vérifier que le formulaire a été envoyé (isSubmitted) et que les données sont valides
        if ($formulairePays->isSubmitted() && $formulairePays->isValid()){
            // obtenir le fichier (pas un "string" mais un objet de la class UploadedFile)
            $fichier = $pays->getLienImage();
            // obtenir un nom de fichier unique pour éviter les doublons dans le dossier
            $nomFichierServeur = md5(uniqid()).".".$fichier->guessExtension();
            // stocker le fichier dans le serveur (on peut indiquer un dossier)
            $fichier->move ("dossierFichiers", $nomFichierServeur);
            // affecter le nom du fichier de l'entité. Ça sera le nom qu'on
            // aura dans la BD (un string, pas un objet UploadedFile cette fois)
            $pays->setLienImage($nomFichierServeur);

            // stocker l'objet dans la BD, ou faire update
            $em = $this->getDoctrine()->getManager();
            $em->persist($pays);
            $em->flush();
            return new Response ("fichier uploaded et BD mise à jour!");
        }
        else {
            return $this->render ("/exemples_formulaires_upload/affichage.html.twig",
                    ['formulaire'=> $formulairePays->createView()]);
        }

    }
}
```

### 21.13.2. Possibles problèmes dans l'upload

Nous pouvons avoir de problèmes liés à certaines limites concernant la taille des fichiers qu'on peut charger dans le serveur.

1.  Dans **php.ini**, **upload_max_filesize** spécifie la taille maximale accepté par le module de php

```config
; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize=20M
```

Changez-la selon vos besoins.


2.  Dans **php.ini**, **post_max_size** indique la taille maximale d'un formulaire envoyé en POST (avec ou sans le champ d'upload)


```config
; Maximum size of POST data that PHP will accept.
; Its value may be 0 to disable the limit. It is ignored if POST data reading
; is disabled through enable_post_data_reading.
; http://php.net/post-max-size
post_max_size=20M
```

Notez que, en ce qui concerne l'upload d'un fichier, ça ne vous sert à rien de changer le premier paramètre sans changer le deuxième car il faut que le serveur admette un post contenant un fichier d'au moins la taille permise par **upload_max_filesize.**

Si on a un formulaire avec un champ d'upload, la taille du POST sera, en gros, celle du fichier envoyé plus celle de tous les autres champs du formulaire.

Après avoir augmenté la valeur de ces deux paramètres on ne doit plus avoir de problèmes, mais si ce n'est pas le cas il faut considérer aussi les paramètres suivants :

3.  Dans certains cas il faut considérer aussi la limite pour la taille du fichier **.php** qu'on peut charger (en **php.ini**)

```console
; Maximum amount of memory a script may consume (128MB)
; [http://php.net/memory-limit]{.underline}
memory_limit=128M
```


4.  Il peut avoir aussi un problème si la connexion du client est lente et l'upload prend plus du temps spécifié dans **max_input_time** (**php.ini**). Ce paramètre indique le temps maximum permis pour analyser les données du POST ou GET: c'est le temps qui passe entre l'appel au script PHP et le début de son exécution. Dans la configuration de XAMPP la valeur est -1, il n'y a pas de limite de temps.



## 21.14. AJAX en Symfony avec Axios

<br>

Nous allons montrer **comment utiliser AJAX dans un template Twig avec Axios**

Axios est une librairie que nos simplifie les appels AJAX. Vous pouvez parfaitement faire du AJAX sans cette librairie mais ici on l'utilise pour nous faciliter la tâche.

Créez un controller **ExemplesAjaxFormDataController** (code original dans le projet **ProjetFormulairesSymfony**). Ce controller contiendra uniquement quelques exemples d'appel Ajax. Plus tard on réalisera des exemples plus pratiques basés sur la BD du projet.

Dans cet exemple on envoie de données en utilisant AJAX **sans utiliser un formulaire**. Nous avons juste les contrôles. Dans la section suivante on utilisera un formulaire complet.

1.  **Créez une vue contenant un formulaire. Cette vue contiendra aussi le code AJAX**

**Exemple** : créez un formulaire contenant un input (nom). Quand on clique sur le bouton, un message de bienvenue sera affiché dans le div. 

Attention aux **names** des contrôles car on les utilisera dans le traitement de l'action dans le controller!!

(Fichier **exemple1_affichage.html** dans **ProjetFormulairesSymfony**)

```twig
{% extends "base.html.twig" %}

{% block body %}
<!-- formulaire à envoyer  -->
<form id="leFormulaire" method="POST">
    <input type="text" name="nom" />
    <input type="submit" id="envoyerNom" value="Envoyer" />
    <div id="divMessage"></div>
</form>
{% endblock %}

{% block javascripts %}
<!-- AJAX - AXIOS  -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    envoyerNom.addEventListener("click", function (event) {
        event.preventDefault();

        console.log (document.getElementById("leFormulaire"));

        axios({
            url: '{{path ("exemple1_traitement")}}',
            method: 'POST',
            headers: { 'Content-Type': 'multipart/form-data' },
            data: new FormData(document.getElementById("leFormulaire"))
        })
        .then(function (response) {
            // response.data est un objet qui correspond à l'array associatif envoyé dans le controller
            // JsonResponse a transformé l'array en JSON. Axios transforme le JSON en objet JS
            // (et on utilise ici la clé "leMessage")
            document.getElementById("divMessage").innerHTML = response.data.leMessage;
            console.log (response);
        })
        .catch(function (error) {
            console.log(error);
        });
    });    
</script>
{% endblock %}
```

Dans l'appel AXIOS on envoie un objet JS contenant :

-   Le **nom de l'action** qui traiterá les données envoyés

-   La **méthode** (POST)

-   Les « **headers** » de la requête, pour indiquer qu'on envoie un
    formulaire (dans ce cas)

-   Les **donnés (data)** : un objet JS contenant de clés et de valeurs. Ici on envoie un objet FormData (classe de JS) construit à partir du formulaire qui se trouve dans la page web

2. Créez l'action qui affiche la vue **exemple1_affichage.html** dans 

```php
#[Route ("/exemples/ajax/axios/exemple1/affichage" )]
public function exemple1Affichage()
{
    return $this->render("/exemples_ajax_axios/exemple1_affichage.html.twig");
}
```

3.  Créez l'action qui traite la pétition AJAX

```php
#[Route ("/exemples/ajax/axios/exemple1/traitement",name:"exemple1_traitement" )]
// action qui traite la commande AJAX, elle n'a pas une vue associée
public function exemple1Traitement(Request $requeteAjax)
{

    $valeurNom = $requeteAjax->get('nom');
    $arrayReponse = ['leMessage' => 'Bienvenu, ' . $valeurNom];
    return new JsonResponse($arrayReponse);
}
```

Cette action reçoit un objet Request. On peut accéder aux éléments du formulaire en utilisant **get**. Dans cet exemple, l'action renvoie un array à traiter dans le code JS. Pour envoyer des arrays ou des objets à JS depuis PHP on doit les transformer en **JSON**. On verra d'autres exemples (envoyer des objets) par la suite.

![](./images/axios1.png)



## 21.15. Utilisation de blocs dans twig avec AJAX

Il s'agit juste d'une combinaison de master page + AJAX, rien de
nouveau.

1.  Créez un template *master_page.html.twig* contenant une section pour nos vues. **Ce sera notre master page**. Créez un block pour le contenu et un autre pour le JS


```twig
<html>
    <body>
        <header>
            Voici la section header
        </header>
        <main>
            Voici la section main
            {% block contenuMain %}{% endblock %}
        </main>
        <footer>
            Voici la section footer
        </footer>
    
    </body>
    {% block javascripts %}{% endblock %}
</html>
```

2.  **Créez un template** *exemple1_affichage_master_page.html.twig* **qui hérite du template** master_page.html.twig

```twig
{% extends '/exemples_ajax/master_page.html.twig' %}

{% block contenuMain %}
<!-- on mettra cet script dans un block  -->

<!-- formulaire à envoyer  -->
<form id="leFormulaire" method="POST">
    <input type="text" name="nom" />
    <input type="submit" id="envoyerNom" value="Envoyer" />
    <div id="divMessage"></div>
</form>
{% endblock %}
```

3.  Rajoutez **le code Ajax** dans un bloc **javascripts** dans la même vue, le code doit faire appel à une action dans le controller qui gére la petition Ajax.

```twig
{% block javascripts %}
<!-- AJAX - AXIOS dans la page, sans avoir un script externe -->

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    envoyerNom.addEventListener("click", function (event) {
        event.preventDefault();

        console.log(document.getElementById("leFormulaire"));

        axios({
            url: '{{path ("exemple1_traitement")}}',
            method: 'POST',
            headers: { 'Content-Type': 'multipart/form-data' },
            data: new FormData(document.getElementById("leFormulaire"))
        })
        .then(function (response) {
                // response.data est un objet qui correspond à l'array associatif envoyé dans le controller
                // JsonResponse a transformé l'array en JSON. Axios transforme le JSON en objet JS
                // (et on utilise ici la clé "leMessage")
                document.getElementById("divMessage").innerHTML = response.data.leMessage;
                console.log(response);
        })
        .catch(function (error) {
                console.log(error);
        });
    });    
</script>
{% endblock %}
```


Notez que dans le code Ajax on doit réaliser l'opération pertinente
avec les données reçues du serveur (ex : afficher dans un div)

4.  Créez l'action qui affiche la vue qu'on vient de créer

```php
// exemple d'utilisation d'AJAX avec de blocs ("master page")
#[Route ("/exemples/ajax/axios/exemple1/affichage/master/page")]
public function exemple1AffichageMasterPage()
{
    return $this->render("/exemples_ajax_axios/exemple1_affichage_master_page.html.twig");
}
```

5.  Créez l'action qui traite la commande AJAX

Dans cette action, renvoyez votre réponse JSON. Pour ce faire, au lieu d'envoyer un objet Response ou le rendu d'une vue, vous allez utiliser un objet JSonResponse. Par exemple :

```php
#[Route ("/exemples/ajax/axios/exemple1/traitement/master/page")]
// action qui traite la commande AJAX, elle n'a pas une vue associée
public function exemple1TraitementMasterPage(Request $requeteAjax)
{
    $valeurNom = $requeteAjax->get('nom');
    $arrayReponse = ['message' => 'Bienvenu, ' . $valeurNom];
    return new JsonResponse($arrayReponse);
}
```

![](./images/axios1.png)


#### Exercices : Ajax avec Axios

1. Faites un jeu de deviner un chiffre en utilisant Ajax en Symfony (utilisez le controller AjaxExemples)

2. Créez une autre master page et deux vues qui en héritent. La première contient le jeu que vous venez de réaliser et la deuxième contient trois boutons. Chaque bouton affiche la photo d'un animal sans recharger la page.


## 21.16. Ajax et Axios avec script externe au Twig (sans Webpack)


Si on veut **utiliser un script externe JS dans une vue**, le script lui-même ne pourra pas utiliser la fonction **path** pour générer les routes  cible AJAX. Les fonctions de twig telles que **path** fonctionnent uniquement **dans les fichiers TWIG**. Ceci est un problème typique qu'on peut résoudre en utilisant le module **FOSJsRoutingBundle**.

Rajoutez le au projet :

```console
composer require friendsofsymfony/jsrouting-bundle
```

Un exemple pratique **et expliqué** est réalisé dans le projet **ProjetFormulairesSymfony**, dans le **controller ExemplesAjaxAxiosController**. Commencez par la vue et puis les actions du controller.

Vue :

-   exemple1_affichage_master_page_script_externe.html

Actions:

-   exemple1AffichageMasterPageScriptExterne
-   exemple1TraitementMasterPageScriptExterne


![](./images/axios3.png)


<br>

**Important** : dans les routes qui seront accédées par ce bundle (regardez le code dans le controller) vous devez rajouter le paramètre **{"expose"=true}** (utilisez des annotations pour ces routes). Le code du projet inclut déjà cette option.



<br>

## 21.17. AJAX en Symfony (Vanilla JS)

**Objectif** : utiliser AJAX dans un template Twig

Créez un controller **ExemplesAjaxFormDataController** (code original
dans le projet **ProjetFormulairesSymfony**). Ce controller contiendra uniquement quelques exemples d'appel Ajax. Plus tard on réalisera des exemples plus pratiques basés sur la BD du projet.

Ceci est un exemple pédagogique, bien que vous pouvez utiliser cette tecnique aussi.

Dans cet exemple on envoie de données en utilisant AJAX **sans utiliser un formulaire**. Nous avons juste les contrôles. Dans la section suivante on utilisera un formulaire complet

1.  **Créez une vue contenant du code AJAX**

**Exemple** : on tapera un nom dans l'input et, quand on clique sur le bouton, un message de bienvenue sera affiché dans le div. 

Attention aux **names** des contrôles car on les utilisera dans le
traitement de l'action dans le controller!!


```twig 
<input type="text" id="inputNom" />
<input type="submit" id="envoyerNom" value="Envoyer"/>
<div id="divMessage"></div>

<script>
envoyerNom.addEventListener ("click", function (event){
    var xhr = new XMLHttpRequest ();
    
    xhr.onreadystatechange = function (){
        if (xhr.readyState == 4){
            if (xhr.status == 200){
                // transformer le string JSON envoyé par le serveur 
                // comme réponse en objet JavasScript
                var reponse = JSON.parse (xhr.responseText);
                divMessage.innerHTML = reponse.message;
                console.log (reponse);
                console.log (typeof(reponse));
            }
            // s'il y a une erreur:
            else {
                // effacer en production!
                console.log (xhr.reponseText);
            }
            
        }
        
    }
    
    xhr.open ('POST','/exemples/ajax/exemple1/traitement');
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send ("nom=" + inputNom.value);
    
});    
</script>
```

2.  Créez l'action **exemple1Affichage**, qui renvoie le rendu de la
    vue exemple1_affichage.html

```php
// exemple simple d'utilisation d'AJAX Vanilla sans promises
#[Route("/exemples/ajax/exemple1/affichage")]
public function exemple1Affichage()
{
    return $this->render("/exemples_ajax/exemple1_affichage.html.twig");
}
```

<br>

3.  Créez l'action **exempleTraitementAjax** qui traite la pétition
    AJAX

```php
#[Route("/exemples/ajax/exemple1/traitement")]
// action qui traite la commande AJAX, elle n'a pas une vue associée
public function exemple1Traitement(Request $requeteAjax)
{
    $valeurNom = $requeteAjax->get('nom');
    $arrayReponse = ['message' => 'Bienvenu, ' . $valeurNom];
    return new JsonResponse($arrayReponse);
}
```

<br>


## 21.18. Utilisation de blocs dans twig avec AJAX

Il s'agit juste d'une combinaison de master page + AJAX, rien de
nouveau.

1.  Créez un template **master_page.html.twig** contenant une section pour nos vues. Créez un block pour le contenu et un autre pour le JS

```twig
<html>
    <body>
        <header>
            Voici la section header
        </header>
        <main>
            Voici la section main
            {% block contenuMain %}{% endblock %}
        </main>
        <footer>
            Voici la section footer
        </footer>
    
    </body>
    {% block javascripts %}{% endblock %}
</html>
```


2.  **Créez une vue** *exemple1_affichage_master_page.html.twig* **qui hérite du template** *master_page.html.twig*

```twig
{% extends '/exemples_ajax/master_page.html.twig' %}

{% block contenuMain %}
Nom<input type="text" id="inputNom" />
<button id="envoyerNom">Envoyer</button>
<div id="divMessage"></div>
{% endblock %}


```

3.  Rajoutez le code Ajax dans un bloc **javascripts** dans la même vue, le code doit faire appel à une action dans le controller qui gére la petition Ajax.

```twig
{% block javascripts %}
<script>
envoyerNom.addEventListener ("click", function (event){
    var xhr = new XMLHttpRequest ();
    
    xhr.onreadystatechange = function (){
        if (xhr.readyState == 4){
            if (xhr.status == 200){
                // transformer le string JSON envoyé par le serveur 
                // comme réponse en objet JavasScript
                var reponse = JSON.parse (xhr.responseText);
                divMessage.innerHTML = reponse.message;
                console.log (reponse);
                console.log (typeof(reponse));
            }
            // s'il y a une erreur:
            else {
                // effacer en production!
                console.log (xhr.reponseText);
            }
            
        }
        
    }
    
    xhr.open ('POST','/exemples/ajax/exemple1/traitement/master/page');
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send ("nom=" + inputNom.value);
    
});    
</script>

{% endblock %}

```
Notez que dans le code Ajax on doit réaliser l'opération pertinente
avec les données reçues du serveur (ex : afficher dans un div)

4.  Créez l'action qui affiche la vue qu'on vient de créer

```php
// exemple d'utilisation d'AJAX avec de blocs ("master page")
#[Route("/exemples/ajax/exemple1/affichage/master/page")]
public function exemple1AffichageMasterPage()
{
    return $this->render("/exemples_ajax/exemple1_affichage_master_page.html.twig");
}
```

5.  Créez l'action qui traite la requête AJAX

Dans cette action, renvoyez votre réponse JSON. Pour ce faire, au lieu d'envoyer un objet Response ou le rendu d'une vue, vous allez utiliser un objet JSonResponse. Par exemple :

```php
#[Route("/exemples/ajax/exemple1/traitement/master/page")]
// action qui traite la commande AJAX, elle n'a pas une vue associée
public function exemple1TraitementMasterPage(Request $requeteAjax)
{
    $valeurNom = $requeteAjax->get('nom');
    $arrayReponse = ['message' => 'Bienvenu, ' . $valeurNom];
    return new JsonResponse($arrayReponse);
}
```


Pour finir, sachez que les fichiers .**js** et .**css** sont considérés comme des "assets" en Symfony. Pour pouvoir en rajouter dans notre projet vous devez créer les dossiers **public/assets/js** et **public/assets/css** respectivement et y placer vos fichiers. Dans vos vues, inclure les fichiers est simple :

```twig
<script src={{ asset('/assets/js/monFichier.js')} }"></script>

<link rel="stylesheet" href="{{ asset('/assets/css/monCss.css') }}" />
```

Vous avez des exemples dans le projet **projetFormulaires (controller
ExemplesAjaxController)**

#### Exercices : utilisation d'AJAX Vanilla

1. Faites un jeu de deviner un chiffre en utilisant Ajax en Symfony (utilisez le controller AjaxExemples)

2. Créez une autre master page et deux vues qui en héritent. La première contient le jeu que vous venez de réaliser et la deuxième contient trois boutons. Chaque bouton affiche la photo d'un animal sans recharger la page.

<br>

