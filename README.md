# SimpleCRUD-HTML-CSS-PHP

Ce dépôt contient un exemple de CRUD (Create, Read, Update, Delete) réalisé en utilisant HTML, CSS et PHP. Cet exemple vous permet de comprendre comment créer, afficher, mettre à jour et supprimer des entrées dans une seule table de base de données en utilisant ces langages.

## Table "posts"

Ce projet met en œuvre un CRUD sur une table de base de données nommée "posts". Chaque entrée dans cette table représente un post et contient généralement des champs tels que :

- ID du post
- Titre du post
- Contenu du post
- Date de création/modification du post (la date de modification est nullable)

Ce modèle simple démontre les opérations CRUD de base et peut être utilisé comme base pour des applications plus complexes nécessitant la manipulation de données.

## Pourquoi choisir ce CRUD ?

Ce CRUD offre plusieurs avantages par rapport à d'autres solutions existantes :

- **Facilité d'utilisation** : L'interface simple et intuitive permet même aux débutants de manipuler facilement les données.
- **Personnalisable** : Vous pouvez facilement personnaliser l'apparence et le comportement de l'application en modifiant le code HTML, CSS et PHP.
- **Léger et rapide** : Grâce à l'utilisation de technologies simples, l'application est légère et rapide à charger.
- **Documentation complète** : Le README fournit des instructions claires pour installer, exécuter et contribuer au projet.


## Fichiers et leurs rôles :

1. `connection.php` : Gère la connexion à la base de données.
2. `index.php` : Affiche la liste des posts et permet d'ajouter, modifier ou supprimer un post.
3. `form_ajout.php` : Formulaire d'ajout d'un nouveau post.
4. `form_modif.php` : Formulaire de modification d'un post existant.
5. `trt_ajout.php` : Traitement de l'ajout d'un nouveau post.
6. `trt_modification.php` : Traitement de la modification d'un post existant.
7. `trt_suppression.php` : Traitement de la suppression d'un post.
8. `bdd.sql` : Base de données avec cinq ligne déjà présente.
9. `view_post.php` : Voir un seul post.


## Instructions d’installations

1. Clonez ce dépôt sur votre machine locale.
      ```
   git clone https://github.com/votre-utilisateur/SimpleCRUD-HTML-CSS-PHP.git
   ```
2. Placez les fichiers dans le répertoire de votre serveur web local ( htdocs ou www pour Apache selon votre serveur).
3. Importez la base de données fournie (fichier SQL) dans votre gestionnaire de base de données.
4. Configurez les informations de connexion à la base de données dans le fichier `connection.php`.
5. Exécutez l'application dans votre navigateur Web pour voir l'exemple CRUD en action.

## Fonctionnalités

- Créer de nouveaux enregistrements.
- Afficher tous les enregistrements existants.
- Mettre à jour les enregistrements existants.
- Supprimer des enregistrements.

## Technologies utilisées

- HTML
- CSS
- PHP
- MySQL

## Signaler un bug ou poser une question

Si vous rencontrez un bug ou si vous avez des questions, veuillez ouvrir une nouvelle issue [ici](https://github.com/YAROU-Mhr/SimpleCRUD-HTML-CSS-PHP/issues).

## FAQ

### Q : Comment puis-je personnaliser l'apparence de l'application ?
R : Vous pouvez modifier les styles CSS dans le fichier `styles.css` pour personnaliser l'apparence de l'application selon vos préférences.

### Q : Comment puis-je ajouter de nouvelles fonctionnalités ?
R : Vous pouvez ajouter de nouvelles fonctionnalités en modifiant les fichiers PHP pour le traitement des données et en ajoutant de nouveaux formulaires HTML si nécessaire.

### Q : Puis-je utiliser ce CRUD dans des projets commerciaux ?
R : Oui, vous êtes libre d'utiliser ce CRUD dans des projets commerciaux ou personnels.

