<?php
include ("./connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="acceuil.php"><i class="bi bi-house"></i></i>Mon Appart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="ajouter_annonce.php">Ajouter une annonce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consulter.php">Consulter toutes les annonces</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

   <div class="container mt-4">
    <h1>Liste des Annonces</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Ville</th>
                <th scope="col">Code Postal</th>
                <th scope="col">type</th>
                <th scope="col">prix</th>
                <th scope="col">message de reservation</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM advert");

            while ($annonce = $query->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . strtoupper($annonce['titre']) . '</td>';
                echo '<td>' . $annonce['description'] . '</td>';
                echo '<td>' . $annonce['ville'] . '</td>';
                echo '<td>' . $annonce['code_postal'] . '</td>';
                echo '<td>' . $annonce['type'] . '</td>';
                echo '<td>' . $annonce['prix'] . '</td>';
                echo '<td>' . $annonce['reservation_message'] . '</td>';
                echo '<td><a href="annonce.php?id=' . $annonce['id'] . '" class="btn btn-primary">Voir l\'annonce</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>


</body>
</html>