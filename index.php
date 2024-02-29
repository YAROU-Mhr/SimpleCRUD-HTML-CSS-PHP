<?php
#FR: Voici l'index qui affichera la liste des posts ainsi que les boutons "Ajouter", "Modifier" et "Supprimer".
#AN: Here's the index that will display the list of posts along with the "Add", "Edit", and "Delete" buttons.
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

        <h1>Liste des Posts <a href="#" class="add-link">Ajouter</a></h1>
        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Contenus</th>
                        <th>Créé le</th>
                        <th>Modifié le</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="ligne">
                        <td>1</td>
                        <td>premier titre</td>
                        <td>
                            <textarea cols="30" rows="5">
                                premier contenus:
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo quos id tempore quam laborum qui, quisquam, quis, nemo qu
                            </textarea>
                        </td>
                        <td>01/01/2024</td>
                        <td>02/01/2024</td>
                        <td class="action">
                            <a href="#" class="modif">Modifier</a>
                            <a href="#" class="suppr">Supprimer</a>
                        </td>
                    </tr>
                    <tr class="ligne">
                        <td>2</td>
                        <td>deuxième titre</td>
                        <td>
                            <textarea cols="30" rows="5">
                                deuxième contenus:
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo quos id tempore quam laborum qui, quisquam, quis, nemo qu
                            </textarea>
                        </td>
                        <td>03/01/2024</td>
                        <td>04/01/2024</td>
                        <td class="action">
                            <a href="#" class="modif">Modifier</a>
                            <a href="#" class="suppr">Supprimer</a>
                        </td>
                    </tr>

                    <tr class="ligne">
                        <td>3</td>
                        <td>troisième titre</td>
                        <td>
                            <textarea cols="30" rows="5">
                                troisième contenus:
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo quos id tempore quam laborum qui, quisquam, quis, nemo qu
                            </textarea>
                        </td>
                        <td>05/01/2024</td>
                        <td>06/01/2024</td>
                        <td class="action">
                            <a href="#" class="modif">Modifier</a>
                            <a href="#" class="suppr">Supprimer</a>
                        </td>
                    </tr>

                    <tr class="ligne">
                        <td>4</td>
                        <td>quatrième titre</td>
                        <td>
                            <textarea cols="30" rows="5">
                                quatrième contenus:
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo quos id tempore quam laborum qui, quisquam, quis, nemo qu
                            </textarea>
                        </td>
                        <td>07/01/2024</td>
                        <td>08/01/2024</td>
                        <td class="action">
                            <a href="#" class="modif">Modifier</a>
                            <a href="#" class="suppr">Supprimer</a>
                        </td>
                    </tr>

                    <tr class="ligne">
                        <td>5</td>
                        <td>cinquième titre</td>
                        <td>
                            <textarea cols="30" rows="5">
                                cinquième contenus:
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo quos id tempore quam laborum qui, quisquam, quis, nemo qu
                            </textarea>
                        </td>
                        <td>07/01/2024</td>
                        <td>08/01/2024</td>
                        <td class="action">
                            <a href="#" class="modif">Modifier</a>
                            <a href="#" class="suppr">Supprimer</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>