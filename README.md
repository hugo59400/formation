# formation

Pour acceder a l’accueil :http://127.0.0.1:8000/accueil

J’ai une navbar qui contient un lien vers chaque entité pour pouvoir faire le crud 

mon fichier.env DATABASE_URL="mysql://root:root@127.0.0.1:3306/formation?serverVersion=8.0.28&charset=utf8mb4"

pour lancer l'appli : symfony serve 

avant de faire symfony serve  faire npm i pour installer les dépendances 

Toutes les entités fonctionnent avec le CRUD 

Dans la liste des formations j’ai rajouté l’affichage des organismes formations pour savoir quelle formation est reliée à quel organisme

J’ai retiré le champ id dans la liste de toutes les entités , J’ai afficher le nombre d’éléments dans la liste pour chaque entites 

J'ai rajouté une verification sur les champs email pour avoir un format valide 

![formation](https://user-images.githubusercontent.com/45538763/170654192-43562543-24e8-4478-a188-28cfb1057937.png)
