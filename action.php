  
<?php
session_start();
require 'config.php';

if($_GET['action'] == "delete" || $_GET['action'] == "deny"){

    $bdd->query("DELETE FROM friends WHERE id =" .$_GET['id']);
    header('Location:amis.php');
}


if($_GET['action'] == "add"){

    //var_dump($_SESSION);
    

    $query = $bdd->prepare("INSERT INTO friends(username_1, username_2, is_pending) VALUES (:username_1, :username_2, :is_pending)");
    
    $query->execute([
        "username_1" => $_SESSION['user'],
        "username_2" => $_GET['username'],
        "is_pending" => 1
    ]);
    //var_dump($query->errorInfo());
   header('Location:amis.php');
}

if($_GET['action'] == "accept"){

    $bdd->query("UPDATE friends SET is_pending = 0 WHERE id = ".$_GET['id']);
    header('Location:amis.php');

}
