<?php
#FR: Formulaire de modification d'un post existant.
#AN: Form for editing an existing post.
require_once 'connection.php'; // FR: Inclut le fichier de connexion à la base de données | AN: Include the database connection file

// FR: Vérifie si le paramètre 'id_post' est défini dans l'URL et s'il n'est pas vide
// AN: Check if the 'id_post' parameter is set in the URL and if it's not empty
if (isset($_GET['id_post']) && !empty($_GET['id_post'])) {
    // FR: Récupère l'identifiant du post à partir du paramètre d'URL
    // AN: Retrieve the post ID from the URL parameter
    $id_post = $_GET['id_post'];

    // FR: Requête pour sélectionner un post en fonction de son ID
    // AN: Query to select a post based on its ID
    $query = "SELECT * FROM posts WHERE id=?";

    // FR: Prépare la requête SQL
    // AN: Prepare the SQL query
    $stmt = $bdd->prepare($query);

    // FR: Exécute la requête SQL avec l'identifiant du post en tant que paramètre
    // AN: Execute the SQL query with the post ID as parameter
    $stmt->execute([$id_post]);

    // FR: Récupère le résultat de la requête dans un tableau associatif
    // AN: Fetch the result of the query into an associative array
    $post = $stmt->fetch();

    // FR: Si aucun post n'est trouvé avec l'ID donné
    // AN: If no post is found with the given ID
    if (!$post) {
        // FR: Message d'erreur indiquant que le post n'a pas été trouvé
        // AN: Error message indicating the post was not found
        $message = "Erreur: Le post n'a pas été retrouvé. (Error: The post was not found.)";
        // FR: Redirige vers la page d'index avec le message d'erreur comme paramètre d'URL
        // AN: Redirect to the index page with the error message as a URL parameter
        header("location:index.php?message=$message");
    }
} else {
    // FR: Message d'erreur pour un ID de post incorrectement passé
    // AN: Error message for improperly passed post ID
    $message = "Erreur: L'identifiant du post est mal passé (Error: The post ID was passed incorrectly)";

    // FR: Redirige vers la page d'index avec le message d'erreur comme paramètre d'URL
    // AN: Redirect to the index page with the error message as a URL parameter
    header("location:index.php?message=$message");
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">

        <h1>Voir un Posts (View any Post)
            <a href="index.php" class="add-link">Retour (Back)</a>
            <!-- FR: Lien pour ajouter une publication | AN: Link to modify the post -->
        </h1>

        <div class="content">
            <h2 style="margin-bottom: .5rem; text-decoration:underline">
                <?php echo $post['title'] ?>
            </h2>

            <p style="margin-bottom: 1rem;">
                <?php echo $post['content'] ?>
            </p>

            <div style="display: flex;justify-content:space-between">
                <p>
                    <span style="color:blue; font-weight: bold;"> ajouté le :</span><?php echo $post['added_at'] ?>
                </p>
                <p>
                    <span style="color:blue; font-weight: bold;">Modifié le :</span>
                    <?= isset($post['updated_at']) ?  $post['updated_at'] : "Pas encors modifité" ?>
                </p>
            </div>

        </div>
    </div>
</body>

</html>