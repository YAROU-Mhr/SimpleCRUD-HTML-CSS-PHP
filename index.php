<?php
#FR: Voici l'index qui affichera la liste des posts ainsi que les boutons "Ajouter", "Modifier" et "Supprimer".
#AN: Here's the index that will display the list of posts along with the "Add", "Edit", and "Delete" buttons.

require_once 'connection.php'; // FR: Inclut le fichier de connexion à la base de données | AN: Include the database connection file

$query = "SELECT * FROM posts ORDER BY id DESC"; // FR: Requête pour sélectionner toutes les publications | AN: Query to select all posts
$stmt = $bdd->prepare($query); // FR: Prépare la requête | AN: Prepare the query
$stmt->execute(); // FR: Exécute la requête | AN: Execute the query

$all_posts = $stmt->fetchAll(); // FR: Récupère toutes les publications dans un tableau | AN: Fetch all posts into an array

// FR: Ici, $all_posts contient toutes les données des publications récupérées de la base de données
// AN: Here, $all_posts contains all the data of the posts retrieved from the database




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">

        <h1>Liste des Posts
            <a href="form_ajout.php" class="add-link">Ajouter</a>
            <!-- FR: Lien pour ajouter une publication | AN: Link to modify the post -->

        </h1>


        <div class="content">
            <?php if (isset($_GET['message']) && !empty($_GET['message'])) { ?>
                <h3 class="message">
                    <?php echo $_GET['message'] ?>
                </h3>
            <?php } ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <!-- FR: Identifiant | AN: ID -->
                        <th>Titre</th>
                        <!-- FR: Titre | AN: Title -->
                        <th>Contenus</th>
                        <!-- FR: Contenus | AN: Contents -->
                        <th>Créé le</th>
                        <!-- FR: Date de création | AN: Created on -->
                        <th>Modifié le</th>
                        <!-- FR: Date de modification | AN: Modified on -->
                        <th>Action</th>
                        <!-- FR: Action | AN: Action -->
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($all_posts)) { ?>
                        <!-- FR: Si $all_posts est vide | AN: If $all_posts is empty -->
                        <tr>
                            <td colspan="6">Aucune publication disponible</td>
                            <!-- FR: Affiche "Aucune publication disponible" dans une seule cellule | AN: Display "Aucune publication disponible" in a single cell -->
                        </tr>
                    <?php } else { ?>
                        <!-- FR: Sinon (s'il y a des publications) | AN: Else (if there are posts) -->
                        <?php foreach ($all_posts as $post) : ?>
                            <!-- FR: Pour chaque publication dans $all_posts | AN: For each post in $all_posts -->
                            <tr class="ligne">
                                <!-- FR: Crée une ligne de tableau avec la classe "ligne" | AN: Creates a table row with the class "ligne" -->
                                <td><?php echo $post['id']; ?></td>
                                <!-- FR: Affiche l'ID de la publication | AN: Display the ID of the post -->

                                <td><?php echo $post['title']; ?></td>
                                <!-- FR: Affiche le titre de la publication | AN: Display the title of the post -->

                                <td>
                                    <textarea cols="30" rows="5"><?php echo $post['content']; ?></textarea>
                                    <!-- FR: Affiche le contenu de la publication dans une zone de texte | AN: Display the contents of the post in a text area -->
                                </td>

                                <td><?php echo $post['added_at']; ?></td>
                                <!-- FR: Affiche la date de création de la publication | AN: Display the creation date of the post -->

                                <td><?php echo $post['updated_at']; ?></td>
                                <!-- FR: Affiche la date de modification de la publication | AN: Display the modification date of the post -->

                                <td class="action">
                                    <!-- FR: Colonne pour les actions | AN: Column for actions -->

                                    <a href="form_modif.php?id_post=<?php echo $post['id']; ?>" class="modif">Modifier</a>
                                    <!-- FR: Lien pour modifier la publication | AN: Link to modify the post -->

                                    <a href="trt_suppression.php?id_post=<?php echo $post['id']; ?>" class="suppr">Supprimer</a>
                                    <!-- FR: Lien pour supprimer la publication | AN: Link to delete the post -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>