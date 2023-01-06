<?php include_once('cookies.php'); ?>
<?php
    include_once('variables.php');
    include_once('functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance ton chat - Home</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>

 <!-- Si déconnexion -->
 <?php
        if ($_GET['logged'] == true){
            $_SESSION['logged']=false;
            session_destroy();
        }

    ?>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php
/* Vérifie si l'email et le mdp correspondent */
    if (isset($_POST['userName']) && isset($_POST['password'])){
        foreach ($users as $usersTemp) {
            if ($_POST['userName'] == $usersTemp['email'] && $_POST['password'] == $usersTemp['password']) {
                $_SESSION = [
                    'logged' => true,
                    'email' => $usersTemp['email'],
                    'fullName' => $usersTemp['full_name']    
                ];

                

                echo 'Vous êtes connecté. Bienvenue '.$userLogged['fullName'].' !';
            }
        }
        if (!$_SESSION['logged']){
            echo 'Votre email ou mot de passe est incorrect.';
        }
    }
?>

    <!-- En tête -->
    <?php include_once('header.php'); ?>

    <!-- Titre -->
    <h1>Balance ton chat</h1>

    <!-- Formulaire de connection -->
    <?php include_once('login.php'); ?>

   


    <!-- Affiche les chats si connecté -->
    <?php if ($_SESSION['logged']): ?>
        
        <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
            <article>
                <h3><?php echo($recipe['title']); ?></h3>
                <div><?php echo($recipe['recipe']); ?></div>
                <i><?php echo(display_author($recipe['author'], $users)); ?></i>
            </article>
        <?php endforeach ?>
    <?php endif; ?>
    
    </div>

    <!-- Pied de page -->
    <?php include_once('footer.php'); ?>

</body>
</html>