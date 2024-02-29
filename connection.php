<?php

#FR: Ce fichier contient la connexion à la base de données.
#AN: This file contains the database connection.

try {
    $bdd = new PDO('mysql:host=localhost; dbname=crud; charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('la connexion a échoué:' . $e->getMessage());
}
