<?php
    /* Vérifie si email et message présents */
    if (!isset($_POST['email']) || !isset($_POST['message']))
    {
        echo('Il faut un email et un message pour soumettre le formulaire.');
        return;
    }	

    $email = $_POST['email'];
    $message = $_POST['message'];

    /* Verification et envoie de la photo */
    $infoPhoto = pathinfo($_FILES['photo']['name']);
    $extPhoto = $infoPhoto['extension'];
    $allowedExtension=['jpg','jpeg','png','gif'];


    if ($_FILES['photo']['name'] !== ''){
        if ($_FILES['photo']['error'] != 0){
            echo 'Une erreur s\'est produite, veuillez réuploader votre pièce jointe.';
        }
    
        elseif ($_FILES['photo']['size'] > 1000000){
            echo 'Votre fichier ne doit pas dépasser 1Mo.';
        }
    
        elseif (!in_array($extPhoto,$allowedExtension)){
            echo 'L\'extension utilisée n\'est pas acceptée.';
        }
    
        else {
            echo 'uploads/'.basename($_FILES['photo']['name']);
            move_uploaded_file($_FILES['photo']['tmp_name'],'uploads/'.basename($_FILES['photo']['name'])); /*fonctionne pas*/
    
            
        }
    }

    




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Contact reçu</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>


<body>
    <div class="container">

    <?php include_once('header.php'); ?>


        <h1>Message bien reçu !</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
            </div>
        </div>
    </div>
</body>
</html>