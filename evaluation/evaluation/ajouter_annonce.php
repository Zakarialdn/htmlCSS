<?php
include ("./connexion.php");

   $message = "";

    if ($_POST) {

    // $id = $_POST['id'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $type = $_POST['type'];
    $prix = $_POST['prix'];
    $reservation_message = $_POST['reservation_message'];

     

         if (empty($description)) {
            $message .= '<div class="alert alert-danger">Veuillez renseigner un titre</div>';
        }
    
        if (empty($titre)) {
            $message .= '<div class="alert alert-danger">Veuillez renseigner un titre</div>';
        }

        if (empty($code_postal)) {
            $message .= '<div class="alert alert-danger">Veuillez renseigner un code postal</div>';
        }

        if(empty($ville)) {
            $message .= '<div class="alert alert-danger">Veuillez saisir une ville</div>';
        }


         if(empty($type)) {
            $message .= '<div class="alert alert-danger">Veuillez selectionner location ou vente</div>';
        }

    
        if(empty($prix)) {
            $message .= '<div class="alert alert-danger">Veuillez saisir un prix</div>';
        }
         if(empty($reservation_message)) {
            $message .= '<div class="alert alert-danger">Veuillez saisir un message de reservation</div>';
        }

        
        if(empty($message)) {
 

                        $resultat = $pdo->prepare('INSERT INTO advert( titre, description, code_postal, ville, type, prix, reservation_message ) VALUES( :titre, :description, :code_postal, :ville, :type, :prix, :reservation_message)');
                        $resultat->bindParam(':titre', $titre);
                        $resultat->bindParam(':description', $description);
                        $resultat->bindParam(':code_postal', $code_postal);
                        $resultat->bindParam(':ville', $ville);
                        $resultat->bindParam(':type', $type);
                        $resultat->bindParam(':prix', $prix);
                        $resultat->bindParam(':reservation_message', $reservation_message);
                        $resultat->execute();
$message = "<div class='alert alert-success'>Info envoyé</div>";
        }
    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="acceuil.php"><i class="bi bi-house-fill"></i></i>Mon Appart</a>
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
        <h1>Ajouter une Annonce</h1>
        <form method="POST" action="ajouter_annonce.php">

            <div class="form-group">
                <label for="titre">Titre de l'annonce</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>

            <div class="form-group">
                <label for="description">Description de l'annonce</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="ville">ville</label>
                <input type="text" class="form-control" id="ville" name="ville" required>
            </div>

            <div class="form-group">
                <label for="code_postal">Code postal</label>
                <input type="text" class="form-control" id="code_postal" name="code_postal" required>
            </div>

            <div class="form-group">
                <label for="type_annonce">Type d'annonce</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="location">Location</option>
                    <option value="vente">Vente</option>
                </select>
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" required>
            </div>

            <div class="form-group">
                <label for="message">message de reservation</label>
                <input type="text" class="form-control" id="reservation_message" name="reservation_message" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter l'annonce</button>
        </form>
    </div>

    
</body>
</html>