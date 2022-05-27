# formation

Pour accéder a l’accueil :http://127.0.0.1:8000/accueil

![accueil](https://user-images.githubusercontent.com/45538763/170659125-8e62699d-e777-48d1-8e21-5451c61e687f.png)

Exemple d'une liste sur une entité :

![formation](https://user-images.githubusercontent.com/45538763/170654192-43562543-24e8-4478-a188-28cfb1057937.png)

J’ai une navbar qui contient un lien vers chaque entité pour pouvoir faire le crud 

mon fichier.env DATABASE_URL="mysql://root:root@127.0.0.1:3306/formation?serverVersion=8.0.28&charset=utf8mb4"

pour lancer l'appli : symfony serve 

avant de faire symfony serve  faire npm i pour installer les dépendances 

Toutes les entités fonctionnent avec le CRUD 

Dans la liste des formations j’ai rajouté l’affichage des organismes formations pour savoir quelle formation est reliée à quel organisme

J’ai retiré le champ id dans la liste de toutes les entités , J’ai afficher le nombre d’éléments dans la liste pour chaque entites 

J'ai rajouté une verification sur les champs email pour avoir un format valide 

Les problèmes rencontrés :
- Quand je supprime un organisme de formation lié a une formation et que je retourne dans la liste des formations j'ai cette erreur :
An exception has been thrown during the rendering of a template ("Entity of type 'App\Entity\OrganismeFormation' for IDs id(1) was not found").

Les choses à améliorer : 
- Ajouter du style sur les boutons ( ajouter , mettre a jour etc )

Sur la route http://127.0.0.1:8000/accueil je n'ai pas affiché le nombre d'éléments pour chaque entité 

Je n'ai pas mis la regex pour le numéro de téléphone par manque de temps 

Exemple de création d'un enregistrement dans une entité

![creation](https://user-images.githubusercontent.com/45538763/170660013-05b43042-d658-4fe6-a008-92faedd0070c.png)

En résumé l'appli se lance ,je peux accéder facilement à l'interface de gestion, j'ai utilisé twig ,les routes sont cohérentes et les navigations sont présentes pour faire correspondre les pages
