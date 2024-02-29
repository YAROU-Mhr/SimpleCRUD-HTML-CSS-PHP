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
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Boutton de modification */
        .btn-modifier {
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            border-radius: 3px;
            color: #fff;
            background-color: #ffc107;
            transition: all ease .5;
            cursor: pointer;
            margin-left: 10px;
        }

        .btn-modifier:hover {
            background-color: #c79100;
            /* Vert plus foncé au survol */
            scale: 1.1;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Modififer un Posts (Update Post)
            <a href="index.php" class="add-link">Retour (Back)</a>
            <!-- FR: Lien pour ajouter une publication | AN: Link to modify the post -->
        </h1>



        <div class="content form-add">
            <?php if (isset($_GET['message']) && !empty($_GET['message'])) { ?>
                <h3 class="message">
                    <?php echo $_GET['message'] ?>
                </h3>
            <?php } ?>
            <form action="trt_modification.php" method="POST">
                <!-- FR:Dans action ajouter le lien pour traiter l'ajouter de la publication  -->
                <!-- AN:In the action column, add the link to handle adding the publication  -->

                <input type="hidden" name="id_post" value="<?php echo $post['id'] ?>" required>
                <!-- FR: Champ de formulaire caché contenant l'identifiant du post en cours d'édition -->
                <!-- AN: Hidden form field containing the ID of the post being edited -->
                <div class="row">
                    <label for="title">Titre (title)</label>
                    <!-- FR: Champ de formulaire pour saisir ou modifier le titre du post -->
                    <!-- AN: Form field to enter or modify the title of the post -->
                    <input class="form-control" type="text" name="title" id="title" value="<?php echo $post['title'] ?>" required>
                    <!-- FR: La valeur affichée dans ce champ est celle du titre du post récupérée à partir de la requête précédente -->
                    <!-- AN: The value displayed in this field is the title of the post retrieved from the previous query -->
                </div>

                <div class="row">
                    <label for="content">Contenus (content)</label>
                    <!-- FR: Champ de formulaire pour saisir ou modifier le contenu du post -->
                    <!-- AN: Form field to enter or modify the content of the post -->
                    <textarea class="form-control" type="text" name="content" id="content" required cols="30" rows="3"><?php echo $post['content'] ?></textarea>
                    <!-- FR: Le contenu affiché dans ce champ est celui du post récupéré à partir de la requête précédente -->
                    <!-- AN: The content displayed in this field is the content of the post retrieved from the previous query -->
                </div>

                <div class="row">
                    <button class="btn-modifier" type="submit">Valider les modifications</button>
                    <!-- FR: Bouton pour valider les modifications apportées au post -->
                    <!-- AN: Button to confirm the modifications made to the post -->
                </div>

            </form>
        </div>
    </div>
</body>

</html>