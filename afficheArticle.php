<?php
    // Ouvrir la bdd
    try{
        $bdd = new PDO("mysql:dbname=nfactoryblog;host=localhost",'root','');
        }
        catch(Exception $e){
            die('ERROR : ' .$e->getMessage());
        }


    // Effectue une requète vers t_articles
    $req = $bdd->query('SELECT * FROM t_articles');

    // On effectue une boucle qui lit t_articles ($req)
    while($article = $req->fetch()) {
        // On récupère toutes nos variables
        $titre = $article['titre'];
        $categorie = 'Cuisine';
        $post = 'redigé';
        $contenu = html_entity_decode($article['contenu']);
        

        // Message d'affichage
        echo '
        <div class="article">
            <div class="titre">' . $titre .'</div>
            <div class="status">post: '.$post.' / catégorie: '.$categorie.'</div>
            <div class="contenu">'.$contenu.'</div>
        </div>
        ';
    }   

?>
