<?php

#FR: Formulaire d'ajout d'un nouveau post.
#AN: Form for adding a new post.



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">

        <h1>Ajouter un Posts  (Add Post)
            <a href="index.php" class="add-link" >Retour (Back)</a>
            <!-- FR: Lien pour ajouter une publication | AN: Link to modify the post -->
        </h1>
        <div class="content form-add">
            <form action="" method="POST">
                <div class="row">
                    <label for="title">Titre (title)</label>
                    <input class="form-control" type="text" name="title" id="title" required>
                </div>
                <div class="row">
                    <label for="content">Contenus (content)</label>
                    <textarea class="form-control" type="text" name="content" id="content" required cols="30" rows="3"></textarea>
                </div>
                <div class="row">
                   <button class="btn-envoyer" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>