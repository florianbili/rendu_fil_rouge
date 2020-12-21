<?php
include "init.php";

use Controller\Poll;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
        <title>Créer votre sondage</title>
    </head>
    <body>

    <header>

        <nav>
            <a href="landing.php">
                <li>Home</li>
            </a>
            <a href="amis.php">
                <li>Mes contacts</li>
            </a>
            <a href="quizz.php">
                <li>Créer un sondage</li>
            </a>
            <a href="chat/chat.html">
                <li>Résultat Sondage</li>
            </a>

        </nav>

        </header>
        <?php 
        if (isset($_POST['titre'])) {

            $controller = new Poll($bdd);

            $reponse1 = $_POST['choix-1'];
            $reponse2 = $_POST['choix-2'];

            $controller->addPoll($_POST['titre'], [$reponse1, $reponse2]);
            ?>
            <h1>Envoyé</h1>
            <?php
        } else {
            ?> 
                <h1>Créer un sondage !</h1>
                <form method="POST" action="landing.php">
                    <label for="titre">Votre question</label>
                        <input type="text" name="titre" id="titre" placeholder="Titre du sondage">
                    <label for="choix">Vos réponses</label>
                        <input type="text" name="choix-1" id="choix-1" placeholder="Choix 1">
                        <input type="text" name="choix-2" id="choix-2" placeholder="Choix 2">
                        <input type="submit" value="Terminer">
                </form>
                <h2>Sondages Disponible</h2>
                <div>
                    <ul>
                        <?php
                            $controller = new Poll($bdd);
                            $controller->listPoll();
                        ?>
                    </ul>
                </div>
            <?php
        }
    ?>
</body>
</html>