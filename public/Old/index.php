<!-- index.php -->

<!--
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Balance ton chat</title>
    </head>
 
    <body>
 
    <-- L'en-tête ->
    
    ?php include('header.php'); ?>
    
    <-- Le corps ->
    
    <div id="corps">
        <h1>Balance ton chat</h1>
        
        <p>
            Bienvenue sur Balance ton chat !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... chats... qui font des bétises... Je suppose ?
        </p>
    </div>
    
    <-- Le pied de page ->
    
    ?php include('
    '); ?>
    
    </body>
</html>
-->


<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Balance ton chat - Accueil</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
    </head>

    <body class="d-flex flex-column min-vh-100">
        <div class="container">

        <?php include_once('header.php'); ?>
            <h1>Balance ton chat</h1>
            <a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>



            <!-- inclusion des variables et fonctions -->
            <?php
                include_once('variables.php');
                include_once('functions.php');
            ?>

            <!-- inclusion de l'entête du site -->
            <?php include_once('header.php'); ?>
            
            <?php foreach(getRecipes($recipes) as $recipe) : ?>
                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
                </article>
            <?php endforeach ?>
        </div>

        <!-- Le corps -->
        
        <div id="corps">                    
            <p>
                Bienvenue sur Balance ton chat !<br />
                Vous allez adorer ici, c'est un site génial qui va parler de... euh... chats... qui font des bétises... Je suppose ?
            </p>
        </div>

        <!-- inclusion du bas de page du site -->
        <?php include_once('footer.php'); ?>
    </body>

</html>