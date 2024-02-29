<?php
#FR: Traitement de l'ajout d'un nouveau post.
#AN: Handling the addition of a new post.
require_once 'connection.php'; // FR: Inclut le fichier de connexion à la base de données | EN: Includes the database connection file

// Récupération des données du formulaire | EN: Retrieving form data
$title = $_POST['title'];
$content = $_POST['content'];


// Vérification de doublons | EN: Checking for duplicates
$sql_check_duplicate = "SELECT * FROM posts WHERE title = ?"; // FR: Requête SQL pour vérifier les doublons | EN: SQL query to check for duplicates
$stmt_check_duplicate = $bdd->prepare($sql_check_duplicate); // Préparation de la requête avec PDO | EN: Prepare the query with PDO 
$stmt_check_duplicate->execute([$title]); // Exécution de la requête | EN: Execution of the query
$duplicate_posts = $stmt_check_duplicate->fetch(); // Récupération de l'information | EN: Fetching information

var_dump($duplicate_posts);
// Si des données ont été retournées, cela signifie qu'un post avec le même titre existe déjà
if ($duplicate_posts) {

    $message = "Error: Un post avec le même titre existe déjà (A post with the same title already exists)"; // FR: Un post avec le même titre existe déjà | EN: A post with the same title already exists    
    header("location:index.php?message=$message");// Redirection 
    die('mhr');

} else {

    // Préparation de la requête SQL pour insérer les données dans la table 'posts' | EN: Preparation of SQL query to insert data into 'posts' table
    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    // Préparation de la requête avec PDO | EN: Prepare the query with PDO
    $stmt = $bdd->prepare($sql);


    // Exécution de la requête | EN: Execution of the query
    $stmt->execute();
    if ($stmt) {
        // Message de succès si l'insertion est réussie | EN: Success message if the insertion is successful
        $message =  "Nouvel enregistrement créé avec succès (New record created successfully)";
        header("location:index.php?message=$message");
    } else {
        // Message d'erreur si l'insertion est réussie | EN: Error message if the insertion is successful
        $message =  "Nouvel enregistrement non créé  (New record not created )";
        header("location:index.php?message=$message");
    }
}
