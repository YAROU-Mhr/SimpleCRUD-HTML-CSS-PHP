<?php
#FR: Formulaire de modification d'un post existant.
#AN: Form for editing an existing post.
require_once 'connection.php'; // FR: Inclut le fichier de connexion à la base de données | AN: Include the database connection file



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
            <form action="trt_ajout.php" method="POST">
                <input type="hidden" name="id_post" >
                <!-- FR:Dans action ajouter le lien pour traiter l'ajouter de la publication | AN:In the action column, add the link to handle adding the publication -->
                <div class="row">
                    <label for="title">Titre (title)</label>
                    <input class="form-control" type="text" name="title" id="title" required>
                </div>
                <div class="row">
                    <label for="content">Contenus (content)</label>
                    <textarea class="form-control" type="text" name="content" id="content" required cols="30" rows="3"></textarea>
                </div>
                <div class="row">
                    <button class="btn-modifier" type="submit">Valider les modifications</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>