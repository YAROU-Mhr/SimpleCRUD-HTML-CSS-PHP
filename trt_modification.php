<?php
#FR: Traitement de la modification d'un post.
#AN: Handling the modification of a post.
require_once 'connection.php'; // FR: Inclut le fichier de connexion à la base de données | EN: Includes the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire | AN: Retrieving form data
    $id_post = $_POST['id_post'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Vérification de l'existence d'un titre similaire | AN: Checking for existence of a similar title   
    $sql_check_exits = "SELECT * FROM posts WHERE  id = ?";
    $stmt_check_exits = $bdd->prepare($sql_check_exits);
    $stmt_check_exits->execute([$id_post]);
    $exits_posts = $stmt_check_exits->fetch();

    // Si des données ont été retournées, cela signifie qu'un post avec le même titre existe déjà
    // If data has been returned, it means a post with a similar title already exists
    if ($exits_posts) {
        // Préparation de la requête SQL pour mettre à jour les données dans la table 'posts'
        // Preparation of the SQL query to update the data in the 'posts' table
        $sql = "UPDATE posts SET title = ?, content = ? WHERE id = ?";
        $stmt = $bdd->prepare($sql);

        // Exécution de la requête
        // Execution of the query
        $stmt->execute([$title, $content, $id_post]);
        if ($stmt) {
            // Message de succès si la mise à jour est réussie
            // Success message if the update is successful
            $message =  "Enregistrement modifié avec succès (Record modified successfully)";
            header("location:index.php?message=$message");
            exit();
        } else {
            // Message d'erreur si la mise à jour est échouée
            // Error message if the update fails
            $message =  "La modification de l'enregistrement a échoué (Record modification failed)";
            header("location:index.php?message=$message");
            exit();
        }
    } else {
        $message = "Erreur: Le post n'a pas été retrouvé (A post not found).";
        header("location:index.php?message=$message");
        exit();
    }
} else {
    // Redirection avec un message d'erreur si la méthode HTTP n'est pas POST
    // Redirection with an error message if the HTTP method is not POST
    $message = "Error: La méthode HTTP utilisée n'est pas valide pour cette action (The HTTP method used is not valid for this action)";
    header("location:index.php?message=$message");
    exit();
}
